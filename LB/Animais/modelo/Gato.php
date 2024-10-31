<?php

require_once("modelo/Animal.php");

class Gato extends Animal {
  
    public function miar() 
    {
        echo "- MiAAAAuuu"; 
    }
}