<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form action="grava_sub_categoria.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%" border="0" cellspacing="10">

    <tr>

      <td colspan="2">        <?

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

</td>

    </tr>

    <tr>

      <td width="20%">&nbsp;</td>

      <td width="80%"><strong><font color="#0000FF" size="4">Tela de cadastro de Sub Categorias de depsesas!</font></strong></td>

    </tr>

    <tr>

      <td><a href="menu.php">Voltar</a></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td><font color="#0000FF"><strong><font color="#0000FF">Sub ategoria:</font></strong></font></td>

      <td><input name="sub_categoria" type="text" id="sub_categoria"></td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">Pertence a categoria </font></strong></td>

      <td><select name="categoria" id="categoria">

        <option value="null" selected>Selecione

        <?





    $sql = "select * from categorias_despesas order by categoria";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['categoria']."</option>";

    }

?>

        </option>

      </select></td>

    </tr>

    <tr> 

      <td>&nbsp;</td>

      <td><input type="submit" name="Submit" value="Gravar Sub Categoria">

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

$sql = "select * from sub_categorias_despesas order by sub_categoria";

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

<span class="style1">C�digo:</span> <? printf("$linha[0]<br>"); ?>

<span class="style1">Sub Categoria despesa:</span> <? printf("$linha[2]<br>"); ?>

<span class="style1">Pertence � Categoria:</span> <? printf("$linha[1]<br>"); ?>



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



