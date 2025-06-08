<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_produtos.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td><a href="escolha_de_categoria.php">Voltar</a></td>
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

<?
$categoria = $_POST['categoria'];
?>


<br>
<strong><font color="#0000FF" size="4">Tela de cadastro de produtos!
<input name="data_hora" type="hidden" id="data_hora" value="<? echo date ('d-m-Y H:i:s'); ?>">
</font></strong></td>
    <tr>
      <td><font color="#0000FF"><strong>Refer&ecirc;ncia</strong></font></td>
      <td><input name="referencia" type="text" id="referencia"></td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong>Foto 1 </strong></font></td>
      <td><input name="foto" type="file" id="arquivo2"> 
      * Obrigat&oacute;ria </td>
    </tr>
    <tr>
      <td><font color="#0000FF"><strong>Material</strong></font></td>
      <td><select name="material" id="select5">
        <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
            </select></td>
    </tr>
    <tr>
      <td><font color="#0000FF"><strong>Cor</strong></font></td>
      <td><select name="cor" id="select2">
        
        <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr> 
      <td width="16%"><font color="#0000FF"><strong>Sola</strong></font></td>
      <td width="84%"><select name="sola" id="select3">
        
        <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Forro</font></strong></td>
      <td><select name="forro" id="select4">
        
        <?


    $sql = "select * from forros order by forro asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['forro']. ">".$x['forro']."</option>";
    }
?>
      </select></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Numera&ccedil;&atilde;o</font></strong></td>
      <td><input name="numeracao" type="text" id="numeracao"></td>
    </tr>
    <tr> 
      <td><strong><font color="#0000FF">Categoria</font></strong></td>
      <td>
<?
echo $categoria;
?>
<input name="categoria" type="hidden" id="categoria" value="<? echo $categoria; ?>"></td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF">Sub Categoria</font></strong></td>
      <td><select name="sub_categoria" id="sub_categoria">
        <?


    $sql = "select * from sub_categorias where categoria = '$categoria' order by sub_categoria";
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
