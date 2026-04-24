<?php

// O Gerente de Notas: Um professor quer inserir as notas de um aluno e receber não
// apenas a média, mas também a maior nota obtida entre todas as provas realizadas.

$notas = [];

$qtd = (int)readline("Quantidade de notas: \n");

for ($i=0; $i < $qtd; $i++) { 
    $notas[] = readline("Digite a ".($i+1)."º nota: ");
    echo "\n";
}

echo "Média: " . (array_sum($notas) / count($notas)."\n");
echo "Maior nota: " . max($notas);

