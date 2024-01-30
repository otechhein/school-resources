const { checkSchema, validationResult } = require("express-validator");
const { extractObject } = require("../utils/helper.js");

const registerValidator = async (req, res, next) => {
	await checkSchema({
		name: {
			isLength: {
				options: { min: 6, max: 100 },
			},
		},
		email: { errorMessage: "Invalid email", isEmail: true },
		password: { isLength: { options: { min: 8, max: 100 } } },
	}).run(req);

	const { errors } = validationResult(req);
	if (errors.length) {
		return res.status(400).send({ errors });
	}

	req.body = extractObject(req.body, ["name", "email", "password", "image"]);

	next();
};

const loginValidator = async (req, res, next) => {
	await checkSchema({
		email: { errorMessage: "Invalid email", isEmail: true },
		password: { isLength: { options: { min: 8, max: 100 } } },
	}).run(req);

	const { errors } = validationResult(req);
	if (errors.length) {
		return res.status(400).send({ errors });
	}

	req.body = extractObject(req.body, ["email", "password"]);

	next();
};

module.exports = {
	registerValidator,
	loginValidator,
};
