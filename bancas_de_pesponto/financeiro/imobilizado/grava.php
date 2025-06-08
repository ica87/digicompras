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
// dados do investimento
$datacadastro = date('d-m-Y');
$horacadastro = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$mes_ano = date('m-Y');

$nfantasia = $_POST['nfantasia'];
$objeto = $_POST['objeto'];
$descricao = $_POST['descricao'];
$data_aquisicao = $_POST['data_aquisicao'];
$valor = $_POST['valor'];
$tempo_vida_util = $_POST['tempo_vida_util'];
$depreciacao_mensal = bcdiv($valor,$tempo_vida_util,2);
$obs = $_POST['obs'];
$cod_objeto = $_POST['cod_objeto'];

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

$comando = "insert into imobilizado(datacadastro,horacadastro,dia,mes,ano,mes_ano,nfantasia,objeto,descricao,data_aquisicao,valor,tempo_vida_util,depreciacao_mensal,obs,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,cod_objeto) 
values
('$datacadastro','$horacadastro','$dia','$mes','$ano','$mes_ano','$nfantasia','$objeto','$descricao','$data_aquisicao','$valor','$tempo_vida_util','$depreciacao_mensal','$obs','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$cod_objeto')";

mysql_query($comando,$conexao) or die("Erro ao registrar Objeto!... Tente novamente");

echo "Objeto resgistrado com sucesso!<br><br>";



$sql = "SELECT * FROM imobilizado order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$operador = $linha[1];
$cel_operador = $linha[2];
$email_operador = $linha[3];
$estabelecimento = $linha[4];
$cidade_estabelecimento = $linha[5];
$tel_estabelecimento = $linha[6];
$email_estabelecimento = $linha[7];

$operador_alterou = $linha[8];
$cel_operador_alterou = $linha[9];
$email_operador_alterou = $linha[10];
$estabelecimento_alterou = $linha[11];
$cidade_estabelecimento_alterou = $linha[12];
$tel_estabelecimento_alterou = $linha[13];
$email_estabelecimento_alterou = $linha[14];

$nfantasia2 = $linha[15];
$objeto = $linha[16];
$descricao = $linha[17];
$datacadastro = $linha[18];
$horacadastro = $linha[19];
$data_aquisicao = $linha[20];
$valor = $linha[21];
$tempo_vida_util = $linha[22];
$depreciacao_mensal = $linha[23];
$data_saida = $linha[24];
$hora_saida = $linha[25];
$motivo_saida = $linha[26];
$valor_saida = $linha[27];
$obs = $linha[28];
$cod_objeto = $linha[39];

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
	$mens   =  "Olá! Foi registrado um objeto da $nfantasia   \n";
	$mens  .=  "Verifique abaixo \n\n";
	
	$mens  .=  "Objeto: ".$objeto."                                                       \n";
	$mens  .=  "Valor: ".$valor."                                                       \n";
	$mens  .=  "Tempo de vida útil : ".$tempo_vida_util."                                                    \n";
	$mens  .=  "Valor de depreciação mensal : ".$depreciacao_mensal."                                                    \n";
	$mens  .=  "Observações: ".$obs."                                                       \n";
	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";
	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";
	
	$mens  .=  "Operador que efetuou o registro: ".$operador."                                                    \n";
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
    <td width="18%"><form name="form1" method="post" action="inserir.php">
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
    <td colspan="4"><div align="center" class="style1">Registro  de objeto no Imobilizado n&ordm; <? echo $codigo; ?></div></td>
  </tr>
  <tr>
    <td width="21%"><span class="style4">Data do lan&ccedil;amento </span></td>
    <td width="20%"><span class="style9"><? echo $datacadastro; ?></span></td>
    <td width="23%"><span class="style4">Hora do lan&ccedil;amento </span></td>
    <td width="36%"><span class="style9"><? echo $horacadastro; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Loja</strong></span></td>
    <td><span class="style9"><? echo $nfantasia2; ?></span></td>
    <td><span class="style4">Objeto</span></td>
    <td><span class="style9"><? echo $objeto; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style4">C&oacute;digo do Objeto </span></td>
    <td><span class="style10"><span class="style9"><? echo $cod_objeto; ?></span></span></td>
    <td><span class="style5"><strong>Descri&ccedil;&atilde;o</strong></span></td>
    <td><span class="style9"><? echo $descricao; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style4">Data da Aquisi&ccedil;&atilde;o</span></td>
    <td><span class="style10"><span class="style9"><? echo $data_aquisicao; ?></span></span></td>
    <td><span class="style5"><strong>Valor</strong></span></td>
    <td><span class="style10"><span class="style9"><? echo "R$ ".$valor; ?></span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
  <tr>
    <td><span class="style4">Tempo de vida &uacute;til</span></td>
    <td><span class="style10"><span class="style9"><? echo $tempo_vida_util; ?></span></span></td>
    <td><span class="style5"><strong>Deprecia&ccedil;&atilde;o mensal </strong></span></td>
    <td><span class="style10"><span class="style9"><? echo "R$ ".$depreciacao_mensal; ?></span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style5"><strong>Observa&ccedil;&otilde;es</strong></span></td>
    <td colspan="3"><span class="style9"><? echo $obs; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style10"></span></td>
  </tr>
</table>
<p></p>
<table width="100%" border="1" cellspacing="4">
  <tr>
    <td colspan="2"><strong>Registro efetuado por <br>
    </strong><strong><font color="#0000FF"><? echo $operador; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
            <? echo $email_operador; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="20%"><strong>Celular:<font color="#0000FF"><br>
            <? echo $cel_operador; ?> </font><font color="#0000FF"> </font></strong></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
        <strong><font color="#0000FF"><? echo $estabelecimento; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
    <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $tel_estabelecimento; ?> </font></strong></td>
    <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
            <? echo $email_estabelecimento; ?> </font><font color="#0000FF"> </font></strong></td>
    <td><strong>Cidade: <br>
          <font color="#0000FF"><? echo $cidade_estabelecimento; ?> </font></strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Data do Registro </strong><br>
      <strong><font color="#0000FF"><? echo $datacadastro; ?></font></strong></td>
    <td><strong>Hora do registro </strong><br>
      <strong><font color="#0000FF"><? echo $horacadastro; ?></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>