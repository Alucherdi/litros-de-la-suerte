<?php require("public/partials/header.php") ?>
<div id="ranking" align="center">
	<table>
		<tr>
			<th>Folios</th>
		</tr>
		{{#each tickets}}
		<tr>
			<td>{{this.folio}}</td>
		</tr>
		{{/each}}
	</table>
</div>
<?php require("public/partials/footer.php") ?>