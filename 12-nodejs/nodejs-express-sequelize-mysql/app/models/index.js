const config = require("../config/config.js");
const { Sequelize } = require("sequelize");

const sequelize = new Sequelize(
	config.database.database,
	config.database.username,
	config.database.password,
	{
		host: config.database.host,
		port: config.database.port,
		dialect: config.database.dialect,
		operatorsAliases: 0,
		sync: {
			alter: false,
			force: false,
		},
		pool: {
			max: config.database.pool.max,
			min: config.database.pool.min,
			acquire: config.database.pool.acquire,
			idle: config.database.pool.idle,
		},
	}
);

const shopRepo = require("./shop.model.js")(sequelize);
const userRepo = require("./user.model.js")(sequelize);

module.exports = { sequelize, shopRepo, userRepo };
