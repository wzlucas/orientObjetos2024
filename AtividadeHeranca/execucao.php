<?php

require_once('modelo/IDocumento.php');
require_once('modelo/Documento.php');
require_once('modelo/Empenho.php');
require_once('modelo/Processo.php');
require_once('modelo/Protocolo.php');

// listagem de processos
function listarProcessos(array $documentos) {
    echo "Processos Cadastrados\n";
    $i = 1;

    foreach($documentos as $doc) {
        if ($doc instanceof Processo) {
            echo $i . "- " . $doc->getDadosDoc() . "\n";
            if ($doc->getEmpenho()) {
                echo "   Empenho: " . $doc->getEmpenho()->getDadosDoc() . "\n";
            } else {
                echo "   Sem empenho associado\n";
            }
            $i++;
        }
    }
}

// cria processo
function novoProcesso() {
    $processo = new Processo();
    $processo->setNome(readline("Informe o nome do responsável: "));
    $processo->setCpfCnpj(readline("Informe o CPF/CNPJ do responsável: "));
    $processo->setNumeroProcesso(readline("Informe o número do processo: "));
    $processo->setCausa(readline("Informe a causa do processo: "));
    $processo->setAnexo(readline("Informe o anexo do processo: "));
    return $processo;
}

// cria empenho
function novoEmpenhoParaProcesso(Processo $processo) {
    $empenho = new Empenho();
    $empenho->setNome(readline("Informe o nome do responsável: "));
    $empenho->setCpfCnpj(readline("Informe o CPF/CNPJ do responsável: "));
    $empenho->setNumeroEmpenho(readline("Informe o número do empenho: "));
    $empenho->setNomeFantasia(readline("Informe o nome fantasia: "));
    $empenho->setValor(readline("Informe o valor do empenho: "));
    $empenho->setAno(readline("Informe o ano do empenho: "));
    $anexado = readline("O empenho está anexado? (1-Sim | 2-Não): ");
    $empenho->setAnexado($anexado == 1); 
    $liquidado = readline("O empenho está liquidado? (1-Sim | 2-Não): ");
    $empenho->setLiquidado($liquidado == 1); 
    $assinado = readline("O empenho está assinado? (1-Sim | 2-Não): ");
    $empenho->setAssinado($assinado == 1);
    $processo->setEmpenho($empenho);
    return $processo;
}

// protocolo
function protocolarProcesso(array $documentos) {
    $numeroProcesso = readline("Informe o número do processo a ser protocolado: ");

    foreach ($documentos as $doc) {
        if ($doc instanceof Processo && $doc->getNumeroProcesso() == $numeroProcesso) {
            if ($doc->getEmpenho() !== null) {
                echo "Processo protocolado com sucesso!\n";
                echo "Detalhes do protocolo: " . $doc->getDadosDoc() . "\n";
                return;
            } else {
                echo "Protocolo inválido! Processo sem empenho associado.\n";
                return;
            }
        }
    }
    echo "Processo não encontrado.\n";
}


$opcao = 0;
$documentos = array();
do {
    echo "\n\n========== MENU ==========\n";
    echo "       (1) Cadastrar Processo\n";
    echo "       (2) Cadastrar Empenho para Processo\n";
    echo "       (3) Listar Processos\n";
    echo "       (4) Protocolar Processo\n";
    echo "       (0) Sair\n";
    echo "==========================\n";
    $opcao = readline("Informe a opção: ");
    echo "\n";
    switch ($opcao) {
        case 1:
            array_push($documentos, novoProcesso());
            break;
        case 2:
            $numeroProcesso = readline("Informe o número do processo para associar o empenho: ");
            foreach ($documentos as $doc) {
                if ($doc instanceof Processo && $doc->getNumeroProcesso() == $numeroProcesso) {
                    novoEmpenhoParaProcesso($doc);
                    echo "Empenho associado ao processo.\n";
                    break;
                }
            }
            break;
        case 3:
            listarProcessos($documentos);
            break;
        case 4:
            protocolarProcesso($documentos);
            break;
        case 0:
            echo "Programa encerrado!\n";
            break;
        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 0);