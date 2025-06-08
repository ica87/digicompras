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
<title>Untitled Document</title>
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
</style>
</head>

			<?
			
require '../../conect/conect.php';
			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>



<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p>&nbsp;</p>
<form name="form1" method="post" action="grava_editar_comentario.php">
  <table width="100%"  border="0">
  <?  

$codigo = $_POST['codigo'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM comentarios where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);
$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

		  
?>

    <tr>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td width="11%">Nome</td>
      <td width="45%"><input name="nome" type="text" id="nome" value="<? echo $linha[1]; ?>" size="50" maxlength="50">
      <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo;?>"></td>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade" value="<? echo $linha[2]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Coment&aacute;rio</td>
      <td><textarea name="comentario" cols="50" wrap="PHYSICAL" id="comentario"><? echo $linha[3]; ?></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Aprovado</td>
      <td><select name="aprovado" id="aprovado">
        <option><? echo $linha[4]; ?></option>
        <option>Sim</option>
        <option>N&atilde;o</option>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Autorizar Coment&aacute;rio">
      <input type="reset" name="Submit2" value="Limpar"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
		          <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>

  </table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
