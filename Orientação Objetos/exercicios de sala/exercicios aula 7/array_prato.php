<?php

class Prato {
    private $descricao;
    private $qntd;
    private $valorUnitario;
    
    
    public function getValorTotal() {
        return $this->qntd * $this->valorUnitario;
    }

   
    public function __toString() {
        return "O prato é " . $this->descricao . " com quantidade de " . $this->qntd . " e valor unitário de R$ " . $this->valorUnitario . "\n";
    }

    // Getters e setters
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    public function getQntd() {
        return $this->qntd;
    }

    public function setQntd($qntd): self {
        $this->qntd = $qntd;
        return $this;
    }

    public function getValorUnitario() {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self {
        $this->valorUnitario = $valorUnitario;
        return $this;
    }
}

$pratos = array();
$janta = 0; 


for ($i = 1; $i <= 3; $i++) { 
    echo "\nPrato: ". $i . "\n";
    $prato = new Prato();
    $prato->setDescricao((string)readline("Informe a descrição: "))
           ->setQntd((int)readline("Informe a quantidade: "))
           ->setValorUnitario((float)readline("Informe o valor unitário: "));

    array_push($pratos, $prato);
}

foreach ($pratos as $prato) {
    echo $prato;
}
foreach ($pratos as $p) {
    $janta += $p->getValorTotal();
}

echo "O valor da Janta foi de R$" . $janta . "\n";


