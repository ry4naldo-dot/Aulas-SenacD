<?php

// Controle de Estoque: Crie um sistema que recebe a quantidade atual de um 
// produto e a quantidade mínima. Se o estoque atual for menor que o mínimo, o 
// sistema deve alertar "Comprar Reposição"; caso contrário, "Estoque OK".

$produto = readline("Qual produto deseja ver no estoque: \n");

if (str_ends_with($produto, "a")) {
    $qtdAtual = (int)readline("Digite a quantidade atual da " . $produto . ": \n");
} else {
    $qtdAtual = (int)readline("Digite a quantidade atual do " . $produto . ": \n");
}

$qtdMin = (int)readline("Digite o estoque mínimo deste produto: \n");

if ($qtdAtual < $qtdMin) {
    echo "Comprar Reposição";
} else {
    echo "Estoque OK";
}
