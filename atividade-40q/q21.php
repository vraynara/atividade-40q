<?php
$aptos = 0;
$naoAptos = 0;
$n = readline("Quantidade de pessoas: ");
for($i=1; $i <= $n; $i++){
$nome = readline("Nome: ");
$sexo = readline("Sexo (M/F): ");
$idade = readline("Idade: ");
$saude = readline("Saúde (boa/ruim): ");
if($sexo == "M" && $idade >= 18 && $saude == "boa"){
echo "$nome está apto para o serviço militar\n";
$aptos++;
} else {
echo "$nome não está apto\n";
$naoAptos++;
}
}
echo "Total aptos: $aptos\n";
echo "Total não aptos: $naoAptos\n";
?>

