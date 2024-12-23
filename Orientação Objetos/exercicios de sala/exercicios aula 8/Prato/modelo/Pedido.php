<?php

require_once("modelo/Prato.php");

class Pedido {

    private $nomeCliente;
    private $nomeGarcom;
    private Prato $prato;


    public function __toString()
    {
        return "\nO cliente" . $this->nomeCliente. ", foi atendido pelo garçom" . $this->nomeGarcom .", pediu um prato de" .
        $this->prato->getNome() . "no valor de R$" . $this->prato->getValor() ."\n";
    }
    
    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente($nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom()
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom($nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}