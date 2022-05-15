<?php
class Pokemon
{

    public $id;
    public $nombre;
    public $numero;
    public $tipo;
    public $imagen;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = $this->getNombre();
        $this->numero = $this->getNumero();
        $this->tipo = $this->getTipo();
        $this->imagen = $this->getImagen();
        $this->descripcion = $this->getDescripcion();
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
