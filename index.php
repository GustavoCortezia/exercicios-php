<?php

//EXERCICIO 1 --------

$arr = array();

function recebeNumeros($n1, $n2) {

    $calcMedia = ($n1 + $n2) / 2;

    $apv = false;

    if ($calcMedia >= 6) {
        $apv = true;
    }

    global $arr;
    array_push($arr, array(
      "media" => $calcMedia,
      "aprovado" => $apv
     ));

     var_dump($arr);
}

recebeNumeros(5, 6);

//EXERCICIO 2 --------


$arr2 = array();

function calculaNota($n1, $p1, $n2, $p2) {

    $calcMediaPonderada = ($n1*$p1 + $n2*$p2) / ($p1 + $p2);

    global $arr2;
    array_push($arr2, array(
      "media" => $calcMediaPonderada,
     ));

     var_dump($arr2);
}

calculaNota(10, 1, 6, 3);

//EXERCICIO 3 --------

$produtos = array();

function cadastraProdutos($nome, $preco) {

    global $produtos;

    array_push($produtos, array(
        'nome' => $nome, 
        'preco' => $preco ));

        var_dump($produtos);
}

function listaProdutos() {

    global $produtos;

    foreach ($produtos as $key => $value) {
        echo "<h3> produto: " .$value["nome"]. " </h3>";
        echo "<h3> preco: " .$value["preco"]. "</h3> <br> <br>";
    }
}

function excluirProdutos($nome) {
    global $produtos;

    foreach ($produtos as $key => $value) {
        if($value["nome"] == $nome){
            unset($produtos[$key]);
            break;
        }
    }
}


cadastraProdutos("Arroz", 10.00);

listaProdutos();

cadastraProdutos("Feijão", 12.00);
cadastraProdutos("Carne", 20.00);

excluirProdutos("Arroz");

listaProdutos();