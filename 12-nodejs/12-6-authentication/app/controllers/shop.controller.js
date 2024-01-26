const { shopRepo } = require("../models/index.js");
const { Sequelize } = require("sequelize");

const create = (req, res) => {
	const shop = {
		...req.body,
		published: req.body.published ? true : false,
	};

	return shopRepo
		.create(shop)
		.then((shop) => res.send(shop.dataValues))
		.catch((err) => {
			res.status(500).send({
				message:
					err.message ||
					"Some error occurred while creating the shopModel.",
			});
		});
};

const findAll = (req, res) => {
	const condition = {};
	const { title, published } = req.query;
	if (title) condition.title = { [Sequelize.Op.like]: `%${title}%` };
	if (published) condition.published = true;

	shopRepo
		.findAll({ where: condition })
		.then((data) => res.send(data))
		.catch((err) => {
			res.status(500).send({
				message:
					err.message ||
					"Some error occurred while retrieving shops.",
			});
		});
};

const findOne = (req, res) => {
	const id = req.params.id;

	shopRepo
		.findByPk(id)
		.then((data) => {
			if (data) {
				res.send(data);
			} else {
				res.status(404).send({
					message: `Cannot find Shop with id=${id}.`,
				});
			}
		})
		.catch((err) => {
			res.status(500).send({
				message: "Error retrieving Shop with id=" + id,
			});
		});
};

const update = (req, res) => {
	const id = req.params.id;

	const shop = {
		...req.body,
		published: req.body.published ? true : false,
	};

	shopRepo
		.update(shop, {
			where: { id: id },
		})
		.then((num) => {
			if (num == 1) {
				res.send({
					message: "Shop was updated successfully.",
				});
			} else {
				res.send({
					message: `Cannot update Shop with id=${id}. Maybe Shop was not found!`,
				});
			}
		})
		.catch((err) => {
			res.status(500).send({
				message: "Error updating Shop with id=" + id,
			});
		});
};

const destroy = (req, res) => {
	const id = req.params.id;

	shopRepo
		.destroy({
			where: { id: id },
		})
		.then((num) => {
			if (num == 1) {
				res.send({
					message: "Shop was deleted successfully!",
				});
			} else {
				res.send({
					message: `Cannot delete Shop with id=${id}. Maybe Shop was not found!`,
				});
			}
		})
		.catch((err) => {
			res.status(500).send({
				message: "Could not delete Shop with id=" + id,
			});
		});
};

const destroyAll = (req, res) => {
	shopRepo
		.destroy({
			where: {},
			truncate: false,
		})
		.then((nums) => {
			res.send({
				message: `${nums} Shops were deleted successfully!`,
			});
		})
		.catch((err) => {
			res.status(500).send({
				message:
					err.message ||
					"Some error occurred while removing all shops.",
			});
		});
};

module.exports = {
	create,
	findAll,
	findOne,
	update,
	destroy,
	destroyAll,
};
