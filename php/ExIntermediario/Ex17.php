<?php

// Sorteador de Prêmios: Crie um sistema que escolhe aleatoriamente um nome de
// uma lista de participantes e exibe: "O vencedor da rodada é: [Nome]"

$qtd = (int)readline("Digite a quantidade de participantes: ");

$participantes = [];

for ($i=0; $i < $qtd; $i++) { 
    $participantes[] = readline("Digite o ".($i+1)."º participante: ");
    echo "\n";
}

$vencedor = $participantes[array_rand($participantes)];
echo "O vencedor da rodada é: $vencedor";
