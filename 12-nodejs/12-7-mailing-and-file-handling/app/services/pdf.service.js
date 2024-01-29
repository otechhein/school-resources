const fs = require("fs");
const handlebars = require("handlebars");
const { default: puppeteer } = require("puppeteer");

const generateUserRegistrationSuccessPdf = async (
	templatePath,
	context,
	generatePath
) => {
	// Read the Handlebars template file
	const templateSource = fs.readFileSync(templatePath, "utf8");

	// Compile the Handlebars template
	const template = handlebars.compile(templateSource);

	// Compile the Handlebars template with the data
	const html = template(context);

	const browser = await puppeteer.launch({ headless: "new" });
	const page = await browser.newPage();

	// Set content on the page
	await page.setContent(html);

	// Generate PDF from the content
	await page.pdf({
		path: generatePath,
		format: "A4",
		printBackground: true,
	}); // Adjust format as needed

	await browser.close();
};

module.exports = {
	generateUserRegistrationSuccessPdf,
};
