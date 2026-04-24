<?php

// Filtro de Conteúdo: Dada uma lista de palavras (comentários de um site), verifique 
// se a palavra "spam" ou "clickbait" aparece na lista e bloqueie o comentário se 
// encontrar. 


$comentarios = ["ótimo produto", "spam", "clickbait"];
foreach ($comentarios as $c) {
    if (strpos($c, "spam") !== false || strpos($c, "clickbait") !== false) {
        echo "Comentário bloqueado: $c\n";
    } else {
        echo "Comentário aprovado: $c\n";
    }
}