const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const PORT = process.env.PORT || 3000;

// Middleware
app.use(bodyParser.json());

// Routes
require("./routes/shop.routes")(app);

app.listen(PORT, () => {
	console.log(`Server is running on port ${PORT}`);
});
