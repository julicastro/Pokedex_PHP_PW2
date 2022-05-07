<?php
class Configuration {

    private $config;

    /* Creando controllers */

    public  function createPokedexController(){
        require_once("controller/PokedexController.php");
        return new PokedexController($this->createPrinter(), $this->createPokedexModel());
    }

    /* Creando Modelos */
    
    private function createPokedexModel(){
        require_once("model/PokedexModel.php");
        $database = $this->getDatabase();
        return new PokedexModel($database);
    }

    /* Database */

    private  function getConfig(){
        if( is_null( $this->config ))
            $this->config = parse_ini_file("config/config.ini");
        return  $this->config;
    }

    function getDatabase() {
        require_once("helper/MySqlDatabase.php");
        $config = $this->getConfig();
        return new MySqlDatabase($config["servername"], $config["username"], $config["password"], $config["dbname"]);
    }
    
    /* Printer */

    private function createPrinter(){
        require_once ('third-party/mustache/src/Mustache/Autoloader.php');
        require_once("helper/MustachePrinter.php");
        return new MustachePrinter("view/partials");
    }

}

?>