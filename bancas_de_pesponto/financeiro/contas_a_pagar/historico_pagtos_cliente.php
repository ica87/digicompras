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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<?
require '../../../conect/conect.php';
error_reporting(E_ALL);

?>


  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>





<?
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<body bgcolor="#<? printf("$linha[1]"); ?>" 
<? } ?>
leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="4">
<?

$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];


$sql = "SELECT * FROM clientes where nfantasia = '$nfantasia_cliente' and cnpj = '$cnpj_cliente'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_cliente = $linha[0];
$razaosocial = $linha[1];
$cnpj = $linha[2];
$nfantasia = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cidade = $linha[8];
$estado = $linha[9];
$cep = $linha[10];
$email = $linha[11];
$comprador = $linha[12];
$fone = $linha[13];
$fax = $linha[14];
$celular = $linha[15];

$skype = $linha[40];
$data_nasc = $linha[41];
$mes_nasc = $linha[42];
$salario = $linha[43];
$limite = $linha[44];
$empresa_trab = $linha[45];
$tel_trab = $linha[46];
$nome1 = $linha[47];
$cpf1 = $linha[48];
$nome2 = $linha[49];
$cpf2 = $linha[50];
$nome3 = $linha[51];
$cpf3 = $linha[52];

}
?>

  <tr>
    <td>&nbsp;</td>
    <td><form name="form1" method="post" action="selecione_cliente_para_abrir_orcamento.php">
      <input type="submit" name="Submit" value="Voltar a sele&ccedil;&atilde;o de cliente">
      <span class="style1">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span>
    </form>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>C&oacute;digo:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $codigo_cliente; ?></strong></font></strong></td>
    <td><strong>Comprador:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $comprador; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><strong>Raz&atilde;o Social:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $razaosocial; ?></strong></font></strong></td>
    <td><strong>Celular:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $celular; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><strong>Nome Fantasia:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $nfantasia; ?></strong></font></strong></td>
    <td><strong>E-Mail:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $email; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td width="11%"><strong>Endere&ccedil;o:</strong></td>
    <td width="40%"><strong><font color="#0000FF"><strong><? echo $endereco; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero; ?></strong></font></strong></font></strong></td>
    <td width="13%"><strong>CEP:</strong></td>
    <td width="36%"><strong><font color="#0000FF"><strong><? echo $cep; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><p><strong>Bairro:</strong></p></td>
    <td><strong><font color="#0000FF"><strong><? echo $bairro; ?></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cidade:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $cidade; ?> Estado <font color="#0000FF"><strong><? echo $estado; ?></strong></font></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Telefone:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $fone; ?></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
<table width="100%" border="0" cellspacing="5">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td width="19%">&nbsp;</td>
      <td colspan="2"><strong><font color="#0000FF" size="4">Escolha abaixo o que voc&ecirc; deseja gerar </font></strong></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><form action="orcamento.php" method="post" name="form5">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo_cliente; ?>">
        <input type="submit" name="Submit4" value="Abrir novo Or&ccedil;amento">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="39%"><div align="center"><strong>OR&Ccedil;AMENTOS J&Aacute; REALIZADOS PARA ESSE CLIENTE</strong></div></td>
      <td width="42%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><table width="100%" border="0">
        <tr>
          <td width="8%"><div align="center">Or&ccedil;amento</div></td>
          <td width="6%"><div align="center">Refer&ecirc;ncia</div></td>
          <td width="10%"><div align="center">Condi&ccedil;&atilde;o</div></td>
          <td width="10%"><div align="center">Status</div></td>
          <td width="10%"><div align="center">Fatura</div></td>
          <td width="10%"><div align="center">Data Emiss&atilde;o</div></td>
          <td width="11%"><div align="center">Operador</div></td>
          <td width="11%"><div align="center">Total Geral</div></td>
          <td width="9%"><div align="center"></div></td>
          <td width="13%"><div align="center"></div></td>
          <td width="12%"><div align="center">Edi&ccedil;&atilde;o</div></td>
        </tr>
<?

$sql = "SELECT * FROM orcamentos where codigo_cliente = '$codigo_cliente' order by codigo_orcamento desc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$codigo_orcamento = $linha[0];
$ref1 = $linha[20];
$descricao_servico = $linha[17];
$dataorcamento = $linha[14];
$horaorcamento = $linha[15];
$operador = $linha[157];
$total_geral = $linha[123];
$condicao = $linha[173];
$status = $linha[174];
$status_fatura = $linha[182];


?>
        <tr>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $codigo_orcamento; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $ref1; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $condicao; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $status; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $status_fatura; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $dataorcamento; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo $operador; ?></strong></font></strong></div></td>
          <td><div align="center"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_geral; ?></strong></font></strong></div></td>
          <td><div align="center">
            <form action="imprime_orcamento.php" method="post" name="form2" target="_blank">
              <span class="style1">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
              <input type="submit" name="button" id="button" value="Imprimir">
            </form>
            </div></td>
          <td><div align="center">
            <form action="imprime_orcamento_para_cliente.php" method="post" name="form2" target="_blank">
              <span class="style1">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
              <input type="submit" name="button2" id="button2" value="Imprimir p/ Cliente">
            </form>
          </div></td>
          <td><div align="center">
            <form name="form2" method="post" action="editar_orcamento.php">
              <span class="style1">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
              <? if($condicao=="ORÇAMENTO"){ echo "<input type='submit' name='button3' id='button3' value='Editar'>"; } ?>
            </form>
          </div></td>
        </tr>
<?
}
?>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
