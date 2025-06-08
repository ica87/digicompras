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
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 16px;
}
.style2 {font-size: 18px; color: #0000FF;}
-->
</style>
</head>

<body>
<p>        <?
require '../../../conect/conect.php';


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
<form action="../menu.php" method="post" name="form1" target="_top">
  <input type="submit" name="Submit" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<p class="style1">Inseir cor pela 1&ordm; vez do fundo do cabe&ccedil;alho! insira o codigo hexadecimal ex: 0000ff.<br>
   Escolha na tabela abaixo, copie, cole e clique em atualizar
<form action="grava_cor_de_fundo_topo.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="27%">Cor de fundo da faixa intermedi&aacute;ria </td>
      <td width="24%"><input name="cor_fundo_topo" type="text" id="cor_fundo_topo"></td>
      <td width="49%"><input type="submit" name="Submit2" value="Atualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
