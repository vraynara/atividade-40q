<?php
$custo = readline("Custo de fábrica: ");
$impostos = $custo * 0.45;
$subtotal = $custo + $impostos;
$distribuidor = $subtotal * 0.28;
$final = $subtotal + $distribuidor;
echo "Custo ao consumidor: $final\n";
?>
