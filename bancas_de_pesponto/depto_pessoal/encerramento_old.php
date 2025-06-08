<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>
<?

require '../../conect/conect.php';

?>

<?

$dia_referencia = $_POST['dia_referencia'];

$mes_referencia = $_POST['mes_referencia'];

$ano_referencia = $_POST['ano_referencia'];


?>

<?
$sql = "SELECT * FROM tabela_meses where num_mes = '$mes_referencia' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$mes = $linha[2];
$dias = $linha[3];
$dias_trabalhados = $linha[4];
$dsr = $linha[5];
$mes_comercial = $linha[6];

}
?>

<html>
<head>
<title>FOLHA DE PAGTO - ENCERRAMENTO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>

<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$razao_social = $linha[1];
$endereco = $linha[5];
$numero = $linha[6];
$cnpj = $linha[3];

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
?>

<?

$sql = "SELECT * FROM operadores where status = 'Ativo' order by nome asc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$nome = $linha[1];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];

$celular = $linha[19];

$email = $linha[20];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

$usuario_op = $linha[40];

$senha_op = $linha[41];

$grupo = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



$salario = $linha[48];

$vale_alimentacao = $linha[49];

$gratificacao = $linha[50];

$comissao = $linha[51];

$emprestimo = $linha[52];

$admissao = $linha[53];

$demissao = $linha[54];

$meta = $linha[55];

$status = $linha[56];

$bloqueio_parcial = $linha[57];

$tempo_almoco = $linha[58];


?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <td colspan="5" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><?  echo $razao_social; ?></td>
      </tr>
      <tr>
        <td><? echo "$endereco "."$numero";  ?></td>
      </tr>
      <tr>
        <td><?  echo $cnpj; ?></td>
      </tr>
    </table></td>
    <td colspan="2" valign="top"><div align="left">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2" valign="top"><div align="center"><strong><? echo "Demonstrativo de Pagamento de Salario"; ?></strong></div></td>
        </tr>
        <tr>
          <td width="45%"><div align="center"><strong>PERIODO</strong></div></td>
          <td width="55%"><div align="center"><strong><? echo "$mes de $ano_referencia"; ?></strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"></div></td>
        </tr>
      </table>
    </div>
    <div align="center"></div>      <div align="center"></div></td>
    <td width="2%" rowspan="6" align="center" valign="middle">

<div id="memo" style="transform:rotate(<? $deg=rand(270,270); echo $deg; ?>deg); -moz-transform:rotate(<?php echo $deg; ?>deg);-webkit-transform:rotate(<?php echo $deg; ?>deg);-o-transform:rotate(<? echo $deg; ?>deg);"><? echo "Declaro ter recebido a importancia liquida discriminada neste recibo"; ?></div></td>
    <td width="4%" rowspan="6">&nbsp;</td>
    <td width="4%" rowspan="6">&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4%"><div align="center"><strong>COD</strong></div></td>
        <td width="40%"><div align="center"><strong>NOME</strong></div></td>
        <td width="21%"><div align="center"><strong>CBO</strong></div></td>
        <td width="17%"><div align="center"><strong>SECAO</strong></div></td>
        <td width="18%"><div align="center"><strong>FUNCAO</strong></div></td>
      </tr>
      <tr>
        <td><div align="center"><? echo $codigo; ?></div></td>
        <td><div align="center"><? echo $nome; ?></div></td>
        <td><div align="center"><? echo $cbo; ?></div></td>
        <td><div align="center"><? echo $secao; ?></div></td>
        <td><div align="center"><? echo $funcao; ?></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
        <td colspan="4"><div align="center"></div>          <div align="center"></div>          <div align="center"></div>          <div align="center"></div>          <div align="center"></div>          <div align="center"></div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="16%"><div align="center"><strong>COD</strong></div></td>
    <td colspan="3"><div align="center"><strong>DESCRICAO</strong></div></td>
    <td width="16%"><div align="center"><strong>REF</strong></div></td>
    <td width="16%"><div align="center"><strong>VENCIMENTOS</strong></div></td>
    <td width="16%"><div align="center"><strong>DESCONTOS</strong></div></td>
  </tr>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="5" align="center" valign="middle"><? echo "Aqui entra uma mensagem aos funionarios";  ?></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Vencimentos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>Valor Liquido</strong></div></td>
      </tr>
    </table></td>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><strong>Total Descontos</strong></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center">Salario Base</div></td>
        <td><div align="center">Sal. Contr. INSS</div></td>
        <td><div align="center">Base Calc. FGTS</div></td>
        <td><div align="center">FGTS do Mes</div></td>
        <td><div align="center">Base Calc. IRRF</div></td>
        <td><div align="center">Faixa IRRF</div></td>
      </tr>
      <tr>
        <td><div align="center"><? echo $salario; ?></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<? } ?>
</body>

</html>