<?php

class Novo extends Imovel {
    private $adicional;

    public function __construct($adicional) {
        $this->adicional = $adicional;
    }

    public function getAdicional($adicional) {
        $this->adicional = $adicional;
    }

    public function imprimeAdicional() {
        echo $this->adicional;
    }
}