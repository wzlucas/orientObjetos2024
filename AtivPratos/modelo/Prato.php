<?php

class Prato {
    private $numero;
    private $nome;
    private $valor;

    public function __construct($numero, $nome, $valor) {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function __toString() {
        return "Prato: " . $this->nome . " - Número: " . $this->numero . " - Valor: R$ " . $this->valor;
    }

  
    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

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
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

