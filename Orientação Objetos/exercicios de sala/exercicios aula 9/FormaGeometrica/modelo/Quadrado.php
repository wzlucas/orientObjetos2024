<?php

    require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica{

    private $lado;

    public function getArea(){
        return $this->lado * $this->lado;
    }
    public function getDesenho(){
        
                                                      
        return "\n\n
             ┌───────────────────────────┐\n        
             │                           │\n         
             │                           │\n       
             │                           │\n         
             │                           │\n          
             │                           │\n  
             │                           │\n    
             │                           │\n           
             │                           │\n      
             │                           │\n         
             │                           │\n            
             │                           │\n           
             └───────────────────────────┘\n";      
                                              
    }

    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}