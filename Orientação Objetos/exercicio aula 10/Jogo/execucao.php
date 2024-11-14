<?php

require_once("modelo/Mago.php");
require_once("modelo/Poder.php");
require_once("modelo/Curandeiros.php");
require_once("modelo/Combatente.php");


//Criar Poder
$p1 = new Poder("Recupera energia", 0);
$p2 = new Poder("Recupera energia super", 20);
$p3 = new Poder("Golpe normal", 0);
$p4 = new Poder("Golpe especial", 15);

//Criar Mago

echo "Mago-1\n";
$m1 = new Combatente;
$m1->setNome(readline("Informe um nome para seu mago: "));
$m1->setPoder($p3);
$m1->setForcaDeAtaque(10);
echo "Mago-2\n";
$m2 = new Combatente;
$m2->setNome(readline("Informe um nome para seu mago: "));
$m2->setPoder($p4);
$m2->setForcaDeAtaque(10);
echo "Mago-3\n";
$m3 = new Curandeiros;
$m3->setNome(readline("Informe um nome para seu mago: "));
$m3->setPoder($p1);
$m3->setForcaDeCura(10);
echo "Mago-4\n";
$m4 = new Curandeiros;
$m4->setNome(readline("Informe um nome para seu mago: "));
$m4->setPoder($p2);
$m4->setForcaDeCura(10);

echo $m1->lancarPoder() . "\n";
echo $m2->lancarPoder() . "\n";
echo $m3->lancarPoder() . "\n";
echo $m4->lancarPoder() . "\n";