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
<title>TELA DE EDI&Ccedil;&Atilde;O DE PROPOSTAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';


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




<form name="form1" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar ao menu principal">
</form>
<?


$num_proposta = $_POST['num_proposta'];
$percentual = $_POST['percentual']/100;
$percentual_op = $_POST['percentual_op']/100;
$spread = ($_POST['percentual'])/100;



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`propostas` set `num_proposta` = '$num_proposta',`quoeficiente` = '$percentual',`percentual_op` = '$percentual_op' where `propostas`. `num_proposta` = '$num_proposta' limit 1 ";
}
mysql_query($comando,$conexao);




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
$retorno = $linha[85];
$bco_operacao = $linha[86];
$valor_a_receber = $linha[87];
$recebido = $linha[88];
$data_recebimento = $linha[89];


$parc1 = $linha[52];
$banco1 = $linha[53];
$vencto1 = $linha[54];
$compra1 = $linha[55];

$num_beneficio2 = $linha[80];
$num_beneficio3 = $linha[81];
$num_beneficio4 = $linha[82];

$tipo_proposta = $linha[83];

$quoeficiente = $linha[90];
$valor_liberado = $linha[97];
$tipo_capital = $linha[98];
$percentual_op = $linha[100];
$comissao_op = $linha[101];
$obs3 = $linha[102];
$valor_total = $linha[113];
$campanha_gravada = $linha[114];
$valor_liquido_cliente = $linha[115];



?>
<? } ?>


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
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

?>
<? } ?>
<form name="form1" method="post" action="grava_alterar_status_da_proposta.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><font color="#0000FF" size="4">EDITANDO PROPOSTA N&ordm; <strong><? echo $num_proposta; ?>
                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">
      </strong></font></div></td>
    </tr>
    <tr>
      <td width="24%">Status</td>
      <td width="22%"><strong><font color="#0000FF">
        <select name="status" id="select11">
          <option selected><? echo $status; ?></option>
          <?


    $sql = "select * from status order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
    }
?>
        </select>
        <input name="mes_ano_status" type="hidden" id="mes_ano_status" value="<? echo date('m-Y'); ?>">
</font></strong></td>
      <td width="21%">CPF do cliente </td>
      <td width="33%"><p><strong><font color="#0000FF"><? echo $cpf; ?>
              <input name="cpf" type="hidden" id="cpf2" value="<? echo $cpf; ?>">
      </font></strong><strong><font color="#0000FF">
      </font></strong><strong><font color="#0000FF">
</font></strong></p>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;      </td>
    </tr>
    <tr>
      <td><strong>Valor bruto de opera&ccedil;&atilde;o R$ </strong></td>
      <td><input name="valor_total" type="text" id="valor_total" value="<? echo $valor_total; ?>"></td>
      <td><strong>Valor Solicitado </strong></td>
      <td><strong><font color="#0000FF">
        <input name="valor_credito" type="text" id="valor_credito" value="<? echo $valor_credito; ?>">
      </font></strong></td>
    </tr>
    <tr>
      <td><strong><font color="#000000">Valor Liberado R$ </font></strong></td>
      <td><strong><font color="#0000FF">
        <input name="valor_liberado" type="text" id="valor_liberado" value="<? echo $valor_liberado; ?>">
      </font></strong></td>
      <td><strong>Valor da parcela </strong></td>
      <td><input name="parcela" type="text" id="parcela2" value="<? echo $parcela; ?>"></td>
    </tr>
    <tr>
      <td><strong>Valor liquido cliente R$ </strong></td>
      <td><strong>
        <input name="valor_liquido_cliente" type="text" id="valor_liquido_cliente" value="<? echo $valor_liquido_cliente; ?>">
      </strong></td>
      <td>Bco da Opera&ccedil;&atilde;o </td>
      <td><strong><font color="#0000FF"><? echo $bco_operacao; ?>
            <input name="bco_operacao" type="hidden" id="bco_operacao3" value="<? echo $bco_operacao; ?>">

      </font></strong></td>
    </tr>
    <tr>
      <td>Spread</td>
      <td><strong><font color="#0000FF">
        <input name="retorno" type="text" id="retorno2" value="<? $calculo = bcmul($valor_credito, $spread, 2)/14400.00; $calculo_spread = bcmul($calculo,100,2); echo $calculo_spread; ?>">
        <? $calculo2 = bcmul($valor_credito, $spread, 2)/14400.00; $calculo_spread2 = bcmul($calculo2,100,2); echo $calculo_spread2;?> % </font></strong></td>
      <td>Quoeficiente</td>
      <td><strong><font color="#0000FF"><? echo $quoeficiente; ?>
        <input name="quoeficiente" type="hidden" id="quoeficiente" value="<? echo $quoeficiente; ?>">
% </font><font color="#0000FF" size="4"><strong>
</strong></font><font color="#0000FF">     </font></strong></td>
    </tr>
    <tr>
      <td>Comiss&atilde;o do operador </td>
      <td><strong><font color="#0000FF">
        <input name="percentual_op" type="text" id="percentual_op2" value="<? echo $percentual_op; ?>">
        <font color="#0000FF"><strong>%</strong></font>
</font></strong></td>
      <td>Valor a Receber </td>
      <td><input name="valor_a_receber" type="text" id="valor_a_receber" value="<? echo bcmul($valor_credito, $quoeficiente, 2); ?>">
 </td>
    </tr>
    <tr>
      <td>Campanha</td>
      <td><strong><font color="#0000FF">
        <select name="campanha" id="select2">
          <option selected>
          <? if($campanha_gravada==""){echo "selecione"; } else{echo $campanha_gravada; } ?>
          </option>
          <?


    $sql = "select * from campanhas where status = 'ATIVA' order by campanha asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['campanha']."</option>";
    }
?>
        </select>
      </font></strong></td>
      <td><strong>Comiss&atilde;o do operador</strong></td>
      <td><input name="comissao_op" type="text" id="comissao_op" value="<? echo bcmul($valor_total, $percentual_op, 2); ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Observa&ccedil;&otilde;es</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="obs2" cols="45" rows="7" id="obs2"><? echo $obs3; ?></textarea></td>
      <td colspan="2"><textarea name="parecer_credito" cols="45" rows="7" readonly="readonly" id="parecer_credito"><?  
$sql = "SELECT * FROM observacoes_parecer_credito where num_proposta = '$num_proposta' order by codigo desc";
$res = mysql_query($sql);
$reg = 0;
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$num_proposta_cli = $linha[1];
$cpf = $linha[2];
$data = $linha[3];
$hora = $linha[4];
$parecer_de_credito = $linha[5];
$operador = $linha[6];


echo "$data - "."$parecer_de_credito - "."$operador";
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
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estab_pertence; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estab_pertence; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estab_pertence; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estab_pertence; ?>">
        <input name="recebido" type="hidden" id="recebido" value="<? echo Não; ?>">
</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Alterar Status da Proposta"> 
          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>
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
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

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
