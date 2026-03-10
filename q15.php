<!DOCTYPE html>
<html>
<body>

<form method="post">
Número <input type="number" name="n"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['n'])){
if($_POST['n']>=100 && $_POST['n']<=200)
echo "Entre 100 e 200";
else
echo "Fora";
}
?>

</body>
</html>
