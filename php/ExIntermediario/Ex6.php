<?php

// O Contador de Passos: Um usuário quer saber quantos metros caminhou em uma 
// semana. Receba uma lista com os passos de cada um dos 7 dias, calcule o total e 
// converta para quilômetros (considere 1 passo = 0,8 metros). 


$passos = readline("Digite quantos passos você deu: \n");

$conversorPassos = $passos * 0.8;

$diasPassos = $conversorPassos * 7;

$conversorKM = $diasPassos / 10;

echo ("Você percorreu ".$conversorKM."Km em sete dias.");