<?php

require_once("Mago.php");

class Curandeiros extends Mago {
    
    private int $forcaDeCura;

    public function lancarPoder() {
        $forcaTotal = $this->poder->getForcaTotal($this->forcaDeCura);
        return "O mago " . $this->nome . ", do tipo Combatente, possui força de " . $this->forcaDeCura . " e
lançou o poder " . $this->poder->getDescricao() . " com força total de " . $forcaTotal;
    }
    

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}