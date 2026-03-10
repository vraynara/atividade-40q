<?php
$cont = 0;
for($i=1;$i<=80;$i++){
$num = readline("Número: ");
if($num >=10 && $num <=150){
$cont++;
}
}
echo "Quantidade no intervalo: $cont\n";
?>

