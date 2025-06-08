<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
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
<p><?
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
<p class="style2">Selecione o c&oacute;digo do solado a ser alterado!</p>
<p><a href="menu.php">Voltar</a></p>
<form action="altera_solado.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="35%">Selecione o c&oacute;digo. do solado a ser editado<br></td>
      <td width="25%"><select name="codigo" id="select4">
        <option value="null" selected>Selecione
        <?


    $sql = "select * from solados order by codigo";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="40%"><input type="submit" name="Submit" value="Editar"></td>
    </tr>
  </table>
</form>
<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from solados order by solado";
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
<span class="style1">Solado:</span> <? printf("$linha[1]<br>"); ?>

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
