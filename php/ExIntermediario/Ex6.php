<?php

// O Contador de Passos: Um usuário quer saber quantos metros caminhou em uma 
// semana. Receba uma lista com os passos de cada um dos 7 dias, calcule o total e 
// converta para quilômetros (considere 1 passo = 0,8 metros). 


// $passosSemana = [3000, 5000, 4000, 6000, 7000, 8000, 10000];

$passosSemana = [];

for ($i=0; $i <7; $i++) { 
    $passosSemana[] = readline("Digite quantos passos você deu no ".($i+1)."º dia: ");
}

$totalMetros = array_sum($passosSemana) * 0.8;
echo "Total em km: " . ($totalMetros / 1000);

