<?php

// 14. Soma de 1 a 50 com while
$n = 1;
$soma = 0;
while ($n <= 50) {
    $soma += $n;
    $n++;
}
echo "Soma: $soma\n";

// 15. Tabuada com while
echo ("Informe um número para a tabuada: \n");
$num = readline();
$i = 1;
while ($i <= 10) {
    echo "$num x $i = " . ($num * $i) . "\n";
    $i++;
}

// 17. Vetor com nomes
$nomes = ["Ana", "Bruno", "Carlos", "Daniela", "Eduardo"];
foreach ($nomes as $nome) {
    echo $nome . "\n";
}

// 18. Soma de vetor
$vetor = [2, 4, 6, 8, 10];
echo "Soma: " . array_sum($vetor) . "\n";

// 19. Verificar nome no vetor
$nomes = ["Ana", "Bruno", "Carlos"];
echo "DIgite um nome:";
$buscador = readline();
if (in_array($buscador, $nomes)) {
    echo "Nome encontrado\n";
} else {

    echo "Nome não encontrado\n";
}
// 20. Exibir pares de vetor
$nums = [1,2,3,4,5,6,7,8,9,10];
foreach ($nums as $n) {
    if ($n % 2 == 0) echo $n . " ";
}
echo "\n";
// 21. Maior número do vetor
$vetor = [10, 5, 8, 20, 15];
echo "Maior: " . max($vetor) . "\n";

// 22. Contar maiores que 50
$nums = [];
$cont = 0;
for ($i=0; $i < 10; $i++) { 
    $nums[] = (int)readline("Digite um número".($i+1).": \n");
}
foreach ($nums as $n) {
    if ($n > 50) $cont++;
}
echo "Maiores que 50: $cont\n";
// 23. Média da turma
$notas = [];
$qtd = readline("Digite a quantidade de nota: \n");
for ($i=0; $i < $qtd; $i++) { 
    $notas[] = readline("Digite a ".($i+1)."° Nota: ");
}
echo "Média: " . (array_sum($notas)/count($notas)) . "\n";


// 24. Exibir em ordem inversa
$nums = [];
for ($i=0; $i<5; $i++) {
    $nums[] = readline("Digite um número: ");
}
$nums = array_reverse($nums);
echo ($nums[0]. $nums[1]. $nums[2]. $nums[3]. $nums[4]);

// 25. Nomes que começam com A
$nomes = ["Ana", "Bruno", "Alice", "Carlos"];
foreach ($nomes as $n) {
    if (str_starts_with($n, "A")) echo $n . "\n";
}

// 26. Números ímpares
$nums = [1,2,3,4,5,6,7,8,9];
foreach ($nums as $n) {
    if ($n % 2 != 0) echo $n . " ";
}
echo "\n";
// 29. Vetor aleatório > 50
$nums = [];
for ($i=0; $i<10; $i++) {
    $nums[] = rand(1,100);
}
foreach ($nums as $n) {
    if ($n > 50) echo $n . " ";
}
echo "\n";
// 30. Notas até -1
$notas = [];
do {
    $n = readline("Digite uma nota (-1 para sair): ");
    if ($n != -1) $notas[] = $n;
} while ($n != -1);
echo "Média: " . (array_sum($notas)/count($notas)) . "\n";

// 31. Maior e menor
$nums = [];
for ($i=0; $i < 5; $i++) { 
    $nums[] = readline("Digite o ".($i+1)."° número: ");
}
echo "Maior: " . max($nums) . "\n";
echo "Menor: " . min($nums) . "\n";
echo "Soma: " . array_sum($nums) . "\n";

// 32. Nomes com mais de 5 letras
$nomes = ["Ana", "Bruno", "Carlos", "Fernanda", "Eduardo"];
$filtrados = [];
foreach ($nomes as $n) {
    if (strlen($n) > 5) $filtrados[] = $n;
}
print_r($filtrados);
echo "\n";
// 33. Fibonacci até 10º termo
$fib = [0,1];
for ($i=2; $i<10; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}
print_r($fib);