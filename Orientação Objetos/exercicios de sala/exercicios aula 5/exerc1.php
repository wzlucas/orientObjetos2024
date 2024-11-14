<?php

 class Pessoa{

    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    function __construct(){
        
    }

    function falarOla()
    {
        echo "Olá mundo, sou " . $this->nome. "!\n";
    }
    function falarEndereco()
    {
        echo "Moro em  " . $this->endereco . ", " . $this->cidade . "/" . $this->UF ."!\n";
    }
    function falarAltura()
    {
        echo "Tenho " . $this->altura . " metros!\n";
    }
 }

$pessoa = new Pessoa();
$pessoa->nome = readline("Digite seu nome: ");
$pessoa->endereco = readline("Digite seu endereco: ");
$pessoa->cidade = readline("Digite sua cidade: ");
$pessoa->UF = readline("Digite sua UF: ");
$pessoa->altura = readline("Digite sua altura: ");
$pessoa->falarOla();
$pessoa->falarEndereco();
$pessoa->falarAltura();