<?php

class Camarote extends Ingresso {
    public $adicional;

    function __construct($adicional){
        $this->adicional = $adicional;
    }

    function imprimeValor($valor) {
        echo $valor + $this->adicional . "<br>";
    }
}