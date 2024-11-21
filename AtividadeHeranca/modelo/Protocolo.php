<?php

require_once('Documento.php');
require_once('Empenho.php');

class Protocolo extends Documento {
    private int $numeroLiquidacao;
    private Empenho $empenho;

    public function getDadosDoc() {

        return "Empenho. " . $this->empenho->getNumeroEmpenho() . "/" . $this->empenho->getAno() .  " (" . $this->numeroLiquidacao . ") - " . $this->getNome();
    }

    public function protocolar() {
        return $this->getDadosDoc();
    }


    /**
     * Get the value of numeroLiquidacao
     */
    public function getNumeroLiquidacao(): int
    {
        return $this->numeroLiquidacao;
    }

    /**
     * Set the value of numeroLiquidacao
     */
    public function setNumeroLiquidacao(int $numeroLiquidacao): self
    {
        $this->numeroLiquidacao = $numeroLiquidacao;

        return $this;
    }

    /**
     * Get the value of empenho
     */
    public function getEmpenho(): Empenho
    {
        return $this->empenho;
    }

    /**
     * Set the value of empenho
     */
    public function setEmpenho(Empenho $empenho): self
    {
        $this->empenho = $empenho;

        return $this;
    }
}
