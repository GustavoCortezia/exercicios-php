<?php

class JogadorFutebol extends Atleta{
    public $posicao;

    function __construct($posicao, $nome, $idade) {
        $this->posicao = $posicao;
        parent::__construct($nome, $idade);
    }

    public function jogar(){
        echo 'O jogador jogou';
    }
}