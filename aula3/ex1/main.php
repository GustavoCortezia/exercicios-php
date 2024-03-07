<?php

require("./Ingresso.php");
require("./Camarote.php");
require("./Normal.php");
require("./Vip.php");


$normal = new Normal();
$vip = new Vip(20);
$camarote = new Camarote(50);


$camarote->imprimeValor(50);
$normal->imprimeValor(50);
$vip->imprimeValor(50);