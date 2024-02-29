<?php

class Carro {
    public $consumo;
    public $quantidadeCombustivel = 0;

    public function __construct($consumo){
        $this->consumo = $consumo;
    }

    public function andar($km){
        $gasto = $km * $this->consumo;
        echo "Voce andou " . $km . " e gastou " . $gasto . "L de gasolina <br>";
        $this->quantidadeCombustivel -= $gasto; 
    }

    public function obterGasolina() {
        echo "Quantidade de Combustivel: " . $this->quantidadeCombustivel . "L <br>";
    }

    public function adicionarGasolina($litros) { 
        $this->quantidadeCombustivel += $litros;
    }
}