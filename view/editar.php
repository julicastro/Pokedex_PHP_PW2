<?php
require_once '../dao/Pokemon.dao.php';
require_once '../templates/nav.php';
require_once '../templates/header.php';
require_once '../templates/nav.php';
require_once '../templates/buscador.php';
$pokemon = PokemonDAO::buscarPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">

<?php
showHead();
?>

<body  style="background: #d2c575;font-family: cursive;" style="text-align: -webkit-center;">
	<?php
	showNav("Editar Pokemon");
	?>
	<form action="../controladores/Pokemon.controlador.php?a=edit" method="POST"     enctype="multipart/form-data">
		<div class="container">
			<input type="hidden" name="id" value="<?= $pokemon[0] ?>" />
			<div class="row mb-4">
				<div class="col">
					<div class="form-outline">
						<label class="form-label" for="form6Example1">Nombre</label>
						<input name="nombre" type="text" id="form6Example1" class="form-control" require value="<?= $pokemon[1] ?>" />
					</div>
				</div>
				<div class="col">
					<div class="form-outline">
						<label class="form-label" for="form6Example2"> Tipo</label>
		<!--				<input name="tipo" type="text" id="form6Example2" class="form-control" require value="<?= $pokemon[3] ?>" />
		-->
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un tipo de Pokemon</option>
        <!--En los value deberia ir la conexion con la tabla TIPO-->                    
                            <option value="1">Agua</option>
                            <option value="2">Fuego</option>
                            <option value="3">Tierra</option>
                            <option value="4">Electrico</option>
                            <option value="5">Metal</option>
                        </select>
					</div>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col">
					<div class="form-outline">
						<label class="form-label" for="form6Example1">Numero</label>
						<input name="numero" type="text" id="form6Example1" class="form-control" require value="<?= $pokemon[2] ?>" />
					</div>
				</div>
				<div class="col">
					<div class="form-outline">
                        <label for="formFileLg" class="form-label">Subir Imagen</label>
	<!--					<input name="imagen" type="text" class="form-control" value="<?= $pokemon[4] ?>" />  -->
                        <!---->

                        <input class="form-control form-control-lg" id="formFileLg" type="file">
					</div>
				</div>
			</div>
			<div class="form-outline mb-4">
				<label class="form-label" for="form6Example7">Descripcion</label>
				<input type="text" name="descripcion" class="form-control" value="<?= $pokemon[5] ?>" />
			</div>
			<div class="d-flex justify-content-center">
				<button type="submit" class="btn btn-primary btn-block mb-4 w-50 d-flex justify-content-center">Crear</button>
			</div>
		</div>
	</form>
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