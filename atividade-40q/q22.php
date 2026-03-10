<?php
$somaCusto = 0;
$somaVenda = 0;
for($i=1; $i<=40; $i++){
$custo = readline("Preço de custo: ");
$venda = readline("Preço de venda: ");
if($venda > $custo){
echo "Lucro\n";
} elseif($venda < $custo){
echo "Prejuízo\n";
} else{

echo "Empate\n";
}
$somaCusto += $custo;
$somaVenda += $venda;
}
echo "Média preço de custo: ".($somaCusto/40)."\n";
echo "Média preço de venda: ".($somaVenda/40)."\n";
?>
