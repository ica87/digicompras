<?
error_reporting(E_ALL);

//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

//$foto = $_FILES['foto']['name'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];

//$uploaddir = '../imagens/';
//$uploadfile = $uploaddir. $_FILES['foto']['name'];

//if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $_FILES['foto']['name'])){
//echo "Arquivo enviado com sucesso!";
//} else {
//echo "Erro no envio do arquivo";
//}

$comando = "insert into servicos(servico,descricao) values('$servico','$descricao')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");

mysql_close($conexao);

echo "Serviço gravado com sucesso<br>";


?>
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p><img src="http://www.digicompras.com.br/imagens/logo-transp.png"></p>
<p><a href="menu.php">Voltar</a> 
</p>
</body>
</html>
