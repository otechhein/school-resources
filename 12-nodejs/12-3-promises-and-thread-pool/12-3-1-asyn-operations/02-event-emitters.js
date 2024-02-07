const EventEmitter = require("events");
const fs = require("fs").promises;

// Creating an event emitter
const myEmitter = new EventEmitter();

// Registering a listener for the event
myEmitter.on("operationComplete", async (data) => {
	const readContent = await fs.readFile("example.txt", "utf8");
	console.log(readContent, data);
});

myEmitter.emit("operationComplete", "Data from operation");

// Code here doesn't wait for the setTimeout to complete
console.log("Waiting for operation...");
