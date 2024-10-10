<?php 

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$prato1 = new Prato(1, "Camarão à Milanesa", 110.00);
$prato2 = new Prato(2, "Pizza Margherita",  80.00);
$prato3 = new Prato(3, "Macarrão à Carbonara", 60.00);
$prato4 = new Prato(4, "Bife à Parmegiana", 75.00);
$prato5 = new Prato(5, "Risoto ao Funghi", 70.00);


$pratos = array($prato1, $prato2, $prato3, $prato4, $prato5);


$pedidos = array();

// Função para listar os pedidos
function listarPedidos($pedidos) {
    if (count($pedidos) > 0) {
        foreach ($pedidos as $index => $pedido) {
            echo ($index + 1) . ". " . $pedido . "\n"; 
        }
    } else {
        echo "Nenhum pedido cadastrado.\n";
    }
}

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

            $nomeCliente = readline("Nome do Cliente: ");
            $nomeGarcom = readline("Nome do Garçom: ");
            
            $prat = null;
            do {
                echo "\nPratos: \n";
                foreach ($pratos as $p) {
                    echo $p->getNumero() . " - " . $p->getNome() . "\n";
                }

                $numeroPrato = readline("\nInforme o número correspondente ao prato: ");
            
                foreach ($pratos as $pr) {
                    if ($pr->getNumero() == $numeroPrato){
                        $prat = $pr;  
                    }    
                }

                if (!$prat) {
                    echo "\nSelecionou uma opção válida! \n";
                }

            } while($prat == null);

            $pedido = new Pedido($nomeCliente, $nomeGarcom, $prat);
            array_push($pedidos, $pedido);

            break;

        case 2:  

            listarPedidos($pedidos);  

            if(count($pedidos) > 0) {
                $idx = readline("\nInforme o número do pedido para excluir: ");
                if($idx > 0 && $idx <= count($pedidos)) {
                    array_splice($pedidos, $idx - 1, 1);  
                    echo "Pedido cancelado!\n";
                } else
                    echo "Número inválido!\n";
            
            }
            break;

        case 3:  

            listarPedidos($pedidos);

            break;

        case 4: 

            $total = 0;
            foreach ($pedidos as $pedido) {
                $total += $pedido->getPrato()->getValor();
            }
            echo "Total de vendas: R$ " . $total . "\n";

            break;

        case 0:  
            echo "Programa encerrado!\n";

            break;

        default:
            echo "Opção inválida!\n";
    }

} while($opcao != 0);
