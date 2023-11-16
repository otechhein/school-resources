const database = require("../../database.json");
const dotenv = require("dotenv");
dotenv.config();

module.exports = {
	app: {
		port: process.env.APP_PORT || 8080,
	},
	database: {
		...database,
		pool: {
			max: 5,
			min: 0,
			acquire: 30000,
			idle: 10000,
		},
	},
};
