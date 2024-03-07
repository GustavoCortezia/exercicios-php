<?php 

class Cavalo extends Animal {
    public $tamanho;

    function __construct( $tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function acao() {
        echo "O cavalo galopou";
    }
}