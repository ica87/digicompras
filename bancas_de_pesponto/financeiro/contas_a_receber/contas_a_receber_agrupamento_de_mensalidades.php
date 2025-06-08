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
<title>Financeiro - Contas a receber</title>
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
.style6 {font-size: 18px; font-weight: bold; }
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style11 {font-size: 10px; color: #666666; }
.style12 {font-size: 14px}
.style14 {
	font-size: 14px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>
<?

require '../../../conect/conect.php';


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome_operador = $linha[1];
$celular_op = $linha[19];

$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];
}

$nfantasia_cliente = $_POST['nfantasia_cliente'];
$cnpj_cliente = $_POST['cnpj_cliente'];


$quitacao = $_POST['quitacao'];




$dataabertura = date('d-m-Y');
$horaabertura = date('H:i:s');
$diaabertura = date('d');
$mesabertura = date('m');
$anoabertura = date('Y');


$datafechameno = date('d-m-Y');
$horafechamento = date('H:i:s');
$diafechamento = date('d');
$mesfechamento = date('m');
$anofechamento = date('Y');

$dia_inicial = $_POST['dia_inicial'];
$mes_inicial = $_POST['mes_inicial'];
$ano_inicial = $_POST['ano_inicial'];

$dia_final = $_POST['dia_final'];
$mes_final = $_POST['mes_final'];
$ano_final = $_POST['ano_final'];


$sql = "SELECT * FROM contas_a_receber_agrupamento where cnpj = '$cnpj_cliente' and status = 'Aberto'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}



if($registros==0){

$sql = "select * from clientes where cnpj = '$cnpj_cliente' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_cliente = $linha[0];
$razaosocial_cliente = $linha[1];
$cnpj_cliente = $linha[2];
$nfantasia_cliente = $linha[3];
$inscr_est_cliente = $linha[4];
$endereco_cliente = $linha[5];
$numero_cliente = $linha[6];
$bairro_cliente = $linha[7];
$cidade_cliente = $linha[8];
$estado_cliente = $linha[9];
$cep_cliente = $linha[10];
$email_cliente = $linha[11];
$comprador_cliente = $linha[12];
$fone_cliente = $linha[13];
$celular_cliente = $linha[15];


}


$comando = "insert into contas_a_receber_agrupamento(status,razaosocial,cnpj,nfantasia,inscr_est,endereco,numero,bairro,cidade,estado,cep,email_cliente,fone,operador,dataabertura,horaabertura,diaabertura,mesabertura,anoabertura,codigo_cliente)

values('Aberto','$razaosocial_cliente','$cnpj_cliente','$nfantasia_cliente','$inscr_est_cliente','$endereco_cliente','$numero_cliente','$bairro_cliente','$cidade_cliente','$estado_cliente','$cep_cliente','$email_cliente','$fone_cliente','$nome_operador','$dataabertura','$horaabertura','$diaabertura','$mesabertura','$anoabertura','$codigo_cliente')";
 
mysql_query($comando,$conexao);
 
 
$sql = "SELECT * FROM contas_a_receber_agrupamento where cnpj = '$cnpj_cliente' and status = 'Aberto' order by num_agrupamento desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_agrupamento_zero = $linha[0];
$nfantasia_cliente = $linha[3];
$status = $linha[1];
}

}
else{

$sql = "SELECT * FROM contas_a_receber_agrupamento where cnpj = '$cnpj_cliente' and status = 'Aberto' order by num_agrupamento desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_agrupamento_um = $linha[0];
$nfantasia_cliente = $linha[3];
$status = $linha[1];
}



}

if($registros==0){
$num_agrupamento =  $num_agrupamento_zero;
}			
else{
$num_agrupamento =  $num_agrupamento_um;
}

//ADICIONAR NO AGRUPAMENTO

$num_contas_a_receber_add = $_POST['num_contas_a_receber_add'];
$num_agrupamento_add = $_POST['num_agrupamento_add'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$num_contas_a_receber_add',`num_agrupamento` = '$num_agrupamento_add',`cnpj` = '$cnpj_cliente',`num_agrupamento` = '$num_agrupamento' where `contas_a_receber`. `codigo` = '$num_contas_a_receber_add' limit 1 ";
}

mysql_query($comando,$conexao);

//RETIRAR DO AGRUPAMENTO

$num_contas_a_receber_ret = $_POST['num_contas_a_receber_ret'];
$num_agrupamento_ret = $_POST['num_agrupamento_ret'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$num_contas_a_receber_ret',`cnpj` = '$cnpj_cliente',`num_agrupamento` = '' where `contas_a_receber`. `codigo` = '$num_contas_a_receber_ret' limit 1 ";
}

mysql_query($comando,$conexao);






$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#ffffff<? //printf("$linha[1]"); ?>" 
  
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
      <table width="100%" border="0" cellspacing="4">
  <?

