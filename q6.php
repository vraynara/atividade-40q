<!DOCTYPE html>
<html>
<body>
<form method="post">
A <input type="number" name="a"><br><br>
B <input type="number" name="b"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['a'])){
$a=$_POST['a'];
$b=$_POST['b'];

$temp=$a;
$a=$b;
$b=$temp;

echo "Novo A: $a<br>";
echo "Novo B: $b";
}
?>
</body>
</html>

