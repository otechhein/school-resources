const { shopRepo } = require("../models/index.js");

const create = (req, res) => {
	const shop = {
		...req.body,
		published: req.body.published ? req.body.published : false,
	};

	// Save Tutorial in the database
	return shopRepo
		.create(shop)
		.then((shop) => {
			// console.log(shop.dataValues, "....data");
			return res.send(shop.dataValues);
		})
		.catch((err) => {
			res.status(500).send({
				message:
					err.message ||
					"Some error occurred while creating the shopModel.",
			});
		});
};

// const findAll = (req, res) => {
// 	const title = req.query.title;
// 	var condition = title ? { title: { [Op.like]: `%${title}%` } } : null;

// 	db.shop
// 		.findAll({ where: condition })
// 		.then((data) => {
// 			res.send(data);
// 		})
// 		.catch((err) => {
// 			res.status(500).send({
// 				message:
// 					err.message ||
// 					"Some error occurred while retrieving shops.",
// 			});
// 		});
// };

// // Find a single Tutorial with an id
// const findOne = (req, res) => {
// 	const id = req.params.id;

// 	db.shop
// 		.findByPk(id)
// 		.then((data) => {
// 			if (data) {
// 				res.send(data);
// 			} else {
// 				res.status(404).send({
// 					message: `Cannot find Tutorial with id=${id}.`,
// 				});
// 			}
// 		})
// 		.catch((err) => {
// 			res.status(500).send({
// 				message: "Error retrieving Tutorial with id=" + id,
// 			});
// 		});
// };

// // Update a Tutorial by the id in the request
// const update = (req, res) => {
// 	const id = req.params.id;

// 	db.shop
// 		.update(req.body, {
// 			where: { id: id },
// 		})
// 		.then((num) => {
// 			if (num == 1) {
// 				res.send({
// 					message: "Tutorial was updated successfully.",
// 				});
// 			} else {
// 				res.send({
// 					message: `Cannot update Tutorial with id=${id}. Maybe Tutorial was not found or req.body is empty!`,
// 				});
// 			}
// 		})
// 		.catch((err) => {
// 			res.status(500).send({
// 				message: "Error updating Tutorial with id=" + id,
// 			});
// 		});
// };

// // Delete a Tutorial with the specified id in the request
// const destroy = (req, res) => {
// 	const id = req.params.id;

// 	db.shop
// 		.destroy({
// 			where: { id: id },
// 		})
// 		.then((num) => {
// 			if (num == 1) {
// 				res.send({
// 					message: "Tutorial was deleted successfully!",
// 				});
// 			} else {
// 				res.send({
// 					message: `Cannot delete Tutorial with id=${id}. Maybe Tutorial was not found!`,
// 				});
// 			}
// 		})
// 		.catch((err) => {
// 			res.status(500).send({
// 				message: "Could not delete Tutorial with id=" + id,
// 			});
// 		});
// };

// // Delete all Tutorials from the database.
// const destroyAll = (req, res) => {
// 	db.shop
// 		.destroy({
// 			where: {},
// 			truncate: false,
// 		})
// 		.then((nums) => {
// 			res.send({
// 				message: `${nums} Tutorials were deleted successfully!`,
// 			});
// 		})
// 		.catch((err) => {
// 			res.status(500).send({
// 				message:
// 					err.message ||
// 					"Some error occurred while removing all shops.",
// 			});
// 		});
// };

// // find all published Tutorial
// const findAllPublished = (req, res) => {
// 	db.shop
// 		.findAll({ where: { published: true } })
// 		.then((data) => {
// 			res.send(data);
// 		})
// 		.catch((err) => {
// 			res.status(500).send({
// 				message:
// 					err.message ||
// 					"Some error occurred while retrieving shops.",
// 			});
// 		});
// };

module.exports = { create };

// const db = require("../models");
// const Tutorial = db.shops;
// const Op = db.Sequelize.Op;

// // Create and Save a new Tutorial
// exports.create = (req, res) => {};

// // Retrieve all Tutorials from the database.
// exports.findAll = (req, res) => {

// };
