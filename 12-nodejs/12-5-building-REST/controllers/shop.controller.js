const { Sequelize } = require("sequelize");
const { shopRepo } = require("../models/index.js");

// Get all shops
exports.getAllShops = async (req, res) => {
	try {
		const keyword = req.query.name;
		let shops;

		let condition = {};
		if (keyword) {
			condition = { name: { [Sequelize.Op.like]: `%${keyword}%` } };
			// where: { name: { [Sequelize.Op.iLike]: `%${keyword}%` } },
		}
		shops = await shopRepo.findAll({
			where: condition,
		});

		res.json(shops);
	} catch (err) {
		res.status(500).json({ message: err.message });
	}
};

// Get shop by id
exports.getShopById = async (req, res) => {
	try {
		const shop = await shopRepo.findByPk(req.params.id);
		if (!shop) {
			return res.status(404).json({ message: "Shop not found" });
		}
		res.json(shop);
	} catch (err) {
		res.status(500).json({ message: err.message });
	}
};

// Get shops by name (with keyword)
exports.getShopsByName = async (req, res) => {
	const keyword = req.query.name;
	try {
		const shops = await shopRepo.findAll({
			where: { name: { [Sequelize.Op.iLike]: `%${keyword}%` } },
		});
		res.json(shops);
	} catch (err) {
		res.status(500).json({ message: err.message });
	}
};

// Store new shop
exports.createShop = async (req, res) => {
	const shop = {
		name: req.body.name,
		// Add other properties as needed
	};

	try {
		const newShop = await shopRepo.create(shop);
		res.status(201).json(newShop);
	} catch (err) {
		res.status(400).json({ message: err.message });
	}
};

// Update shop by id
exports.updateShop = async (req, res) => {
	const { id } = req.params;

	try {
		const shop = await shopRepo.findByPk(id);

		if (!shop) {
			return res.status(404).json({ message: "Shop not found" });
		}

		// Update shop properties
		shop.name = req.body.name || shopRepo.name;
		// Add other properties as needed

		// Save the updated shop
		const updatedShop = await shop.save();

		res.json(updatedShop);
	} catch (err) {
		res.status(500).json({ message: err.message });
	}
};

// Delete all shops
exports.deleteAllShops = async (req, res) => {
	try {
		await shopRepo.destroy({
			where: {},
		});

		res.json({ message: "All shops deleted successfully" });
	} catch (err) {
		res.status(500).json({ message: err.message });
	}
};

// Delete shop by id
exports.deleteShopById = async (req, res) => {
	const { id } = req.params;

	try {
		const shop = await shopRepo.findByPk(id);

		if (!shop) {
			return res.status(404).json({ message: "Shop not found" });
		}

		// Delete the shop
		await shop.destroy();

		res.json({ message: "Shop deleted successfully" });
	} catch (err) {
		res.status(500).json({ message: err.message });
	}
};
