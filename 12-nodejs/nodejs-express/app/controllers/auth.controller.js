const config = require("../config/config.js");
const { userRepo } = require("../models/index.js");
const bcrypt = require("bcryptjs");
const jwt = require("jsonwebtoken");
const {
	transportUserRegistrationSuccessMail,
} = require("../services/mail.service.js");
const {
	generateUserRegistrationSuccessPdf,
} = require("../services/pdf.service.js");

const {
	storeUserImage,
	generateImageStaticLink,
} = require("../services/file.service.js");

const register = async (req, res) => {
	const { name, email, password, image } = req.body;

	const hashedPassword = await bcrypt.hash(password, config.hash.salt);

	const userImage = storeUserImage(image);

	const user = {
		...req.body,
		password: hashedPassword,
		image: userImage,
	};

	// Save user
	return userRepo
		.create(user)
		.then(async (user) => {
			const { password, ...data } = user.dataValues;

			const pdfName = `${data.id}-user-registration-success.pdf`;
			await generateUserRegistrationSuccessPdf(
				"app/templates/pdfs/user-registration-success.hbs",
				{ name },
				`public/${pdfName}`
			);

			transportUserRegistrationSuccessMail(email, {
				name,
				attachments: [
					{
						filename: pdfName,
						path: `public/${pdfName}`,
						contentType: "application/pdf",
					},
				],
			});

			data.image = data.image
				? generateImageStaticLink(data.image)
				: null;

			// return res.download("public/user-registration-success.pdf");

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
