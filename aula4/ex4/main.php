<?php

require('Atleta.php');
require('JogadorFutebol.php');
require('Nadador.php');


$jogador = new JogadorFutebol('atacante' , 'Mauro' , 23);
$nadador = new Nadador('livre' , 'Julio' , 19);

$jogador->jogar();
$nadador->nadar();