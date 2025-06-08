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
-->
</style>
</head>
<?

require '../../conect/conect.php';


	  
$nome_operador = $_POST['nome_operador'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];

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
      <form name="form1" method="post" action="informe_correspondente_para_gerar_relatorio_mensal_ou_periodico.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="150%"  border="0">
        <tr>
          <td colspan="11"><div align="left"><span class="style2">
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
          <td colspan="11">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="9%"><div align="center">Total 


 Spread

</div></td>
          <td width="7%"><div align="center">
            <?
$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="15%">&nbsp;</td>
          <td width="10%"><div align="center">Total Operador </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="3%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
        </tr>
      </table>
      <br>
	  <?
	  $nome_operador = $_POST['nome_operador'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];

	  ?>
      Per&iacute;odo de <? echo $data_inicial;?> at&eacute; <? echo $data_final;?><br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?

			
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and dataalteracao between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>            
      <table width="150%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; da Proposta </td>
          <td><div align="center">Data proposta </div></td>
          <td><div align="center">Status</div></td>
          <td><div align="center">Data Pagto</div></td>
          <td><div align="center"> Spread </div></td>
          <td><div align="center">Cliente</div></td>
          <td><div align="center">CPF</div></td>
          <td><div align="center">Valor Contrato </div></td>
          <td width="3%"><div align="center">Prazo</div></td>
          <td width="7%"><div align="center">R$ Parcelas </div></td>
          <td><div align="center">Banco</div></td>
          <td><div align="center">Tipo de Proposta </div></td>
        </tr>
		
        <tr>
          <td width="8%"><div align="center">               <form name="form2" method="post" action="editar_proposta_por_num_proposta.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
            <? printf("$linha[0]"); ?>                
          </form></div></td>
          <td width="7%"><div align="center"><? printf("$linha[40]");?></div></td>
          <td width="9%"><div align="center"><? printf("$linha[51]");?></div></td>
          <td width="7%"><div align="center"><? printf("$linha[42]");?></div></td>
          <td width="7%"><div align="center"><? printf("$linha[85]");?></div></td>
          <td width="15%"> <div align="center"><? printf("$linha[4]");?>
         </div></td>
          <td width="10%"><div align="center"><? printf("$linha[7]");?>
          </div></td>
          <td width="8%"><div align="center"><? printf("R$ $linha[25]");?>
          </div></td>
          <td><div align="center"><? printf("$linha[26]"); ?>
          </div></td>
          <td><div align="center"><? printf("$linha[27]"); ?>
          </div></td>
          <td width="14%"><div align="center"><? printf("$linha[28]"); ?></div></td>
          <td width="12%"><div align="center"><? printf("$linha[83]"); ?>
          </div></td>
		  
		  
		  <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center">Total 


 Spread

</div></td>
          <td>&nbsp;</td>
          <td><div align="center">
            <?
$sql = "select sum(retorno) as total from propostas where nome_operador = '$nome_operador' and dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center">Total Operador </div></td>
          <td><div align="center">              <?
$sql = "select sum(valor_credito) as total from propostas where nome_operador = '$nome_operador' and dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
</table>

<?
?>          

<p>&nbsp;</p>



</body>
</html>
