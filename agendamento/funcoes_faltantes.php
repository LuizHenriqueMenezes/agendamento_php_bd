<?php

// Exemplo de Array
$frutas = array("Maçã", "Banana", "Laranja");

// Exemplo de Incremento/Decremento
$contador = 5;
$contador++; // Incremento
$contador--; // Decremento

// Exemplo de Operador Lógico
$idade = 25;
if ($idade >= 18 && $idade <= 30) {
    echo "A pessoa tem entre 18 e 30 anos.";
} else {
    echo "A pessoa não está na faixa etária desejada.";
}

// Exemplo de Switch
$diaSemana = "Terça";
switch ($diaSemana) {
    case "Segunda":
    case "Quarta":
    case "Sexta":
        echo "É um dia de trabalho.";
        break;
    case "Terça":
    case "Quinta":
        echo "É quase sexta-feira!";
        break;
    case "Sábado":
    case "Domingo":
        echo "É final de semana!";
        break;
    default:
        echo "Dia inválido.";
}

// Exemplo de Foreach
// Neste exemplo, temos um array chamado $numeros que contém os números de 1 a 5. 
// O foreach é utilizado para percorrer cada elemento desse array.
$numeros = array(1, 2, 3, 4, 5);
foreach ($numeros as $numero) {
    echo $numero . " ";
}
// saida: 1 2 3 4 5


// Exemplo de Classe e Objeto

/*
No exemplo acima, temos uma classe chamada Carro. 
Ela possui duas propriedades ($marca e $modelo) e dois métodos (__construct e exibirInfo).

$marca e $modelo são propriedades (variáveis) que armazenam a marca e o modelo do carro.

__construct é um método especial chamado construtor. Ele é executado automaticamente quando um objeto da classe é criado. 
No exemplo, ele atribui os valores iniciais para $marca e $modelo quando um carro é instanciado.

exibirInfo é um método que imprime informações sobre o carro.

saida:
Carro: Toyota Corolla
Carro: Honda Civic


*/
class Carro
{
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInfo()
    {
        echo "Carro: {$this->marca} {$this->modelo}";
    }
}

$carro1 = new Carro("Toyota", "Corolla");
$carro2 = new Carro("Honda", "Civic");

$carro1->exibirInfo();
echo "<br>";
$carro2->exibirInfo();
