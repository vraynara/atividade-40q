<?php
$totalAumento = 0;
for($i=1;$i<=584;$i++){
$nome = readline("Nome: ");
$salario = readline("Salário: ");
$minimo = readline("Salário mínimo: ");
$qtd = $salario / $minimo;
if($qtd < 3){
$reajuste = $salario * 0.50;
}
elseif($qtd <=10){
$reajuste = $salario * 0.20;
}
elseif($qtd <=20){
$reajuste = $salario * 0.15;

}
else{
$reajuste = $salario * 0.10;
}
$novo = $salario + $reajuste;
echo "Funcionário: $nome\n";
echo "Reajuste: $reajuste\n";
echo "Novo salário: $novo\n";
$totalAumento += $reajuste;
}
echo "Aumento total da folha: $totalAumento\n";
?>

