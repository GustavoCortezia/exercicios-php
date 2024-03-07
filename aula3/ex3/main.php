<?php 

require('Animal.php');
require('Cachorro.php');
require('Gato.php');
require('Cavalo.php');

$cachorro = new Cachorro("golden retriever");
$cavalo = new Cavalo("3");
$gato = new Gato("branco");

$cachorro->acao();
$cavalo->acao();
$gato->acao();