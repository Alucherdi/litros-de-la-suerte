<?php require("public/partials/header.php") ?>
<link rel="stylesheet" href="/public/css/login.css">

<?php 
	if (isset($login) && $login == "false") { 
		echo "<script>toast('¡Fallo al iniciar la sesión!')</script>";
	}

	if (isset($success) && $success == "true") { 
		echo "<script>toast('¡Registro exitoso!')</script>";
	}
?>

<div id="login" class="flexbox">
	<div id="loginForm" class="card">
		<div class="form-title">Inicia sesión o registrate para continuar:</div>
		<hr>
		<form action="" method="POST">
			<input type="text" class="form-input" name="usuario" placeholder="usuario">
			<input type="password" class="form-input" name="password" placeholder="password">
			<div class="buttons">
				<button type="submit" class="form-button">Ingresa</button>
				<button type="button" class="form-button" onclick="window.location.href = '/registro'">Registrate</button>
			</div>
		</form>
	</div>
</div>
<?php require("public/partials/footer.php") ?>