<?php

include_once('src/database.php');
include_once("src/Configuration.php");
$configuration = new Configuration();
//probando sin base de datos
//conectarAMySQL();
$configuration->getDatabase();


include_once ("src/views/head.php");
include_once ("src/views/header.php");
include_once ("src/views/nav.php");

include_once ("src/views/pokemon-table.php");

include_once ("src/views/footer.php");








?>



