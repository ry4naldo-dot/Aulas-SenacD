<?php

// Verificador de Sequência: Dado um número inteiro positivo, verifique se ele é um
// "número perfeito" (um número cuja soma de seus divisores próprios é igual a ele
// mesmo, como o 6: 1+2+3 = 6)

$numero = readline("Digite um número: \n");
$soma = 0;

for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $soma += $i;
    }
}

if ($soma == $numero) {
    echo "$numero é um número perfeito";
} else {
    echo "$numero não é um número perfeito";
}
