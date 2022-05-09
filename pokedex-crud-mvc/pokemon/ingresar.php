<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Roles</title>
</head>
<body>
	<header>
		<h1>Roles</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../controladores/Pokemon.controlador.php?a=ingr" method="POST">
	<div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" require />
        </div>
        <div>
            <label for="numero">Numero de pokemon: </label>
            <input type="text" name="numero" require />
        </div>
		<div>
            <label for="tipo">Tipo: </label>
            <input type="text" name="tipo" require />
        </div>
        <div>
            <label for="imagen">Imagen (url): </label>
            <input type="text" name="imagen" require />
        </div>
        <div>
            <label for="descripcion">Descripcion: </label>
            <input type="text" name="descripcion" require />
        </div>
        <input type="submit" value="Crear">
	</form>
</body>
</html>