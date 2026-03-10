<!DOCTYPE html>
<html>
<body>

<form method="post">
Nome <input name="nome"><br>
Sexo <input name="sexo"><br>
Salário <input name="sal"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['nome'])){
$sal=$_POST['sal'];

if($_POST['sexo']=="M")
$sal=$sal+($sal*0.05);
else
$sal=$sal+($sal*0.10);

echo "Funcionário: ".$_POST['nome']."<br>";
echo "Salário líquido: $sal";
}
?>

</body>
</html>
