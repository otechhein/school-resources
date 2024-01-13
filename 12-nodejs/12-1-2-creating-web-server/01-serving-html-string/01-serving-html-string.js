const http = require("http");

const server = http.createServer((req, res) => {
	res.writeHead(200, { "Content-Type": "text/html" });

	const htmlContent = `
    <!DOCTYPE html>
    <html>
    <head>
      <title>Direct HTML String Example</title>
    </head>
    <body>
      <h1>Hello from Node.js Server!</h1>
      <p>This HTML content is served as a string directly within Node.js.</p>
    </body>
    </html>
  `;

	res.end(htmlContent);
});

const port = 3000;

server.listen(port, () => {
	console.log(`Server running on port ${port}`);
});
