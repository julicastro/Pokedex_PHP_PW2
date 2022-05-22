
<?php

    $adminLogeado = false;

    

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', 'root', 'db_pokedex');


$sql = sprintf("SELECT * FROM usuario WHERE name = '$usuario' AND password = '$password'");
$resultado = $conn->query($sql);
$nr = mysqli_num_rows($resultado);

if ($nr == 0) {
    header('location: index.php');
    $adminLogeado = false;
} else if ($nr == 1) {
    header('location: usuario.php');
    $adminLogeado = true;
}

?>






