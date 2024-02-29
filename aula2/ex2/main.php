<?php

require('./Bola.php');

$bola1 = new Bola("verde", "20", "borracha");

$bola1 -> trocaCor("amarelo");
$bola1 -> mostrarCor();

