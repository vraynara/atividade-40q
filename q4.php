<!DOCTYPE html>
<html>
<body>
<h3>Salário vendedor</h3>
<form method="post">
Nome <input type="text" name="nome"><br><br>
Salário <input type="number" name="salario"><br><br>
Vendas <input type="number" name="vendas"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['nome'])){
$nome=$_POST['nome'];
$salario=$_POST['salario'];
$vendas=$_POST['vendas'];

$total=$salario+($vendas*0.15);

echo "Nome: $nome<br>";
echo "Salário final: $total";
}
?>
</body>
</html>


