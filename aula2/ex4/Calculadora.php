<?php

class Calculadora {
    public $historico = array();
    public $n1;
    public $n2;

    public function somar($n1, $n2) {
        echo $n1 . " + " . $n2 . " = " . $n1 + $n2 . "<br>";
        array_push($this->historico, $n1 . " + " . $n2 . " = " . $n1 + $n2);
    }

    public function subtrair($n1, $n2) {
        echo $n1 . " - " . $n2 . " = " . $n1 - $n2 . "<br>";
        array_push($this->historico, $n1 . " - " . $n2 . " = " . $n1 - $n2);
    }

    public function multiplicar($n1, $n2) {
        echo $n1 . " x " . $n2 . " = " . $n1 * $n2 . "<br>";
        array_push($this->historico, $n1 . " x " . $n2 . " = " . $n1 * $n2);
    }

    public function dividir($n1, $n2) {
        echo $n1 . " / " . $n2 . " = " . $n1 / $n2 . "<br>";
        array_push($this->historico, $n1 . " / " . $n2 . " = " . $n1 / $n2);
    }

    public function mostrarHistorico() {
        var_dump($this->historico);  
    }
}