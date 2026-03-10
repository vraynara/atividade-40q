<?php
$a = readline("Digite o primeiro número: ");
$b = readline("Digite o segundo número: ");
echo "Soma: ".($a+$b)."\n";
echo "Subtração: ".($a-$b)."\n";
echo "Multiplicação: ".($a*$b)."\n";
if($b != 0){
echo "Divisão: ".($a/$b)."\n";
}else{
echo "Divisão impossível\n";
}
?>