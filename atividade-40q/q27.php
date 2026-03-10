<?php
$totalDesconto = 0;
$totalPago = 0;

while(true){
$valor = readline("Valor do veículo (0 para sair): ");
if($valor == 0){
break;
}
$combustivel = readline("Combustível (alcool/gasolina/diesel): ");
if($combustivel == "alcool"){
$desconto = $valor * 0.25;
}
elseif($combustivel == "gasolina"){
$desconto = $valor * 0.21;
}
else{
$desconto = $valor * 0.14;
}
$final = $valor - $desconto;
echo "Desconto: $desconto\n";
echo "Valor final: $final\n";
$totalDesconto += $desconto;
$totalPago += $final;
}
echo "Total de descontos: $totalDesconto\n";
echo "Total pago pelos clientes: $totalPago\n";
?>

