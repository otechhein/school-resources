import React, { useState } from "react";

function App() {
	// Declare a state variable 'count' with an initial value of 0
	const [count, setCount] = useState(0);

	// Event handler function to increment the count
	const handleIncrement = () => {
		setCount(count + 1);
	};

	// Event handler function to decrement the count
	const handleDecrement = () => {
		setCount(count - 1);
	};

	return (
		<div>
			<h2>Counter: {count}</h2>
			<button onClick={handleIncrement}>Increment</button>
			<button onClick={handleDecrement}>Decrement</button>
		</div>
	);
}

export default App;
