// routes/shop.routes.js

const { createValidator } = require("../validators/shop.validator");

module.exports = (app) => {
	const shops = require("../controllers/shop.controller");

	var router = require("express").Router();

	// Get all shops
	router.get("/", shops.getAllShops);

	// Get shop by id
	router.get("/:id", shops.getShopById);

	// Store new shop
	router.route("/").post(createValidator, shops.createShop);

	// Update shop by id
	router.route("/:id").put(createValidator, shops.updateShop);

	// Delete all shops
	router.delete("/", shops.deleteAllShops);

	// Delete shop by id
	router.delete("/:id", shops.deleteShopById);

	app.use("/shops", router);
};
