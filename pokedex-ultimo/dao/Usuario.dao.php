
<?php
require_once '../modelos/Conexion.clase.php';




function login (){


    $con = new Conexion();
    $nombre=$_POST["usuario"];
    $password=$_POST["password"];


$cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE name = '$nombre' AND password = '$password'");







return $cont;

}



function getrole(){


    $con = new Conexion();
    $nombre=$_POST["usuario"];
    $password=$_POST["password"];


    $cont = $con->ejecutarConsulta("SELECT role FROM usuario WHERE name = '$nombre' AND password = '$password'");


    return $cont;

}