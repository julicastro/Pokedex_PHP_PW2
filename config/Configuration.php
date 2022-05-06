<?php
include_once('helper/MySqlDatabase.php');
class Configuration {

    function getDatabase() {
        return new MySqlDatabase("localhost","root","","db_pokedex");

    }

}

?>