const { Sequelize } = require("sequelize");

const shopModel = (sequelize) => {
	return sequelize.define("shops", {
		name: {
			type: Sequelize.STRING,
		},
	});
};

module.exports = shopModel;
