<?
error_reporting(E_ALL);

//require('file:///F|/webs/pedcell/conexao.php') or die("Erro ao incluir arquivo");
require '../../conect/conect.php';

$condpagto = $_POST['condpagto'];


$comando = "insert into cond_pagto(condpagto) values('$condpagto')";

mysql_query($comando,$conexao) or die("Erro ao gravar dados");


echo "Condição de pagto gravada com sucesso<br>";


?>
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<p>	  <?
//SE CONECTA AO BANCO DE DADOS DIGICOMPRAS


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit" value="Voltar">
</form>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>
