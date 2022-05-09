<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
</head>

<body style="background: #d2c575;font-family: cursive;" style="text-align: -webkit-center;">
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

    <section class="container row ">

            <div class="input-group mb-3">
                <input type="text" class="form-control mx-1" placeholder="Nombre del Pokemon" name="nombre" value="<?= $pokemon[1] ?>">
                <input type="text" class="form-control mx-1" placeholder="Tipo de Pokemon"  name="tipo" value="<?= $pokemon[3] ?>">
            </div>
            <label for="basic-url" class="form-label mx-1">URL de la imagen</label>
            <div class="input-group mb-3">
                <span class="input-group-text mx-1" id="basic-addon3">https://ejemplo.com/</span>
                <input type="text" class="form-control" id="basic-url" placeholder="URL" name="imagen" value="<?= $pokemon[4] ?>">
            </div>

            <div class="input-group mb-3 mx-1">
                <span class="input-group-text mx-1">Numero</span>
                <input type="text" class="form-control mx-1" placeholder="Numero de Pokemon" name="numero" value="<?= $pokemon[2] ?>">
            </div>
            <div class="input-group mb-3 mx-1">
                <input type="text" class="form-control mx-1" placeholder="Descripcion" name="descripcion" value="<?= $pokemon[5] ?>" >
            </div>
            <input class="bnt btn-dark rounded" type="submit" value="Editar">
        
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