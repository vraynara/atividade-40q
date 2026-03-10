<!DOCTYPE html>
<html>
<body>

<form method="post">
Número <input name="n"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['n'])){
$n=$_POST['n'];

if($n>80) echo "Maior que 80";
elseif($n<25) echo "Menor que 25";
elseif($n==40) echo "Igual a 40";
}
?>

</body>
</html>

