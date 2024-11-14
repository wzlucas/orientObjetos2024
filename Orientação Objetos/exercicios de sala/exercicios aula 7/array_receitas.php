<?php

class Receita{

    private $descricao;
    private $valor;

    public function __toString()
    {
        return "\nReceitas: \n\n Descrição: " . $this->descricao . "  Valor: " . $this->valor . "\n";
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

}

class Despesa{

    private $descricao;
    private $valor;

    public function __toString()
    {
        return "\nDespesas: \n\n Descrição: " . $this->descricao . "  Valor: " . $this->valor . "\n";
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

$receitas = array();
$despesas = array();

do {
    echo "\n=============== Menu ===============\n";
    echo "        (1) Adicionar receita\n";
    echo "        (2) Adicionar despesa\n";
    echo "        (3) Listar receitas\n";
    echo "        (4) Listar despesas\n";
    echo "        (5) Sumarizar\n";
    echo "        (0) Sair do programa\n";
    echo "====================================\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Você escolheu: Adicionar receita\n";
            $receita = new Receita();
            $receita->setDescricao(readline("Informe a descrição: "));
            $receita->setValor(readline("Informe o valor: "));
            array_push($receitas, $receita);

            break;

        case 2:
            echo "Você escolheu: Adicionar despesa\n";
            $despesa = new Despesa();
            $despesa->setDescricao(readline("Informe a descrição: "));
            $despesa->setValor(readline("Informe o valor: "));
            array_push($despesas, $despesa);
            
            break;

        case 3:
            echo "Você escolheu: Listar receitas\n";
            $re = 0;
            foreach ($receitas as $r) {
                echo $re . "-" . $r . "\n";
            }
            $re++;

            break;

        case 4:
            echo "Você escolheu: Listar despesas\n";
            $de = 0;
            foreach ($despesas as $d) {
                echo $de . "-" . $d . "\n";
            }
            $de++;
        
        
            break;

        case 5:
            echo "Você escolheu: Sumariza\n";
            $totalReceitas = 0;
            $totalDespesas = 0;
            foreach ($receitas as $r) {
                $totalReceitas =+ $r->getValor();
            }
            foreach ($despesas as $d) {
                $totalDespesas =+ $d->getValor();
            }
            $valorTotal = $totalReceitas - $totalDespesas;
    
            echo "Saldo: R$" . $valorTotal . "\n";
            echo "Total de Receitas: R$" . $totalReceitas . "\n";
            echo "Total de despesas: R$" . $totalDespesas . "\n";
            break;
        
        case 0:
            echo "Encerrando o programa...\n";
            break;
        default:
            echo "Opção inválida, tente novamente.\n";
    }

} while ($opcao != 0);