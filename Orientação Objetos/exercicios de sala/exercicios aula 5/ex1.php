<?php

class Animais
{

    public $nome;
    public $patas;
    public $pelagens;
    public $sons;
    public $movimentacao;

    function __construct()
    {
        $this->nome = readline("Informe o nome do animal: \n");
        $this->patas = readline("Informe a quantidade de patas: \n");
        $this->pelagens = readline("Informe que tipo de pelagem do animal:");
        $this->sons = readline("Informe que som o animal emite: \n");
        $this->movimentacao = readline("Informe como o animal se movimenta: \n");
        $this->emitiusons();
        $this->movimentou();
    }
    function emitiusons()
    {
        echo "O animal emitiu som: " . $this->sons . "\n";
    }
    function movimentou()
    {
        echo "O animal se movimentou: " . $this->movimentacao . "\n";
    }
}

for ($i = 0; $i < 5; $i++) {
    echo "\n Animal " . $i + 1 . "\n";
    $animal = new Animais();
}
