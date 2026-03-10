<?php
$nome = readline("Nome: ");
$n1 = readline("Nota 1: ");
$n2 = readline("Nota 2: ");
$n3 = readline("Nota 3: ");
$media = ($n1+$n2+$n3)/3;
echo "Aluno: $nome\n";
echo "Média: $media\n";
if($media >= 7){
echo "Aprovado\n";
}elseif($media <=5){
echo "Reprovado\n";
}else{
echo "Recuperação\n";
}
?>

