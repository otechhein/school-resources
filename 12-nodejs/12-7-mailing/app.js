const express = require("express");
const nodemailer = require("nodemailer");
const exphbs = require("express-handlebars");
const nodemailerExpressHandlebars = require("nodemailer-express-handlebars");
const multer = require("multer");
const path = require("path");
require("dotenv").config();

const app = express();

app.use(express.urlencoded({ extended: true }));

const upload = multer();

// Setup Handlebars as the view engine
const hbs = exphbs.create({
	defaultLayout: false,
	layoutsDir: path.join(__dirname, "views"),
});

app.engine("handlebars", hbs.engine);
app.set("view engine", "handlebars");
app.set("views", path.join(__dirname, "views"));

// Configure Nodemailer
const transporter = nodemailer.createTransport({
	service: process.env.SMTP_HOST,
	port: process.env.SMTP_PORT,
	secure: false,
	auth: {
		user: process.env.SMTP_USER,
		pass: process.env.SMTP_PASS,
	},
});

// Use nodemailer-express-handlebars for rendering templates
transporter.use(
	"compile",
	nodemailerExpressHandlebars({
		viewEngine: {
			extname: ".hbs",
			layoutsDir: "views/",
			defaultLayout: false,
			partialsDir: "views/",
		},
		viewPath: "views/",
		extName: ".hbs",
	})
);

// Routes
app.get("/", (req, res) => {
	res.render("email", { name: "John Doe" });
});

app.post("/send-email", upload.single("attachment"), async (req, res) => {
	try {
		const { to, subject, text } = req.body;

		const mailOptions = {
			from: process.env.SMTP_USER,
			to,
			subject,
			text,
			template: "email",
			context: { name: "John Doe" },
			attachments: req.file
				? [
						{
							filename: req.file.originalname,
							content: req.file.buffer,
						},
				  ]
				: [],
		};

		transporter.sendMail(mailOptions);

		res.send("Email sent successfully!");
	} catch (error) {
		console.error(error);
		res.status(500).send("Internal Server Error");
	}
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
	console.log(`Server is running on http://localhost:${PORT}`);
});
