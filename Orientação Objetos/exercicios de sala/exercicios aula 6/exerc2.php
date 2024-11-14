<?php


class Aluno
{
    // Atributos 
    private $nome;
    private $nota1;
    private $nota2;


    // Método calculo 
    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2) / 2.0;
    }

    // Métodos getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getNota1()
    {
        return $this->nota1;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    // Métodos setters (
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;
    }

    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;
    }
}

$aluno1 = new Aluno;
$aluno1->setNome(readline("Informe seu nome: \n"));
$aluno1->setNota1(readline("Informe a nota 1: \n"));
$aluno1->setNota2(readline("Informe a nota 2: \n"));

$aluno2 = new Aluno;
$aluno2->setNome(readline("Informe seu nome: \n"));
$aluno2->setNota1(readline("Informe a nota 1: \n"));
$aluno2->setNota2(readline("Informe a nota 2: \n"));

$aluno3 = new Aluno;
$aluno3->setNome(readline("Informe seu nome: \n"));
$aluno3->setNota1(readline("Informe a nota 1: \n"));
$aluno3->setNota2(readline("Informe a nota 2: \n"));

echo $pessoa1->calcularMedia();
echo $pessoa2->calcularMedia();
echo $pessoa3->calcularMedia();
