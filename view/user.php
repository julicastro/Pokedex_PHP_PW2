
<?php
require_once '../modelos/Conexion.clase.php';

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conn= new mysqli('localhost', 'root', '', 'db_pokedex');


$sql = sprintf("SELECT * FROM usuario WHERE name = '$usuario' AND password = '$password'");
$resultado = $conn->query($sql);
$nr = mysqli_num_rows($resultado);

if($nr == 0){ 
header('location: index.php');
} 
else if($nr == 1){ 
header('location: usuario.php');
} 

?>






