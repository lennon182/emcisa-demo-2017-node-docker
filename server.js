const express = require("express");
const app = express();
const env = require("dotenv").config();
const path = require("path");

app.use(express.static("public"));

// OffHash;
app.get("*", (req, resp) => {
  resp.sendFile(path.resolve(__dirname, "./public/index.html"));
});

app.listen(process.env.PORT, () => {
  console.log(`Server is running... [PORT: ${process.env.PORT} ]`);
});
