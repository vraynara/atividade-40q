<?php
$custo = readline("Preço de custo: ");
$percentual = readline("Percentual de acréscimo: ");
$venda = $custo + ($custo * $percentual/100);
echo "Preço de venda: $venda\n";
?>
