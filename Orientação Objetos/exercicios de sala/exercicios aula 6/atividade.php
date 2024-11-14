<?php

class Produto{

    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;

    public function getValorTotal(){

        return $this->quantidade * $this->valorUnitario;

    } 
     
    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of unidadeMedia
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedia
     */
    public function setUnidadeMedida($unidadeMedia): self
    {
        $this->unidadeMedida = $unidadeMedia;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}
function criarProduto() {
    $produto = new Produto;
    $produto->setDescricao(readline("Informe a descrição: "));
    $produto->setUnidadeMedida(readline("Informe a unidade de medida: "));
    $produto->setQuantidade(readline("Informe a quantidade: "));
    $produto->setValorUnitario(readline("Informe o valor da unidade: "));
    echo "Produto: " . $produto->getDescricao() . "(" . $produto->getUnidadeMedida() . ") | " . $produto->getQuantidade() . " X " . $produto->getValorUnitario() . " = " . $produto->getValorTotal() . "\n";
    return $produto;
}

$produto1 = criarProduto();
$produto2 = criarProduto();
$produto3 = criarProduto();


if ($produto1->getValorTotal() > $produto2->getValorTotal() && $produto1->getValorTotal() > $produto3->getValorTotal()) {
        echo "Venda com maior valor total: " . $produto1->getDescricao() . "(" . $produto1->getUnidadeMedida() . ")";
    
    }elseif($produto2->getValorTotal() > $produto3->getValorTotal()){
        echo "Venda com maior valor total: " . $produto2->getDescricao() . "(" . $produto2->getUnidadeMedida() . ")";
    }
    else{
        echo "Venda com maior valor total: " . $produto3->getDescricao() . "(" . $produto3->getUnidadeMedida() . ")";
}
