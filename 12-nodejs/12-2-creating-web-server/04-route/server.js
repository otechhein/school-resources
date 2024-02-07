const http = require("http");
const fs = require("fs");
const path = require("path");

const shops = [
	{ id: 1, name: "Shop 1", location: "Location 1" },
	{ id: 2, name: "Shop 2", location: "Location 2" },
	// Add more shop data here
];

const items = [
	{ id: 101, name: "Item 1", price: 10 },
	{ id: 102, name: "Item 2", price: 20 },
	// Add more item data here
];

const sendFileResponse = (res, filePath, contentType, data) => {
	fs.readFile(filePath, "utf8", (err, content) => {
		if (err) {
			res.writeHead(500, { "Content-Type": "text/plain" });
			res.end("Internal Server Error");
			return;
		}

		content = content.replace("DATA", JSON.stringify(data));

		res.writeHead(200, { "Content-Type": contentType });
		res.end(content.replace("DATA", JSON.stringify(data)));
	});
};

const server = http.createServer((req, res) => {
	if (req.url === "/shops") {
		const filePath = path.join(__dirname, "shops.html");
		sendFileResponse(res, filePath, "text/html", shops);
	} else if (req.url === "/items") {
		const filePath = path.join(__dirname, "items.html");
		sendFileResponse(res, filePath, "text/html", items);
	} else {
		res.writeHead(404, { "Content-Type": "text/plain" });
		res.end("Not Found");
	}
});

const port = 3000;

server.listen(port, () => {
	console.log(`Server running on port ${port}`);
});
