<?php 

class BombaCombustivel{
    public $tipoCombustivel;
    public $valorLitro;
    public $quantidadeCombustivel;

    public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel) {
        $this->tipoCombustivel = $tipoCombustivel;
        $this->valorLitro = $valorLitro;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function abastecerPorValor($valor){
        $quantadd = $valor / $this->valorLitro;

        if($quantadd > $this->quantidadeCombustivel){
            echo "ERRO: nao tem gasolina suficiente <br>";
        }

        else { 
            $this->quantidadeCombustivel -= $quantadd;
            echo "quantidade Adicionada: . $quantadd  <br> "; 
        }
    }

    public function abastecerPorLitro($litros){
        if($litros > $this->quantidadeCombustivel) {
            echo "ERRO: nao tem gasolina suficiente <br>"; 
        }
        else {
            $quantadd = $litros * $this->valorLitro;
            $this->quantidadeCombustivel -= $quantadd;
            echo "Valor a pagar: . $quantadd <br>  "; 
        }
    }

    public function alteraValor($valor){
        $this->valorLitro = $valor;
    }

    public function alteraCombustivel($tipo){
        $this->tipoCombustivel = $tipo;
    }

    public function alteraQuantidadeCombustivel($quant){
        $this->quantidadeCombustivel = $quant;
    }
    
}