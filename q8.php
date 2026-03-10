<!DOCTYPE html>
<html>
<body>
<form method="post">
Cotação dólar <input type="number" step="any" name="cot"><br><br>
Dólares <input type="number" step="any" name="dol"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['cot'])){
echo "Reais: ".($_POST['cot']*$_POST['dol']);
}
?>
</body>
</html>
