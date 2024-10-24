<?php

$vetor = []; 

while (true) {
    $num = readline("Informe um número: ");
    
    if ($num == 0) {
        break;
    }
    if (primo($num)) {
        array_push($vetor, $num);
    }
}

function primo($num){
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Números primos: " . implode(", ", $vetor) . "\n";



