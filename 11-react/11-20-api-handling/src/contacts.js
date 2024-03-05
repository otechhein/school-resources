export async function getContacts(query) {
	let result = await fetch("https://jsonplaceholder.typicode.com/users");
	return await result.json();
}

export async function createContact() {
	const response = await fetch("https://jsonplaceholder.typicode.com/posts", {
		method: "POST",
		body: JSON.stringify({
			name: "foo",
			username: "bar",
			userId: 1,
		}),
		headers: {
			"Content-type": "application/json; charset=UTF-8",
		},
	});
	const result = await response.json();
	return result;
}

export async function getContact(id) {
	let result = await fetch(
		"https://jsonplaceholder.typicode.com/users/" + id
	);
	return await result.json();
}

export async function updateContact(id, updates) {
	const response = await fetch(
		"https://jsonplaceholder.typicode.com/users/" + id,
		{
			method: "PATCH",
			body: JSON.stringify(updates),
			headers: {
				"Content-type": "application/json; charset=UTF-8",
			},
		}
	);
	const result = await response.json();

	return result;
}

export async function deleteContact(id) {
	const response = await fetch(
		"https://jsonplaceholder.typicode.com/users/" + id,
		{
			method: "DELETE",
		}
	);
	const result = await response.json();
	return result;
}
