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
<title>LISTANDO TODAS AS PROPOSTAS RECEBIDAS POR BANCO E POR PERIODO</title>
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
      <form name="form1" method="post" action="informe_bco_operacao_para_gerar_relatorio_mensal_a_receber.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="200%"  border="0">
        <tr>
          <td colspan="12"><div align="left"><span class="style2">
          Listando todas as propostas a receber no per&iacute;odo de <? echo $data_inicial; ?> at&eacute; <? echo $data_final; ?> de todos os bancos:</span> <span class="style2">
          </span></div></td>
        </tr>
        <tr>
          <td colspan="12">&nbsp;</td>
        </tr>
        <tr>
          <td width="7%"><div align="center">Total a receber </div></td>
          <td width="11%"><div align="center">
            <?
$sql = "select sum(valor_a_receber) as total from propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido <> 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="11%">&nbsp;</td>
          <td width="7%"><div align="center">Total 


 Spread

</div></td>
          <td width="7%"><div align="center">
            <?
$sql = "select sum(retorno) as total from propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido <> 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="12%">&nbsp;</td>
          <td width="9%"><div align="center">Total Contratos </div></td>
          <td width="7%"><div align="center">
            <?
$sql = "select sum(valor_credito) as total from propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="3%">&nbsp;</td>
          <td width="5%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
          <td width="9%">&nbsp;</td>
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

			
$sql = "SELECT * FROM propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido <> 'Sim' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>            
      <table width="200%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; da Proposta </td>
          <td><div align="center">Valor a receber </div></td>
          <td><div align="center">Data Recebimento </div></td>
          <td><div align="center">Status</div></td>
          <td><div align="center"> Spread </div></td>
          <td><div align="center">Cliente</div></td>
          <td><div align="center">CPF</div></td>
          <td><div align="center">Valor Contrato </div></td>
          <td width="3%"><div align="center">Prazo</div></td>
          <td width="5%"><div align="center">R$ Parcelas </div></td>
          <td><div align="center">Banco</div></td>
          <td><div align="center">Tipo de Proposta </div></td>
        </tr>
		
        <tr>
          <td width="7%"><div align="center">               
            <form name="form2" method="post" action="grava_baixar_comissao_a_receber_todos_bancos.php">
              <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
              <input name="recebido" type="hidden" id="recebido" value="<? echo Sim; ?>">
              <input name="data_recebimento" type="hidden" id="data_recebimento" value="<? echo date('d-m-Y'); ?>">
              <strong><font color="#0000FF">
              <input name="hora_baixa" type="hidden" id="hora_baixa" value="<? echo date('H:i:s'); ?>">
              </font></strong>
              <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
              <? printf("$linha[0]"); ?>
              <input type="submit" name="Submit" value="Baixar">
              <strong><font color="#0000FF">
              <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
              <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
              <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
              <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
              <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
              <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
              <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
              <input name="data_inicial" type="hidden" id="data_inicial" value="<? echo $data_inicial; ?>">
              <input name="data_final" type="hidden" id="data_final" value="<? echo $data_final; ?>">
</font></strong>
            </form>
          </div></td>
          <td width="11%"><div align="center"><? printf("$linha[87]");?></div></td>
          <td width="11%"><div align="center"><? printf("$linha[89]");?></div></td>
          <td width="7%"><div align="center"><? printf("$linha[51]");?></div></td>
          <td width="7%"><div align="center"><? printf("$linha[85]");?></div></td>
          <td width="12%"> <div align="center"><? printf("$linha[4]");?>
         </div></td>
          <td width="9%"><div align="center"><? printf("$linha[7]");?>
          </div></td>
          <td width="7%"><div align="center"><? printf("R$ $linha[25]");?>
          </div></td>
          <td><div align="center"><? printf("$linha[26]"); ?>
          </div></td>
          <td><div align="center"><? printf("$linha[27]"); ?>
          </div></td>
          <td width="12%"><div align="center"><? printf("$linha[28]"); ?></div></td>
          <td width="9%"><div align="center"><? printf("$linha[83]"); ?>
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
          <td><div align="center">Total a receber </div></td>
          <td><div align="center">
            <?
$sql = "select sum(valor_a_receber) as total from propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido <> 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center">Total 


 Spread

</div></td>
          <td><div align="center">
            <?
$sql = "select sum(retorno) as total from propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido <> 'Sim'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center">Total Contratos </div></td>
          <td><div align="center">              <?
$sql = "select sum(valor_credito) as total from propostas where dataproposta between '$data_inicial' and '$data_final' and status = 'Aprovado_e_Pago' and recebido = 'Sim'";
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
