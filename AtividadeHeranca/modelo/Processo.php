<?php

require_once('Documento.php');
require_once('Empenho.php');

class Processo extends Documento {
    private string $numeroProcesso;
    private Empenho $empenho;
    private string $causa;
    private string $anexo;

    public function getDadosDoc() {
        $dadosBase = $this->getNome() . ", CPF/CNPJ: " . $this->getCpfCnpj();
        return $dadosBase . " | Número do Processo: " . $this->numeroProcesso . " | Causa: " . $this->causa . " | Anexo: " . $this->anexo . " | Empenho: " . $this->empenho->getDadosDoc();
    }
    

    /**
     * Get the value of numeroProcesso
     */
    public function getNumeroProcesso(): string
    {
        return $this->numeroProcesso;
    }

    /**
     * Set the value of numeroProcesso
     */
    public function setNumeroProcesso(string $numeroProcesso): self
    {
        $this->numeroProcesso = $numeroProcesso;

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

    /**
     * Get the value of causa
     */
    public function getCausa(): string
    {
        return $this->causa;
    }

    /**
     * Set the value of causa
     */
    public function setCausa(string $causa): self
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get the value of anexo
     */
    public function getAnexo(): string
    {
        return $this->anexo;
    }

    /**
     * Set the value of anexo
     */
    public function setAnexo(string $anexo): self
    {
        $this->anexo = $anexo;

        return $this;
    }
}
