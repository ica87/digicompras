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
.style4 {font-weight: bold; color: #FF0000; }
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
?>
<?
printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</p>
<p class="style2">Troca de categoria relacionada &agrave; categoria</p>
<p><a href="menu.php">Voltar</a></p>
<form action="atualizar_sub_categoria_alterar_categoria.php" method="post" name="form2">
  <table width="100%"  border="0">
        <tr>
          <td width="41%">
		  
		<?
$codigo = $_POST['codigo'];


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from sub_categorias where codigo = '$codigo'";
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
?> <span class="style4">Sub Categoria a ser afetada
        </span>		<?
echo $linha[1];
?>  
		  
		  </td>
          <td width="34%"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>
          <td width="25%">&nbsp;</td>
        </tr>
        <tr>
          <td height="40">Indique a nova categoria a que a sub categoria pertencer&aacute; </td>
          <td><select name="categoria" id="select3">
            <option selected><? echo $linha[2]; ?></option>
            <?


    $sql = "select * from categorias order by categoria";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['categoria']. ">".$x['categoria']."</option>";
    }
?>
            
          </select></td>
          <td><input type="submit" name="Submit2" value="Atualizar"></td>
        </tr>
  </table>
</form>
            </option>
          </select></td>
          <td width="25%">&nbsp;</td>
        </tr>
        <tr>
        </tr>
  </table>
            <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>

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
<span class="style1">Pertencente à categoria:</span> <? printf("$linha[2]<br>"); ?>

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
