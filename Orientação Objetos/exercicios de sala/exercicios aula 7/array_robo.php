<?php

class Robo{

    private $tipo;
    private $nome;
    private int $qntSensores;


    public function __construct($n="", $t="", $qtS=0)
    {
        $this->nome = $n;
        $this->tipo = $t;
        $this->qntSensores = $qtS;
    }

    public function __toString()
    {
        return $this->nome . "-" . $this->tipo . "\n";
    }

    

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
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
     * Get the value of qntSensores
     */
    public function getQntSensores(): int
    {
        return $this->qntSensores;
    }

    /**
     * Set the value of qntSensores
     */
    public function setQntSensores(int $qntSensores): self
    {
        $this->qntSensores = $qntSensores;

        return $this;
    }
}
$robo1 = new Robo();
$robo1->setNome("Máquina Mistério")->setTipo("Arduino")->setQntSensores(4);

$robo2 = new Robo();
$robo2->setNome("Charles Lecrash")->setTipo("Lego")->setQntSensores(2);

$robo3 = new Robo();
$robo3->setNome("Juliete")->setTipo("Arduino")->setQntSensores(3);

$robos = array($robo1, $robo2);
echo $robos[1]->getNome() . "\n";

array_push($robos, new Robo("Laercio", "Arduino", 3));


//foreach ($robos as $r) {
//    echo $r->getNome() . "\n";
//}
$algumRobo = $robos[3];
echo $algumRobo->getTipo() . "\n";
echo $robos[3]->getTipo() . "\n";
