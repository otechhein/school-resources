const database = require("../../database.json");
const bcrypt = require("bcryptjs");
const dotenv = require("dotenv");
dotenv.config();

module.exports = {
	app: {
		url: process.env.APP_URL,
		port: process.env.APP_PORT || 3000,
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
	hash: {
		salt: bcrypt.hashSync(process.env.HASH_SALT, 8),
	},
	jwt: {
		secret: process.env.JWT_SECRET,
	},
};
