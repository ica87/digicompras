<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_marca.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">        
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
</td>
    </tr>
    <tr>
      <td width="24%">&nbsp;</td>
      <td width="76%"><strong><font color="#0000FF" size="4">Tela de cadastro de marcas!</font></strong></td>
    </tr>
    <tr>
      <td><a href="menu.php">Voltar</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong>Marca<font color="#0000FF">:</font></strong></font></td>
      <td><input name="marca" type="text" id="marca"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pertence a que tipo de ve&iacute;culo</font></strong></td>
      <td><select name="tipo_veiculo" id="tipo_veiculo">
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
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravarmarca">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
<span class="style1">Pertence ao tipo de ve&iacute;culo:</span> <? printf("$linha[2]<br>"); ?>

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

