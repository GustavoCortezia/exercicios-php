<?php

require('FormatoDeElemento.php');

class Circulo extends FormatoDeElemento {
    public $raio;

    function desenhar(){
        echo 'desenhado';
    }

    function redimensionar(){
        echo 'redimensionado';
    }
}