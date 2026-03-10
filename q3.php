<!DOCTYPE html>
<html>
<body>
<h3>Consumo médio</h3>
<form method="post">
Distância: <input type="number" step="any" name="d"><br><br>
Combustível: <input type="number" step="any" name="c"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['d'])){
$d=$_POST['d'];
$c=$_POST['c'];
echo "Consumo médio: ".($d/$c)." km/l";
}
?>
</body>
</html>
