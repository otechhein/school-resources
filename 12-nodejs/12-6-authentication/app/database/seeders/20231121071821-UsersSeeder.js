"use strict";

const bcrypt = require("bcryptjs");
const config = require("../../config/config");

/** @type {import('sequelize-cli').Migration} */
module.exports = {
	async up(queryInterface, Sequelize) {
		return queryInterface.bulkInsert("Users", [
			{
				name: "John Doe",
				email: "johndoe@example.com",
				password: await bcrypt.hash("password", config.hash.salt),
			},
		]);
	},

	async down(queryInterface, Sequelize) {
		/**
		 * Add commands to revert seed here.
		 *
		 * Example:
		 * await queryInterface.bulkDelete('People', null, {});
		 */
	},
};
