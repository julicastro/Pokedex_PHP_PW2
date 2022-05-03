<?php

include_once('src/database.php');
include_once("src/Configuration.php");
$configuration = new Configuration();

conectarAMySQL();
$configuration->getDatabase();


include_once ("src/views/head.php");
include_once ("src/views/headerLogueado.php");
include_once ("src/views/nav.php");

include_once ("src/views/pokemon-tableLogeado.php");

include_once ("src/views/footer.php");
