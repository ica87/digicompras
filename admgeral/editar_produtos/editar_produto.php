<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_editar_produtos.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
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

$codigo = $_POST['codigo'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM produtos where codigo = '$codigo'";
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

        <p><strong><font color="#0000FF" size="4">Altera&ccedil;&atilde;o de produtos!</font></strong> <font color="#0000FF"><strong>Preencha todos os campos! </strong></font>            </p>
        <p><a href="selecione_codigo_para_edicao.php">Voltar</a><br>
        </p></td>
    <tr>
      <td><strong><font color="#0000FF">C&oacute;digo Atual </font></strong></td>
      <td><font color="#666666"><?echo $codigo; ?>
        <input name="codigo" type="hidden" id="codigo" value="<?echo $codigo; ?>">
      </font></td>
    </tr>
    <tr>
      <td><font color="#0000FF"><strong>C&oacute;digo Novo </strong></font></td>
      <td><input name="codigo_novo" type="text" id="codigo_novo" value="<? echo $linha[0]; ?>" /></td>
    </tr>
    <tr> 
      <td width="16%"><font color="#0000FF"><strong>Produto</strong></font></td>
      <td width="84%"><input name="produto" type="text" id="produto" value="<? echo $linha[2]; ?>" /></td>
    </tr>
    <tr> 
      <td><strong><font color="#0000FF">Categoria</font></strong></td>
      <td><select name="categoria" id="categoria">
	  <option><? echo $linha[3]; ?></option>
	  <?


    $sql = "select * from categorias order by categoria";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['categoria']. ">".$x['categoria']."</option>";
    }
?>
            </select></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Sub Categoria</font></strong></td>
      <td><select name="sub_categoria" id="sub_categoria">
	  <option><? echo $linha[4]; ?></option>
        <?


    $sql = "select * from sub_categorias order by sub_categoria";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['sub_categoria']. ">".$x['sub_categoria']."</option>";
    }
?>
            </select></td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong>Descri&ccedil;&atilde;o</strong></font></td>
      <td><textarea name="descricao" cols="50" id="descricao" type="textarea"><? echo $linha[5]; ?></textarea></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pre&ccedil;o</font></strong></td>
      <td><input name="preco" type="text" id="preco" value="<? echo $linha[6]; ?>" /></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Alterar dados do Produto">
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
