<?php
$distancia = readline("Distância percorrida (km): ");
$combustivel = readline("Combustível gasto (litros): ");
$consumo = $distancia / $combustivel;
echo "Consumo médio: $consumo km/l\n";
?>