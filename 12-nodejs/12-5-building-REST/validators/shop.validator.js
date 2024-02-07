const { checkSchema, validationResult } = require("express-validator");

const createValidator = async (req, res, next) => {
	await checkSchema({
		name: { req: true, isLength: { options: { min: 8, max: 255 } } },
	}).run(req);

	const { errors } = validationResult(req);
	if (errors.length) {
		return res.status(400).send({ errors });
	}

	req.body = Object.fromEntries(
		Object.entries(req.body).filter(([key]) => ["name"].includes(key))
	);

	next();
};

module.exports = {
	createValidator,
};
