<?php

// AULA 2 DE PRÁTICA DE PHP:
// - OPERADORES ARITMÉTICOS
// - LOOP (ESTRUTURA WHILE)
// - CLASSE
// - CRIAÇÃO DE OBJETOS / INSTANCIAÇÃO DE CLASSES
// - CLASSE ABSTRATA
// - HERANÇA SIMPLES
// - USO DE OBJETOS

$primeiroNumero = 57;
$segundoNumero = 48;

echo $primeiroNumero + $segundoNumero; // adição
echo "<br/>";
echo $segundoNumero - $primeiroNumero; // subtração
echo "<br/>";
echo $primeiroNumero * $segundoNumero; // multiplicação
echo "<br/>";
echo $primeiroNumero / $segundoNumero; // divisão
echo "<br/>";
// Resto da divisão:
// por meio deste resto podemos determinar se um número é par (RESTO DA DIVISAO = 0, divide perfeitamente por 2, sem restos)
// ou ímpar: RESTO DA DIVISAO É 1, ou seja, não divide exatamente por 2, precisa quebrar.
echo $primeiroNumero % 2;
echo "<br/>";
echo $primeiroNumero . $segundoNumero; // concatenação, também funciona com strings pondo palavras uma ao lado da outra.
echo "<br/>";

// Criação de estrutura loop ENQUANTO com uso de variável para iterar
$numeroParaSomar = 0;
while($numeroParaSomar <= 10 ){
    echo $numeroParaSomar . "</br>";
    $numeroParaSomar++;
}

// Criação de classes
class Cliente
{
    public string $nome;
}

// Instanciamento de classe: criação de objetos
$cliente = new Cliente();
$cliente->nome = 'Joao';
echo $cliente->nome;

$outroCliente = new Cliente();
$outroCliente->nome = '<br/>Maria';
echo $outroCliente->nome;
echo "<br/>";


abstract class Gestor
{
    public string $nome;
    public string $cargo;
    public float $salario;
}

// Classe abstrata não pode ser implementada!
// O objetivo é apenas ter uma abstração.
// Quanto mais abstrato, menos características específicas.
// Ex. do mais abstrato ao mais específico: ANIMAL > HUMANO > HOMEM > GABRIEL
// $gestor = new Gestor(); // BUG!
// Não existe nenhum animal e nenhum gestor neste mundo, isso são abstrações inventadas por nós.
// Existem Gabrieis etc. Assim também é na OOP.

class Gerente extends Gestor
{
    // 1) Todos os gerentes têm bônus de 15% sempre, então deixa numa variável separada e se um dia mudar é só mudar ela.
    // essa variável do bônus é usada para calcualar o salário final.
    // 2) Nem todos os gerentes recebem o mesmo salário, então o salário pode ser settado no objeto, por exemplo.
    public float $bonus = 0.15; // recebe bônus de 15%

    // Criar funcao depois de demostrar a implementação do objeto abaixo. Note o uso de $this.
    public function retornaSalarioComBonus($salario){
        $salarioComBonus = $salario + ($salario * $this->bonus);
        return $salarioComBonus;
    }
}

$gerenteRecursosHumanos = new Gerente();
$gerenteRecursosHumanos->nome = "José de Almeida";
$gerenteRecursosHumanos->cargo = "Gestor de Recursos Humanos";
$gerenteRecursosHumanos->salario = 2000;

echo "O nome deste gerente é: " . $gerenteRecursosHumanos->nome . "<br/>";
echo "O cargo deste gerente é: " . $gerenteRecursosHumanos->cargo . "<br/>";
echo "O salário deste gerente é: " . $gerenteRecursosHumanos->salario . " reais<br/>";
// multiplicamos por 100 para saber a porcentagem.
echo "O bônus dos gerentes é sempre: " . $gerenteRecursosHumanos->bonus * 100 . "%<br/>";

// Para descobrirmos o salário do Gerente de RH acrescido do bônus, chamamos a função a partir do objeto
// e passamos como argumento o salário do Gerente de RH. A função usa esse valor e retorna a string.
$salarioComBonusGerenteRH = $gerenteRecursosHumanos->retornaSalarioComBonus($gerenteRecursosHumanos->salario);
echo "O valor do salário do " . $gerenteRecursosHumanos->cargo . " " . $gerenteRecursosHumanos->nome . ", acrescido do bônus, é: " . $salarioComBonusGerenteRH . " reais<br/>";

?>