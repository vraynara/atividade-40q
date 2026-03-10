<!DOCTYPE html>
<html>
<body>

<form method="post">
Número <input type="number" name="n"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['n'])){
if($_POST['n']>10){
echo "Maior que 10";
}
}
?>

</body>
</html>
