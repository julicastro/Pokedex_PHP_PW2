<?php
require_once '../dao/Pokemon.dao.php';

$pokemon = PokemonDAO::buscarPorId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>

<body>
	<header>
		<h1>Roles</h1>
		<h2>Editar</h2>
	</header>

	<form action="../controladores/Pokemon.controlador.php?a=edit" method="POST">
		<input type="hidden" name="id" value="<?= $pokemon[0] ?>" />
		<div>
			<label for="nombre">Nombre: </label>
			<input name="nombre" value="<?= $pokemon[1] ?>" />
		</div>
		<div>
			<label for="numero">Numero de pokemon: </label>
			<input type="text" name="numero" value="<?= $pokemon[2] ?>" />
		</div>
		<div>
			<label for="tipo">Tipo: </label>
			<input type="text" name="tipo" value="<?= $pokemon[3] ?>" />
		</div>
		<div>
			<label for="imagen">Imagen (url): </label>
			<input type="text" name="imagen" value="<?= $pokemon[4] ?>" />
		</div>
		<div>
			<label for="descripcion">Descripcion: </label>
			<input type="text" name="descripcion" value="<?= $pokemon[5] ?>" />
		</div>
		<input type="submit" value="Editar">
	</form>


</body>

</html>