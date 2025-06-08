<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>
<html>
<head>
<title>EDI&Ccedil;&Atilde;O DE CAMPANHA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<p>        <?
require '../../conect/conect.php';


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
<p class="style2">Edi&ccedil;&atilde;o de Campanhas </p>
<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<form action="editar.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione o c&oacute;digo da Campanha para edi&ccedil;&atilde;o<br></td>
      <td width="25%"><select name="codigo" id="select4">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from campanhas order by codigo";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['codigo']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="40%"><input type="submit" name="Submit" value="Editar">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?></td>
    </tr>
  </table>
</form>
<?



$sql = "select * from campanhas order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
echo "<tr>";
$reg++;
?>
<td>
<br>
<span class="style1">Código:</span> <? printf("$linha[0]<br>"); ?>
<span class="style1">Campanha:</span> <? printf("$linha[1]<br>"); ?>
<span class="style1">Status:</span> <? printf("$linha[2]<br>"); ?>
<span class="style1">Data de início:</span> <? printf("$linha[3]<br>"); ?>
<span class="style1">Data de término:</span> <? printf("$linha[4]<br>"); ?>

</td>
<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

<? } ?>

<p>&nbsp;</p>
</body>
</html>
