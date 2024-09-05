<?php

class Posto{
    private $litrosGasolina;
    private $abastecimentosGasolina;

    public function __construct()
    {
       $this->litrosGasolina = 0;
       $this->abastecimentosGasolina = array();
    }
    
    public function abastecer($litros){
        if ($litros <= $this->litrosGasolina) {
            array_push($this->abastecimentosGasolina,$litros);
            $this->litrosGasolina =- $litros;
            return true;

        } else
            return false;

    }

    public function reporEstoque($litros){

    }

    public function getAbastecimentoGasolina(){
        return $this->abastecimentosGasolina;

    }
        
}
$posto = new Posto();
$opcao = 1;
$litros = 1;


do {
    echo "\n=============== Menu ===============\n";
    echo "        (1) Abastecer\n";
    echo "        (2) Repor estoque\n";
    echo "        (3) Listar abastecimentos\n";
    echo "        (0) Sair do programa\n";
    echo "====================================\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Você escolheu: Abastecer\n";
            $abastecimento = 0;
            $abastecimento = $posto->abastecer(readline("Informe a quantidade de litros que gostaria: \n"));
        if () {
            # code...
        }

            break;
        case 2:
            echo "Você escolheu: Repor estoque\n";
            
            break;
        case 3:
            echo "Você escolheu: Listar abastecimentos\n";
            
            break;
        case 0:
            echo "Encerrando o programa...\n";
            break;
        default:
            echo "Opção inválida, tente novamente.\n";
    }

} while ($opcao != 0);

