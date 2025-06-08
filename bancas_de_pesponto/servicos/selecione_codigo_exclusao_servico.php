<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edi&ccedil;&atilde;o de produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p><img src="http://www.digicompras.com.br/imagens/logo-transp.png"></p>
<p><a href="menu.php">Voltar</a></p>
<form action="excluir_servico.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td width="30%">Selecione o c&oacute;digo para exclus&atilde;o <br></td>
      <td width="10%"><select name="codigo" id="select4">
        <option value="null" selected>Selecione
        <?

require '../../conect/conect.php';

    $sql = "select * from servicos order by codigo";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['codigo']. ">".$x['codigo']."</option>";
    }
?>
        </option>
      </select></td>
      <td width="60%"><input type="submit" name="Submit" value="Excluir"></td>
    </tr>
  </table>
</form>
<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "select * from servicos";
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
<span class="style1">C.I.:</span> <? printf("$linha[0]<br>"); ?>
<span class="style1">Serviço:</span> <? printf("$linha[1]<br>"); ?>
<span class="style1">Descrição:</span> <? printf("$linha[2]<br>"); ?>

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
