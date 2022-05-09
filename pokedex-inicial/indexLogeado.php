<?php

// include_once('helper/database.php');
include_once("config/Configuration.php");
$configuration = new Configuration();

// conectarAMySQL();
$configuration->getDatabase();


include_once("view/head.php");
include_once("view/headerLogueado.php");
include_once("view/nav.php");

include_once("view/pokemon-tableLogeado.php");
include_once("view/botonAgregar.php");
include_once("view/footer.php");
