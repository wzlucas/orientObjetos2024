<?php

 require_once("modelo/Circulo.php");
 require_once("modelo/Quadrado.php");
 require_once("modelo/Retangulo.php");

 echo "1-Quadrado\n";
 echo "2-Retangulo\n";
 echo "3-Circulo\n\n";
 
 $opcao = readline("Informe uma forma: ");

 $forma = null;

 if($opcao == 1) {
    $forma = new Quadrado();
    $forma->setLado(readline("Informe o lado:"));
 } else if($opcao == 2) {
    $forma = new Retangulo();
    $forma->setBase(readline("Informe a base:"));
    $forma->setAltura(readline("Informe a altura:"));
 } else if ($opcao == 3) {
    $forma = new Circulo();
    $forma->setRaio(readline("Informe a área:"));
 }

 echo "Área: " . $forma->getArea() . "\n";
 echo "Desenho: " . $forma->getDesenho() . "\n";