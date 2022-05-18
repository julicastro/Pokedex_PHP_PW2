<?php
$encontrado = $_POST['buscador'];


$conn = new mysqli('localhost', 'root', '', 'db_pokedex');


$sql = sprintf("SELECT * FROM pokemon WHERE nombre LIKE '%$encontrado%' OR tipo = '%$encontrado%' OR numero LIKE '%$encontrado%'");
$resultado = $conn->query($sql);
$nr = mysqli_num_rows($resultado);

if ($nr == 0) {
header('location: index.php');
} else if ($nr == 1) {
header('location: usuario.php');
}




