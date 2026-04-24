<?php

// 1. O Analista de Crédito: Uma loja deseja automatizar a aprovação de empréstimos. 
// O sistema deve receber o valor do salário e o valor da parcela. A regra é: a parcela 
// não pode ultrapassar 30% do salário. Retorne se o crédito foi aprovado ou negado. 


echo "Digite o seu salario: \n";
$salario = (float)readline();

echo "Digite o valor da parcela: \n";
$parcela = (float)readline();

$limite = $salario * 0.30;

if ($parcela <= $limite) {
    echo "Crédito Aprovado";
} else {
    echo "Crédito Negado";
}
