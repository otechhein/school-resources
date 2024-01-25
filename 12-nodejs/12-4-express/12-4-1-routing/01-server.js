const express = require("express");
const app = express();

// Import the separate route file
const userRoutes = require("./routes/userRoutes");

// Use the userRoutes in the application
app.use("/users", userRoutes);

// Example of a "file not found" route (404 Not Found)
app.use((req, res) => {
	res.status(404).send("File Not Found");
});

// Start the server on port 3000
app.listen(3000, () => {
	console.log("Server is running on port 3000");
});
