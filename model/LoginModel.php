<?php

session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

//echo $usuario . "</br>". $clave . "</br>";
file_put_contents("galletita.txt", md5($usuario)) . "</br>"; //CREA UN HASH

$_SESSION["logueado"] = 1; //suponiendo que usuario y clave son validos

?>