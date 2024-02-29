<?php

require('./Calculadora.php');

$calculadora = new Calculadora();

$calculadora->somar(3,2);
$calculadora->subtrair(3,2);
$calculadora->multiplicar(3,2);
$calculadora->dividir(3,2);

$calculadora->mostrarHistorico();

