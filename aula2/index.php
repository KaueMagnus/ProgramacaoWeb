<?php

$numero1 = 10;
$numero2 = 15;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero * $numero2;
$divisao = $numero1 / $numero2;

echo "O resultado da soma é $soma<br>";
echo "O resultado da subtração é $subtracao<br>";
echo "O resultado da multiplicação é $multiplicacao<br>";
echo "O resultado da divisão é $divisao<br>";

$nome = "Kaue";
$sobrenome = "Magnus";

$nomeCompleto = "$nome $sobrenome";

echo $nomeCompleto . "<br>";

$array = ["Ayrton", "Pelé", "Neymar"];



echo "<pre>";

var_dump($array);



ksort($array);
var_dump($array);

array_flip($array);
var_dump($array);


$dados = [
    "nome" => "Kaue",
    "nome" => "Jorge"
];

var_dump($dados);


for ($i = 1; $i <= 10; $i++) {
    echo "\n$i";
}

foreach ($array as $key => $value) {
    echo "\nChave: $key, Valor: $value: ";
}

$count = 0;

do {
    echo "\nExecutou no Do While -  $count";
    $count++;
} while ($count <= 10);

$count = 0;

while ($count < 10) {
    echo "\nExecutou no While - $count";
    $count++;
}