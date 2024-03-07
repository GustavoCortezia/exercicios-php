<?php 

class Gato extends Animal {
    public $cor;

    function __construct( $cor)
    {
        $this->cor = $cor;
    }

    public function acao() {
        echo "O gato miou";
    }
}