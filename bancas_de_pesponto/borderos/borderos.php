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
<title>Border&ocirc;s</title>
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
-->
</style>
</head>
<?

require '../../conect/conect.php';

?>
<?
$sql = "SELECT * FROM hora_certa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$acao = $linha[5];
$hora_ajuste = $linha[2];

}

$horacerta = date('H')+$hora_ajuste;
if($horacerta<=9){
$hora_atual = "0".$horacerta.date(':i:s');
}
else{
$hora_atual = $horacerta.date(':i:s');
}
?>


<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_recebeu = $linha[1];
$cel_operador_recebeu = $linha[19];
$email_operador_recebeu = $linha[20];
$estabelecimento_recebeu = $linha[44];
$cidade_estabelecimento_recebeu = $linha[45];
$tel_estabelecimento_recebeu = $linha[46];
$email_estabelecimento_recebeu = $linha[47];

}

$num_bordero_receber = $_POST['num_bordero_receber'];


$nome_operador = $_POST['nome_operador'];
$estab_pertence = $_POST['estab_pertence'];
$status_proposta = $_POST['status_proposta'];
$num_bordero_add = $_POST['num_bordero_add'];
$num_proposta = $_POST['num_proposta'];
$num_proposta_ret = $_POST['num_proposta_ret'];
$num_bordero_ret = $_POST['num_bordero_ret'];

$dataabertura = date('d-m-Y');
$horaabertura = $hora_atual;
$diaabertura = date('d');
$mesabertura = date('m');
$anoabertura = date('Y');


$datafechameno = date('d-m-Y');
$horafechamento = $hora_atual;
$diafechamento = date('d');
$mesfechamento = date('m');
$anofechamento = date('Y');

$dia_inicial = $_POST['dia_inicial'];
$mes_inicial = $_POST['mes_inicial'];
$ano_inicial = $_POST['ano_inicial'];

$dia_final = $_POST['dia_final'];
$mes_final = $_POST['mes_final'];
$ano_final = $_POST['ano_final'];


$sql = "SELECT * FROM borderos where num_bordero = '$num_bordero_receber' and status = 'Fechado'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

$num_bordero_recebido = $linha[0];
$loja = $linha[1];
$status = $linha[2];
$operador_gerente = $linha[3];
$dataabertura = $linha[4];
$horaabertura = $linha[5];
$diaabertura = $linha[6];
$mesabertura = $linha[7];
$anoabertura = $linha[8];
$datafechamento = $linha[9];
$horafechamento = $linha[10];
$diafechamento = $linha[11];
$mesfechamento = $linha[12];
$anofechamento = $linha[13];
$recebimento = $linha[14];
$datarecebimento = $linha[15];
$horarecebimento = $linha[16];
$diarecebimento = $linha[17];
$mesrecebimento = $linha[18];
$anorecebimento = $linha[19];
$obs = $linha[20];
$operador_recebeu2 = $linha[21];
$cel_operador_recebeu2 = $linha[22];
$email_operador_recebeu2 = $linha[23];
$estabelecimento_recebeu2 = $linha[24];
$cidade_estabelecimento_recebeu2 = $linha[25];
$tel_estabelecimento_recebeu2 = $linha[26];
$email_estabelecimento_recebeu2 = $linha[27];

}


$sql = "SELECT * FROM operadores where nome = '$gerente'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$cel_gerente = $linha[19];
$email_gerente = $linha[20];
$loja_gerente = $linha[44];
$cidade_gerente = $linha[45];
$tel_loja = $linha[46];
$email_loja = $linha[47];

}



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
    <td width="37%" valign="middle"><div align="center"> </div></td>
    <td width="27%" height="23">&nbsp;</td>
  </tr>
</table>
<p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
      <form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar ao menu principal">
</form>
      <table width="100%"  border="0">
        <tr>
          <td colspan="9">
            <form name="form4" method="post" action="receber_bordero.php">
              <div align="center">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <span class="style3">
              <input name="num_bordero_receber" type="hidden" id="num_bordero_receber" value="<?
