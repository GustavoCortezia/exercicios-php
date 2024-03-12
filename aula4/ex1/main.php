<?php 

require('Pedido.php');
require('Item.php');


$pedido = new Pedido(100, [new Item(10,"massa", "integral"),new Item(10,"cola", "em bastão"), new Item(10,"ovo", "caipira")] );

var_dump($pedido);