<?php require("public/partials/header.php") ?>

<div id="ranking" align="center">
	<table>
		<tr>
			<th>Folios</th>
		</tr>
		<?php for ($i = 0; $i < count($tickets); $i ++) { ?>
		<tr>
			<td><?php echo $tickets[$i] ?></td>
		</tr>
		<?php } ?>
	</table>
</div>

<?php require("public/partials/footer.php") ?>