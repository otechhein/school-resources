const express = require("express");
// import cors from "cors";
const { sequelize } = require("./app/models/index.js");
const config = require("./app/config/config.js");
// import "module-alias/register";
// import { extractObject } from "@utils/helper";

const app = express();

// var corsOptions = {
// 	origin: "http://localhost:8081",
// };
// app.use(cors(corsOptions));

// parse requests of content-type - application/json
app.use(express.json());

app.use(express.static(__dirname + "/public"));

// parse requests of content-type - application/x-www-form-urlencoded
app.use(express.urlencoded({ extended: true }));

sequelize
	.authenticate()
	.then(() => {
		console.log("Synced db.");
	})
	.catch((err) => {
		console.log("Failed to sync db: " + err.message);
	});

// // drop the table if it already exists
// sequelize.sync({ force: true }).then(() => {
//   console.log("Drop and re-sync db.");
// });

const passport = require("passport");
require("./app/strategies/jwt.strategy.js")(passport);

// simple route
app.get("/", (req, res) => {
	res.json({ message: "Welcome to NodeJS Express Application !." });
});

// register routes
require("./app/routes/shop.routes.js")(app);
require("./app/routes/auth.routes.js")(app);

// set port, listen for requests
const PORT = config.app.port;
app.listen(PORT, () => {
	console.log(`Server is running on port ${PORT}.`);
});
