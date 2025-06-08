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

<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];




$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];


?>
<? } ?>


</p>
      <form name="form1" method="post" action="menu.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="120%"  border="0">
        <tr>
          <td width="100%" colspan="12"><div align="left"><span class="style2">
          Listando todas solicita&ccedil;&otilde;es aprovadas no per&iacute;odo de <? echo $datainicial; ?> at&eacute; <? echo $datafinal; ?> </span></div></td>
        </tr>
</table>
      <br>
		  <form name="form2" method="post" action="quita_mototaxi.php">
	  <br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?
	  
$datainicial = $_POST['datainicial'];
$datafinal = $_POST['datafinal'];


			
$sql = "SELECT * FROM mototaxi where data between '$datainicial' and '$datafinal' and status = 'Aprovada' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>            
      <table width="120%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; da Solicita&ccedil;&atilde;o </td>
          <td><div align="center">Valor a pagar </div></td>
          <td><div align="center">Operador solicitante </div></td>
          <td><div align="center">Motivo da solicita&ccedil;&atilde;o </div></td>
          <td><div align="center">Status</div></td>
          <td><div align="center">Cliente</div></td>
          <td><div align="center">CPF</div></td>
          <td>&nbsp;</td>
        </tr>
		
        <tr>
          <td width="13%"><div align="center">               
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="codigo" type="checkbox" id="codigo" value="<? echo $linha[0]; ?>">              
            <? printf("$linha[0]"); ?>
            <input name="pago" type="hidden" id="pago" value="<? echo Sim; ?>">
            <input name="datapagto" type="hidden" id="datapagto" value="<? echo date('d-m-Y'); ?>">
            <input name="horapagto" type="hidden" id="horapagto" value="<? echo date('H:i:s'); ?>">               
          </div></td>
          <td width="8%"><div align="center"><? printf("$linha[16]");?></div></td>
          <td width="13%"><div align="center"><? printf("$linha[18]");?></div></td>
          <td width="15%"><div align="center"><? printf("$linha[13]"); ?> </div></td>
          <td width="11%"><div align="center"><? printf("$linha[32]");?></div></td>
          <td width="26%"> <div align="center"><? printf("$linha[6]");?>
         </div></td>
          <td width="12%"><div align="center"><? printf("$linha[1]");?>
          </div></td>
          <td width="2%">&nbsp;</td>
		  
		  
		  <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
        <tr>
          <td><strong><font color="#0000FF">
            <input name="operador_alterou" type="hidden" id="operador_alterou" value="<? echo $operador_alterou; ?>">
            <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
            <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
            <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
            <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
            <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
            <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
          </font></strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        <tr>
          <td><div align="center">Total Geral </div></td>
          <td><div align="center">
            <?
$sql = "select sum(total) as totalgeral from mototaxi where data between '$datainicial' and '$datafinal' and status = 'Aprovada'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$totalgeral = $linha['totalgeral'];

echo "R$ ".$totalgeral;
?>
            <input name="totalgeral" type="hidden" id="totalgeral" value="<? echo $totalgeral; ?>">
</div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        <tr>
          <td colspan="3"><input type="submit" name="Submit" value="Baixar titulos selecionados"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </table>
</form>
          

<p>&nbsp;</p>



</body>
</html>
