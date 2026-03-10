
<?php
$ate2000=0;
$total=0;
while(true){
$valor = readline("Valor do carro: ");
$ano = readline("Ano: ");
if($ano <=2000){
$desconto = $valor * 0.12;
$ate2000++;
}else{
$desconto = $valor * 0.07;
}
$final = $valor - $desconto;
echo "Desconto: $desconto\n";
echo "Valor final: $final\n";
$resp = readline("Continuar? (S/N): ");
$total++;

if(strtoupper($resp) == "N"){
break;
}
}
echo "Carros até 2000: $ate2000\n";
echo "Total carros: $total\n";
?>

