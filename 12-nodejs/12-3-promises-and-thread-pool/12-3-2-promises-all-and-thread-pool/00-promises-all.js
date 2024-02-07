const fs = require("fs");

function readFileAsync(file) {
	return new Promise((resolve, reject) => {
		setTimeout(() => {
			fs.readFile(file, "utf8", (err, data) => {
				if (err) {
					reject(err);
				} else {
					resolve(data);
				}
			});
		}, 1000);
	});
}

async function main() {
	try {
		console.log("Reading files concurrently...");

		// const data1 = await readFileAsync("readfile1.txt");
		// console.log("Data from file1.txt:", data1);

		// const data2 = await readFileAsync("readfile2.txt");
		// console.log("Data from file2.txt:", data2);

		// const data3 = await readFileAsync("readfile3.txt");
		// console.log("Data from file3.txt:", data3);
		// Trigger three asynchronous file read operations concurrently
		const [data1, data2, data3] = await Promise.all([
			readFileAsync("readfile1.txt"),
			readFileAsync("readfile2.txt"),
			readFileAsync("readfile3.txt"),
		]);
		console.log("Data from file1.txt:", data1);
		console.log("Data from file2.txt:", data2);
		console.log("Data from file3.txt:", data3);

		console.log("All file reads completed.");
	} catch (error) {
		console.error("Error during file read:", error);
	}
}

main();
