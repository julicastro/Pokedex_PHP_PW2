<?php

include_once('helper/database.php');
include_once("config/Configuration.php");
$configuration = new Configuration();

conectarAMySQL();
$configuration->getDatabase();


include_once("view/head.php");
include_once("view/header.php");
include_once("view/nav.php");

include_once("view/pokemon-table.php");

include_once("view/footer.php");








?>



