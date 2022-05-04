<div class='w3-container w3-content w3-center w3-padding-64' style='max-width:800px' id='band'>
    <h2 class='w3-wide text-center'>Pokemones</h2>
    <table class='w3-table pokemon-table'>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Numero</th>
            
        </tr>


        <?php
        //Hay q especificar bien los atrivutos
        //Esto seria CON base de datos
    //=======HARCODEADO===========
        $conn = mysqli_connect("localhost", "root", "", "db_pokedex");
        $sql = "SELECT * FROM pokemon";
        $result = $conn->query($sql);



        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['imagen'] . '</td>
                                <td>' . $row['nombre'] . '</td>
                                <td>' . $row['tipo'] . '</td>
                                <td>' . $row['numero'] . '</td>
                            </tr>';
        }$conn->close();
     ?>

    </table>
</div>

