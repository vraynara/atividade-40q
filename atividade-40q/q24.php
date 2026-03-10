<?php
$n = readline("Quantidade de números: ");
for($i=1;$i<=$n;$i++){
$num = readline("Número: ");
if($num > 0){
echo "Positivo\n";
} elseif($num < 0){
echo "Negativo\n";
} else{
echo "Zero\n";
}
}
?>

