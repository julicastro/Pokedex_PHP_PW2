<?php
require_once '../templates/header.php';
include_once "../controladores/Pokemon.controlador.php";
require_once '../dao/Pokemon.dao.php';
$pokemon = PokemonDAO::buscarPorId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">

<?php
showHead();
?>

<body style="background: #d2c575;font-family: cursive;">
    <header class="container-fluid row align-items-center my-3">
        <div class="col-md-2 text-center">
            <img src="../img/pokebolaPNG.png" alt="Logo" width="50px">
        </div>
        <div class="col-md-8 text-center">
            <h1 style="font-family: monospace;">Pokedex-Adm</h1>
        </div>
        <div class="col-md-2 text-end" style="color: white;">
            <h4 style="font-family: monospace;">Usuario ADMIN</h4>
        </div>
    </header>



    <!-- =============================================================================================== -->
    <section class="container-fluid my-5" style="font-family: cursive ;">
        <div class="row align-items-center">
            <div class="col-md-4 m-3 align-self-start">
                <!-- Img del pokemon -->
                <img class="img-fluid bg-dark p-2 bg-opacity-50 rounded-3"
                    src="<?= $pokemon[4]?>" alt="Imagen Pokemon">
            </div>
            <div class="col">
                <div class="d-flex my-3 align-items-center bg-dark p-2" style="color: white;border-radius: 100px;">
                    <!--Logo de tipo-->
                    <img class="img-thumbnail border-0 mx-3 bg-transparent" src="<?= $pokemon[3] ?>" alt="imagen de Tipo" width="120px">
                    <div>
                        <!--Numero-->
                        <h3>N° <?= $pokemon[2] ?></h3>
                        <!--Nombre-->
                        <h2> <?= $pokemon[1] ?></h2>
                    </div>
                </div>
                <div class="p-3" style="background: #ef4036;color:white; border-radius: 5%;">
                    <!--Descripcion-->
                    <p require value="<?= $pokemon[5] ?>">
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================================ -->
    <div class="bg-danger " style=" position: fixed;border-radius: 50%;padding: 100px;
                                    left: -100px;bottom: -100px;z-index: -1;">.
    </div>
    <div class="bg-danger " style=" position: fixed;border-radius: 50%;padding: 100px;
                                    right: -100px;bottom: -100px;z-index: -1;">.
    </div>
    <div class="bg-dark " style="   position: fixed;transform: rotate(45deg);;padding: 100px;
                                    right: -150px;top: -120px;z-index: -1;">.
    </div>
    <div class="bg-dark " style="   position: fixed;transform: rotate(45deg);;padding: 100px;
                                    left: -150px;top: -120px;z-index: -1;">.
    </div>






</body>

</html>