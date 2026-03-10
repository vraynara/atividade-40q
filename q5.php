
<!DOCTYPE html>
<html>
<body>
<h3>Média aluno</h3>
<form method="post">
Nome <input type="text" name="nome"><br><br>
Nota1 <input type="number" name="n1"><br><br>
Nota2 <input type="number" name="n2"><br><br>
Nota3 <input type="number" name="n3"><br><br>
<input type="submit">
</form>
<?php
if(isset($_POST['nome'])){
$media=($_POST['n1']+$_POST['n2']+$_POST['n3'])/3;

echo "Aluno: ".$_POST['nome']."<br>";
echo "Média: $media";
}
?>
</body>
</html>

