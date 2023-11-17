const passport = require("passport");
const { create } = require("../controllers/shop.controller.js");
const { createValidator } = require("../validators/shop.validator.js");
const { Router } = require("express");

const shopRoutes = (app) => {
	const router = Router();

	router
		.route("/")
		// .get(shopController().findAll)
		.post(
			passport.authenticate("jwt", { session: false }),
			createValidator,
			create
		);
	// .delete(shopController().destroyAll);

	// router
	// 	.route("/:id")
	// 	.get(shopController().findOne)
	// 	.put(shopController().update)
	// 	.delete(shopController().destroy);

	// router.route("/published").get(shopController().findAllPublished);

	app.use("/api/shops", router);
};

module.exports = shopRoutes;
