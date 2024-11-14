<?php

    require_once("modelo/RadioPortatil.php");
    require_once("modelo/RadioRelogio.php");
    

    $tipo = "RP";
    //$tipo = "RR";

    $radio = null;

    if ($tipo == "RP") {
        $radio = new RadioPortatil();
    $radio->setCor("Preto");
    $radio->setCor("Livstar");
    } elseif ($tipo == "RR") {
        $radio = new RadioRelogio();
        $radio->setCorTela("Vermelho");
    }

    $radio->ligarRadio();
    $radio->desligarRadio();
    if($radio instanceof IRelogio)
       $radio->mostrarHoras();
