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
<title>ALTERANDO STATUS DE FISICO DE PROPOSTA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$cpf = $_POST['cpf'];
$num_bordero = $_POST['num_bordero'];



$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>

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



<table width="100%" border="0">
  <tr>
    <td width="25%"><form name="form1" method="post" action="../principal.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit3" value="Voltar ao menu principal">
    </form></td>
    <td width="42%"><form name="form1" method="post" action="lista_de_propostas_para_alterar_satatus.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input name="cpf" type="hidden" id="cpf" value="<? echo $cpf; ?>">
      <font color="#0000FF" size="4"><strong>
      <input name="num_bordero" type="hidden" id="num_bordero" value="<? echo $num_bordero; ?>">
      </strong></font>      <input type="submit" name="Submit32" value="Voltar Para verifica&ccedil;&atilde;o de Propostas por CPF">
      <strong></strong>    
    </form></td>
    <td width="33%"><form name="form1" method="post" action="../borderos/borderos.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit22" value="Voltar ao border&ocirc;">
      <font color="#0000FF" size="4"><strong>
      <input name="num_bordero_receber" type="hidden" id="num_bordero_receber" value="<? echo $num_bordero; ?>">
      </strong></font>
    </form></td>
  </tr>
</table>
<?


$num_proposta = $_POST['num_proposta'];

$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$num_proposta = $linha[0];
$nome_operador = $linha[1];
$tipo = $linha[2];
$estabelecimento_proposta = $linha[3];
$nome = $linha[4];
$sexo = $linha[5];
$estadocivil = $linha[6];
//$cpf = $linha[7];
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
$num_beneficio2 = $linha[80];
$num_beneficio3 = $linha[81];
$num_beneficio4 = $linha[82];
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

$parc = $linha[52];
$banco = $linha[53];
$vencto = $linha[54];
$compra = $linha[55];

$parc = $linha[52];
$banco = $linha[53];
$vencto = $linha[54];
$compra = $linha[55];

$parc1 = $linha[52];
$banco1 = $linha[53];
$vencto1 = $linha[54];
$compra1 = $linha[55];

$parc2 = $linha[56];
$banco2 = $linha[57];
$vencto2 = $linha[58];
$compra2 = $linha[59];

$parc3 = $linha[60];
$banco3 = $linha[61];
$vencto3 = $linha[62];
$compra3 = $linha[63];

$parc4 = $linha[64];
$banco4 = $linha[65];
$vencto4 = $linha[66];
$compra4 = $linha[67];

$parc5 = $linha[68];
$banco5 = $linha[69];
$vencto5 = $linha[70];
$compra5 = $linha[71];

$parc6 = $linha[72];
$banco6 = $linha[73];
$vencto6 = $linha[74];
$compra6 = $linha[75];

$parc7 = $linha[76];
$banco7 = $linha[77];
$vencto7 = $linha[78];
$compra7 = $linha[79];

$tipo_proposta = $linha[83];
$retorno = $linha[85];

$bco_operacao = $linha[86];
$valor_receber = $linha[87];

$quoeficiente = $linha[90];
$valor_liberado = $linha[97];
$tipo_capital = $linha[98];
$percentual_op = $linha[100];
$comissao_op = $linha[101];

$obs2 = $linha[102];

$status_fisico = $linha[120];

}
?>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
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
<form name="form1" method="post" action="grava_alterar_status_fisico.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><font color="#0000FF" size="4">EDITANDO STATUS DO F&Iacute;SICO DA PROPOSTA N&ordm; <strong><? echo $num_proposta; ?>
                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
                <input name="num_bordero" type="hidden" id="num_bordero" value="<? echo $num_bordero; ?>">
</strong></font></div></td>
    </tr>
    <tr>
      <td>Status  F&iacute;sico </td>
      <td><strong><font color="#0000FF">
        <select name="status_fisico" id="select11">
          <option><? echo $status_fisico; ?></option>
<? 
if($status_fisico<>"Enviao ao Banco"){

          echo "<option>Pendente</option>
		  <option>Recebido</option>
          <option>Enviado ao Banco</option>";
		  }
		  
?>
        </select>
      </font></strong></td>
      <td>&nbsp;</td>
      <td><strong></strong></td>
    </tr>
    <tr>
      <td>Operador/Correspondente</td>
      <td colspan="3"><strong><font color="#0000FF"><? echo $nome_operador; ?></font></strong></td>
    </tr>
    <tr>
      <td width="25%">Nome</td>
      <td width="30%"><strong><font color="#0000FF"><? echo $nome; ?>
</font></strong></td>
      <td width="20%">CPF</td>
      <td width="25%"><p><strong><font color="#0000FF"><? echo $cpf; ?></font></strong><strong><font color="#0000FF">         </font></strong><strong><font color="#0000FF">
</font></strong></p>      </td>
    </tr>
    <tr>
      <td>Valor Solicitado </td>
      <td><strong><font color="#0000FF"><? echo $valor_credito; ?></font></strong></td>
      <td>Valor da parcela </td>
      <td>      <strong><font color="#0000FF"><? echo $parcela; ?></font></strong> </td>
    </tr>
    <tr>
      <td><font color="#000000">Valor Liberado </font></td>
      <td><strong><font color="#0000FF">        <? echo $valor_liberado; ?> </font></strong></td>
      <td>Bco da Opera&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo $bco_operacao; ?>
      </font></strong></td>
    </tr>
    <tr>
      <td>Spread</td>
      <td><strong><font color="#0000FF">        <? echo $retorno; ?> % </font></strong></td>
      <td>Quoeficiente</td>
      <td><strong><font color="#0000FF"><? echo $quoeficiente; ?>
