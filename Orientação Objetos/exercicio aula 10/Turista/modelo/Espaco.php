<?php

class Espaco {

    private string $nome;
    private string $endereco;

    protected function getDadosEspaco() {
        $dados = "Nome: " . $this->nome;
        $dados .= " | Endereço: " . $this->endereco;
        return $dados;
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
}