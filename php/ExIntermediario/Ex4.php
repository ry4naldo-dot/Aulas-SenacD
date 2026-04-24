<?php

// Tabela de Jogos: Receba o nome de um time e exiba em qual grupo ele está em 
// um campeonato fictício (Ex: Grêmio e Inter no Grupo A, Flamengo e Vasco no Grupo 
// B). Se o time não for conhecido, exiba "Time não identificado". 

$grupoA = ["Grêmio","Inter"];

$grupoB = ["Flamengo","Vasco"];

$busca = readline("Qual time você deseja buscar: \n");

if (in_array($busca,$grupoA)) {
    echo ("O time ".$busca." esta no Grupo A.\n");
} elseif (in_array($busca,$grupoB)) {
    echo ("O time ".$busca." esta no grupo B.\n");
} else {
    echo "Time não encontrado";
}


