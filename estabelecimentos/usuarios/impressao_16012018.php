<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>

<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
.style2 {	color: #0000FF;
	font-weight: bold;
}
.style1 {font-size: 35px;
	font-weight: bold;
	color: #0000FF;
}
</style>
</head>

<?

require '../../conect/conect.php';
include '../../css/botoes.css';

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_operador = $linha[0];

$nome_operador = $linha[1];

$estab_pertence_com = $linha[44];


}


$codigo = $_POST['codigo'];
$date_impressao = date('Y-m-d');
$hora_impressao = date('H:i:s');



$sql = "select * from usuarios where codigo = '$codigo'limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];

$nome = $linha[1];

}


$comando = "insert into impressao_de_cartao(num_cartao,date_impressao,hora_impressao,quem_imprimiu,quant_impressao) values('$codigo','$date_impressao','$hora_impressao','$estab_pertence_com','1')";

mysql_query($comando,$conexao) or die("Erro ao gravar impress�o de cartao!");


$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p>&nbsp;</p>
<link rel="stylesheet" type="text/css" href="estilo.css"/>
<div id="picture"><img src="fundo_navegacao_site.jpg" width="450" height="278" alt="Cartao Fidelidade"></img></div>
<h2>
<strong><? echo "N $codigo <br> $nome"; ?></strong>
</h2>
</body>
</html>
