<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_editar_produtos.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td width="16%"><a href="selecione_codigo_para_colocar_em_oferta.php">Voltar</a></td>
      <td width="84%">

<?
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

printf("<a href='index.php' target='_top'><img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
<?  

$referencia = $_POST['referencia'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where referencia = '$referencia'";
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
<? printf("<a href='../../imagens/$linha[1]' target='_blank'><img src='../../imagens/$linha[1]' border='0' width='80' height='96'></a>"); ?>

<strong><font color="#0000FF" size="4">Altera&ccedil;&atilde;o de produtos!</font></strong> <font color="#0000FF"><strong>Preencha todos os campos! </strong></font>
<br>
</td>
    <tr>
      <td><strong><font color="#0000FF">Referencia Afetada</font></strong></td>
      <td><font color="#666666"><? echo $referencia; ?>
        <input name="referencia" type="hidden" id="referencia" value="<?echo $referencia; ?>">
      </font></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pre&ccedil;o</font></strong></td>
      <td>      <input name="preco" type="text" id="preco" value="<? echo $linha[10]; ?>"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Colocar em Oferta?</font></strong></td>
      <td><select name="oferta" id="oferta">
	  <option selected><? echo $linha[11]; ?></option>
        <option>Sim</option>
        <option>N&atilde;o</option>
      </select></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pre&ccedil;o de oferta </font></strong></td>
      <td><input name="preco_oferta" type="text" id="preco_oferta" value="<? echo $linha[12]; ?>" /></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar altera&ccedil;&otilde;es dessa oferta">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
    <tr> 
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
<p>&nbsp; </p>
</body>
</html>
