<?
error_reporting(E_ALL);

//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

$barra_lat_esq = $_POST['barra_lat_esq'];


$comando = "insert into b_lat_esq(barra_lat_esq) values('$barra_lat_esq')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");

mysql_close($conexao);

echo "Cor da barra lateral esquerda inserida com sucesso pela 1º vez no sistema!<br>A partir de agora utilize apenas a opção ";


?>
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p><img src="http://www.digicompras.com.br/imagens/logo-transp.png"></p>
<p><a href="../menu.php" target="navegacao">Voltar</a> 
</p>
</body>
</html>
