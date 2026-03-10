<!DOCTYPE html>
<html>
<body>

<h3>Cadastro de pessoas</h3>

<form method="post">
Nome: <input type="text" name="nome"><br><br>
Sexo (M/F): <input type="text" name="sexo"><br><br>
<input type="submit" value="Cadastrar">
</form>

<?php
session_start();

if(!isset($_SESSION['homens'])){
$_SESSION['homens'] = 0;
$_SESSION['mulheres'] = 0;
}

if(isset($_POST['nome'])){
$nome = $_POST['nome'];
$sexo = strtoupper($_POST['sexo']);

if($sexo == "M"){
echo "$nome é homem<br>";
$_SESSION['homens']++;
}else{
echo "$nome é mulher<br>";
$_SESSION['mulheres']++;
}

echo "Total homens: ".$_SESSION['homens']."<br>";
echo "Total mulheres: ".$_SESSION['mulheres']."<br>";
}
?>

</body>
</html>