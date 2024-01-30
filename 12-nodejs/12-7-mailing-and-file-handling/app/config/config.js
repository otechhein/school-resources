const database = require("../../database.json");
const bcrypt = require("bcryptjs");
const dotenv = require("dotenv");
dotenv.config();

module.exports = {
	app: {
		url: process.env.APP_URL,
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
	hash: {
		salt: bcrypt.hashSync(process.env.HASH_SALT, 8),
	},
	jwt: {
		secret: process.env.JWT_SECRET,
	},
	mail: {
		service: process.env.MAIL_SERVICE,
		port: process.env.MAIL_PORT,
		secure: true,
		username: process.env.MAIL_USERNAME,
		password: process.env.MAIL_PASSWORD,
	},
};
