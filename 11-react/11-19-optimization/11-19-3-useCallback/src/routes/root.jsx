import { Outlet } from "react-router";
import {
	Form,
	useLoaderData,
	redirect,
	NavLink,
	useNavigation,
	useSubmit,
} from "react-router-dom";
import { createContact, getContacts } from "../contacts";
import { useCallback, useContext, useEffect, useMemo, useState } from "react";
import { AuthContext } from "../store/AuthProvider";
import AuthButton from "../components/AuthButton";

export async function loader({ request }) {
	const url = new URL(request.url);
	const q = url.searchParams.get("q") || "";
	const contacts = await getContacts(q);
	return { contacts, q };
}

export async function action() {
	const contact = await createContact();
	return redirect(`/contacts/${contact.id}/edit`);
}

export default function Root() {
	const { contacts, q } = useLoaderData();
	const navigation = useNavigation();
	const [query, setQuery] = useState(q);

	const submit = useSubmit();

	const updatedContacts = useMemo(() => {
		console.log("....render updatedContacts.....");
		if (contacts.length) {
			return contacts.map((ct) => {
				ct["path"] = `contacts/${ct.id}`;
				return ct;
			});
		}

		return [];
	}, [contacts]);

	// console.log(updatedContacts());

	useEffect(() => {
		setQuery(q);
	}, [q]);

	const searching =
		navigation.location &&
		new URLSearchParams(navigation.location.search).has("q");

	const auth = useContext(AuthContext);

	const handleLogout = useCallback(async (e) => {
		e.preventDefault();
		try {
			await auth.logOut();
		} catch (error) {
			alert("Something went wrong !");
		}
	}, []);

	return (
		<>
			<div id="sidebar">
				<h1>
					<AuthButton auth={auth} handleLogout={handleLogout} />
				</h1>
				<div>
					<Form id="search-form" role="search">
						<input
							id="q"
							className={searching ? "loading" : ""}
							aria-label="Search contacts"
							placeholder="Search"
							type="search"
							name="q"
							value={query}
							onChange={(event) => {
								// console.log(event.currentTarget.value);
								setQuery(event.currentTarget.value);
								// const isFirstSearch = q == null;
								// submit(event.currentTarget.form, {
								// 	replace: !isFirstSearch,
								// });
							}}
						/>
						<div
							id="search-spinner"
							aria-hidden
							hidden={!searching}
						/>
						<div className="sr-only" aria-live="polite"></div>
					</Form>
					<Form method="post">
						<button type="submit">New</button>
					</Form>
				</div>
				<nav>
					{contacts.length ? (
						<ul>
							{updatedContacts.map((contact) => (
								<li key={contact.id}>
									<NavLink
										to={contact.path}
										className={({ isActive, isPending }) =>
											isActive
												? "active"
												: isPending
												? "pending"
												: ""
										}
									>
										{contact.first || contact.last ? (
											<>
												{contact.first} {contact.last}
											</>
										) : (
											<i>No Name</i>
										)}{" "}
										{contact.favorite && <span>★</span>}
									</NavLink>
								</li>
							))}
						</ul>
					) : (
						<p>
							<i>No contacts</i>
						</p>
					)}
				</nav>
			</div>
			<div
				id="detail"
				className={navigation.state === "loading" ? "loading" : ""}
			>
				<Outlet />
			</div>
		</>
	);
}
