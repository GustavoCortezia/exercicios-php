<?php 

require('./Imovel');
require('./Novo');
require('./Velho');


$novo = new Novo(10);
$velho = new Velho(10000, "Rua America", 200000);

$novo->getAdicional(10);
$novo->imprimeAdicional();

$velho->getDesconto(10);
$velho->imprimeDesconto();