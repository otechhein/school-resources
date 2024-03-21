import React from "react";

const Filter = () => {
	const scientists = [
		{ id: 0, name: "Ada Lovelace", field: "mathematician" },
		{ id: 1, name: "Marie Curie", field: "chemist" },
		{ id: 2, name: "Albert Einstein", field: "physicist" },
		{ id: 3, name: "Rosalind Franklin", field: "chemist" },
		{ id: 4, name: "Stephen Hawking", field: "astrophysicist" },
	];

	const professionals = scientists.filter(
		(scientist) => scientist.field === "chemist"
	);
	const listItems = professionals.map((scientist) => (
		<li>
			<p>
				<b>{scientist.name}:</b>
				{" " + scientist.field + " "}
			</p>
		</li>
	));
	return (
		<>
			<div>
				<h2>List Filter</h2>
				<ul>{listItems}</ul>
				<hr />
			</div>
		</>
	);
};

export default Filter;
