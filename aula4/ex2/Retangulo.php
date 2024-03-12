<?php

class Retangulo extends FormatoDeElemento {
    public $altura;
    public $comprimento;

    function desenhar(){
        echo 'desenhado';
    }

    function redimensionar(){
        echo 'redimensionado';
    }
}