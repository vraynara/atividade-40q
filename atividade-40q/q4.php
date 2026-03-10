<?php
$nome = readline("Nome do vendedor: ");
$salario = readline("Salário fixo: ");
$vendas = readline("Total de vendas: ");

$comissao = $vendas * 0.15;
$total = $salario + $comissao;
echo "Nome: $nome\n";
echo "Salário fixo: $salario\n";
echo "Salário final: $total\n";
?>

