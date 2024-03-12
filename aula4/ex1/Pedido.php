<?php

class Pedido {
    public $valorTotal;
    public $itens = array();

    public function __construct($valorTotal, $itens) {
        $this->valorTotal = $valorTotal;
        $this->itens = $itens;
       
    }
}