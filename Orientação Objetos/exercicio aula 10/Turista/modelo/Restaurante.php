<?php

require_once('Espaco.php');

class Restaurante extends Espaco {

    private int $duracaoDaVisita;

    private string $tipoComida;

    public function getDadosRestaurante() {
        $dados = "Restaurante - ";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Tipo de comida: " . $this->tipoComida . "\n";
        return $dados;
    }

    /**
     * Get the value of tipoComida
     */
    public function getTipoComida()
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida($tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}