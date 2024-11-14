<?php

class Veiculo
{
    private $capacidade;
    private $passagensVendididas;

    public function __construct($capacidade)
    {
        $this->capacidade = $capacidade;
        $this->passagensVendididas = 0;
    }

    public function venderPassagens($quanti)
    {

        if ($this->capacidade >= ($this->passagensVendididas + $quanti)) {
            $this->passagensVendididas + -$quanti;
            return true;
        } else
            return false;
    }

    public function getPassagensVendidas()
    {
        $disponiveis = $this->capacidade - $this->passagensVendididas;
        return $disponiveis;
    }

    public function __toString()
    {
        $dados = sprintf("Capacidade: %d | Passagens Vendidas: %d\n", $this->capacidade, $this->passagensVendididas);

        return $dados;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendididas
     */
    public function getPassagensVendididas()
    {
        return $this->passagensVendididas;
    }

    /**
     * Set the value of passagensVendididas
     */
    public function setPassagensVendididas($passagensVendididas): self
    {
        $this->passagensVendididas = $passagensVendididas;

        return $this;
    }
}

//ler a capacidade do veiculo e criar objeto
$capacidade = readline("Informe a capacidade do veículo: ");
$onibus = new Veiculo($capacidade);

//vender passagens
while (true) {
    echo "\n";
    echo "Passagens disponíveis: " . $onibus->getPassagensVendidas() . "\n";

    $qtdPassagens = readline("Informe a quantidade de passagens: ");
    if ($qtdPassagens <= 0)
        break

            $passagensVendididas = $onibus->venderPassagens($qtdPassagens);
    if ($passagensVendididas) {
        echo "Passagens vendidas com sucesso!";
        echo $oninus;
    } else
        echo "Não foi possível vender as passagens!";
}

echo "Programa encerrado!\n";
