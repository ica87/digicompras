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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {	font-size: 24px;
	font-weight: bold;
}
.style10 {font-size: 14px}
.style4 {	font-size: 18px;
	font-weight: bold;
}
.style5 {font-size: 18px}
.style9 {font-size: 14px; font-weight: bold; }
-->
</style></head>

<?

require '../../../conect/conect.php';

			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>
<?
// dados do aluno
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$hora = $_POST['hora'];
$num_lacre_banco = $_POST['num_lacre_banco'];
$num_lacre_empresa = $_POST['num_lacre_empresa'];
$protocolos = $_POST['protocolos'];
$obs = $_POST['obs'];


//dados do operador

$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];



?>

<?

$comando = "insert into malote(dia,mes,ano,data,hora,num_lacre_banco,num_lacre_empresa,protocolos,obs,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento) values('$dia','$mes','$ano','$data','$hora','$num_lacre_banco','$num_lacre_empresa','$protocolos','$obs','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento')";

mysql_query($comando,$conexao) or die("Erro ao registrar Malote!... Tente novamente");

echo "Malote registrado com sucesso!<br><br>";



$sql = "SELECT * FROM malote order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo2 = $linha[0];
$operador2 = $linha[1];
$cel_operador2 = $linha[2];
$email_operador2 = $linha[3];
$estabelecimento2 = $linha[4];
$cidade_estabelecimento2 = $linha[5];
$tel_estabelecimento2 = $linha[6];
$email_estabelecimento2 = $linha[7];

$operador_alterou2 = $linha[8];
$cel_operador_alterou2 = $linha[9];
$email_operador_alterou2 = $linha[10];
$estabelecimento_alterou2 = $linha[11];
$cidade_estabelecimento_alterou2 = $linha[12];
$tel_estabelecimento_alterou2 = $linha[13];
$email_estabelecimento_alterou2 = $linha[14];
$dataalteracao2 = $linha[15];
$horaalteracao2 = $linha[16];


$dia2 = $linha[17];
$mes2 = $linha[18];
$ano2 = $linha[19];
$data2 = $linha[20];
$hora2 = $linha[21];
$num_lacre_banco2 = $linha[22];
$num_lacre_empresa2 = $linha[23];
$protocolos2 = $linha[24];
$obs2 = $linha[25];



}
?>




<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá Alessandra! Foi registrado uma entrada no caixa da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";
	
	$mens  .=  "Código do Aluno : ".$codigo_aluno."                                                    \n";
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "Nome do Responsável: ".$nome_resp."                                                       \n";
	$mens  .=  "Curso : ".$curso."                                                    \n";
	$mens  .=  "Duração : ".$duracao."                                                    \n";
	$mens  .=  "Mensalide : R$ ".$mensalidade."                                                    \n";
	$mens  .=  "Vencimento: ".$vencto."                                                    \n";
	$mens  .=  "Valor Recebido: ".$valor_recebido."                                                    \n";
	$mens  .=  "Quitação : ".$quitacao."                                                    \n";
	$mens  .=  "Observações: ".$obs."                                                       \n";
	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";
	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";
	
	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_dest, "Entrada no caixa da $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);

?>
<table width="100%"  border="0">
  <tr>
    <td width="18%"><form name="form1" method="post" action="menu.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="2%">&nbsp;</td>
    <td width="23%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="20%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
</table>
<table width="100%"  border="1">
  <tr>
    <td colspan="4"><div align="center" class="style1">Registro de Malote  n&ordm; <? echo $codigo2; ?></div></td>
  </tr>
  <tr>
    <td width="21%"><span class="style4">Data do registro </span></td>
    <td width="20%"><span class="style9"><? echo $data2; ?></span></td>
    <td width="23%"><span class="style4">Hora do registro </span></td>
    <td width="36%"><span class="style9"><? echo $hora2; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>N&ordm; Lacre BV </strong></span></td>
    <td><span class="style9"><? echo $num_lacre_banco2; ?></span></td>
    <td><span class="style5"><strong>N&ordm; Lacre Allcred </strong></span></td>
    <td><span class="style9"><? echo $num_lacre_empresa2; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Protocolos</strong></span></td>
    <td colspan="3"><textarea name="protocolos" cols="40" rows="6" readonly="readonly" id="protocolos"><? echo $protocolos2; ?></textarea></td>
  </tr>
  <tr>
    <td><span class="style4">Observa&ccedil;&otilde;es</span></td>
    <td><textarea name="obs" cols="40" rows="6" readonly="readonly" id="obs"><? echo $obs2; ?></textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro efetuado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador2; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador2; ?> </font><font color="#0000FF"> </font></strong></td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento2; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento2; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento2; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento2; ?> </font></strong></td>
  </tr>
  <tr>
    <td><strong>Data do Registro </strong></td>
    <td><strong><font color="#0000FF"><? echo $data2; ?></font></strong></td>
    <td><strong>Hora do Registro </strong></td>
    <td><strong><font color="#0000FF"><? echo $hora2; ?></font></strong></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>