<?
error_reporting(E_ALL);

require 'conect/conect.php';

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$comentario = $_POST['comentario'];


$comando = "insert into comentarios(nome,cidade,comentario,aprovado) values('$nome','$cidade','$comentario','Não')";


mysql_query($comando,$conexao) or die("Erro ao gravar os dados no servidor!");


echo "Comentário enviado com sucesso!<br><br> Agradecemos seu comentário!";

?>

<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
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
mysql_close($conexao);

?>
<br>
<form name="form1" method="post" action="inserir_comentarios.php">
  <input type="submit" name="Submit" value="Voltar">
</form>
</body>
</html>
