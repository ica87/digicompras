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
.style1 {color: #FF0000}
.style4 {color: #0000FF; font-weight: bold; }
-->
</style></head>

<body>
<p><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
?>


</p>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p>&nbsp;</p>
<form action="editar_comentarios.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione o c&oacute;digo do coment&aacute;rio para edi&ccedil;&atilde;o <br></td>
      <td width="10%"><select name="codigo" id="select4">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from comentarios order by codigo desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="55%"><input type="submit" name="Submit" value="Editar Coment&aacute;rio"></td>
    </tr>
  </table>
</form>
<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from comentarios order by codigo desc";
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
<span class="style1"><span class="style4">Código</span>:</span> <? printf("$linha[0]<br>"); ?>
<span class="style1"><span class="style4">Nome</span>:</span> <? printf("$linha[1]<br>"); ?>
<span class="style1"><span class="style4">Cidade</span>:</span> <? printf("$linha[2]<br>"); ?>
<span class="style1"><span class="style4">Comentário</span>:</span> <? printf("$linha[3]<br>"); ?>
<span class="style1"><span class="style4">Aprovado</span>:<? printf("$linha[4]<br>"); ?></span>


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
