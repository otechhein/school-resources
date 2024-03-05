import { Form, redirect, useLoaderData, useNavigate } from "react-router-dom";
import { updateContact } from "../contacts";

export async function action({ request, params }) {
	const formData = await request.formData();
	const updates = Object.fromEntries(formData);
	await updateContact(params.contactId, updates);
	return redirect(`/contacts/${params.contactId}`);
}

export default function EditContact() {
	const { contact } = useLoaderData();
	const navigate = useNavigate();

	return (
		<Form method="post" id="contact-form">
			<p>
				<span>Name</span>
				<input
					placeholder="Name"
					aria-label="Name"
					type="text"
					name="name"
					defaultValue={contact.name}
				/>
			</p>

			<p>
				<button type="submit">Save</button>
				<button
					type="button"
					onClick={() => {
						navigate(-1);
					}}
				>
					Cancel
				</button>
			</p>
		</Form>
	);
}
