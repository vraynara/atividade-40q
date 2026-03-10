<!DOCTYPE html>
<html>
<body>

<form method="post">
A <input type="number" name="a"><br>
B <input type="number" name="b"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['a'])){
if($_POST['a']>$_POST['b'])
echo "Maior: ".$_POST['a'];
else
echo "Maior: ".$_POST['b'];
}
?>

</body>
</html>

