import React from "react";

function App() {
	const scientists = [
		{ name: "Ada Lovelace", field: "mathematician" },
		{ name: "Marie Curie", field: "chemist" },
		{ name: "Albert Einstein", field: "physicist" },
		{ name: "Rosalind Franklin", field: "chemist" },
		{ name: "Stephen Hawking", field: "astrophysicist" },
	];

	const listItems = scientists.map((scientist, index) => (
		<li key={index}>
			{scientist.name} - {scientist.field}
		</li>
	));

	return <ul>{listItems}</ul>;
}

export default App;
