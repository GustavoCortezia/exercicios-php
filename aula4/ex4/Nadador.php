<?php

class Nadador extends Atleta{
    public $tipo;

    function __construct($tipo, $nome, $idade) {
        $this->tipo = $tipo;
        parent::__construct($nome, $idade);
    }

    public function nadar(){
        echo 'O nadador nadou';
    }
}