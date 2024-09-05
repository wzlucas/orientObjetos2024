<?php

class Carro{

    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;


    public function getModelo()
    {
            return $this->modelo;
    }
    
    public function setModelo($modelo): self
    {
            $this->modelo = $modelo;

            return $this;
    }

    public function getMarca()
    {
            return $this->marca;
    }


    public function setMarca($marca): self
    {
            $this->marca = $marca;

            return $this;
    }

    
    public function getAnoFabricacao()
    {
            return $this->anoFabricacao;
    }

    
    public function setAnoFabricacao($anoFabricacao): self
    {
            $this->anoFabricacao = $anoFabricacao;

            return $this;
    }

    
    public function getVelocidadeMax()
    {
            return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self
    {
            $this->velocidadeMax = $velocidadeMax;

            return $this;
    }
}

$carro1 = new Carro;
$carro1-> setModelo(readline("Informe o modelo: "));
$carro1-> setMarca(readline("Informe a marca: "));
$carro1-> setAnoFabricacao(readline("Informe o ano de fabricação: "));
$carro1-> setVelocidadeMax(readline("Informe a velocidade maxima: "));

$carro2 = new Carro;
$carro2-> setModelo(readline("Informe o modelo: "));
$carro2-> setMarca(readline("Informe a marca: "));
$carro2-> setAnoFabricacao(readline("Informe o ano de fabricação: "));
$carro2-> setVelocidadeMax(readline("Informe a velocidade maxima: "));

$carro3 = new Carro;
$carro3-> setModelo(readline("Informe o modelo: "));
$carro3-> setMarca(readline("Informe a marca: "));
$carro3-> setAnoFabricacao(readline("Informe o ano de fabricação: "));
$carro3-> setVelocidadeMax(readline("Informe a velocidade maxima: "));

if ($carro1->getVelocidadeMax() > $carro2->getVelocidadeMax() && $carro1->getVelocidadeMax() > $carro3->getVelocidadeMax()) {
    echo "O carro mais rápido é: ".$carro1->getModelo()(). "- " . $carro1->getMarca()  .", fabricado em ". $carro1->getAnoFabricacao() .
     ", com velocidade máxima de " . $carro1->getVelocidadeMax() . "km/h\n";
} 
else{
    if($carro2->getVelocidadeMax() > $carro3->getVelocidadeMax()){
        echo "O carro mais rápido é: ".$carro2->getModelo()(). "- " . $carro2->getMarca()  .", fabricado em ". $carro2->getAnoFabricacao() .
        ", com velocidade máxima de " . $carro2->getVelocidadeMax() . "km/h\n";
    }
    else{
        echo "O carro mais rápido é: ".$carro3->getModelo()(). "- " . $carro3->getMarca()  .", fabricado em ". $carro3->getAnoFabricacao() .
        ", com velocidade máxima de " . $carro3->getVelocidadeMax() . "km/h\n";
    }
}


