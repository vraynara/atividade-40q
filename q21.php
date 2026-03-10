<!DOCTYPE html>
<html>
<body>

<h3>Serviço Militar</h3>

<form method="post">
Nome: <input type="text" name="nome"><br><br>
Sexo (M/F): <input type="text" name="sexo"><br><br>
Idade: <input type="number" name="idade"><br><br>
Saúde (boa/ruim): <input type="text" name="saude"><br><br>
<input type="submit">
</form>

<?php
session_start();

if(!isset($_SESSION['aptos'])){
$_SESSION['aptos']=0;
$_SESSION['naoAptos']=0;
}

if(isset($_POST['nome'])){

$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$idade=$_POST['idade'];
$saude=$_POST['saude'];

if($sexo=="M" && $idade>=18 && $saude=="boa"){
echo "$nome está apto para o serviço militar<br>";
$_SESSION['aptos']++;
}else{
echo "$nome não está apto<br>";
$_SESSION['naoAptos']++;
}

echo "Total aptos: ".$_SESSION['aptos']."<br>";
echo "Total não aptos: ".$_SESSION['naoAptos'];
}
?>

</body>
</html>