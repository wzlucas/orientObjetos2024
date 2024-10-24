<?php

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio
{

    private $corTela;

    public function ligarRadio()
    {
        echo "Rádio portátil ligado\n";
    }

    public function desligarRadio()
    {
        echo "Rádio portátil desligado\n";
    }

    public function mostrarHoras()
    {
        echo date("H:m:s") . "\n";
    }

    /**
     * Get the value of corTela
     */
    public function getCorTela()
    {
        return $this->corTela;
    }

    /**
     * Set the value of corTela
     */
    public function setCorTela($corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}
