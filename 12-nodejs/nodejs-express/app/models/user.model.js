const { Sequelize } = require("sequelize");

const userModel = (sequelize) => {
	return sequelize.define(
		"users",
		{
			name: {
				type: Sequelize.STRING,
			},
			email: {
				type: Sequelize.STRING,
			},
			password: {
				type: Sequelize.STRING,
			},
			image: {
				type: Sequelize.STRING,
			},
		},
		{
			paranoid: true,
		}
	);
};

module.exports = userModel;
