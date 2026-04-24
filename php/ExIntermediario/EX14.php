<?php

// Conversor de Medidas: Crie uma ferramenta que receba um valor em metros e
// apresente uma lista de conversões para centímetros, milímetros e quilômetros de
// uma só vez.

$metros = readline("Digite um valor em metros:\n ");
echo "Centímetros: " . ($metros * 100) . "\n";
echo "Milímetros: " . ($metros * 1000) . "\n";
echo "Quilômetros: " . ($metros / 1000) . "\n";

