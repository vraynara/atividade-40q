<!DOCTYPE html>
<html>
<body>

<h3>Reajuste de salário</h3>

<form method="post">
Nome: <input type="text" name="nome"><br><br>
Salário: <input type="number" name="salario"><br><br>
Salário mínimo: <input type="number" name="minimo"><br><br>
<input type="submit" value="Calcular">
</form>

<?php
session_start();

if(!isset($_SESSION['totalAumento'])){
$_SESSION['totalAumento'] = 0;
}

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$salario = $_POST['salario'];
$minimo = $_POST['minimo'];

$qtd = $salario / $minimo;

if($qtd < 3){
$reajuste = $salario * 0.50;
}
elseif($qtd <= 10){
$reajuste = $salario * 0.20;
}
elseif($qtd <= 20){
$reajuste = $salario * 0.15;
}
else{
$reajuste = $salario * 0.10;
}

$novo = $salario + $reajuste;

$_SESSION['totalAumento'] += $reajuste;

echo "Funcionário: $nome<br>";
echo "Reajuste: $reajuste<br>";
echo "Novo salário: $novo<br><br>";

echo "Aumento total da folha: ".$_SESSION['totalAumento'];
}
?>

</body>
</html>