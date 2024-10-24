<?php

require_once("IFormaGeometrica.php");

class Retangulo implements IFormaGeometrica
{

    private $base;
    private $altura;

    public function getArea()
    {
        return $this->base * $this->altura;
    }
    public function getDesenho()
    {


        return "\n\n   
            ┌──────────────────────────────────────────────┐\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            │                                              │\n
            └──────────────────────────────────────────────┘\n";

        return $desenho;
    }

    /**
     * Get the value of base
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase($base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
