<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_texto_pagina_inicial.php" method="post" enctype="multipart/form-data" name="form1">
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
      <td width="19%">&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Oque deseja fazer com os pre&ccedil;os?</font></strong></td>
    </tr>
    <tr>
      <td><a href="../navegacao.php">Voltar</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><a href="mostrar_preco_insert.php">Inserir resposta para mostrar pre&ccedil;os pela 1&ordm; vez no sistema </a></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><a href="mostrar_preco_editar.php">Editar resposta </a></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
