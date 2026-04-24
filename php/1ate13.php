<?php
// 1. Verificar se número é positivo
$num = 5;
if ($num > 0) {
    echo "Número positivo\n";
} else {
   echo "Número negativo\n";
}

// 2. Verificar maioridade
$idade = 18;
if ($idade >= 18 || $idade == 18) {
    echo "Maior de idade\n";
}else{
    echo "Menor de idade\n";
}

// 3. Par ou ímpar
$x = 10;
if ($x % 2 == 0) {
    echo "Par\n";
} else {
    echo "Ímpar\n";
}

// 4. Maior entre duas variáveis
echo "Digite um número para A: \n";
$a = readline();
echo "Digite um número para B:";
$b = readline();
echo ($a > $b) ? "A é maior\n" : "B é maior\n";

// 5. Nota do usuário
echo ("Informe a sua nota: \n");
$nota = readline();
echo ($nota >= 7) ? "Aprovado\n" : "Reprovado\n";

// 6. For de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "\n";

// 7. Números pares de 1 a 20
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "\n";

// 8. Soma de 1 até 100
$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}
echo "Soma: $soma\n";

// 9. Tabuada do 5
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}

// 10. Decrescente de 10 a 1
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
echo "\n";
// 11. While de 1 a 5
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "\n";
// 12. Pedir número até digitar 0
do {
    $num = readline("Digite um número (0 para sair): ");
} while ($num != 0);

// 13. Número aleatório até acertar
$rand = rand(1, 10);
do {
    $tentativa = readline("Tente adivinhar (1-10): ");
} while ($tentativa != $rand);
echo "Acertou!\n";


?>
