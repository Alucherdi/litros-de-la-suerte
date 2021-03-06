<?php require("public/partials/header.php") ?>
<link rel="stylesheet" href="/public/css/signup.css">
<div id="signup" class="flexbox">
	<div id="signupForm" class="card">
		<div class="form-title">Usuario nuevo:</div>
		<hr>
		<form class="" action="/registro" method="POST">
			<div class="struct">
				<input type="text" name="nombre" class="form-input" placeholder="Nombre" required>
				<input type="text" name="apellidos" class="form-input" placeholder="Apellidos" required>
				<input type="text" name="usuario" class="form-input" placeholder="Usuario" required>
				<input type="password" name="password" class="form-input" placeholder="Password" required>
				<input type="text" name="correo" class="form-input" placeholder="Correo electronico" required>
				<input type="text" name="telefono" class="form-input" placeholder="Teléfono" required>
			</div>
			
			<div align="center" class="signupSubmit">
				<input type="submit" class="form-button" value="Registrate">
			</div>
			
		</form>
	</div>
	
</div>
<?php require("public/partials/footer.php") ?>