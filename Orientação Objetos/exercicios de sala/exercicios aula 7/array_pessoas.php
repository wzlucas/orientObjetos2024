<?php

class Pessoa {
    private $nome;
    private $sobrenome;
    private $idade;

    //To String
    public function __toString() {
        return sprintf("%s %s, %d anos\n",
            $this->nome, $this->sobrenome, $this->idade);
    }
    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

//Programa principal com o menu
$opcao = 0;

$pessoas = array();

do {
    echo "\n-----------MENU-----------\n";
    echo "         1- Cadastrar       \n";
    echo "         2- Listar          \n";
    echo "         3- Excluír         \n";
    echo "         0- SAIR            \n";
    echo "--------------------------\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        
        case 1:
            echo "\n";
            $pessoa = new Pessoa();
            $pessoa->setNome(readline("Informe o nome: "));
            $pessoa->setSobrenome(readline("Informe o sobrenome: "));
            $pessoa->setIdade(readline("Informe a idade: "));
            array_push($pessoas, $pessoa);

            break;

        case 2:
            if(count($pessoas) > 0) {
                echo "\nPessoas cadastradas:\n";
                foreach($pessoas as $p)
                    echo $p;
            } else
                echo "\nNão há pessoas cadastradas!\n";

                echo "\n";
                $i = 0;
            
            break;
        
        case 3:
            echo "Pessoas dispononíveis";
            $i = 1;
            if (count($pessoas)>0) {
                echo "\n \n Lista: \n";
            }
            foreach ($pessoas as $p) {
                echo $i . ": " . $p;
                $i++;
            }
            $idx + readline("Informe qual pessoa deve ser excluída: ");
            $idx--;

            if ($idx >= 0 && $idx < count($pessoas)) {
                array_splice($pessoas, $idx, 1);
                echo "Pessoa excluída com sucesso";

            } else
                echo "A pessoa excolhida não existe.\n";

            break;

        
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while($opcao != 0);