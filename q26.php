<!DOCTYPE html>
<html>
<body>

<form method="post">
Número 1-5 <input name="n"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['n'])){
switch($_POST['n']){
case 1: echo "Um"; break;
case 2: echo "Dois"; break;
case 3: echo "Três"; break;
case 4: echo "Quatro"; break;
case 5: echo "Cinco"; break;
default: echo "Inválido";
}
}
?>

</body>
</html>
