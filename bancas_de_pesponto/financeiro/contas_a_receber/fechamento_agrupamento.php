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
<title>Faturamento</title>
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
.style1 {color: #FFFFFF}
.style4 {color: #000000}
.style5 {	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<?

require '../../conect/conect.php';


?>

<?

$num_agrupamento_fechar = $_POST['num_agrupamento_fechar'];
$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];
$codigo_cliente = $_POST['codigo_cliente'];

$datafechamento = $_POST['datafechamento'];
$horafechamento = $_POST['horafechamento'];
$diafechamento = $_POST['diafechamento'];
$mesfechamento = $_POST['mesfechamento'];
$anofechamento = $_POST['anofechamento'];
$recebimento = $_POST['recebimento'];

//$quant_parc = $_POST['quant_parc'];
//$intervalo = $_POST['intervalo'];

//$dia = $_POST['dia'];
//$mes = $_POST['mes'];
//$ano = $_POST['ano'];

$datacadastro = $_POST['datacadastro'];
$horacadastro = $_POST['horacadastro'];

?>

<body>
<table width="100%" bgcolor="#ffffff"  border="0">
        <tr valign="top">
          <td width="36%" height="23">
<?
$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); 

}
?>
</td>
          <td width="37%" valign="middle"><div align="center">          </div></td>
          <td width="27%" height="23">&nbsp;</td>
        </tr>
      </table>
      <p>      <form name="form1" method="post" action="../index.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;


$nome_operador = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}
?>
      </form>
<p><strong></strong></p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%"><span class="style5">Agrupamento de T&iacute;tulos N&ordm; <? echo $num_agrupamento_fechar; ?></span></td>
    <td width="27%">&nbsp;</td>
    <td width="40%"><strong><strong><strong> TOTAL DESTE AGRUPAMENTO
      <?


$sql = "select sum(total_geral) as total_titulos from contas_a_receber where num_agrupamento = '$num_agrupamento_fechar'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_titulos'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
}
else{
echo "R$ ".$valor_total_formatado;
}

?>
    </strong></strong></strong></td>
  </tr>
</table>
<?


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber_agrupamento` set `num_agrupamento` = '$num_agrupamento_fechar',`operador` = '$nome_operador',`status` = 'Fechado',`total_agrupamento` = '$valor_total',`datafechamento` = '$datafechamento',`horafechamento` = '$horafechamento',`diafechamento` = '$diafechamento',`mesfechamento` = '$mesfechamento',`anofechamento` = '$anofechamento',`recebimento` = '$recebimento' where `contas_a_receber_agrupamento`. `num_agrupamento` = '$num_agrupamento_fechar' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao fechar esse agrupamento de títulos....Tente novamente!");

echo "Agrupamento de títulos fechado com sucesso!<br><br>";



$sql = "SELECT * FROM contas_a_receber_agrupamento where num_agrupamento = '$num_agrupamento_fechar'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_agrupamento_fechado = $linha[0];
$status = $linha[1];
$razaosocial = $linha[2];
$nfantasia_cliente = $linha[3];

$endereco = $linha[4];
$numero = $linha[5];
$bairro = $linha[6];
$cidade = $linha[7];
$estado = $linha[8];
$cep = $linha[9];
$cnpj_cliente = $linha[10];
$inscr_est = $linha[11];

$data_fechamento = $linha[20];
$hora_fechamento = $linha[21];
$diafechamento = $linha[22];
$mesfechamento = $linha[23];
$anofechamento = $linha[24];

}


?>


<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_gerente = $linha[1];
$email_gerente = $linha[20];
$funcao_gerente = $linha[43];

$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}

	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	//$email_ivan   =   "digicompras@digicompras.com.br";
	$email_suporte1   =   $email_empresa;
	//$email_suporte2   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! O(A) $nome_gerente!   \n";
	$mens  .=  "Você finalizpu uma fatura confira as informações abaixo! \n\n";
	
	$mens  .=  "Nº do Agrupamento: ".$num_agrupamento_fechado."                                                       \n";
	$mens  .=  "Data do fechamento: ".$data_fechamento."                                                    \n";
	$mens  .=  "Hora do fechamento: ".$hora_fechamento."                                                    \n\n";
	
	$mens  .=  "Cliente: ".$nfantasia_cliente."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_cliente."                                                    \n";
	$mens  .=  "Telefone: ".$tel_cliente."                                                    \n";
	$mens  .=  "E-Mail: ".$email_cliente."                                                    \n";

	
	//DISPARA O EMAIL
	//$envia  =  mail($email_empresa, "Faturamento Nº ".$num_fatura_fechado." finalizado! Verifique no sistema!",$mens,"From:".$email_empresa);

?>
<table width="100%"  border="1">
  <tr bgcolor="ffffff">
    <td><div align="center"><span class="style3">N&ordm; T&iacute;tulos </span></div></td>
    <td><div align="center" class="style3">Cliente </div></td>
    <td><div align="center" class="style3">CNPJ / CPF</div></td>
    <td><div align="center" class="style3">Valor </div></td>
    <td><div align="center" class="style3">Vencimento</div></td>
  </tr>
  <?
			  
			  
$sql = "SELECT * FROM contas_a_receber where num_agrupamento = '$num_agrupamento_fechar' order by num_fatura,num_mensalidade asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_contas_a_receber = $linha[0];
$nfantasia_cliente = $linha[4];
$cnpj_cliente = $linha[6];
$mensalidade = $linha[11];
$vencto = $linha[12];
$operador_cliente = $linha[158];
$num_fatura = $linha[42];
$num_agrupamento = $linha[45];



?>
  <tr>
    <td width="7%"><div align="center" class="style3">
      <form name="form2" method="post" action="borderos.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? echo $num_contas_a_receber; ?><strong><font color="#0000FF"> </font></strong>
      </form>
    </div></td>
    <td width="18%"><div align="center" class="style3"><? echo $nfantasia_cliente;?></div></td>
    <td width="11%"><div align="center" class="style3"><? echo $cnpj_cliente;?> </div></td>
    <td width="10%"><div align="center" class="style3"><? echo "R$ ".$mensalidade;?> </div></td>
    <td width="3%"><div align="center" class="style3"><? echo $vencto; ?> </div></td>
    <?
	
	
	
	
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
    <? } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td width="33%"><div align="center">
      <table width="100%"  border="1">
        <tr>
          <td width="44%">Data do Fechamento </td>
          <td width="56%"><div align="center"><? echo $datafechamento;?> </div></td>
        </tr>
        <tr>
          <td colspan="2">Respons&aacute;vel pelo Agrupamento de t&iacute;tulos</td>
        </tr>
        <tr>
          <td colspan="2"><? echo $nome_gerente; ?></td>
        </tr>
        <tr>
          <td colspan="2">Assinatura respons&aacute;vel pelo Agrupamento de t&iacute;tulos</td>
        </tr>
        <tr>
          <td height="57" colspan="2">&nbsp;</td>
        </tr>
      </table>
    </div></td>
    <td width="33%">&nbsp;</td>
    <td width="34%"><div align="center"></div></td>
  </tr>
</table>


<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
