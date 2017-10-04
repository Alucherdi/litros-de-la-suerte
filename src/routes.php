<?php

use Slim\Http\Request;
use Slim\Http\Response;
// Routes

$app->get("/", function ($req, $res) {
	return $this->renderer->render($res, "home.php");
});

$app->get("/ingresa", function ($req, $res) {
	if (isset($_SESSION["usuario"])) {
		return $res->withRedirect("/ticket");
	}
	$params = $req->getQueryParams();
	return $this->renderer->render($res, "login.php", $params);
});

$app->post("/ingresa", function ($req, $res) {
	$params = $req->getParsedBody();

	$db = new mysqli("50.62.209.199", "pmg", "promogames123", "Litros_de_la_suerte");
	$query = "SELECT * FROM usuarios WHERE usuario = '" . $params["usuario"] . "' AND password = '" . $params["password"] . "'";
	if (!$result = $db->query($query)) {
		die('Error ejecutando el query [' . $db->error . ']');
	}

	if (mysqli_num_rows($result) ==  0) {
		return $res->withRedirect("/ingresa?login=false");
	}

	while ($row = $result->fetch_assoc()) {
		$_SESSION["id"] = $row["id"];
		$_SESSION["nombre"] = $row["nombre"];
		$_SESSION["usuario"] = $row["usuario"];
		$_SESSION["password"] = $row["password"];
		$_SESSION["correo"] = $row["correo"];
		$_SESSION["telefono"] = $row["telefono"];
	}
	return $res->withRedirect("/ticket?login=true");
});

$app->get("/registro", function ($req, $res) {
	return $this->renderer->render($res, "signup.php");
});

$app->get("/ticket", function ($req, $res) {
	$params = $req->getQueryParams();
	return $this->renderer->render($res, "ticket.php", $params);
});

$app->get("/ranking", function ($req, $res) {
	$db = new mysqli("50.62.209.199", "pmg", "promogames123", "Litros_de_la_suerte");
	$query = "SELECT usuarios.nombre, COUNT(tickets.usuario) AS tickets FROM usuarios,tickets WHERE tickets.usuario != 0 AND tickets.usuario = usuarios.id GROUP BY tickets.usuario ORDER BY count(*) DESC";

	if (!$result = $db->query($query)) {
		die('There was an error running the query [' . $db->error . ']');
	}
	
	$tickets = [];

	while ($row = $result->fetch_assoc()) {
		$tickets[] = [$row["nombre"], $row["tickets"]];
	}
	
	$params = array (
		"tickets" => $tickets
	);
	
	return $this->renderer->render($res, "ranking.php", $params);
});

$app->get("/mistickets", function ($req, $res) {
	if (!isset($_SESSION["usuario"])) {
		return $res->withRedirect("/ingresa");
	} 

	$db = new mysqli("50.62.209.199", "pmg", "promogames123", "Litros_de_la_suerte");
	$query = "SELECT * FROM tickets WHERE usuario = '" . $_SESSION["id"] ."'";
	if (!$result = $db->query($query)) {
		die('There was an error running the query [' . $db->error . ']');
	}

	$tickets = [];
	
	while ($row = $result->fetch_assoc()) {
		$tickets[] = $row["folio"];
	}

	$params = array(
		"tickets" => $tickets
	);
	
	return $this->renderer->render($res, "mytickets.php", $params);
});