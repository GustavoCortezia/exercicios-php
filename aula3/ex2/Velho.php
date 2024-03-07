<?php

class Velho extends Imovel {
    private $desconto;

    public function __construct($desconto, $endereco, $preco) {
        $this->desconto = $desconto;
        parent::__construct($endereco, $preco);
    }


    public function getDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function imprimeDesconto() {
        echo $this->desconto;
    }
}