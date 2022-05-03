<div class='w3-container w3-content w3-center w3-padding-64' style='max-width:800px' id='band'>
    <h2 class='w3-wide'>Pokemones</h2>
    <table class='w3-table pokemon-table'>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Numero</th>
            <th class="text-center">Acciones</th>
        </tr>


        <?php
        //Hay q especificar bien los atrivutos
        //Esto seria CON base de datos
        /*foreach ($data["pokedex"] as $pokemon) {
            echo '<tr>
                                <td>' . $pokemon['image'] . '</td>
                                <td>' . $pokemon['name'] . '</td>
                                <td>' . $pokemon['tipe'] . '</td>
                                <td>' . $pokemon['number'] . '</td>
                                <button type="submit" class="btn btn-outline-primary">Modificar</button>
                                <button type="submit" class="btn btn-outline-primary">Eliminar</button>
                            </tr>';
        }*/

        //========== EJEMPLO SIN BASE DE DATOS========================
        echo '<tr>
                                <td>  img  </td>
                                <td>  Squirtle  </td>
                                <td> Agua  </td>
                                <td> 123  </td>
                                <td> <button type="submit" class="btn btn-outline-primary">Modificar</button> </td>
                                <td> <button type="submit" class="btn btn-outline-primary">Eliminar</button> </td>
              </tr>';
        ?>

    </table>
</div>

