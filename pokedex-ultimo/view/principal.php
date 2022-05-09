<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
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
    <form action="" method="post">
        <div class="container">
            <div class="input-group">
                <input name="buscador" type="search" class="form-control rounded"
                    placeholder="Ingrese el nombre, tipo o numero de Pokemon" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-dark">Quien es ese Pokemon?</button>
            </div>
        </div>
    </form>
    <h2 class='w3-wide text-center'>Pokemones</h2>
    <div class='table-responsive w3-container w3-content w3-center w3-padding-64' id='band'>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <thead>
                <?php
                include_once("./modelos/Conexion.clase.php");
                $conn = new Conection();
                $result = $conn->ejecutarConsulta("SELECT * FROM pokemon");
                while ($row = $result->fetch_assoc()) {
                echo '<tr style="text-align-last: center;">
                    <th scope="row">' . $row['id'] . '</th>
                    <td>' . $row['imagen'] . '</td>
                    <td>' . $row['nombre'] . '</td>
                    <td>' . $row['tipo'] . '</td>
                    <td>' . $row['numero'] . '</td>
                    <td><a class="btn btn-warning" href="editar.php?id=<?=$fila[0]?>">Editar</a></td>
                    <td><a class="btn btn-danger" href="../controladores/Pokemon.controlador.php?a=elim&id=<?=$fila[0]?>" onclick="return confirm("¿Desea eliminar?")">Eliminar</a></td>
                </tr>';
                }$conn->close();
                ?>           
                </tbody>
        </table>
    </div>
    <div class="container-fluid d-grid gap-2">
        <button class="btn btn-dark" type="button">Nuevo pokemon</button>
    </div>
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
<footer class="">
    <div class="text-center bg-dark p-2 text-dark bg-opacity-10 my-5">  Aca en el footer le podemos dejar los datos para el usuario adm</div>
  
</footer>

</html>