<?php require("public/partials/header.php") ?>
<div id="ranking" align="center">
	<table>
		<tr>
			<th>Usuario</th>
			<th>Tickets</th>
		</tr>
		<!-- {{#each tickets}}
		<tr>
			<td>{{this.nombre}}</td>
			<td>{{this.tickets}}</td>
		</tr>
		{{/each}} -->
		<?php for ($i = 0; $i < count($tickets); $i ++) { ?>
			<tr>
				<td><?php echo $tickets[$i][0]; ?></td>
				<td><?php echo $tickets[$i][1]; ?></td>
			</tr>
		<?php } ?>
	</table>
</div>
<?php require("public/partials/footer.php") ?>