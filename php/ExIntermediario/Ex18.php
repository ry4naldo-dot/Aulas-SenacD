<?php

// Calculadora de Idade Canina: Receba a idade de um cachorro e retorne a idade
// equivalente em anos humanos (para os dois primeiros anos, cada ano vale 10.5;
// depois disso, cada ano vale 4).

$anos = readline("Digite a idade do seu cão: \n");

if ($anos <= 2) {
    $idadeHumana = $anos * 10.5;
} else {
    $idadeHumana = 21 + ($anos - 2) * 4;
}

echo "Idade equivalente em humanos: " . $idadeHumana . " anos";