<?php

class Pedido {
    private $nomeCliente;
    private $nomeGarcom;
    private $prato;

    public function __construct($nomeCliente, $nomeGarcom, $prato) {
        $this->nomeCliente = $nomeCliente;
        $this->nomeGarcom = $nomeGarcom;
        $this->prato = $prato;
    }

    public function __toString() {
        return "Cliente: " . $this->nomeCliente . " - Garçom: " . $this->nomeGarcom . " - " . $this->prato;
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
    public function getPrato()
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato($prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}

