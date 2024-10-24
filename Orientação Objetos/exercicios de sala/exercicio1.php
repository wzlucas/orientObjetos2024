<?php

$vetor = array();

for($i=1; $i <= 10; $i++){
    $num = readline("Informe um número [" . $i ."]: ");
    array_push($vetor, $num);
}
$soma = 0;

foreach ($vetor as $num) 
    $soma += $num;

$media = $soma / count($vetor);
echo "A média dos elementos do vetor é: " . $media ." \n ";


