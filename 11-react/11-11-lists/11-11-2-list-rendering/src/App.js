import React from "react";

const App = () => {
	const scientists = [
		"Ada Lovelace",
		"Marie Curie",
		"Albert Einstein",
		"Rosalind Franklin",
		"Stephen Hawking",
	];

	const listItems = scientists.map((scientist) => <li>{scientist}</li>);

	return (
		<>
			<div>
				<h2>List Map</h2>
				<ul>{listItems}</ul>
				<hr />
			</div>
		</>
	);
};

export default App;
