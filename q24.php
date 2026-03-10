<!DOCTYPE html>
<html>
<body>

<h3>Verificar número</h3>

<form method="post">
Número: <input type="number" name="num"><br><br>
<input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['num'])){
$num = $_POST['num'];

if($num > 0){
echo "Positivo";
}elseif($num < 0){
echo "Negativo";
}else{
echo "Zero";
}
}
?>

</body>
</html>