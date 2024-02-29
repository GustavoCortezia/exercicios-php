<?php

require('./Conta.php');

$conta1 = new Conta("0948", "Gustavo", 2000);

$conta1-> alteraNome("Gustabo");

$conta1-> deposito(2000);

$conta1-> saque('10000');


