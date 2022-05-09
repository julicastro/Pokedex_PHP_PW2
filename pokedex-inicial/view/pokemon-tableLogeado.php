<div class='w3-container w3-content w3-center w3-padding-64' /*style='max-width:800px'*/ id='band'>
    <h2 class='w3-wide'>Pokemones</h2>
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
        <tbody>
        <?php

        //Hay q especificar bien los atrivutos
        //Esto seria CON base de datos
        //=======HARCODEADO===========
        $conn = mysqli_connect("localhost", "root", "root", "db_pokedex");
        $sql = "SELECT * FROM pokemon";
        $result = $conn->query($sql);
        //
        while ($row = $result->fetch_assoc()) {
        echo '<tr style="text-align-last: center;">
            <th scope="row">' . $row['id'] . '</th>
            <td>' . $row['imagen'] . '</td>
            <td>' . $row['nombre'] . '</td>
            <td>' . $row['tipo'] . '</td>
            <td>' . $row['numero'] . '</td>
            <td><button type="submit" class="btn btn-warning">Modificar</button></td>
            <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
        </tr>';
        }$conn->close();
        ?>
        </tbody>
    </table>
</div>
