<?php
include_once('MySqlDatabase.php');
class Configuration {

    function getDatabase() {
        return new MySqlDatabase("localhost","root","","db_pokedex");

    }

}

?>