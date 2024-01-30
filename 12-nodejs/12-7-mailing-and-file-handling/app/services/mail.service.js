const nodemailer = require("nodemailer");
const hbs = require("nodemailer-express-handlebars");
const config = require("../config/config");
const fs = require("fs");

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
			layoutsDir: "app/templates/mails/",
			defaultLayout: false,
			partialsDir: "app/templates/mails/",
		},
		viewPath: "app/templates/mails/",
		extName: ".hbs",
	})
);

const transportUserRegistrationSuccessMail = (
	to,
	{ attachments, ...context }
) => {
	transporter.sendMail(
		{
			from: `O-Technique Developer<${config.mail.username}>`,
			to,
			subject: "User Registration Success !",
			template: "user-registration-success",
			context,
			attachments,
		},
		() => {
			console.log("....User Registration Success Email Sent.....");
			fs.unlink(attachments[0].path, (err) => {
				if (err)
					console.log(
						err,
						"...User Registration Success Unlink File Error...."
					);
			});
		}
	);
};

module.exports = {
	transporter,
	transportUserRegistrationSuccessMail,
};
