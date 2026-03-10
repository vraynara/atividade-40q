<!DOCTYPE html>
<html>
<body>
<form method="post">
Custo fábrica <input type="number" name="c"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['c'])){
$c=$_POST['c'];
$final=($c+($c*0.45));
$final=$final+($final*0.28);
echo "Consumidor: $final";
}
?>

</body>
</html>

