<?php

// Função ECHO para imprimir coisas no HTML
echo "Olá mundo PHP!";
echo "<br/>";
echo "Olá mundo PHP!";
echo "<br/>";

// Criação de variáveis simples e impressão das mesmas
$nome = "Gabriel";
echo $nome . "<br/>";
$idade = 23;
echo $idade . "<br/>";

// Tipos de variáveis e dumping/debug
$numeroInteger = 87;
var_dump($numeroInteger);
echo "<br/>";
$numeroDouble = 1.525;
var_dump($numeroDouble);
echo "<br/>";
$textoString = "Algum texto que eu estou pensando agora";
var_dump($textoString);
echo "<br/>";
$booleanVerdadeiro = true;
var_dump($booleanVerdadeiro);
echo "<br/>";
$booleanFalso = false;
var_dump($booleanFalso);
echo "<br/>";

// Criação de array simples e impressão do mesmo item a item
$carros = ["gol", "fiesta", "uno"];

echo $carros[0];
echo "<br/>";
echo $carros[1];
echo "<br/>";
echo $carros[2];
echo "<br/>";
// Demonstração de que não é possível acessar chave sem valor: undefined offset
echo $carros[3]; // bug!
echo "<br/>";

// Iterando array por meio de estrutura foreach (tradução: para cada CARROS como CARRO).
// Ou seja: pegaremos cada item em CARROS, apelidaremos cada chave de CARRO e toda vez 
//que a estrutura repetir, a próxima chave será impressa

foreach($carros as $carro){
    echo "<br/>" . $carro . "<br/>";
}

//Foreach com iterador para numerar os carros
$numeroDoCarro = 1;
foreach($carros as $carro){
    echo "<br/><b>Carro " . $numeroDoCarro++ . ": </b> " . $carro . "<br/>";
}

// Uso da função count() em array
$qtdCarros = count($carros);
echo $qtdCarros;
echo "<br/>";

// Criação de array alterando a chave
$carrosPorAno = ["gol" => 1980, "fiesta" => 1995, "uno" => 1971];
// Demonstração de que não é possível acessar mais o valor 0, 
// uma vez que ele foi alterado para "gol". Undefined offset
echo $carrosPorAno[0]; // bug!

// Impressão dos dois arrays formando uma frase
echo "O ano do " . $carros[0] . " é " . $carrosPorAno["gol"] . "<br/>";
echo "O ano do " . $carros[1] . " é " . $carrosPorAno["fiesta"] . "<br/>";
echo "O ano do " . $carros[2] . " é " . $carrosPorAno["uno"] . "<br/>";

// Criação de estrutura condicional SE... SENÃO... supondo igualdade simples
if($nome == 'Gabriel'){
    echo "<br/>Este é o nome do professor<br/>";
}else{
    echo "<br/>Este não é o nome do professor<br/>";
}

if(true){
    echo "<br/>true é verdadeiro sempre!<br/>";
}else{
    echo "<br/>este texto não será impresso<br/>";
}

if(false){
    echo '<br/>este texto jamais será impresso<br/>';
}else{
    echo '<br/>este texto vai ser impresso<br/>';
}

// Estrutura condicional usando sinal de diferença e usando ELSEIF (Ou então...)
if($carrosPorAno["gol"] != 1980){
    echo 'Este carro não é de 1980!';
}elseif($carrosPorAno["gol"] == 1974){
    echo 'Este carro é de 1974!';
}elseif($carrosPorAno["gol"] == 1980){
    echo 'Este carro é de 1980!';
}else{
    echo 'Ano do carro é desconhecido!';
}
?>