<?php

// Relatório de Vendas: Receba uma lista de valores vendidos por um vendedor no
// mês. O sistema deve identificar qual foi a maior venda e qual foi a menor

$qtd = (int)readline("Quantos itens foram vendidos: \n");

for ($i=0; $i < $qtd; $i++) { 
    $vendas[] = (float)readline(($i+1)."º Item: \n");
}

echo "Maior venda: " . max($vendas)."\n";
echo "Menor venda: " . min($vendas);

