const { Sequelize } = require("sequelize");

const shopModel = (sequelize) => {
	return sequelize.define(
		"shops",
		{
			title: {
				type: Sequelize.STRING,
			},
			description: {
				type: Sequelize.STRING,
			},
			published: {
				type: Sequelize.BOOLEAN,
			},
		},
		{
			paranoid: true,
		}
	);
};

module.exports = shopModel;
