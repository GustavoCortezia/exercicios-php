<?php

    class Contador {
        public $contador;

        public function zerar() {
            $this -> contador = 0;
        }

        public function incrementar() {
            $this -> contador++;
        }

        public function valorContador() {
            echo "Valor Contador: " . $this -> contador;
        }    
    }