//$nfantasia = $_POST['nfantasia'];
//$cnpj = $_POST['cnpj'];


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
    <td><form name="form1" method="post" action="selecione_cliente_contas_a_receber.php">
      <input type="submit" name="Submit5" value="Voltar a sele&ccedil;&atilde;o de cliente">
      <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>
    </form></td>
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
<table width="100%"  border="0">
        
        <tr>
          <td colspan="2">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="9">
            <form action="fechamento_agrupamento.php" method="post" name="form4" target="_blank">
              <div align="center"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <span class="style3">
              <strong><strong>
              <span class="style14">
              <?


$sql = "select sum(mensalidade) as total_titulos_agrupados from contas_a_receber where num_agrupamento = '$num_agrupamento'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_titulos_agrupados'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
}
else{
echo "Valor total dos títulos agrupados R$ ".$valor_total_formatado;
}

?>
              </span></strong></strong>
              <input name="num_agrupamento_fechar" type="hidden" id="num_agrupamento_fechar" value="<? echo $num_agrupamento; ?>">
              <strong><font color="#0000FF">
              <input name="nfantasia_cliente" type="hidden" id="estab_pertence4" value="<? echo $nfantasia_cliente; ?>">
              <strong><font color="#0000FF">
              <strong><font color="#0000FF">
              <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj_cliente; ?>">
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
              </font></strong><font color="#0000FF"><span class="style12">Valor Recebido</span><strong> 
              <input name="valor_recebido" type="text" id="valor_recebido">
              </strong><span class="style12">              Modo Pagto</span><strong>
              <select name="modo_pagto" id="modo_pagto">
                <option selected>Dinheiro</option>
                <option>Dinheiro+Cheque</option>
                <option>Cheque</option>
                            </select>
              </strong></font></font></strong></font></strong>              </span>
              <input type="submit" name="Submit32" value="Fechar Agrupamento de t&iacute;tulos">
              <input name="datafechamento" type="hidden" id="datafechamento" value="<? echo date('d-m-Y'); ?>">
              <input name="horafechamento" type="hidden" id="horafechamento" value="<? echo date('H:i:s'); ?>">
              <input name="diafechamento" type="hidden" id="diafechamento" value="<? echo date('d'); ?>">
              <input name="mesfechamento" type="hidden" id="mesfechamento" value="<? echo date('m'); ?>">
              <input name="anofechamento" type="hidden" id="anofechamento" value="<? echo date('Y'); ?>">
              <input name="recebimento" type="hidden" id="recebimento" value="<? echo "A Caminho"; ?>">
              <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y'); ?>">
              <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo date('H:i:s'); ?>">
              </div> 
            </form>          </td>
        </tr>
        <tr>
          <td colspan="9"><span class="style6">
          <?
if($registros==0){
echo "Agrupamento de títulos para seu cliente $nfantasia_cliente CNPJ: $cnpj_cliente foi aberto com sucesso! Nº ". $num_agrupamento_zero;
}			
else{
echo "Seu cliente $nfantasia_cliente CNPJ: $cnpj_cliente já possui um Agrupamento de títulos aberto! Nº ". $num_agrupamento_um;
}
?>
          </span>            <div align="center"></div>          <div align="center">
          </div></td>
        </tr>
        <tr>
          <td width="8%">              <?
$sql = "SELECT * FROM contas_a_receber where nfantasia_cliente = '$nfantasia_cliente' and quitacao = 'Em Aberto' and num_agrupamento = '' order by num_agrupamento asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}
?></td>
          <td colspan="6">
            <form name="form4" method="post" action="contas_a_receber_agrupamento_de_mensalidades.php">
              <div align="center">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <select name="num_contas_a_receber_ret" id="select4">
                <option value="null" selected>Selecione
                <?

    $sql = "select * from contas_a_receber where nfantasia_cliente = '$nfantasia_cliente' and num_agrupamento = '$num_agrupamento_um' order by codigo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
	$registros_nesse_bordero = mysql_num_rows($result);

  echo "<option>".$x['codigo']."</option>";
    }
?>
                </option>
              </select>
              <span class="style3">
              <input name="num_agrupamento_ret" type="hidden" id="num_agrupamento_ret" value="<? echo $num_agrupamento; ?>">
              <strong><font color="#0000FF">
              <input name="nfantasia_cliente" type="hidden" id="estab_pertence7" value="<? echo $nfantasia_cliente; ?>">
              <strong><font color="#0000FF">
              <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj_cliente; ?>">
              <input name="nome_operador" type="hidden" id="nome_operador6" value="<? echo $nome_operador; ?>">
              </font></strong> </font></strong> </span> <span class="style3"><strong><font color="#0000FF">
              <input name="quitacao" type="hidden" id="status_proposta5" value="<? echo $quitacao; ?>">
              </font></strong></span>
              <input type="submit" name="Submit3" value="Retirar">
  </div>
            </form>          </td>
          <td width="30%"><form action="visualizacao_agrupamento_de_titulos.php" method="post" name="form5" target="_blank">
            <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
            <select name="num_agrupamento" id="select2">
              <option value="null" selected>Selecione
                <?

    $sql = "select * from contas_a_receber_agrupamento where cnpj = '$cnpj_cliente' order by num_agrupamento desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
	$registros_nesse_bordero = mysql_num_rows($result);

  echo "<option>".$x['num_agrupamento']."</option>";
    }
