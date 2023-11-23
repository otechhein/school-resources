const { register, login } = require("../controllers/auth.controller.js");
const { Router } = require("express");
const {
	registerValidator,
	loginValidator,
} = require("../validators/auth.validator.js");

const authRoutes = (app) => {
	const router = Router();

	router.route("/register").post(registerValidator, register);

	router.route("/login").post(loginValidator, login);

	app.use("/api/auth", router);
};

module.exports = authRoutes;
