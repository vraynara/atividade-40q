<!DOCTYPE html>
<html>
<body>
<form method="post">
Nome <input name="nome"><br>
N1 <input name="n1"><br>
N2 <input name="n2"><br>
N3 <input name="n3"><br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['nome'])){
$m=($_POST['n1']+$_POST['n2']+$_POST['n3'])/3;

echo "Aluno: ".$_POST['nome']."<br>";
echo "Média: $m<br>";

if($m>=7) echo "Aprovado";
elseif($m<=5) echo "Reprovado";
else echo "Recuperação";
}
?>

</body>
</html>


