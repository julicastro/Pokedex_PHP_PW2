<?php

class PokedexController
{
    private $printer;
    private $model;

    public function __construct($printer, $model)
    {
        $this->printer = $printer;
        $this->model = $model;
    }

    public function show()
    {
        $data["pokemones"] = $this->model->getPokemonList();
        echo $this->printer->render("view/pokemon-table.html", $data);
    }
}
