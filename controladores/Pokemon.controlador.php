<?php
require_once '../modelos/Pokemon.clase.php';
require_once '../dao/Pokemon.dao.php';
include_once '../view/user.php';

echo  $adminLogeado;

//if ($adminLogeado == true) {
	switch ($_GET['a']) {
		case 'ingr':
			$r = new Pokemon();
			$r->setNombre($_POST['nombre']);
			$r->setNumero($_POST['numero']);
			$r->setTipo($_POST['tipo']);
			$r->setImagen($_POST['imagen']);
			$r->setDescripcion($_POST['descripcion']);
			PokemonDAO::ingresarDato($r);
			break;
		case 'edit':
			$r = new Pokemon();
			$r->setId($_POST['id']);
			$r->setNombre($_POST['nombre']);
			$r->setNumero($_POST['numero']);
			$r->setTipo($_POST['tipo']);
			//Para imagenes se usa el $_FILES[]
			$r->setImagen($_FILES['imagen']['name']);
			$r->setDescripcion($_POST['descripcion']);
			PokemonDAO::editarDato($r);
			break;
		case 'elim':
			PokemonDAO::eliminarPorId($_GET['id']);
			break;
		case 'filter':
			PokemonDAO::listarDatosFiltrado($_GET['buscador']);
			break;
	}
	header('Location: ../view/usuario.php');
/*}else {
	header('Location: ../view/');
}
*/
