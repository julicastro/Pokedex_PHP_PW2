
<?php
require_once '../modelos/Conexion.clase.php';




function login (){
    $con = new Conexion();


    $nombre=$_POST["usuario"];
    $password=$_POST["password"];


$cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE name = '$nombre' AND password = '$password'");





$con->cerrarConexion();

return $cont;

}



function getrole(){

    $nombre=$_POST["usuario"];
$password=$_POST["password"];

    $role = $con->ejecutarConsulta("SELECT role FROM usuario WHERE name = '$nombre' AND password = '$password'");
    

    return $role;

}











