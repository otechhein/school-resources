const { checkSchema, validationResult } = require("express-validator");

const { extractObject } = require("../utils/helper.js");

const createValidator = async (req, res, next) => {
	await checkSchema({
		title: { isLength: { options: { min: 8 } } },
		description: { isLength: { options: { min: 8, max: 255 } } },
	}).run(req);

	const { errors } = validationResult(req);
	if (errors.length) {
		return res.status(400).send({ errors });
	}

	req.body = extractObject(req.body, ["title", "description", "published"]);

	next();
};

module.exports = {
	createValidator,
};
