<?php

require('./BombaCombustivel.php');

$bomba = new BombaCombustivel('normal', 4, 100);

$bomba->abastecerPorLitro(10);
$bomba->abastecerPorValor(40);
$bomba->alteraValor(3);
$bomba->alteraCombustivel('aditivada');
$bomba->alteraQuantidadeCombustivel('200');