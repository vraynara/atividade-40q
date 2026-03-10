<!DOCTYPE html>
<html>
<body>
<form method="post">
Valor <input type="number" name="v"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['v'])){
$v=$_POST['v'];
$total=$v+($v*0.007);
echo "Valor após 1 mês: $total";
}
?>
</body>
</html>