if($registros==1){ echo $num_bordero_receber; } ?>">
              <strong><font color="#0000FF">
              <input name="estab_pertence" type="hidden" id="estab_pertence4" value="<? echo $loja; ?>">
              <strong><font color="#0000FF">
              </font></strong> </font></strong> </span> <span class="style3"><strong><font color="#0000FF">
              
              </font></strong></span>
              
              <? if($registros==1)if($recebimento=="A Caminho"){
			  echo"Observações<br>"; 
			  
			  echo"<textarea name='obs' cols='40' rows='5'></textarea>"; 
			  echo"<input type='submit' name='Submit32' value='Receber Borderô'>"; }?>
              <input name="datarecebimento" type="hidden" id="datarecebimento" value="<? echo date('d-m-Y'); ?>">
              <input name="horarecebimento" type="hidden" id="horarecebimento" value="<? echo $hora_atual; ?>">
              <input name="diarecebimento" type="hidden" id="diarecebimento" value="<? echo date('d'); ?>">
              <input name="mesrecebimento" type="hidden" id="mesrecebimento" value="<? echo date('m'); ?>">
              <input name="anorecebimento" type="hidden" id="anorecebimento" value="<? echo date('Y'); ?>">
              <input name="recebimento" type="hidden" id="recebimento" value="<? echo "Recebido"; ?>">
              <input name="operador_recebeu" type="hidden" id="operador_recebeu" value="<? echo $operador_recebeu; ?>">
              <input name="cel_operador_recebeu" type="hidden" id="cel_operador_recebeu" value="<? echo $cel_operador_recebeu; ?>">
              <input name="email_operador_recebeu" type="hidden" id="operador_recebeu3" value="<? echo $email_operador_recebeu; ?>">
              <input name="estabelecimento_recebeu" type="hidden" id="operador_recebeu4" value="<? echo $estabelecimento_recebeu; ?>">
              <input name="cidade_estabelecimento_recebeu" type="hidden" id="estabelecimento_recebeu" value="<? echo $cidade_estabelecimento_recebeu; ?>">
              <input name="tel_estabelecimento_recebeu" type="hidden" id="tel_estabelecimento_recebeu" value="<? echo $tel_estabelecimento_recebeu; ?>">
              <input name="email_estabelecimento_recebeu" type="hidden" id="estabelecimento_recebeu3" value="<? echo $email_estabelecimento_recebeu; ?>">
</div> 
            </form>
          </td>
        </tr>
        <tr>
          <td colspan="4"><span class="style6">
          </span>            <div align="center"></div>          <div align="center">
          </div></td>
          <td colspan="5">&nbsp;</td>
        </tr>
        <tr>
          <td width="11%"><strong>Border&ocirc; N&ordm;</strong></td>
          <td width="20%"><strong><? echo $num_bordero_receber;?></strong></td>
          <td width="15%">&nbsp;</td>
          <td width="10%">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
        </tr>
      </table>
            <div align="center"></div>
            <table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table> 

           
            <table width="100%"  border="1">
              <tr bgcolor="#<? echo $cor ?>">
                <td><div align="center"><span class="style3">N&ordm; Proposta </span></div></td>
                <td><div align="center" class="style3">Cidade</div></td>
                <td><div align="center" class="style3">N&ordm; contrato BCO </div></td>
                <td><div align="center" class="style3">Cliente </div></td>
                <td><div align="center" class="style3">CPF</div></td>
                <td><div align="center" class="style3">Valor Contrato </div></td>
                <td><div align="center" class="style3">Prazo</div></td>
                <td><div align="center"><span class="style3">Banco da opera&ccedil;&atilde;o </span></div></td>
                <td><div align="center" class="style3">Data</div></td>
              </tr>
              <?
if($registros==1){
			  
			  
$sql = "SELECT * FROM propostas where num_bordero = '$num_bordero_receber' order by num_proposta asc";
}
else{
echo "ATENÇÃO!!!... ESSE BORDERÔ ENCONTRA-SE ABERTO E O GERENTE DA LOJA AINDA NAO O ENVIOU!....<br><br>
PORTANTO NÃO É PERMITIDO SUA ABERTURA NO MOMENTO!";
}

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_proposta = $linha[0];
$nome_operador = $linha[1];
$tipo = $linha[2];
$estabelecimento_proposta = $linha[3];
$nome = $linha[4];
$sexo = $linha[5];
$estadocivil = $linha[6];
$cpf = $linha[7];
$rg = $linha[8];
$orgao = $linha[9];
$emissao = $linha[10];
$data_nasc = $linha[11];
$pai = $linha[12];
$mae = $linha[13];
$endereco = $linha[14];
$numero = $linha[15];
$bairro = $linha[16];
$complemento = $linha[17];
$cidade = $linha[18];
$estado = $linha[19];
$cep = $linha[20];
$telefone = $linha[21];
$celular = $linha[22];
$email = $linha[23];
$num_beneficio = $linha[24];
$valor_credito = $linha[25];
$quant_parc = $linha[26];
$parcela = $linha[27];
$banco_pagto = $linha[28];
$num_banco = $linha[29];
$agencia = $linha[30];
$conta = $linha[31];
$operador = $linha[32];
$cel_operador = $linha[33];
$email_operador = $linha[34];
$estabelecimento = $linha[35];
$cidade_estabelecimento = $linha[36];
$tel_estabelecimento = $linha[37];
$email_estabelecimento = $linha[38];
$obs = $linha[39];
$dataproposta = $linha[40];
$horaproposta = $linha[41];
$dataalteracao = $linha[42];
$horaalteracao = $linha[43];
$operador_alterou = $linha[44];
$cel_operador_alterou = $linha[45];
$email_operador_alterou = $linha[46];
$estabelecimento_alterou = $linha[47];
$cidade_estabelecimento_alterou = $linha[48];
$tel_estabelecimento_alterou = $linha[49];
$email_estabelecimento_alterou = $linha[50];
$status = $linha[51];


