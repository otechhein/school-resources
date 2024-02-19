import { Outlet } from "react-router";
import {
	Form,
	useLoaderData,
	redirect,
	NavLink,
	useNavigation,
	useSubmit,
	Link,
} from "react-router-dom";
import { createContact, getContacts } from "../contacts";
import { useContext, useEffect, useState } from "react";
import { AuthContext } from "../store/AuthProvider";

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

	useEffect(() => {
		setQuery(q);
	}, [q]);

	const searching =
		navigation.location &&
		new URLSearchParams(navigation.location.search).has("q");

	const auth = useContext(AuthContext);

	const handleLogout = async (e) => {
		e.preventDefault();
		try {
			await auth.logOut();
		} catch (error) {
			alert("Something went wrong !");
		}
	};

	return (
		<>
			<div id="sidebar">
				<h1>
					{auth.token ? (
						<button type="button" onClick={handleLogout}>
							Logout
						</button>
					) : (
						<Link to="/login"> Login</Link>
					)}
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
								const isFirstSearch = q == null;
								submit(event.currentTarget.form, {
									replace: !isFirstSearch,
								});
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
							{contacts.map((contact) => (
								<li key={contact.id}>
									<NavLink
										to={`contacts/${contact.id}`}
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
