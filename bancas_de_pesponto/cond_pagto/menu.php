<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">	  <?
//SE CONECTA AO BANCO DE DADOS DIGICOMPRAS
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

          <? } ?></td>
    </tr>
    <tr>
      <td width="19%">&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Oque deseja fazer com as condi&ccedil;&otilde;es de pagto?</font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="menu.php">
        <input type="submit" name="Submit" value="Voltar">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form2" method="post" action="cond_pagto_insert.php">
        <input type="submit" name="Submit2" value="Inserir Condi&ccedil;&otilde;es de pagto ">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="selecione_codigo_edicao_cond_pagto.php">
        <input type="submit" name="Submit3" value="Editar condi&ccedil;&otilde;es de pagto ">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form4" method="post" action="selecione_codigo_exclusao_cond_pagto.php">
        <input type="submit" name="Submit4" value="Excluir condi&ccedil;&atilde;o de pagto ">
      </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