$parc1 = $linha[52];
$banco1 = $linha[53];
$vencto1 = $linha[54];
$compra1 = $linha[55];

$num_beneficio2 = $linha[80];
$num_beneficio3 = $linha[81];
$num_beneficio4 = $linha[82];

$tipo_proposta = $linha[83];
$bco_operacao = $linha[86];
$num_contrato_banco = $linha[105];

?>
              <tr>
                <td width="11%"><div align="center" class="style3">
                    <form action="../propostas/status_fisico.php" method="post" name="form2">
                      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                      <? echo $num_proposta; ?>
                      <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
                      <input name="cpf" type="hidden" id="cpf" value="<? printf("$linha[7]"); ?>">
                      <input name="num_bordero" type="hidden" id="num_bordero" value="<?
if($registros==1){ echo $num_bordero_receber; } ?>">                      
                      <input type="submit" name="Submit" value="Fisico">                      
                      <strong><font color="#0000FF">
                      </font></strong>
                      
                      
                    </form>
                </div></td>
                <td width="12%"><div align="center" class="style3"><? echo $cidade_estabelecimento;?></div></td>
                <td width="12%"><div align="center" class="style3"><? echo $num_contrato_banco;?></div></td>
                <td width="18%"><div align="center" class="style3"><? printf("$linha[4]");?></div></td>
                <td width="10%">
                  <div align="center" class="style3"><? printf("$linha[7]");?> </div></td>
                <td width="11%"><div align="center" class="style3"><? printf("R$ $linha[25]");?> </div></td>
                <td width="4%"><div align="center" class="style3"><? printf("$linha[26]"); ?> </div></td>
                <td width="12%"><div align="center"><span class="style3"><? printf("$linha[86]"); ?></span></div></td>
                <td width="10%"><div align="center" class="style3"><? echo $dataalteracao;?></div></td>
                <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
                <? } ?>
</table>
            <p>&nbsp;</p>
            <table width="100%"  border="0">
              <tr>
                <td width="33%"><div align="center">
                    <table width="100%"  border="1">
                      <tr>
                        <td width="44%">Data do envio </td>
                        <td width="56%"><div align="center"><strong><? echo $datafechamento;?> </strong></div></td>
                      </tr>
                      <tr>
                        <td colspan="2">Respons&aacute;vel Envio </td>
                      </tr>
                      <tr>
                        <td colspan="2"><strong><? echo $operador_gerente; ?></strong></td>
                      </tr>
                      <tr>
                        <td colspan="2">Assinatura respons&aacute;vel pelo envio </td>
                      </tr>
                      <tr>
                        <td height="57" colspan="2">&nbsp;</td>
                      </tr>
                    </table>
                </div></td>
                <td width="33%">&nbsp;</td>
                <td width="34%"><table width="100%"  border="1">
                  <tr>
                    <td width="44%">Data do recebimento </td>
                    <td width="56%">
                      <div align="center"><strong><? echo $datarecebimento;?> </strong></div></td>
                  </tr>
                  <tr>
                    <td colspan="2">Respons&aacute;vel Recebimento </td>
                  </tr>
                  <tr>
                    <td colspan="2"><strong><? echo $operador_recebeu2; ?></strong></td>
                  </tr>
                  <tr>
                    <td colspan="2">Assinatura respons&aacute;vel pelo recebimento </td>
                  </tr>
                  <tr>
                    <td height="57" colspan="2">&nbsp;</td>
                  </tr>
                </table>                <div align="center"></div></td>
              </tr>
            </table>
<p>&nbsp;</p>
            <p><strong></strong></p>





</body>
</html>
