<?php

$turmas = array();

for ($i = 1; $i <= 4; $i++) {


    $t["curso"] = readline("Informe o curso: \n");
    $t["ano"] = readline("Informe o ano: \n");
    $t["qtdAlunos"] = readline("Informe a quantidade de alunos: \n");
    $turmas[$i] = $t;
}


array_push($turmas, $t);

$totalAlunos = 0;
foreach ($turmas as $dado) {

    $totalAlunos = $totalAlunos + $dado["qtdAlunos"];
}


echo "O campus de Foz tem: " . $totalAlunos . " alunos \n";
