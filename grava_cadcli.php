<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<?
//require("conexao.php"); or die("erro na requisição");
require 'conect/conect.php';



$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>
<?
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$comando = "insert into operadores(nome,telefone,email,celular,usuario,senha,status) values('$nome','$telefone','$email','$celular','$usuario','$senha','Ativo')";

mysql_query($comando,$conexao) or die("Erro ao gravar usuario em nosso Banco de Dados!<br> Por favor tente novamente preenchendo todos os campos obrigatórios!");

mysql_close($conexao);

echo "Parabéns!<br><br>Você foi cadastrado com sucesso!<br><br>Agradecemos o seu respeitável cadastro e seja muito bem vindo!<br><br>Agora você já faz parte do nosso prestigioso grupo de usuários";

?>




<form name="form1" method="post" action="cadcli_insert.php">
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
