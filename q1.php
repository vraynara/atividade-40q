<DOCTYPE html>
<html>
<body>
<h3>Soma</h3>
<form method="post">
    Número 1: <input type="number" name="a"><br><br>
    Número 2: <input type="number" name="b"><br><br>
    <input type="submit">
</form>
<?php
if(isset($_POST['a'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    echo "Soma = ".($a+$b);
}
?>
</body>
</html>


