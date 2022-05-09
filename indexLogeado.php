<?php

<<<<<<< HEAD:pokedex-inicial/indexLogeado.php
// include_once('helper/database.php');
include_once("config/Configuration.php");
$configuration = new Configuration();

// conectarAMySQL();
=======
include_once("config/Configuration.php");
$configuration = new Configuration();

>>>>>>> 7cfa98cedccb1c00568b09bd340e335bb78e5cb9:indexLogeado.php
$configuration->getDatabase();


include_once("view/head.php");
include_once("view/headerLogueado.php");
include_once("view/nav.php");

include_once("view/pokemon-tableLogeado.php");
include_once("view/botonAgregar.php");
include_once("view/footer.php");
