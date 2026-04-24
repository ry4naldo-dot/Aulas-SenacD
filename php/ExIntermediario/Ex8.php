<?php

// Mecanismo de Busca: Crie um script que percorra uma lista de nomes de arquivos
// e retorne apenas aqueles que terminam com a extensão ".jpg".



$arquivos = ["foto.jpg", "documento.pdf", "imagem.jpg"];
$resultado = [];

foreach ($arquivos as $a) {
    if (str_ends_with($a, ".jpg")) {
        $resultado[] = $a;
    }
}

print_r($resultado);