<?php 

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$prato1 = new Prato(1, "Camarão à Milanesa", 110.00);
$prato2 = new Prato(2, "Pizza Margherita",  80.00);
$prato3 = new Prato(3, "Macarrão à Carbonara", 60.00);
$prato4 = new Prato(4, "Bife à Parmegiana", 75.00);
$prato5 = new Prato(5, "Risoto ao Funghi", 70.00);

$pratos = array();
array_push($pratos,$prato1);
array_push($pratos,$prato2);
array_push($pratos,$prato3);
array_push($pratos,$prato4);
array_push($pratos,$prato5);

$pedidos = array();


//Iniciar a exibição do menu
do {
    echo "\n\n========== MENU ==========\n";
    echo "       (1) Cadastrar pedido\n";
    echo "       (2) Cancelar pedido\n";
    echo "       (3) Listar pedidos\n";
    echo "       (4) Total de vendas\n";
    echo "       (0) Sair\n";
    echo "==========================\n";

    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch($opcao) {
        case 1:

            $pedido = new Pedido;
            
            do{
                $prat = null;
                echo "\nPratos: \n";
                foreach ($pratos as $p) 
                 echo $p->getNumero() . " - " . $p->getNome() . "\n";
                    
                $numerosPrato = readline("\n Informe o número correspondente ao prato: \n");
            
            foreach ($pratos as $pr) {
                if ($pr->getNumero() == $numerosPrato) {
                    $prat = $pr;
                   
                }
            }
            if ($prat) {
                $pedido->setPrato($prat);
            }else
                echo "\nSelecione uma opcao valida! \n";
            
            } while($prat == null);

            $pedido->setNomeCliente(readline("Nome do Cliente: \n"));
            $pedido->setNomeGarcom(readline("Nome do Garçom: \n"));
            array_push($pedidos, $pedido);

            print_r($pedidos);
            break;

        case 2:

            listarCarros($pedidos);
            if(count($pedidos) > 0) {
                $idx = readline("Informe o índice do carro para excluir: ");
                if($idx > 0 && $idx <= count($pedidos))
                    array_splice($pratos, $idx-1, 1);
                else
                    echo "Índice inválido!\n";
            }
    
            
            break;

        case 3:
            listarPedidos($pedidos);

            break;

        case 4:
        
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }

} while($opcao != 0);