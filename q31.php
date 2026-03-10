<!DOCTYPE html>
<html>
<body>

<form method="post">
A <input name="a"><br>
B <input name="b"><br>
C <input name="c"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['a'])){
$nums=[ $_POST['a'],$_POST['b'],$_POST['c'] ];
sort($nums);

echo "Ordem crescente: ";
foreach($nums as $n){
echo $n." ";
}
}
?>

</body>
</html>