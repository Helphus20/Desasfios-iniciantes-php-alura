<?php

echo PHP_EOL.PHP_EOL.'Neste programa, vamos mostrar a sua classificação na tabela do IMC'. PHP_EOL;
$peso = 34;
$altura = 1.52;

echo "Peso em kg: $peso kg.  Altura em metros $altura m". PHP_EOL;
echo 'Esta é a tabela do Índice de Massa Corpórea:'. PHP_EOL.PHP_EOL;

$intervalosIMC = [18.5, 25, 30, 35, 40];
$IMCs = ['abaixo do peso', 'peso ideal', 'levemente acima do peso', 'obesidade grau I', 'obesidade grau II', 'obesidade grau III'];

echo '********************************************************************************************************************************'. PHP_EOL;
echo "*  IMC          |menor que $intervalosIMC[0]|Entre $intervalosIMC[0] e $intervalosIMC[1]|entre $intervalosIMC[1] e $intervalosIMC[2]          |entre $intervalosIMC[2] e $intervalosIMC[3]   |entre $intervalosIMC[3] e $intervalosIMC[4]    |maior que $intervalosIMC[4]        *".PHP_EOL;

echo "*  Classificação|$IMCs[0]|$IMCs[1]     |$IMCs[2]|$IMCs[3]|$IMCs[4]|$IMCs[5]  *".PHP_EOL;
echo '********************************************************************************************************************************'. PHP_EOL.PHP_EOL;
$imc =  $peso / ($altura ** 2);

if($imc < $intervalosIMC[0]){
    echo " Você está abaixo do peso, seu IMC é $imc";
}else{
    for($i = 0; $i < 3; $i++){
        if($imc > $intervalosIMC[$i] && $imc < $intervalosIMC[$i + 1]){
            echo "seu imc é $imc, ". $IMCs[$i + 1];
        }
    }
}

if($imc > 40)
    echo "seu imc é $imc, ". $IMCs[5];