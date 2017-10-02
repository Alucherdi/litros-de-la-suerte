<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/* $app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/' route");

    return $this->renderer->render($response, 'index.phtml', $args);
}); */

$app->get("/", function ($req, $res) {
	return $this->renderer->render($res, "home.php");
});

$app->get("/ingresa", function ($req, $res) {
	return $this->renderer->render($res, "login.php");
});

$app->get("/registro", function ($req, $res) {
	return $this->renderer->render($res, "signup.php");
});

$app->get("/ticket", function ($req, $res) {
	return $this->renderer->render($res, "ticket.php");
});

$app->get("/ranking", function ($req, $res) {
	return $this->renderer->render($res, "ranking.php");
});

$app->get("/mistickets", function ($req, $res) {
	return $this->renderer->render($res, "mytickets.php");
});