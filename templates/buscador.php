<?php function showSeach()

{?>

<div class="container">
    <div class="input-group">
	<form action="../controladores/Buscador.controlador.php" class="d-flex my-4" method="get" style="width: 100%;">
        <input name="buscado" type="text" class="form-control rounded" placeholder="Ingrese el nombre, tipo o numero de Pokemon" aria-label="Search" aria-describedby="search-addon" />
        <button type="submit" class="btn btn-primary">Quien es ese Pokemon?</button>
    </form>
	</div>
</div>


<?php 
}?>