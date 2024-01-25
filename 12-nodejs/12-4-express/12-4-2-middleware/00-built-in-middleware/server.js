const express = require("express");
const app = express();
const port = 3000;

// Define a route to handle other requests
app.get("/", (req, res) => {
	res.send("Hello from Express!");
});

// Middleware to serve static files from the 'public' directory
app.use(express.static("public"));

// Start the server
app.listen(port, () => {
	console.log(`Server is running on http://localhost:${port}`);
});
