const allNumbers = [..."0123456789"];

const extractObject = (obj, keys) => {
	return Object.fromEntries(
		Object.entries(obj).filter(([key]) => keys.includes(key))
	);
};

const generateNumber = (length = 6) => {
	const base = [...allNumbers];
	return [...Array(length)]
		.map((i) => base[(Math.random() * base.length) | 0])
		.join("");
};

module.exports = {
	extractObject,
	generateNumber,
};