% </font><font color="#0000FF" size="4"><strong>
</strong></font><font color="#0000FF">     </font></strong></td>
    </tr>
    <tr>
      <td>Comiss&atilde;o do operador </td>
      <td><strong><font color="#0000FF">        <font color="#0000FF"><strong><font color="#0000FF"><? echo $percentual_op; ?></font> %</strong></font>
        </font></strong></td>
      <td>Valor a Receber </td>
      <td>      <strong><font color="#0000FF"><? echo $valor_a_receber; ?></font></strong> </td>
    </tr>
    <tr>
      <td><div align="left"></div>        
        <div align="left">Observa&ccedil;&otilde;es de pend&ecirc;ncias </div></td>
      <td>&nbsp;</td>
      <td>Comiss&atilde;o do operador</td>
      <td>      <strong><font color="#0000FF"><? echo $comissao_op; ?></font></strong></td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><textarea name="obs_fisico" cols="40" rows="7" id="obs_fisico"></textarea></td>
      <td colspan="2"><textarea name="hist_fisico" cols="45" rows="7" readonly="readonly" id="hist_fisico"><?  
$sql = "SELECT * FROM historico_fisico where num_proposta = '$num_proposta' order by codigo desc";
$res = mysql_query($sql);
$reg = 0;
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$num_proposta = $linha[1];
$obs_fisico = $linha[2];
$data = $linha[3];
$hora = $linha[7];
$operador_informante = $linha[8];
$estabelecimento = $linha[9];


echo "$data - "." $hora - "." $operador_informante - "." $obs_fisico ";
?>

<?

if($reg==1){
//echo "</tr>";
$reg=0;
}


}
	  
	  
	  
	  
	   ?>
      </textarea></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="data_alteracao_status_fisico" type="hidden" id="data_alteracao_status_fisico" value="<? echo date('d-m-Y'); ?>">
        <input name="hora_alteracao_status_fisico" type="hidden" id="hora_alteracao_status_fisico" value="<? echo $hora_atual; ?>">
        <input name="mes_ano_status_fisico" type="hidden" id="mes_ano_status2" value="<? echo date('m-Y'); ?>">
        <input name="operador_alterou_status_fisico" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou_status_fisico" type="hidden" id="cel_operador_alterou_status_fisico" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou_status_fisico" type="hidden" id="email_operador_alterou_status_fisico" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou_status_fisico" type="hidden" id="estabelecimento_alterou_status_fisico" value="<? echo $estabelecimento_alterou; ?>">
        <input name="cidade_estabelecimento_alterou_status_fisico" type="hidden" id="cidade_estabelecimento_alterou_status_fisico" value="<? echo $cidade_estabelecimento_alterou; ?>">
        <input name="tel_estabelecimento_alterou_status_fisico" type="hidden" id="tel_estabelecimento_alterou_status_fisico" value="<? echo $tel_estabelecimento_alterou; ?>">
        <input name="email_estabelecimento_alterou_status_fisico" type="hidden" id="email_estabelecimento_alterou_status_fisico" value="<? echo $email_estabelecimento_alterou; ?>">
        <input name="dia_status_fisico" type="hidden" id="dia_status_fisico" value="<? echo date('d'); ?>">
        <input name="mes_status_fisico" type="hidden" id="mes_status_fisico" value="<? echo date('m'); ?>">
        <input name="ano_status_fisico" type="hidden" id="ano_status_fisico" value="<? echo date('Y'); ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?> <? if($status_fisico<>"Enviao ao Banco"){echo'<input type="submit" name="Submit" value="Confirmar Status do Físico"> 
          <input type="reset" name="Submit2" value="Limpar">'; } ?></td>
      <td><div align="right"> </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong>Cadastro efetuado por <br>
        </strong><strong><font color="#0000FF"><? echo $nome_operador; ?>
        
      </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_proposta; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento; ?>
      </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento; ?>          </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Data do Cadastro <br>
              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>
      <td><strong>Hora que foi efetuado o Cadastro <br>
              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
</form>
<form name="form1" method="post" action="">
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[44];
$cel_operador_alterou = $linha[45];
$email_operador_alterou = $linha[46];
$estabelecimento_alterou = $linha[47];
$cidade_estabelecimento_alterou = $linha[48];
$tel_estabelecimento_alterou = $linha[49];
$email_estabelecimento_alterou = $linha[50];
$dataalteracao = $linha[42];
$horaalteracao = $linha[43];
?>

  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>
      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#CCCCCC"><strong>Data da Altera&ccedil;&atilde;o <br>
            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado a Altera&ccedil;&atilde;o <br>
            <font color="#0000FF"><? echo $horaalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>
      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <? } ?>
</form>
<form name="form1" method="post" action="">
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[44];
$cidade_estabelecimento_alterou = $linha[45];
$tel_estabelecimento_alterou = $linha[46];
$email_estabelecimento_alterou = $linha[47];

?>
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong><font color="#FF0000">Cadastro atualmente sendo alterado por: </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>
      <td>&nbsp;</td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<? } ?>
</form>
</body>
</html>
