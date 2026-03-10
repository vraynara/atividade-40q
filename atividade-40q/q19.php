<?php
$h=0;
$m=0;
for($i=1;$i<=56;$i++){
$nome = readline("Nome: ");
$sexo = readline("Sexo (M/F): ");
if($sexo == "M"){
echo "$nome é homem\n";
$h++;
}else{
echo "$nome é mulher\n";
$m++;
}
}
echo "Total homens: $h\n";
echo "Total mulheres: $m\n";
?>

