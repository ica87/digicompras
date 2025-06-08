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
.style8 {color: #000000}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style11 {font-size: 10px; color: #666666; }
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

$nfantasia_for = $_POST['nfantasia_for'];
$cnpj_for = $_POST['cnpj_for'];


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


$sql = "SELECT * FROM contas_a_pagar_agrupamento where cnpj = '$cnpj_for' and status = 'Aberto'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}



if($registros==0){

$sql = "select * from fornecedores where cnpj = '$cnpj_for' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_for = $linha[0];
$razaosocial_for = $linha[1];
$cnpj_for = $linha[2];
$nfantasia_for = $linha[3];
$inscr_est_for = $linha[4];
$endereco_for = $linha[5];
$numero_for = $linha[6];
$bairro_for = $linha[7];
$cidade_for = $linha[8];
$estado_for = $linha[9];
$cep_for = $linha[10];
$email_for = $linha[11];
$comprador_for = $linha[12];
$fone_for = $linha[13];
$celular_for = $linha[15];


}


$comando = "insert into contas_a_pagar_agrupamento(status,razaosocial,cnpj,nfantasia,inscr_est,endereco,numero,bairro,cidade,estado,cep,email_cliente,fone,operador,dataabertura,horaabertura,diaabertura,mesabertura,anoabertura,codigo_for)

values('Aberto','$razaosocial_for','$cnpj_for','$nfantasia_for','$inscr_est_for','$endereco_for','$numero_for','$bairro_for','$cidade_for','$estado_for','$cep_for','$email_for','$fone_for','$nome_operador','$dataabertura','$horaabertura','$diaabertura','$mesabertura','$anoabertura','$codigo_for')";
 
mysql_query($comando,$conexao);
 
 
$sql = "SELECT * FROM contas_a_pagar_agrupamento where cnpj = '$cnpj_for' and status = 'Aberto' order by num_agrupamento desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_agrupamento_zero = $linha[0];
$nfantasia_cliente = $linha[3];
$status = $linha[1];
}

}
else{

$sql = "SELECT * FROM contas_a_pagar_agrupamento where cnpj = '$cnpj_for' and status = 'Aberto' order by num_agrupamento desc limit 1";
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

$num_contas_a_pagar_add = $_POST['num_contas_a_pagar_add'];
$num_agrupamento_add = $_POST['num_agrupamento_add'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_pagar` set `codigo` = '$num_contas_a_pagar_add',`num_agrupamento` = '$num_agrupamento_add',`cnpj` = '$cnpj_for',`num_agrupamento` = '$num_agrupamento' where `contas_a_pagar`. `codigo` = '$num_contas_a_pagar_add' limit 1 ";
}

mysql_query($comando,$conexao);

//RETIRAR DO AGRUPAMENTO

$num_contas_a_pagar_ret = $_POST['num_contas_a_pagar_ret'];
$num_agrupamento_ret = $_POST['num_agrupamento_ret'];


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_pagar` set `codigo` = '$num_contas_a_pagar_ret',`cnpj` = '$cnpj_for',`num_agrupamento` = '' where `contas_a_pagar`. `codigo` = '$num_contas_a_pagar_ret' limit 1 ";
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


$sql = "SELECT * FROM fornecedores where nfantasia = '$nfantasia_for' and cnpj = '$cnpj_for'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_for = $linha[0];
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
    <td><form name="form1" method="post" action="selecione_fornecedor_contas_a_pagar.php">
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
              <input name="num_agrupamento_fechar" type="hidden" id="num_agrupamento_fechar" value="<? echo $num_agrupamento; ?>">
              <strong><font color="#0000FF">
              <input name="nfantasia_for" type="hidden" id="estab_pertence4" value="<? echo $nfantasia_for; ?>">
              <strong><font color="#0000FF">
              <strong><font color="#0000FF">
              <input name="cnpj_for" type="hidden" id="cnpj_for" value="<? echo $cnpj_for; ?>">
              </font></strong></font></strong></font></strong>              </span>
              <input type="submit" name="Submit32" value="Fechar Agrupamento de t&iacute;tulos a pagar">
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
echo "Agrupamento de títulos para seu Fornecedor $nfantasia_for CNPJ: $cnpj_for foi aberto com sucesso! Nº ". $num_agrupamento_zero;
}			
else{
echo "Seu Fornecedor $nfantasia_for CNPJ: $cnpj_for já possui um Agrupamento de títulos aberto! Nº ". $num_agrupamento_um;
}
?>
          </span>            <div align="center"></div>          <div align="center">
          </div></td>
        </tr>
        <tr>
          <td width="8%">              <?
$sql = "SELECT * FROM contas_a_pagar where nfantasia_for = '$nfantasia_for' and quitacao = 'Em Aberto' and num_agrupamento = '' order by num_agrupamento asc";

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
              <select name="num_contas_a_pagar_ret" id="select4">
                <option value="null" selected>Selecione
                <?

    $sql = "select * from contas_a_pagar where nfantasia_for = '$nfantasia_for' and num_agrupamento = '$num_agrupamento_um' order by codigo asc";
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
              <input name="nfantasia_for" type="hidden" id="estab_pertence7" value="<? echo $nfantasia_for; ?>">
              <strong><font color="#0000FF">
              <input name="cnpj_for" type="hidden" id="cnpj_for" value="<? echo $cnpj_for; ?>">
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

    $sql = "select * from contas_a_pagar_agrupamento where cnpj = '$cnpj_for' order by num_agrupamento desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
	$registros_nesse_bordero = mysql_num_rows($result);

  echo "<option>".$x['num_agrupamento']."</option>";
    }
?>
              </option>
            </select>
            <span class="style3"><strong><font color="#0000FF">
            <input name="nfantasia_for" type="hidden" id="nfantasia_for" value="<? echo $nfantasia_for; ?>">
            <strong><font color="#0000FF">
            <input name="cnpj_for" type="hidden" id="cnpj_for" value="<? echo $cnpj_for; ?>">
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
			  
$sql = "SELECT * FROM contas_a_pagar where nfantasia_for = '$nfantasia_for' and cnpj = '$cnpj_for' and quitacao = 'Em Aberto' and num_agrupamento = '' order by num_fatura,num_mensalidade asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_contas_a_pagar = $linha[0];
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
                      <? echo $num_contas_a_pagar; ?>
                      <input name="num_contas_a_pagar_add" type="hidden" id="num_proposta5" value="<? echo $num_contas_a_pagar; ?>">                      
                      <input name="num_agrupamento_add" type="hidden" id="num_agrupamento_add" value="<? echo $num_agrupamento; ?>">
                      <strong><font color="#0000FF">
                      <input name="nfantasia_for" type="hidden" id="estab_pertence3" value="<? echo $nfantasia_for; ?>">
                      <input name="cnpj_for" type="hidden" id="cnpj_for" value="<? echo $cnpj_for; ?>">
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
                      <input name="num_contas_a_pagar" type="hidden" id="num_contas_a_pagar" value="<? echo $num_contas_a_pagar; ?>">
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
