<?php

require_once('Espaco.php');

class PontoTuristico extends Espaco {

    private int $duracaoDaVisita;

    public function getDadosPontoTuristico() {
        $dados = "Ponto Turístico -";
        $dados .= $this->getDadosEspaco();
        $dados .= " | Duração da visita: " . $this->duracaoDaVisita . " minutos\n";
        return $dados;
    }
    

    /**
     * Get the value of duracaoDaVisita
     */
    public function getDuracaoDaVisita()
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of duracaoDaVisita
     */
    public function setDuracaoDaVisita($duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}
