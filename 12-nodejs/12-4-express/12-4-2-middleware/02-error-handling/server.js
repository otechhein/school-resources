const express = require("express");
const MyCustomError = require("./MyCustomError"); // Import the custom error class
const app = express();
const port = 3000;

// Route handler that triggers an error
app.get("/error", (req, res, next) => {
	const err = new MyCustomError("Sample Error");
	// const err = new Error("Sample Error");
	next(err);
});

// Error handling middleware
app.use((err, req, res, next) => {
	if (err instanceof MyCustomError) {
		// Handle specific custom error
		res.status(400).send(err.message);
	} else {
		// Handle other errors with a generic message
		res.status(500).send("Internal Server Error");
	}
});

// Regular middleware
app.use((req, res, next) => {
	console.log("Regular middleware");
	next();
});

// Start the server
app.listen(port, () => {
	console.log(`Server is running on http://localhost:${port}`);
});
