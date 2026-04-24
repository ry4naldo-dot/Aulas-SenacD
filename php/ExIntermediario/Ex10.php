<?php

// Gerador de Login: Receba o nome completo de uma pessoa e gere um "username"
// composto pela primeira letra do nome e o último sobrenome em letras minúsculas.

$nomeCompleto = readline("Digite seu nome: \n");
$partes = explode(" ", strtolower($nomeCompleto));
$login = substr($partes[0], 0, 1) . end($partes);

echo "Username: " . $login;
