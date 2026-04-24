<?php

// Simulador de Juros: Um investimento rende 1% ao mês. Receba um valor inicial e
// mostre quanto o usuário terá mês a mês durante um período de um ano.

$valor = readline("Digite o valor inicial: ");

for ($i = 1; $i <= 12; $i++) {
    $valor *= 1.01;
    echo "Mês $i: R$ " . number_format($valor, 2) . "\n";
}
