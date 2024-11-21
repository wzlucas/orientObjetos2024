<?php

require_once('Documento.php');

class Processo extends Documento {
    private string $numeroProcesso;
    private string $causa;
    private string $anexo;


    public function getDadosDoc() {
        $dadosBase = $this->getNome() . ", CPF/CNPJ: " . $this->getCpfCnpj();
        return "Processo: " . $dadosBase . " | Número do Processo: " . $this->numeroProcesso . " | Causa: " . $this->causa . " | Anexo: " . $this->anexo ;
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
