import React from "react";

const Key = () => {
	const scientists = [
		{ id: "001", name: "Ada Lovelace", field: "mathematician" },
		{ id: "002", name: "Marie Curie", field: "chemist" },
		{ id: "003", name: "Albert Einstein", field: "physicist" },
		{ id: "004", name: "Rosalind Franklin", field: "mathematician" },
		{ id: "005", name: "Stephen Hawking", field: "astrophysicist" },
	];

	const professionals = scientists.filter(
		(scientist) => scientist.field === "mathematician"
	);
	const listItems = professionals.map((scientist) => (
		<li>
			<p>
				<b>{"ID: " + scientist.id}</b>
				<br />
				<b>{scientist.name}:</b>
				{" " + scientist.field + " "}
			</p>
		</li>
	));
	return (
		<>
			<div>
				<h2>Key List</h2>
				<ul>{listItems}</ul>
			</div>
		</>
	);
};

export default Key;
