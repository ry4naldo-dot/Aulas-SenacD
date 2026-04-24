<?php

// Resumo de Carrinho: Dado um array onde cada item é um sub-array contendo
// [nome_item, preco, quantidade], calcule o valor total que o cliente deve
// pagar ao final da compra.

$carrinho = [["Camisa", 50, 2],["Calça", 100, 1],["Tênis", 200, 1]];

$total = 0;
foreach ($carrinho as $item) {
    $total += $item[1] * $item[2];
}
echo "Total da compra: R$ $total";

