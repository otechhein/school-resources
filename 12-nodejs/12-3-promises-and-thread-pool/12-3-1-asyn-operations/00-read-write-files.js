const fs = require("fs").promises;
// Asynchronous file read operation
const readFileAsync = async (filePath) => {
	try {
		const data = await fs.readFile(filePath, "utf8");
		console.log("Read operation successful:", data);
		return data;
	} catch (error) {
		console.error("Read operation failed:", error.message);
		throw error;
	}
};

// Asynchronous file write operation
const writeFileAsync = async (filePath, content) => {
	try {
		await fs.writeFile(filePath, content, "utf8");
		console.log("Write operation successful");
	} catch (error) {
		console.error("Write operation failed:", error.message);
		throw error;
	}
};

// Example usage
const filePath = "example.txt";

// Writing data to a file asynchronously
writeFileAsync(filePath, "Hello, asynchronous world!")
	.then(() => {
		// Reading data from the same file asynchronously
		return readFileAsync(filePath);
	})
	.then((data) => {
		console.log("File content:", data);
	})
	.catch((error) => {
		console.error("Error:", error.message);
	});
