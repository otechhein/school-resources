"use strict";

module.exports = {
	async up(queryInterface, Sequelize) {
		return queryInterface.createTable("shops", {
			id: {
				type: Sequelize.INTEGER,
				autoIncrement: true,
				primaryKey: true,
			},
			title: {
				type: Sequelize.DataTypes.STRING,
				allowNull: false,
			},
			description: {
				type: Sequelize.DataTypes.STRING,
				allowNull: true,
			},
			published: {
				type: Sequelize.DataTypes.BOOLEAN,
				defaultValue: false,
				allowNull: false,
			},
			createdAt: {
				type: Sequelize.DataTypes.DATE,
				allowNull: false,
				defaultValue: Sequelize.literal("CURRENT_TIMESTAMP"),
			},
			updatedAt: {
				type: Sequelize.DataTypes.DATE,
				allowNull: false,
				defaultValue: Sequelize.literal(
					"CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
				),
			},
			deletedAt: {
				type: Sequelize.DataTypes.DATE,
				allowNull: true,
				defaultValue: null,
			},
		});
	},

	async down(queryInterface, Sequelize) {
		return queryInterface.dropTable("shops");
	},
};
