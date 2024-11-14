<?php

    class Retangulo{

        public $base;
        public $altura;

        function __construct()
        {
            $this->base = readline("Informe a base do retângulo: \n");
            $this->altura = readline("Informe a altura do retângulo: \n");
            $this->calcularArea();
            $this->calcularPerimetro();
        }
        function calcularArea()
        {
            echo("A área do retângulo é: " . $this->base * $this->altura . "\n");
        }
        function calcularPerimetro()
        {
            echo("O perímetreo do retângulo é: " . $this->base * $this->altura * 2 . "\n");
        }
    }

    $retangulo1 = new Retangulo;
    $retangulo2 = new Retangulo;
    $retangulo3 = new Retangulo;