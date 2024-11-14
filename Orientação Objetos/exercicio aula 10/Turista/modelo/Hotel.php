<?php

require_once('Espaco.php');

class Hotel extends Espaco {

    private int $numeroEstrelas;
    private bool $cafeIncluso;


    public function getDadosHotel() {
        $dados = "Hotel - ";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Número de estrelas: " . $this->numeroEstrelas;
        $dados .= " | Café incluso: " . ($this->cafeIncluso ? "Sim" : "Não") . "\n";
        return $dados; 
    }



    /**
     * Get the value of numeroEstrelas
     */
    public function getNumeroEstrelas()
    {
        return $this->numeroEstrelas;
    }

    /**
     * Set the value of numeroEstrelas
     */
    public function setNumeroEstrelas($numeroEstrelas): self
    {
        $this->numeroEstrelas = $numeroEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function getCafeIncluso()
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso($cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}