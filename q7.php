<!DOCTYPE html>
<html>
<body>
<form method="post">
Celsius <input type="number" name="c"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['c'])){
$c=$_POST['c'];
$f=($c*1.8)+32;
echo "Fahrenheit: $f";
}
?>
</body>
</html>



