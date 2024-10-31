<?php

require_once("modelo/Animal.php");

class Cachorro extends Animal {

    public function latir() 
    {
        echo "- AUAUAUAU"; 
    }
}