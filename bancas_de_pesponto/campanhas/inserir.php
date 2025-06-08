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
<title>CRIAR CAMPANHA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?
require '../../conect/conect.php';

?>
<form name="form2" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<form action="grava.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="4">        <?


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
</td>
    </tr>
    <tr>
      <td width="20%">&nbsp;</td>
      <td width="80%" colspan="3"><strong><font color="#0000FF" size="4">Tela de cadastro de Campanhas!</font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr> 
      <td><strong><font color="#0000FF">Nome da Campanha </font></strong></td>
      <td colspan="3"><input name="campanha" type="text" id="campanha"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Satus</font></strong></td>
      <td colspan="3"><select name="status" id="status">
        <option selected>ATIVA</option>
        <option>INATIVA</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF">VIG&Ecirc;NCIA</font></strong></div></td>
    </tr>
    <tr>
      <td><div align="right"><strong><font color="#0000FF">Data in&iacute;cio </font></strong></div></td>
      <td><input name="data_inicio" type="text" id="data_inicio"></td>
      <td><div align="right"><strong><font color="#0000FF">Data t&eacute;rmino </font></strong></div></td>
      <td><input name="data_final" type="text" id="data_final"></td>
    </tr>
    <tr> 
      <td><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?></td>
      <td colspan="3"><input type="submit" name="Submit" value="Gravar Campanha">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
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

<p>&nbsp; </p>
</body>

</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>

