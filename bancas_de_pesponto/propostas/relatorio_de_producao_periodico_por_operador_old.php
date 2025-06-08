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
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {font-size: 10px}
-->
</style>
</head>
<?

require '../../conect/conect.php';


	  
$nome_operador = $_POST['nome_operador'];
$mes_ano = $_POST['mes_ano'];

//$dia_inicial = $_POST['dia_inicial'];
//$mes_inicial = $_POST['mes_inicial'];
//$ano_inicial = $_POST['ano_inicial'];

//$dia_final = $_POST['dia_final'];
//$mes_final = $_POST['mes_final'];
//$ano_final = $_POST['ano_final'];

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
      <form name="form1" method="post" action="informe_operador_para_gerar_relatorio_mensal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="100%"  border="0">
        <tr>
          <td colspan="10"><div align="left"><span class="style2">
            <?
$nome_operador = $_POST['nome_operador'];
			
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_operador = $linha[1];



?>
          Listando todas as propostas do operador:</span> <span class="style2"><? echo $nome_operador; ?>
          <? } ?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%">&nbsp;</td>
          <td width="14%"><div align="center">Total 
  

   Spread
  
        </div></td>
          <td width="18%"><div align="center">
            <strong>
            <?
$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' order by nome asc";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
            </strong>          </div></td>
          <td width="6%">&nbsp;</td>
          <td width="10%"><div align="center">Total Operador </div></td>
          <td colspan="3">
            <div align="left"><strong>
            <?
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' order by nome asc";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
            </strong> </div></td>
          <td width="14%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">Total Premia&ccedil;&atilde;o </div></td>
          <td><div align="center">
            <strong>
            <?
$sql = "select sum(comissao_op) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' order by nome asc";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
            </strong>          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
</table>
      <br>
	  <?
	  $nome_operador = $_POST['nome_operador'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];

	  ?>
      Per&iacute;odo de <? echo $mes_ano;?><br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?

			
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' order by num_proposta asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$comissao_op = $linha[101];
$tabela = $linha[109];
$valor_total = $linha[113];

?>            
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style3">N&ordm; Proposta </div></td>
          <td><div align="center" class="style3">Valor Contrato </div></td>
          <td><div align="center"><span class="style3">Valor Total </span></div></td>
          <td><div align="center"><span class="style3">Tabela</span></div></td>
          <td><div align="center" class="style3">Cliente</div></td>
          <td><div align="center" class="style3">CPF</div></td>
          <td width="3%"><div align="center" class="style3">Prazo</div></td>
          <td width="5%"><div align="center" class="style3">R$ Parcelas </div></td>
          <td><div align="center" class="style3">Tipo de Proposta </div></td>
          <td><div align="center" class="style3">Bco Opera&ccedil;&atilde;o </div></td>
          <td><div align="center" class="style3">Status</div></td>
          <td><div align="center" class="style3"> Spread </div></td>
          <td><div align="center" class="style3">Premia&ccedil;&atilde;o</div></td>
        </tr>
		
        <tr>
          <td width="5%">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php"><div align="center" class="style3">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
            <? printf("$linha[0]"); ?>                
          </div></form></td>
          <td width="8%"><div align="center" class="style3"><? printf("R$ $linha[25]");?> </div></td>
          <td width="7%"><div align="center"><span class="style3"><? echo $valor_total;?></span></div></td>
          <td width="9%"><div align="center"><span class="style3"><? echo $tabela;?></span></div></td>
          <td width="18%">
            <div align="center" class="style3"><? printf("$linha[4]");?> </div></td>
          <td width="8%"><div align="center" class="style3"><? printf("$linha[7]");?> </div></td>
          <td><div align="center" class="style3"><? printf("$linha[26]"); ?> </div></td>
          <td><div align="center" class="style3"><? printf("$linha[27]"); ?> </div></td>
          <td width="8%"><div align="center" class="style3"><? printf("$linha[83]"); ?> </div></td>
          <td width="10%"><div align="center" class="style3"><? printf("$linha[86]"); ?></div></td>
          <td width="9%"><div align="center" class="style3"><? printf("$linha[51]");?></div></td>
          <td width="4%"><div align="center" class="style3"><? printf("$linha[85]");?></div></td>
          <td width="6%"><div align="center" class="style3"><? echo "R$ ".$comissao_op;?></div></td>
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
          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
        <tr>
          <td><span class="style3">Total</span></td>
          <td><div align="center" class="style3">
            <strong>
              <?
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' order by nome asc";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
            </strong>          </div></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><span class="style3"></span></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><span class="style3"></span></td>
          <td><div align="center"><span class="style3"></span></div></td>
          <td><div align="right" class="style3">Total Speed </div></td>
          <td><div align="center" class="style3">
            <strong>
            <?
$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' order by nome asc";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
            </strong>          </div></td>
          <td><span class="style3"></span></td>
</table>

      <p>&nbsp;</p>



</body>
</html>
