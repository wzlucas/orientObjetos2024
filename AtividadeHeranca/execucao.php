<?php

require_once('modelo/IDocumento.php');
require_once('modelo/Documento.php');
require_once('modelo/Empenho.php');
require_once('modelo/Processo.php');
require_once('modelo/Protocolo.php');

// listargem de doc
function listarDocumentos(array $documentos) {
    echo "Documentos Cadastrados\n";
    $i = 1;

    foreach($documentos as $doc) {
        echo $i . "- " . $doc->getDadosDoc() . "\n";
        $i++;
    }
}

// cadasrtra empenho
function novoEmpenho() {
    $empenho = new Empenho();
    $empenho->setNome(readline("Informe o nome do responsável pelo empenho: "));
    $empenho->setCpfCnpj(readline("Informe o CPF/CNPJ do responsável: "));
    $empenho->setNumeroEmpenho( readline("Informe o número do empenho: "));
    $empenho->setNomeFantasia(readline("Informe o nome fantasia: "));
    $empenho->setValor(readline("Informe o valor do empenho: "));
    $empenho->setAno(readline("Informe o ano do empenho: "));

    $anexado = readline("O empenho está anexado? (1-Sim | 2-Não): ");
    $empenho->setAnexado($anexado == 1); 

    $liquidado = readline("O empenho está liquidado? (1-Sim | 2-Não): ");
    $empenho->setLiquidado($liquidado == 1); 

    $assinado = readline("O empenho está assinado? (1-Sim | 2-Não): ");
    $empenho->setAssinado($assinado == 1); 

    return $empenho;
}

// cadastra processo
function novoProcesso() {
    $processo = new Processo();
    $processo->setNome(readline("Informe o nome do responsável pelo processo: "));
    $processo->setCpfCnpj(readline("Informe o CPF/CNPJ do responsável: "));
    $processo->setNumeroProcesso(readline("Informe o número do processo: "));
    $processo->setCausa(readline("Informe a causa do processo: "));
    $processo->setAnexo(readline("Informe o anexo do processo: "));
    return $processo;
}

// cadastra protocolo
function novoProtocolo() {
    $protocolo = new Protocolo();
    $protocolo->setNome(readline("Informe o nome do responsável pelo protocolo: "));
    $protocolo->setCpfCnpj(readline("Informe o CPF/CNPJ do responsável: "));
    $protocolo->setNumeroLiquidacao( readline("Informe o número de liquidação do protocolo: "));
    return $protocolo;
}

// esclui doc
function excluirDocumento(array &$documentos) {
    listarDocumentos($documentos);
    $idx = readline("Informe o índice do documento: ");

    if ($idx > 0 && $idx <= count($documentos)) {
        array_splice($documentos, $idx - 1, 1);
        echo "Documento excluído com sucesso!\n";
    } else {
        echo "Índice inválido.\n";
    }
}


$opcao = 0;
$documentos = array();
do {
    echo "\n\n========== MENU ==========\n";
    echo "       (1) Cadastrar Documento\n";
    echo "       (2) Excluir Documento\n";
    echo "       (3) Listar Documentos\n";
    echo "       (0) Sair\n";
    echo "==========================\n";
    $opcao = readline("Informe a opção: ");
    echo "\n";

    switch ($opcao) {
        case 1:
            $tipo = 0;
            do {
                $tipo = readline("Informe o tipo de documento (1-Empenho | 2-Processo | 3-Protocolo): ");
                switch ($tipo) {
                    case 1:
                        array_push($documentos, novoEmpenho());
                        break;
                    case 2:
                        array_push($documentos, novoProcesso());
                        break;
                    case 3:
                        array_push($documentos, novoProtocolo());
                        break;
                    default:
                        echo "Tipo de documento inválido!\n";
                }
            } while ($tipo < 1 || $tipo > 3);
            break;
        case 2:
            excluirDocumento($documentos);
            break;
        case 3:
            listarDocumentos($documentos);
            break;
        case 0:
            echo "Programa encerrado!\n";
            break;
        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 0);
