const express = require("express");
const fs = require("fs");
const path = require("path");
const bodyParser = require("body-parser");

const app = express();

// Parse incoming JSON requests
app.use(bodyParser.json());

// POST endpoint to accept base64-encoded image and save it to the 'storage' directory
app.post("/upload", (req, res) => {
	const { base64Image } = req.body;

	// Extract content type and data from base64 string
	const matches = base64Image.match(/^data:(.+);base64,(.+)/);

	if (!matches || matches.length !== 3) {
		return res.status(400).send("Invalid base64 format");
	}

	const contentType = matches[1];
	const data = matches[2];

	// Create a buffer from the base64 data
	const buffer = Buffer.from(data, "base64");

	// Generate a unique filename (you may use a more robust method in a production environment)
	const filename = `image_${Date.now()}.${contentType.split("/")[1]}`;

	// Save the file to the 'storage' directory
	const filePath = path.join(__dirname, "storage", filename);
	fs.writeFile(filePath, buffer, (err) => {
		if (err) {
			return res.status(500).send("Error saving file");
		}

		res.status(200).send("File saved successfully");
	});
});

// GET endpoint to retrieve a list of images in the 'storage' directory
app.get("/images", (req, res) => {
	const storagePath = path.join(__dirname, "storage");
	fs.readdir(storagePath, (err, files) => {
		if (err) {
			return res.status(500).send("Error reading directory");
		}

		const images = files.filter((file) =>
			/\.(jpg|jpeg|png|gif)$/i.test(file)
		);
		res.status(200).json(images);
	});
});

// DELETE endpoint to delete a file from the 'storage' directory
app.delete("/delete/:filename", (req, res) => {
	const filename = req.params.filename;
	const filePath = path.join(__dirname, "storage", filename);

	// Delete the file
	fs.unlink(filePath, (err) => {
		if (err) {
			return res.status(500).send("Error deleting file");
		}

		res.status(200).send("File deleted successfully");
	});
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
	console.log(`Server is running on http://localhost:${PORT}`);
});
