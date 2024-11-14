<?php

class Escola {

    private $nome;
    private $endereco;
    private int $qtdAlunos;

   
    public function __toString()
    {
        return "Escola: ". $this->nome . ", Endereço: ". $this->endereco .", Alunos: ". $this->qtdAlunos ."\n";
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;
        return $this;
    }
}


$escolas = array();


for ($i = 0; $i < 4; $i++) { 
    $escola = new Escola();
    $escola->setNome(readline("Informe o nome da escola: "))
           ->setEndereco(readline("Informe o endereço da escola: "))
           ->setQtdAlunos(readline("Informe a quantidade de alunos: "));
    
    $escolas[] = $escola;
}

foreach ($escolas as $dado) {
    echo $dado;
}

$escolaMaisAlunos = $escolas[0];
foreach ($escolas as $dado) {
    if ($dado->getQtdAlunos() > $escolaMaisAlunos->getQtdAlunos()) {
        $escolaMaisAlunos = $dado;
    }
} 
echo "\nEscola com mais alunos: \n". $dado;
