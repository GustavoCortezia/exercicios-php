<?php

class Bola {
    public $cor;
    public $circunferencia;
    public $material;

    public function __construct($cor, $circunferencia, $material) {
        $this->cor = $cor;
        $this->circunferencia = $circunferencia;
        $this->material = $material;
    }


    public function trocaCor($cor) {
        $this-> cor = $cor;
    }

    public function mostrarCor() {
        echo "Cor da bola: " . $this->cor;
    }

}