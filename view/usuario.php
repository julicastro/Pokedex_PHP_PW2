<?php

require_once '../dao/Pokemon.dao.php';
require_once '../templates/header.php';
require_once '../templates/nav.php';


?>
<!DOCTYPE html>
<html lang="en">

<?php
showHead();
?>


<body style="background: #d2c575;font-family: cursive;" style="text-align: -webkit-center;">

	<?php
	showNav("Lista de Pokemones");
	// showSeach();
	?>

	<form action="buscar.php" method="GET" class="my-5">
		<div class="form-group d-flex w-50 m-auto">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" class="form-control">
			<input type="submit" value="Buscar" class="btn btn-primary">
		</div>

	</form>

	<div style="width: 90%" class="m-auto">

		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Numero</th>
					<th scope="col">Tipo</th>
					<th scope="col">Imagen</th>
					<th scope="col">Descripcion</th>
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach (PokemonDAO::listarDatos() as $fila) { ?>
					<tr>
						<td><?= $fila[0] ?></td>
						<td><a href="infoPokemon.php?id=<?= $fila[0] ?>"><?= $fila[1] ?></a></td>
						<td><?= $fila[2] ?></td>
						<td><?= $fila[3] ?></td>
						<td><img style="width: 100px;" src="<?php echo ($fila[4]) ?>" alt="imagen"></td>
						<td><?= $fila[5] ?></td>
						<td><a class="btn btn-primary" href="editar.php?id=<?= $fila[0] ?>">Editar</a></td>
						<td><a class="btn btn-danger" href="../controladores/Pokemon.controlador.php?a=elim&id=<?= $fila[0] ?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="d-flex justify-content-center my-5">
			<a class="btn btn-primary w-50 mb-5" href="ingresar.php">Ingresar nuevo</a>
		</div>
	</div>

	<!-- ============================================ -->
	<div class="bg-danger " style=" position: fixed;border-radius: 50%;padding: 100px;
								left: -100px;bottom: -100px;z-index: -1;">.
	</div>
	<div class="bg-danger " style=" position: fixed;border-radius: 50%;padding: 100px;
								right: -100px;bottom: -100px;z-index: -1;">.
	</div>
	<div class="bg-dark " style="   position: fixed;transform: rotate(45deg);;padding: 100px;
								right: -150px;top: -120px;z-index: -1;">.
	</div>
	<div class="bg-dark " style="   position: fixed;transform: rotate(45deg);;padding: 100px;
								left: -150px;top: -120px;z-index: -1;">.
	</div>

</body>

</html>