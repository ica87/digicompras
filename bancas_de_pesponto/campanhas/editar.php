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
<title>ALTERANDO CAMPANHA</title>
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
.style3 {
	color: #0000FF;
	font-weight: bold;
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


}
 ?>



</p>
<p class="style2">Altera&ccedil;&atilde;o de Campanha.  </p>
<form name="form1" method="post" action="selecione_codigo_campanha_edicao.php">
  <input type="submit" name="Submit" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<form action="autalizar.php" method="post" enctype="multipart/form-data" name="form1">
<?
$codigo = $_POST['codigo'];


$sql = "select * from campanhas where codigo = '$codigo' order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
echo "<tr>";
$reg++;

$codigo = $linha[0];
$campanha = $linha[1];
$status = $linha[2];
$data_inicio = $linha[3];
$data_final = $linha[4];
}
?>
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="4">
      </td>
    </tr>
    <tr>
      <td width="20%">&nbsp;</td>
      <td width="80%" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style3">C&oacute;digo</span></td>
      <td colspan="3"><? echo $codigo; ?>
      <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Nome da Campanha </font></strong></td>
      <td colspan="3"><input name="campanha" type="text" id="campanha" value="<? echo $campanha; ?>"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Satus</font></strong></td>
      <td colspan="3"><select name="status" id="status">
          <option selected><? echo $status; ?></option>
          <option>ATIVA</option>
          <option>INATIVA</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF">VIG&Ecirc;NCIA</font></strong></div></td>
    </tr>
    <tr>
      <td><div align="right"><strong><font color="#0000FF">Data in&iacute;cio </font></strong></div></td>
      <td><input name="data_inicio" type="text" id="data_inicio" value="<? echo $data_inicio; ?>"></td>
      <td><div align="right"><strong><font color="#0000FF">Data t&eacute;rmino </font></strong></div></td>
      <td><input name="data_final" type="text" id="data_final" value="<? echo $data_final; ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" name="Submit2" value="Alterar campanha">
          <input type="reset" name="Submit2" value="Limpar">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
</option>
            <td width="25%">&nbsp;</td>
        </tr>
        <tr>
        </tr>
  </table>
</form>

<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from sub_categorias order by sub_categoria";
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
<span class="style1">Código:</span> <? printf("$linha[0]<br>"); ?>
<span class="style1">Sub Categoria:</span> <? printf("$linha[1]<br>"); ?>

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
