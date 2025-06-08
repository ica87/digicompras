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
.style3 {	color: #FF0000;
	font-size: 14px;
}
-->
</style>
</head>

<body>
<p>        
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
</p>
<p class="style2">Altera&ccedil;&atilde;o de marca relacionada<span class="style3">Aten&ccedil;&atilde;o! Amudan&ccedil;a do tipo de ve&iacute;culo relacionada afetar&aacute; todos os produtos relacionados a ela, voc&ecirc; dever&aacute; alerar todos eles.</span></p>
<p><a href="editar_marca.php">Voltar</a></p>
<form action="atualizar_marca_relacionada_a_tipo_veiculo.php" method="post" name="form2">
  <table width="100%"  border="0">
        <tr>
          <td width="41%">Selecione o c&oacute;digo da marca a ser alterada </td>
          <td width="34%"><select name="codigo" id="codigo">
            <option value="null" selected>Selecione
            <?


    $sql = "select * from marca order by codigo";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";
    }
?>
            </option>
          </select></td>
          <td width="25%">&nbsp;</td>
        </tr>
        <tr>
          <td height="40">Indique o novo tipo de ve&iacute;culo a que a marca pertencer&aacute; </td>
          <td><select name="tipo_veiculo" id="select3">
            <option value="null" selected>Selecione
            <?


    $sql = "select * from tipo_veiculo order by tipo_veiculo";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['tipo_veiculo']. ">".$x['tipo_veiculo']."</option>";
    }
?>
            </option>
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
</form>

<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from marca order by marca";
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
<span class="style1">Marca:</span> <? printf("$linha[1]<br>"); ?>
<span class="style1">Pertencente ao tipo de ve&iacute;culo:</span> <? printf("$linha[2]<br>"); ?>

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
