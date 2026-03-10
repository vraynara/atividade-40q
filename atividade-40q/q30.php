<?php
$nome = readline("Nome: ");
$idade = readline("Idade: ");
$sexo = readline("Sexo (M/F): ");
$salario = readline("Salário fixo: ");
$salarioLiquido = $salario;

if($sexo == "M"){
$salarioLiquido = $salario + ($salario * 0.05);
}
else{
$salarioLiquido = $salario + ($salario * 0.10);
}
echo "Funcionário: $nome\n";
echo "Salário líquido: $salarioLiquido\n";
?>

