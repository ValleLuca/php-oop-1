<?php
class Movie {
    private $nome;
    private $cognome;
    private $data = 2022;
    private $classe;

    public function __construct($_name, $_cognome)
    {
        $this->nome = $_name;
        $this->cognome = $_cognome;
        $this->classe = 51;

    }
    public function getNomeCognome() {
        return "{$this->nome} {$this->cognome}";
    }
    public function getData() {
        return "$this->data";
    }
    public function getClasse() {
        return "$this->classe";
    }
}