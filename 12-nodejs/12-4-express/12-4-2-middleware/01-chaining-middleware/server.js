const express = require("express");
const app = express();
const port = 3000;

// Define a route to handle other requests
app.get("/", (req, res) => {
	res.send("Hello from Express!");
});

app.use(
	(req, res, next) => {
		console.log("First middleware");
		next();
	},
	(req, res, next) => {
		console.log("Second middleware");
		next();
	}
);

// Start the server
app.listen(port, () => {
	console.log(`Server is running on http://localhost:${port}`);
});
