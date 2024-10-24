<?php

$num1 = readline("Informe o primeiro número: ");
$num2 = readline("Informe o segundo número: ");

$soma = 0;

for ($i=1; $i <=$num2 ; $i++) { 
    $soma += $num1;
}
echo "Resultado: " . $soma . "\n";