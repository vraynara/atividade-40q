<!DOCTYPE html>
<html>
<body>

<h3>Venda de veículos</h3>

<form method="post">
Valor do veículo: <input type="number" name="valor"><br><br>

Combustível:
<select name="combustivel">
<option value="alcool">Álcool</option>
<option value="gasolina">Gasolina</option>
<option value="diesel">Diesel</option>
</select>

<br><br>
<input type="submit" value="Calcular">
</form>

<?php
session_start();

if(!isset($_SESSION['totalDesconto'])){
$_SESSION['totalDesconto'] = 0;
$_SESSION['totalPago'] = 0;
}

if(isset($_POST['valor'])){

$valor = $_POST['valor'];
$combustivel = $_POST['combustivel'];

if($combustivel == "alcool"){
$desconto = $valor * 0.25;
}elseif($combustivel == "gasolina"){
$desconto = $valor * 0.21;
}else{
$desconto = $valor * 0.14;
}

$final = $valor - $desconto;

$_SESSION['totalDesconto'] += $desconto;
$_SESSION['totalPago'] += $final;

echo "Desconto: $desconto<br>";
echo "Valor final: $final<br><br>";

echo "Total de descontos: ".$_SESSION['totalDesconto']."<br>";
echo "Total pago pelos clientes: ".$_SESSION['totalPago'];
}
?>

</body>
</html>