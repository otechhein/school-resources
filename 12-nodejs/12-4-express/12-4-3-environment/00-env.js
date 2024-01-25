const crypto = require("crypto");
require("dotenv").config();

console.log(process.env.MY_VARIABLE);
console.log(process.env.MY_STRING);

async function main() {
	try {
		console.log("Reading files concurrently...");

		crypto.pbkdf2("password", "salt", 100000, 1024, "sha512", () => {
			console.log("....password 1.....");
		});

		crypto.pbkdf2("password", "salt", 100000, 1024, "sha512", () => {
			console.log("....password 2.....");
		});

		crypto.pbkdf2("password", "salt", 100000, 1024, "sha512", () => {
			console.log("....password 3.....");
		});

		console.log("All file reads completed.");
	} catch (error) {
		console.error("Error during file read:", error);
	}
}

main();
