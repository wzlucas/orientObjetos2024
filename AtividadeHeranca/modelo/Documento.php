<?php


abstract class Documento implements IDocumento {
    protected string $nome;
    protected string $cpfCnpj;

    public function getDadosDoc() {
        return "Nome: " . $this->nome . ", CPF/CNPJ: " . $this->cpfCnpj;
    }


    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpfCnpj
     */
    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    /**
     * Set the value of cpfCnpj
     */
    public function setCpfCnpj(string $cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }
}
