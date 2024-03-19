import React, { useState } from "react";

function LoggedIn() {
	return <h1>Welcome back!</h1>;
}

function LoggedOut() {
	return <h1>Please log in to continue.</h1>;
}

function App() {
	const [isLoggedIn, setIsLoggedIn] = useState(false);

	let content;
	if (isLoggedIn) {
		content = <LoggedIn />;
	} else {
		content = <LoggedOut />;
	}

	return (
		<div>
			{content}
			<button onClick={() => setIsLoggedIn(!isLoggedIn)}>
				{isLoggedIn ? "Logout" : "Login"}
			</button>
		</div>
	);
}

export default App;
