<?php

require_once("modelo/Pessoa.php");
require_once("modelo/Aluno.php");
require_once("modelo/Pofessor.php");

//Aluno
$aluno = new Aluno;
$aluno->setMatricula(23432325);
$aluno->setNome("Lucas");
$aluno->setIdade(17);
$aluno->setRg(23123323);
echo $aluno;
echo $aluno->getNomeidade() . "\n";

//Professor
$professor = new Professor;
$professor->setNome("Daniel");
$professor->setIdade(36);
$professor->setRg(74745757);
$professor->setSalario(7800);
print_r($professor);