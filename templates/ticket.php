<?php require("public/partials/header.php") ?>
<link rel="stylesheet" href="/public/css/ticket.css">

<?php 
	if (isset($login) && $login == "true") { 
		echo "<script>toast('¡Sesión iniciada!')</script>";
	}

	if (isset($added) && $added == "true") { 
		echo "<script>toast('¡Ticket añadido!')</script>";
	}

	if (isset($repeated) && $repeated == "true") { 
		echo "<script>toast('¡Ticket repetido!')</script>";
	}

	if (isset($error) && $error == "true") { 
		echo "<script>toast('¡Ticket no existente!')</script>";
	}
?>

<div id="ticket">
	<div id="ticketContent" class="card">
		<div class="form-title">
			Registra el código que raspaste en tu ticket
		</div>
		<hr>
		<form action="/addTicket" method="POST">
			<input type="text" class="form-input" placeholder="Ticket" name="folio" required>
			<button type="submit" class="form-button">Subir</button>
			<button type="button" class="form-button" onclick="window.location.href='/mistickets'">Mis tickets</button>
			<button type="button" class="form-button" onclick="window.location.href='/ranking'">Ranking</button>
		</form>	
	</div>
</div>
<?php require("public/partials/footer.php") ?>