?>
              </option>
            </select>
            <span class="style3"><strong><font color="#0000FF">
            <input name="nfantasia_cliente" type="hidden" id="nfantasia_cliente" value="<? echo $nfantasia_cliente; ?>">
            <strong><font color="#0000FF">
            <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj_cliente; ?>">
            </font></strong> </font></strong></span>
            <input type="submit" name="Submit4" value="Visualisar Agrupamento de t&iacute;tulos">
          </form></td>
          <td width="19%">&nbsp;</td>
  </tr>
      </table>
<div align="center"><strong>T&iacute;tulos em aberto! Registros encontrados <? echo $registros;?></strong></div>
            <table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
            <table width="100%"  border="0">
              <tr bgcolor="#<? echo $cor ?>">
                <td><div align="center"><span class="style11">N&ordm; T&iacute;tulo</span></div></td>
                <td><div align="center" class="style11">Vencimento </div></td>
                <td><div align="center" class="style11">Valor</div></td>
                <td><div align="center"><span class="style11">N&ordm; Fatura</span></div></td>
                <td><div align="center" class="style11">N&ordm; Parcela</div></td>
                <td><div align="center"><span class="style11">Status</span></div></td>
                <td><div align="center"></div></td>
              </tr>
              <?
			  
$sql = "SELECT * FROM contas_a_receber where nfantasia_cliente = '$nfantasia_cliente' and cnpj = '$cnpj_cliente' and quitacao = 'Em Aberto' and num_agrupamento = '' order by num_fatura,num_mensalidade asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_contas_a_receber = $linha[0];
$num_fatura = $linha[42];
$mensalidade = $linha[11];
$vencto = $linha[12];
$quant_parc = $linha[13];
$quitacao = $linha[17];
$num_mensalidade = $linha[35];
$num_fatura = $linha[42];

?>
              <tr>
                <td width="18%"><div align="center" class="style3">
                    <form name="form2" method="post" action="contas_a_receber_agrupamento_de_mensalidades.php">
                      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                      <? echo $num_contas_a_receber; ?>
                      <input name="num_contas_a_receber_add" type="hidden" id="num_proposta5" value="<? echo $num_contas_a_receber; ?>">                      
                      <input name="num_agrupamento_add" type="hidden" id="num_agrupamento_add" value="<? echo $num_agrupamento; ?>">
                      <strong><font color="#0000FF">
                      <input name="nfantasia_cliente" type="hidden" id="estab_pertence3" value="<? echo $nfantasia_cliente; ?>">
                      <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj_cliente; ?>">
                      <input name="nome_operador" type="hidden" id="nome_operador5" value="<? echo $nome_operador; ?>">
                      <input name="quitacao" type="hidden" id="status_proposta4" value="<? echo $quitacao; ?>">
                      </font></strong>
                      <input type="submit" name="Submit" value="Adicionar">
                    </form>
                </div></td>
                <td width="14%"><div align="center" class="style3"><? echo $vencto;?></div></td>
                <td width="11%"><div align="center" class="style3"><? echo "R$ ".$mensalidade;?> </div></td>
                <td width="11%"><div align="center"><span class="style3"><? echo $num_fatura; ?></span></div></td>
                <td width="16%"><div align="center"><span class="style3"><? echo "$num_mensalidade "."de "; ?></span><span class="style3"><? echo $quant_parc; ?></span></div></td>
                <td width="14%"><div align="center"><span class="style3"><? echo $quitacao; ?></span></div></td>
                <td width="16%"><div align="center">
                  <form action="baixar_mensalidade_confirma.php" method="post" name="form2">
                    <div align="center">
                      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                      <input name="num_contas_a_receber" type="hidden" id="num_contas_a_receber" value="<? echo $num_contas_a_receber; ?>">
                      <input name="num_agrupamento" type="hidden" id="num_agrupamento" value="<? echo $num_agrupamento; ?>">
                      <?
if($quitacao=="Em Aberto"){

printf('<input type="submit" name="Submit" value="Baixar">');
				}
				
?>
                    </div>
                  </form>
                </div></td>
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
                <td><div align="center"></div></td>
                <td><div align="center"></div></td>
                <td><div align="center"></div></td>
                <td><div align="center"></div></td>
            </table>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>





</body>
</html>
