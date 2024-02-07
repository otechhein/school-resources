const myPromise = new Promise((resolve, reject) => {
	// Simulating an asynchronous operation, e.g., reading from a file
	setTimeout(() => {
		const success = true;

		if (success) {
			// If the operation is successful, call resolve with the result
			resolve("Data from asynchronous operation");
		} else {
			// If there's an error, call reject with an error message
			reject(
				new Error("An error occurred during the asynchronous operation")
			);
		}
	}, 1000); // Simulating a delay of 1 second
});

// myPromise
// 	.then((result) => {
// 		console.log("Promise resolved:", result);
// 	})
// 	.catch((error) => {
// 		console.error("Promise rejected:", error.message);
// 	});

// Async / Await
async function myAsyncFunction() {
	try {
		const result = await myPromise;
		// Handle the result
		return result;
	} catch (error) {
		// Handle errors
	}
}
myAsyncFunction().then((result) => {
	console.log(result);
});
