<?php function showSeach()
{?>

<div class="container">
    <div class="input-group">
        <form action="../controladores/Pokemon.controlador.php?a=filter" method="POST" enctype="multipart/form-data">
        <input name="buscador" type="text" class="form-control rounded" placeholder="Ingrese el nombre, tipo o numero de Pokemon" aria-label="Search" aria-describedby="search-addon" />
        <button type="submit" class="btn btn-primary">Quien es ese Pokemon?</button>
    </form>
	</div>
</div>


<?php 
}
