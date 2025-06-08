<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>
<html>
<head>
<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO OPERADOR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {font-size: 10px}
-->
</style>
</head>
<?

require '../../conect/conect.php';



$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>





      <p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
      <form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
      <br>
      <br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?
$data_pagto_cliente = $_POST['data_pagto_cliente'];

			
$sql = "SELECT * FROM propostas where data_pagto_cliente = '$data_pagto_cliente' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$comissao_op = $linha[101];

?>            
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style3">N&ordm; Proposta </div></td>
          <td><div align="center" class="style3">Cliente</div></td>
          <td><div align="center" class="style3">CPF</div></td>
          <td width="3%"><div align="center" class="style3">Prazo</div></td>
          <td width="6%"><div align="center" class="style3">R$ Parcelas </div></td>
          <td><div align="center" class="style3">Valor Contrato </div></td>
          <td><div align="center" class="style3">Premia&ccedil;&atilde;o</div></td>
          <td><div align="center" class="style3">Tipo de Proposta </div></td>
          <td><div align="center" class="style3">Status</div></td>
          <td><div align="center" class="style3">Operador</div></td>
          <td><div align="center" class="style3"> Banco opera&ccedil;&atilde;o </div></td>
        </tr>
		
        <tr>
          <td width="8%"><div align="center" class="style3">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
            <? printf("$linha[0]"); ?> </form></div></td>
          <td width="20%">
            <div align="center" class="style3"><? printf("$linha[4]");?> </div></td>
          <td width="11%"><div align="center" class="style3"><? printf("$linha[7]");?> </div></td>
          <td><div align="center" class="style3"><? printf("$linha[26]"); ?> </div></td>
          <td><div align="center" class="style3"><? printf("$linha[27]"); ?> </div></td>
          <td width="8%"><div align="center" class="style3"><? printf("R$ $linha[25]");?> </div></td>
          <td width="7%"><div align="center" class="style3"><? echo "R$ ".$comissao_op;?></div></td>
          <td width="9%"><div align="center" class="style3"><? printf("$linha[83]"); ?> </div></td>
          <td width="11%"><div align="center" class="style3"><? printf("$linha[51]");?></div></td>
          <td width="6%"><div align="center"><span class="style3"><? printf("$linha[1]");?></span></div></td>
          <td width="11%"><div align="center" class="style3"><? printf("$linha[86]");?></div></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
        <tr>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><span class="style3"></span></td>
        <tr>
          <td><span class="style3">Total Operador </span></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center">
              <?
$sql = "select sum(valor_credito) as total from propostas where data_pagto_cliente = '$data_pagto_cliente'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="center">
          </div></td>
</table>

<p>&nbsp;</p>



</body>
</html>
