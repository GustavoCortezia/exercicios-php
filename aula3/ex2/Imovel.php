<?php

class Imovel {
    protected $preco;
    protected $endereco;

    public function __construct( $preco, $endereco ) {
        $this->preco = $preco;
        $this->endereco = $endereco;
    }
}