<?php

$num = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();



for ($i = 0; $i < 5; $i++) {
    array_push($num, readline("Informe um número: "));
}
foreach ($num as $dado) {
    array_push($vetor1, fahrenheit($dado));
}
foreach ($num as $dado) {
    array_push($vetor3, fatorial($dado));
}
foreach ($num as $dado) {
    array_push($vetor3, funcao($dado));
}


function fahrenheit($celsius)
{
    return $celsius * 1.8 + 32;
}

function fatorial($num)
{
    if ($num == 0) {
        return 1;
    } else {
        return $num * fatorial($num - 1);
    }
}

function funcao($x)
{
    return (($x * $x) + (2 * $x) + 4) / (2 * $x);
}
