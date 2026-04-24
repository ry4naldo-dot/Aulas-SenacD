<?php

// Validador de Acesso: O sistema só permite a entrada se o usuário digitar a senha
// correta. Ele tem apenas 3 tentativas. Se errar as 3, o sistema deve informar "Conta
// Bloqueada".

$senhaCorreta = "1234";
for ($i = 1; $i <= 3; $i++) {
    $tentativa = readline("Digite a senha: ");
    if ($tentativa === $senhaCorreta) {
        echo "Acesso permitido";
        exit;
    }
}
echo "Conta Bloqueada";


