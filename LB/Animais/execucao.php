<?php

require_once("modelo/Animal.php");
require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");

$cachorro1 = new Cachorro();
$cachorro1->setNome("Rex");
$cachorro1->setRaca("Vira-Lata");
$cachorro1->getDados();
echo $cachorro1->getDados();
$cachorro1->latir();

$cachorro2 = new Cachorro();
$cachorro2->setNome("Lilica");
$cachorro2->setRaca("Vira-Lata");
$cachorro2->getDados();
echo $cachorro2->getDados();
$cachorro2->latir();

$gato1 = new Gato();
$gato1->setNome("Misty");
$gato1->setRaca("Vira-Lata");
$gato1->getDados();
echo $gato1->getDados();
$gato1->miar();

$gato2 = new Gato();
$gato2->setNome("Thor");
$gato2->setRaca("Vira-Lata");
$gato2->getDados();
echo $gato2->getDados();
$gato1->miar();
