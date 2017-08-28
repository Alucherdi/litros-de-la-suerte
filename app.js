var express = require("express")
var hb = require("express-handlebars")
var app = express()

app.engine("handlebars", hb({ defaultLayout: "main"}))
app.set("view engine", "handlebars")
app.use(express.static("public"))

app.get("/", function (req, res) {
	res.render("home")
})

app.get("/registro", function (req, res) {
	res.render("signup")
})

app.get("/login", function (req, res) {
	res.render("login")
})

app.get("/ranking", function (req, res) {
	res.render("ranking")
})
app.get("/ticket", function (req, res) {
	res.render("ticket")
})

var port = process.env.PORT || 8080

app.listen(port, function (err) {
	if (err) { console.error(err) }
	console.log("Listening to port: " + port);
})