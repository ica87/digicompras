<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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
      <td><strong><font color="#0000FF" size="4">Oque deseja fazer com os pedidos?</font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../navegacao.php">
        <input type="submit" name="Submit" value="Voltar">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="index_novos_pedidos.php" method="post" name="form2">
        <input type="submit" name="Submit22" value="Verificar pedidos novos no sistema">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form5" method="post" action="selecione_num_pedido_para_impressao.php">
        <input type="submit" name="Submit5" value="Imprimir Pedido para produ&ccedil;&atilde;o">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="selecione_num_pedido_para_alterar_status.php" method="post" name="form2">
        <input type="submit" name="Submit23" value="Alterar Status do Pedido">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="selecione_codigo_do_cliente_para_realizar_pedido.php" method="post" name="form2">
        <input type="submit" name="Submit2" value="Efetuar Pedido">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="index_todos_pedidos.php">
        <input type="submit" name="Submit3" value="Editar pedido">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="selecione_num_pedido_para_exclusao.php" method="post" name="form4" target="navegacao">
        <input type="submit" name="Submit4" value="Excluir Pedido">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
