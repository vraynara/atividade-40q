<!DOCTYPE html>
<html>
<body>

<h3>Venda de carros</h3>

<form method="post">
Valor do carro: <input type="number" name="valor"><br><br>
Ano: <input type="number" name="ano"><br><br>
<input type="submit" value="Calcular">
</form>

<?php
session_start();

if(!isset($_SESSION['ate2000'])){
$_SESSION['ate2000'] = 0;
$_SESSION['total'] = 0;
}

if(isset($_POST['valor'])){
$valor = $_POST['valor'];
$ano = $_POST['ano'];

if($ano <= 2000){
$desconto = $valor * 0.12;
$_SESSION['ate2000']++;
}else{
$desconto = $valor * 0.07;
}

$final = $valor - $desconto;

$_SESSION['total']++;

echo "Desconto: $desconto<br>";
echo "Valor final: $final<br><br>";

echo "Carros até 2000: ".$_SESSION['ate2000']."<br>";
echo "Total carros: ".$_SESSION['total'];
}
?>

</body>
</html>
