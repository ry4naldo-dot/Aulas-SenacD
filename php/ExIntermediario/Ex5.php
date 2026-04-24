<?php

// Calculadora de Frete: O frete custa R$ 50,00. Porém, se a compra for acima de R$ 
// 250,00, o frete é grátis. Se for acima de R$ 500,00, além do frete grátis, o cliente 
// ganha 10% de desconto no valor total. 

$valorCompra = readline("Digite o valor da compra: \n");

if ($valorCompra > 500) {
    $valorFinal = $valorCompra * 0.9; 
} elseif ($valorCompra > 250) {
    $valorFinal = $valorCompra; 
} else {
    $valorFinal = $valorCompra + 50; 
}

echo "Valor final: R$ " . $valorFinal;

