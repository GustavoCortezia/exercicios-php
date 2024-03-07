<?php 

class Cachorro extends Animal {
    public $raca;

    function __construct( $raca)
    {
        $this->raca = $raca;
    }

    public function acao() {
        echo "O cachorro latiu";
    }
}