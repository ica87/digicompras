<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_produtos.php" method="post" enctype="multipart/form-data" name="form1">
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
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Tela de Edi&ccedil;&atilde;o de categoria!</font></strong></td>
    </tr>
    <tr>
      <td><a href="menu.php">Voltar</a></td>
      <td><strong><font color="#FF0000">Aten&ccedil;&atilde;o!</font></strong></td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong></strong></font></td>
      <td><strong><font color="#FF0000">A mudan&ccedil;a de nome de Sub categoria afetar&aacute; todos os produtos que estiverem relacionados a ela, devendo ser atualizado todos os produtos para o novo nome da sub categoria! </font></strong></td>
    </tr>
    <tr> 
      <td width="11%"><font color="#0000FF"><strong></strong></font></td>
      <td width="89%"><a href="selecione_codigo_sub_categoria_edicao.php"><font color="#0000FF"><strong>Alterar nome de Sub Categoria</strong></font></a></td>
    </tr>
    <tr> 
      <td><font color="#0000FF">&nbsp;</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><strong><font color="#FF0000">Aten&ccedil;&atilde;o!</font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#FF0000">A mudan&ccedil;a de rela&ccedil;&atilde;o &agrave; categoria for alterada, isso afetar&aacute; todos os produtos relacionados a ela.</font></strong></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><a href="selecione_codigo_sub_categoria_altera_categoria.php"><strong>Alterar Sub categoria relacionada </strong></a></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
