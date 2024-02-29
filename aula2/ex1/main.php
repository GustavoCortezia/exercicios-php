<?php

require('./Contador.php');

$meucontador = new Contador(0.00);

$meucontador -> incrementar();

$meucontador -> valorContador();

$meucontador -> incrementar();
$meucontador -> incrementar();
$meucontador -> incrementar();
$meucontador -> incrementar();

$meucontador -> valorContador();