<?php

class Conta {
    public $numero;
    public $nome;
    public $saldo = 0;

    public function __construct($numero, $nome, $saldo) {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    public function alteraNome($nome) {
        $this->nome = $nome;
    }

    public function deposito($quant) {
        $this->saldo += $quant;
    }

    public function saque($quant) {
        if ($quant <= $this->saldo) { 
            $this->saldo -= $quant;
            echo "Dinheiro sacado!";
        }
        else {
            echo "Erro: você nao tem este dinheiro para sacar";
        }
    }
}