import { useState, useEffect } from "react";

const HookCounterOne = () => {
	const [count, setCount] = useState(0);

	useEffect(() => {
		document.title = `You clicked ${count} times`;
	}, [count]);

	return (
		<div>
			<h3>React useEffect</h3>
			<button onClick={() => setCount((prevCount) => prevCount + 1)}>
				Click {count} times{" "}
			</button>
		</div>
	);
};

export default HookCounterOne;
