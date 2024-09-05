<?php

 class Pessoa {
   
    // Atributos 
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;


    // Getters and Setters
    public function getApresentacao() 
    {
        $apres = "Olá mundo, sou " .$this->getNome(). ", moro no endereço " .$this->getEndereco(). ", " 
        .$this->getCidade(). "-" .$this->getUF(). " e possuo uma altura de " .$this->getAltura(). "!\n";
        return $apres;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getEndereco()
    {
        return $this->endereco;
    }

   
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    
    public function getCidade()
    {
        return $this->cidade;
    }

   
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }


    public function getUF()
    {
        return $this->UF;
    }

  
    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

  
    public function getAltura()
    {
        return $this->altura;
    }

    
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

}

$pessoa1 = new Pessoa();
$pessoa1->setNome("Lucas");
$pessoa1->setEndereco("Rua Travessa Jubarte");
$pessoa1->setCidade("Foz do Iguaçu");
$pessoa1->setUF("PR");
$pessoa1->setAltura("1,75");
echo $pessoa1->getApresentacao();