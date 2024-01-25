const { Sequelize } = require("sequelize");

const sequelize = new Sequelize("s_12_5_1_sequelize", "root", null, {
	host: "127.0.0.1",
	dialect: "mysql",
	sync: {
		alter: false,
		force: false,
	},
});

const shopRepo = require("./shop.model.js")(sequelize);

module.exports = { sequelize, shopRepo };
