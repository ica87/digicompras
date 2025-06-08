<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
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
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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

mysql_query($comando,$conexao) or die("Erro ao gravar impressão de cartao!");


$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/">
<p>&nbsp;</p>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="48%"><div align="right">
      <div id="picture"><img src="../../cartao_fidelidade/frente_cartao.jpg" width="450" height="278" alt="Cartao Fidelidade"></img>
      <link rel="stylesheet" type="text/css" href="../../cartao_fidelidade/estilo.css"/>
<h2>
  <strong><? echo "N $codigo <br> $nome"; ?></strong>
</h2>
      </div>
    </div></td>
    <td width="52%"><div id="picture2"><img src="../../cartao_fidelidade/verso_cartao.jpg" width="450" height="278" alt="Cartao Fidelidade"></img></div></td>
  </tr>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><strong>Sugest&atilde;o</strong></p>
<p align="center"><strong>Imprima, Recorte, Dobre e Plastifique</strong></p>
</body>
</html>
