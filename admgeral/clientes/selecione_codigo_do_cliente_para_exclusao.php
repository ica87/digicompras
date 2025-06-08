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
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style></head>

<body>
<p><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);



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
<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>
<p>&nbsp;</p>
<form action="excluir_cliente.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione o c&oacute;digo do cliente para exclus&atilde;o <br></td>
      <td width="10%"><select name="codigo" id="select4">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from clientes order by codigo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="55%"><input type="submit" name="Submit" value="Excluir Cliente">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from clientes order by nfantasia asc";
//$sql = "SELECT fabricante FROM veiculos where='Diversos'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
//while($linha=mysql_fetch_row($res)) {
$reg++;
?>
<td>
<br>
<span class="style1">Nome Fantasia:</span> <? printf("$linha[3] - "); ?>

</td>
<td>
<span class="style1">Código:</span> <? printf("$linha[0]<br>"); ?>
</td>
<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

<? } ?>
</body>
</html>
