<!DOCTYPE html>
<html>
<body>

<h3>Lucro ou prejuízo</h3>

<form method="post">
Preço de custo: <input type="number" name="custo"><br><br>
Preço de venda: <input type="number" name="venda"><br><br>
<input type="submit">
</form>

<?php
session_start();

if(!isset($_SESSION['somaCusto'])){
$_SESSION['somaCusto']=0;
$_SESSION['somaVenda']=0;
$_SESSION['cont']=0;
}

if(isset($_POST['custo'])){

$custo=$_POST['custo'];
$venda=$_POST['venda'];

if($venda>$custo){
echo "Lucro<br>";
}elseif($venda<$custo){
echo "Prejuízo<br>";
}else{
echo "Empate<br>";
}

$_SESSION['somaCusto'] += $custo;
$_SESSION['somaVenda'] += $venda;
$_SESSION['cont']++;

echo "<br>Média custo: ".($_SESSION['somaCusto']/$_SESSION['cont']);
echo "<br>Média venda: ".($_SESSION['somaVenda']/$_SESSION['cont']);
}
?>

</body>
</html>