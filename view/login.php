>
<!DOCTYPE html>
<html lang="en">

<?php
require_once('../templates/header.php');
showHead();
?>

<body style="background: #d2c575;font-family: cursive;" style="text-align: -webkit-center;">
    <div class="container-fluid">
        <form action="user.php" class="d-flex" method="post" enctype="multipart-form-data">
        <input class="form-control me-2" type="text" placeholder="Ingrese su nombre de usuario"  name="usuario">
        <input class="form-control me-2" type="text" placeholder="Ingrese su contraseña"  name="password">
        <button class="btn btn-outline-success" type="submit">Ingresar</button>
        </form>
    </div>
</body>