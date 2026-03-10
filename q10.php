<!DOCTYPE html>
<html>
<body>

<form method="post">
Valor compra <input type="number" name="v"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['v'])){
echo "Prestação: ".($_POST['v']/5);
}
?>

</body>
</html>
