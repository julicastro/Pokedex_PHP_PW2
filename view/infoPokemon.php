<?php
include_once "../controladores/Pokemon.controlador.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
</head>

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
                <!-- El src es probando -->
                <img class="img-fluid bg-dark p-2 bg-opacity-50 rounded-3"
                    src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png" alt="Imagen Pokemon">
            </div>
            <div class="col">
                <div class="d-flex my-3 align-items-center bg-dark p-2" style="color: white;border-radius: 100px;">
                    <img class="img-thumbnail border-0 mx-3 bg-transparent" src="./../img/pokebolaPNG.png" alt="imagen de Tipo" width="120px">
                    <div>
                        <h3>N° 7</h3>
                        <h2> Squirtle</h2>
                    </div>
                </div>
                <div class="p-3" style="background: #ef4036;color:white; border-radius: 5%;">
                    <p> <?php
                        $encontrado->getDescripcion();
                        
                        ?>

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