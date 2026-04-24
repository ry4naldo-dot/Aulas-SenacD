<?php

// Filtro de Conteúdo: Dada uma lista de palavras (comentários de um site), verifique 
// se a palavra "spam" ou "clickbait" aparece na lista e bloqueie o comentário se 
// encontrar. 

$lista = ["esse site é mt bom.","isso é clickbait","spam"];
$palavrasProibidas = ["spam","clickbait"];
var_dump($lista);

// $busca = readline("Qual palavra deseja bloquear: \n");

if (in_array($palavrasProibidas,$lista)) {
    echo ("As palavra ".$palavrasProibidas." já foram bloqueadas.\n");
    unset($lista[$palavrasProibidas]);
} 

var_dump($lista);

