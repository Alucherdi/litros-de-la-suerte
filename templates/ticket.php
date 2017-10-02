<?php require("public/partials/header.php") ?>
<link rel="stylesheet" href="/public/css/ticket.css">
<!-- {{#if added}}
	<script>toast("Ticket agregado exitosamente!")</script>
{{/if}}

{{#if repeated}}
	<script>toast("Este ticket ya ha sido registrado anteriormente!")</script>
{{/if}}

{{#if error}}
	<script>toast("Ticket no existente!")</script>
{{/if}} -->
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