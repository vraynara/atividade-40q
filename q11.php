<!DOCTYPE html>
<html>
<body>
<form method="post">
    Custo <input type="number" name="c"><br><br>
    Percentual <input type="number" name="p"><br><br>
    <input type="submit">
</form>
<?php
if(isset($_POST['c'])){
$c=$_POST['c'];
$p=$_POST['p'];
echo "Venda: ".($c+($c*$p/100));
}
?>

</body>
</html>


