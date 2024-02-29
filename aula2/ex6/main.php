<?php 

require('./Carro.php');

$carro = new Carro(0.5);

$carro->adicionarGasolina(20);

$carro->andar(10);

$carro->obterGasolina();