<?php

include_once('src/database.php');
include_once("src/Configuration.php");
$configuration = new Configuration();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Pokemones</h1>


    <?php
    conectarAMySQL();
    $configuration->getDatabase();


    ?>

    <div class="pokemon-table">
        <div>

        </div>
    </div>




</body>

</html>