<?php

class Vehicle
{
    private $nom;
    private $model;
    private $km;
    private $cavalls;
    private $antiguitat;

    public function __construct($nom, $model, $km, $cavalls, $antiguitat)
    {
        $this->nom = $nom;
        $this->model = $model;
        $this->km = $km;
        $this->cavalls = $cavalls;
        $this->antiguitat = $antiguitat;
    }
    public function __construct1($nom, $model)
    {
        $this->nom = $nom;
        $this->model = $model;
    }

    public function __construct2()
    {
    }

}

?>