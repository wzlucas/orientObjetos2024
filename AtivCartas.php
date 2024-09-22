<?php 

class Carta {
    private $numero;
    private $nome;

    public function __construct($naipe, $valor) {
        $this->nome = $naipe;
        $this->numero = $valor;
    }

    public function exibirCarta() {
       
        // Verifica se o número da carta é um valor especial 
        if ($this->numero == 1) {
            $nomeValor = "Ás";

        } elseif ($this->numero == 11) {
            $nomeValor = "Valete";

        } elseif ($this->numero == 12) {
            $nomeValor = "Dama";

        } elseif ($this->numero == 13) {
            $nomeValor = "Rei";
            
        } else {
            $nomeValor = $this->numero;
        }
        
        return $nomeValor . " de " . $this->nome;
    }

     /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
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
}

$naipes = array("Copas", "Espadas", "Ouros", "Paus");
$baralho = array();

foreach ($naipes as $naipe) {
    for ($numero = 1; $numero <= 13; $numero++) {
        $carta = new Carta($naipe, $numero);
        $baralho[] = $carta;
    }
}

// Sorteia uma carta aleatória
$cartaAleatoria = $baralho[array_rand($baralho)];

echo "\nBem-vindo ao jogo de adivinhação de cartas!\n";

$tentativas = 0;

do {
    $tentativas++;

    echo "\n=============== Menu ===============\n";
    echo "          (1) Adivinhar\n";
    echo "          (2) Dica\n";
    echo "          (3) Cartas do baralho\n";
    echo "          (0) Sair do programa\n";
    echo "====================================\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 3:
            echo "Você escolheu: Cartas do baralho\n\n";
            echo "As cartas no baralho são:\n";
            for ($i = 0; $i < count($baralho); $i++) {
                echo ($i + 1) . ": " . $baralho[$i]->exibirCarta() . "\n";
            }
            break;
        
        case 1:  
            echo "Você escolheu: Adivinhar\n\n";
            $numeroEscolhido = readline("Escolha o número da carta: ");
            $naipeEscolhido = readline("Escolha o naipe da carta: ");
            $valorArray = $numeroEscolhido - 1; 

            // Verifica se acertou
            if ($baralho[$valorArray]->getNumero() == $numeroEscolhido && 
                $baralho[$valorArray]->getNome() == $naipeEscolhido) {
                echo "Você acertou!!! A carta era " . $cartaAleatoria->exibirCarta() . "\n";
                echo "Você levou " . $tentativas . " tentativas para acertar.\n";
                break; 
            } else {
                echo "Você errou! Tente novamente.\n";
            }
            break;

        case 2:
            echo "Você escolheu: Dica\n\n";
            // Dica para ajudar na adivinhação
            if ($baralho[$valorArray]->getNumero() == $cartaAleatoria->getNumero()) {
                echo "Dica: Você acertou o número, mas o naipe está incorreto!\n";

            } elseif ($baralho[$valorArray]->getNumero() != $cartaAleatoria->getNumero()) {
                if ($baralho[$valorArray]->getNumero() < $cartaAleatoria->getNumero()) {
                    echo "Dica: O valor da carta é maior.\n";

                } else {
                    echo "Dica: O valor da carta é menor.\n";
                }
            }
            break;

        case 0:
            echo "Encerrando o programa...\n";
            break;

        default:
            echo "Opção inválida, tente novamente.\n";
    }

} while ($opcao != 0);
