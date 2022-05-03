<?php
include_once('MySqlDatabase.php');
class Configuration {
    private function getDatabase() {
        return new MySqlDatabase(
            "localhost",
            "db_pokedex",
            "root",
            "root"
        );

    }

}



?>