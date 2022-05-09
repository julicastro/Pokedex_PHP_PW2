
<?php
require_once '../modelos/Conexion.clase.php';

class User {
private $nombre;
private $password;
public function login ($nombre,$password){
    $this->password=$password;
    $this->nombre=$nombre;
    $con=new Conexion();
    $cont = $con->ejecutarConsulta("SELECT * FROM usuario WHERE name = '$nombre' AND password = '$password'");
    if($cont==false)
    {
        header('Location: ../pokemon/login.php');
    }else{

    }
    $con->cerrarConexion();

    return $cont;
}



public function getrole(){
    $con= new Conexion();
    $role = $con->ejecutarConsulta("SELECT role FROM usuario WHERE name = '$this->nombre' AND password = '$this->password'");
    return $role[0];
}


}








