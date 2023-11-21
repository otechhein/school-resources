const nodemailer = require("nodemailer");
const hbs = require("nodemailer-express-handlebars");
const config = require("../config/config");

const transporter = nodemailer.createTransport({
	service: config.mail.service,
	port: config.mail.port,
	secure: config.mail.secure,
	auth: {
		user: config.mail.username,
		pass: config.mail.password,
	},
});

transporter.verify((error, success) => {
	if (error) console.error(error);
	console.log("Server is ready to take our messages");
});

transporter.use(
	"compile",
	hbs({
		viewEngine: {
			extname: ".hbs",
			layoutsDir: "app/templates/",
			defaultLayout: false,
			partialsDir: "app/templates/",
		},
		viewPath: "app/templates/",
		extName: ".hbs",
	})
);

const transportUserRegistrationSuccessMail = (to, context) => {
	console.log(to, context, "....cont....");
	transporter.sendMail(
		{
			from: "O-Technique Developer<toetet@o-technique-myanmar.com>",
			to,
			subject: "User Registration Success !",
			template: "user-registration-success",
			context,
		},
		() => {
			res.status(200).send("User Registration Success Email sent");
		}
	);
};

module.exports = {
	transporter,
	transportUserRegistrationSuccessMail,
};
