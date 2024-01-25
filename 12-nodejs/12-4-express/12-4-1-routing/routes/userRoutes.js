const express = require("express");
const router = express.Router();

// Define routes for the '/users' path

// GET /users
router.get("/", (req, res) => {
	res.send("List of users");
});

// GET /users/:id
router.get("/:id", (req, res) => {
	const userId = req.params.id;
	res.send(`User ID: ${userId}`);
});

// POST /users
router.post("/", (req, res) => {
	res.send("Creating a new user");
});

// Export the router to be used in the main application
module.exports = router;
