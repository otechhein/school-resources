const express = require("express");
const app = express();

// Define a basic route for the root URL
app.get("/", (req, res) => {
	res.send("Hello, this is the root page!");
});

// Define a route with parameters
app.get("/user/:id", (req, res) => {
	const userId = req.params.id;
	res.send(`User ID: ${userId}`);
});

// Define a POST request route
app.post("/api/users", (req, res) => {
	res.send("Creating a new user...");
});

// Define a route with multiple handlers (middleware)
app.get(
	"/example",
	(req, res, next) => {
		console.log("Middleware function for /example route");
		next();
	},
	(req, res) => {
		res.send("Response for /example route");
	}
);

// Example of a "file not found" route (404 Not Found)
// app.use(…) is to define middleware
app.use((req, res) => {
	res.status(404).send("File Not Found");
});

// Start the server on port 3000
app.listen(3000, () => {
	console.log("Server is running on port 3000");
});
