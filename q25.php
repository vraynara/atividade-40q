<!DOCTYPE html>
<html>
<body>

<h3>Comparar números</h3>

<form method="post">
Número 1: <input type="number" name="a"><br><br>
Número 2: <input type="number" name="b"><br><br>
<input type="submit" value="Comparar">
</form>

<?php
if(isset($_POST['a'])){
$a = $_POST['a'];
$b = $_POST['b'];

if($a == $b){
echo "Os números são iguais";
}else{
echo "Os números são diferentes<br>";

if($a > $b){
echo "Maior número: $a";
}else{
echo "Maior número: $b";
}
}
}
?>

</body>
</html>