<!DOCTYPE html>
<html>
<body>
<form method="post">
    Número <input name="n"><br><br>
    <input type="submit">
</form>
<?php
session_start();
if(!isset($_SESSION['cont'])) $_SESSION['cont']=0;
if(isset($_POST['n'])){
if($_POST['n']>=10 && $_POST['n']<=150)
$_SESSION['cont']++;
echo "Quantidade: ".$_SESSION['cont'];
}
?>

</body>
</html>


