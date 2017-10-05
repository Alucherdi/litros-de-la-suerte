<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Litros de la suerte</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300|Roboto:100,300" rel="stylesheet">
	<link rel="stylesheet" href="/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="/public/css/body.css">
	<link rel="stylesheet" href="/public/css/form.css">
	<link rel="stylesheet" href="/public/css/material.css">
	<link rel="stylesheet" href="/public/css/toast.css">
	<link rel="stylesheet" href="/public/css/header.css">
</head>
<body>
	<script src="/public/js/toast.js"></script>
	<div class="container">
		<div id="header">
			<div class="navbar">
				<div><img src="/public/img/Logo Litros de la suerte.png" alt="" onclick="window.location.href = '/'"></div>
				<div><img src="/public/img/Logo petro 7.png" alt=""></div>
			</div>

			<!-- {{#if user}}
			<div class="logout" onclick="window.location.href='/logout'">
				<i class="fa fa-sign-out" aria-hidden="true"></i>
			</div>
			{{/if}} -->
			<?php if (isset($_SESSION["usuario"])) { ?>
				<div class="logout" onclick="window.location.href='/logout'">
					<i class="fa fa-sign-out" aria-hidden="true"></i>
				</div>
			<?php } ?>
		</div>