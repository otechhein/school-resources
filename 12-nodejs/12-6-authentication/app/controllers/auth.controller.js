const config = require("../config/config.js");
const { userRepo } = require("../models/index.js");
const bcrypt = require("bcryptjs");
const jwt = require("jsonwebtoken");

const register = async (req, res) => {
	const { password } = req.body;

	const hashedPassword = await bcrypt.hash(password, config.hash.salt);

	const user = {
		...req.body,
		password: hashedPassword,
	};

	// Save user
	return userRepo
		.create(user)
		.then(async (user) => {
			const { password, ...data } = user.dataValues;

			return res.send(data);
		})
		.catch((err) => {
			res.status(500).send({
				message:
					err.message ||
					"Some error occurred while registering a new user.",
			});
		});
};

const login = async (req, res) => {
	const { email, password } = req.body;

	const user = await userRepo.findOne({ where: { email } });

	if (user) {
		const passwordMatch = await bcrypt.compare(password, user.password);

		if (passwordMatch) {
			const token = jwt.sign(
				{ name: user.name, email: user.email },
				config.jwt.secret,
				{
					expiresIn: "1h",
				}
			);

			return res.send({ message: "Logged in successfully", token });
		}
	}
	return res.status(400).send({ message: "Invalid email or password" });
};

module.exports = { register, login };
