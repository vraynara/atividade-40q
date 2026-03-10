<?php
$a = readline("Valor A: ");
$b = readline("Valor B: ");
$c = readline("Valor C: ");
$numeros = [$a, $b, $c];
sort($numeros);
echo "Ordem crescente: ";
foreach($numeros as $n){
echo $n." ";
}
echo "\n";
?>