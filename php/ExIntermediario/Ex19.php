<?php

// Formatador de Telefone: Receba uma sequência de 11 números limpos e
// transforme-os no formato padrão: (XX) XXXXX-XXXX.

$numero = readline("Digite seu númmero de telefone: \n");

echo "(" . substr($numero,0,2) . ") " . substr($numero,2,5) . "-" . substr($numero,7);

