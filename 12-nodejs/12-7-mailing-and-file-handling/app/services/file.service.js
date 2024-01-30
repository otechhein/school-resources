// const fs = require("fs");
const fsExtra = require("fs-extra");
const moment = require("moment/moment.js");
const { generateNumber } = require("../utils/helper.js");
const config = require("../config/config.js");

const userImageName = "user-image";
const userImagePath = "public/storage/users/";

const generateImageName = (imageName, extension) => {
	return `${moment().format("YYYYMMDDHHmmss")}${generateNumber(
		3
	)}-${imageName}.${extension}`;
};

const generateImageStaticLink = (path) => {
	return path.replace("public", config.app.url);
};

const createBase64Image = (image, imageName, imagePath) => {
	const [imageExtension, base64Image] = image.split(";base64,");
	const extension = imageExtension.split("/").pop();

	const imgName = generateImageName(imageName, extension);

	const path = `${imagePath}${imgName}`;

	fsExtra.writeFile(
		path,
		base64Image,
		{ encoding: "base64" },
		function (err) {
			console.log("File created");
		}
	);

	return path;
};

const storeUserImage = (image) => {
	return createBase64Image(image, userImageName, userImagePath);
};

module.exports = {
	generateImageStaticLink,
	storeUserImage,
};
