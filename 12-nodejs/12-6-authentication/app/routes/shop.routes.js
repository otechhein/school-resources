const passport = require("passport");
const {
	create,
	findAll,
	findOne,
	update,
	destroy,
	destroyAll,
} = require("../controllers/shop.controller.js");
const {
	createValidator,
	updateValidator,
} = require("../validators/shop.validator.js");
const { Router } = require("express");

const shopRoutes = (app) => {
	const router = Router();

	router.use(passport.authenticate("jwt", { session: false }));

	router
		.route("/")
		.get(findAll)
		.post(createValidator, create)
		.delete(destroyAll);

	router
		.route("/:id")
		.get(findOne)
		.put(updateValidator, update)
		.delete(destroy);

	app.use("/api/shops", router);
};

module.exports = shopRoutes;
