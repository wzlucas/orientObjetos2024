<?php

require_once('Documento.php');

class Empenho extends Documento {
    private int $numeroEmpenho;
    private string $nomeFantasia;
    private float $valor;
    private int $ano;
    private bool $liquidado;
    private bool $assinado;
    private bool $anexado;

    public function getDadosDoc() {
        return "Empenho:  Número: ". $this->numeroEmpenho . " | Nome Fantasia: " . $this->nomeFantasia . " | Valor: " . $this->valor . " | Ano: " . $this->ano . " | Anexado: " . ($this->anexado ? "Sim" : "Não") . " | Liquidado: " . ($this->liquidado ? "Sim" : "Não") . " | Assinado: " . ($this->assinado ? "Sim" : "Não");
    }
   

    /**
     * Get the value of numeroEmpenho
     */
    public function getNumeroEmpenho(): int
    {
        return $this->numeroEmpenho;
    }

    /**
     * Set the value of numeroEmpenho
     */
    public function setNumeroEmpenho(int $numeroEmpenho): self
    {
        $this->numeroEmpenho = $numeroEmpenho;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno(): int
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of liquidado
     */
    public function isLiquidado(): bool
    {
        return $this->liquidado;
    }

    /**
     * Set the value of liquidado
     */
    public function setLiquidado(bool $liquidado): self
    {
        $this->liquidado = $liquidado;

        return $this;
    }

    /**
     * Get the value of assinado
     */
    public function isAssinado(): bool
    {
        return $this->assinado;
    }

    /**
     * Set the value of assinado
     */
    public function setAssinado(bool $assinado): self
    {
        $this->assinado = $assinado;

        return $this;
    }

    /**
     * Get the value of anexado
     */
    public function isAnexado(): bool
    {
        return $this->anexado;
    }

    /**
     * Set the value of anexado
     */
    public function setAnexado(bool $anexado): self
    {
        $this->anexado = $anexado;

        return $this;
    }
}
