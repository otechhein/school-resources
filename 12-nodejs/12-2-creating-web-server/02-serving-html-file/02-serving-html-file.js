const http = require("http");
const fs = require("fs");

const server = http.createServer((req, res) => {
	const filePath = __dirname + "/hello.html";

	fs.readFile(filePath, "utf8", (err, content) => {
		if (err) {
			res.writeHead(500);
			res.end("Internal Server Error");
			return;
		}

		res.writeHead(200, { "Content-Type": "text/html" });
		res.end(content);
	});
});

const port = 3000;

server.listen(port, () => {
	console.log(`Server running on port ${port}`);
});
