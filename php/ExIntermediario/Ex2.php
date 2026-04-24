<?php

//  O Painel do Aeroporto: Você precisa exibir uma mensagem de saudação baseada 
// na hora atual (formato 24h). Se for entre 05:00 e 11:59, "Bom dia"; entre 12:00 e 
// 17:59, "Boa tarde"; e após as 18:00, "Boa noite". 

date_default_timezone_set('America/Sao_Paulo');

$horas = date('H:i');
// $horaF = (int)date('H');

echo "Agora são ".$horas." Horas.\n";

 echo $horas."\n";


if ($horas >= '5:00' && $horas < '12:00') {
    echo "Bom dia";
} elseif ($horas >= '12:00' && $horas < '18:00') {
    echo "Boa tarde";
} else {
    echo "Boa noite";
}