// Asynchronous operation with delay using setTimeout
const delayedOperation = (delay) => {
	return new Promise((resolve) => {
		setTimeout(() => {
			console.log(`Delayed operation after ${delay} milliseconds`);
			resolve();
		}, delay);
	});
};

// Example usage
const main = async () => {
	console.log("Start of the program");

	// Delayed operation with a 2-second delay
	await delayedOperation(2000);

	console.log("End of the program");
};

// Run the example
main();
