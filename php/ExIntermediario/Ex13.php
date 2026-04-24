<?php

//  Organizador de Fila: Receba uma lista de pessoas com suas idades. O sistema
// deve separar essa lista em duas: "Prioritário" (60 anos ou mais) e "Geral".

$pessoas = [["Ana", 30], ["João", 65], ["Maria", 70]];
$prioritario = [];
$geral = [];
foreach ($pessoas as $p) {
    if ($p[1] >= 60) {
        $prioritario[] = $p;
    } else

        $geral[] = $p;
        
}
print_r($prioritario);
print_r($geral);
