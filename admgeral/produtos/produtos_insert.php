<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_produtos.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td><a href="menu.php">Voltar</a></td>
      <td>

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

<br>
<strong><font color="#0000FF" size="4">Tela de cadastro de produtos!</font></strong></td>
    <tr>
      <td><font color="#0000FF"><strong>C&oacute;digo</strong></font></td>
      <td><input name="codigo" type="text" id="codigo"></td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong>Foto 1 </strong></font></td>
      <td><input name="foto" type="file" id="arquivo2"> 
      * Obrigat&oacute;ria </td>
    </tr>
    <tr>
      <td><font color="#0000FF"><strong>Foto 2 </strong></font></td>
      <td><input name="foto2" type="file" id="foto2"></td>
    </tr>
    <tr>
      <td><font color="#0000FF"><strong>Foto 3 </strong></font></td>
      <td><input name="foto3" type="file" id="foto3"></td>
    </tr>
    <tr>
      <td><font color="#0000FF"><strong>Foto 4 </strong></font></td>
      <td><input name="foto4" type="file" id="foto4"></td>
    </tr>
    <tr> 
      <td width="16%"><font color="#0000FF"><strong>Produto</strong></font></td>
      <td width="84%"><input name="produto" type="text" id="produto"></td>
    </tr>
    <tr> 
      <td><strong><font color="#0000FF">Categoria</font></strong></td>
      <td><select name="categoria" id="categoria">
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
      <td><textarea name="descricao" maxlength="100" cols="50" wrap="PHYSICAL" id="descricao"></textarea></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pre&ccedil;o</font></strong></td>
      <td><input name="preco" type="text" id="preco" value="Sob Consulta"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Colocar em Oferta?</font></strong></td>
      <td><select name="oferta" id="oferta">
        <option>Sim</option>
        <option selected>N&atilde;o</option>
      </select></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Pre&ccedil;o de oferta </font></strong></td>
      <td><input name="preco_oferta" type="text" id="preco_oferta"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Gravar Produto">
      <input type="reset" name="Submit2" value="Limpar"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
