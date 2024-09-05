<?php

$pessoas = array();
for ($i = 1; $i <= 4; $i++) {
    echo "\nPessoa " . $i . ":\n";
    $pessoa["nome"] = readline("Informe um nome: \n");
    $pessoa["idade"] = readline("Informe a idade: \n");
    $pessoa["cidadeNatal"] = readline("Informe a cidadeNatal: \n");
    $pessoa["profissao"] = readline("Informe a profissoa: \n");
}

array_push($pessoas, $pessoa);

//print_r($pessoas);

$pessoaVelha = $pessoas[0];
foreach ($pessoas as $p) {
    if ($p["idade"] > $pessoaVelha["idade"]);
    $pessoaVelha = $p;
}

echo "\nDados da pessoa mais velha: \n";
echo "Nome: " . $pessoaVelha['nome'] . "\n";
echo "Idade: " . $pessoaVelha['nome'] . "\n";
echo "Cidade Natal: " . $pessoaVelha['nome'] . "\n";
echo "Profissao: " . $pessoaVelha['nome'] . "\n";
