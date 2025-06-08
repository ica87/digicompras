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

<style type="text/css">
<!--
.style3 {font-size: 10px}
-->
</style>
</head>

<?



require '../../conect/conect.php';

$nome_operador = $_POST['nome_operador'];

$campanha_filtro = $_POST['campanha'];

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];




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
<form name="form1" method="post" action="relatorio_de_producao_periodico_por_operador_novo.php">
  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
  <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
  <input name="campanha" type="hidden" id="campanha" value="<? echo $campanha_filtro; ?>">
  <span class="style3">
  <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
  <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
  <input name="ano_inicial" type="hidden" id="dia_inicial5" value="<? echo $ano_inicial; ?>">
  <input name="dia_final" type="hidden" id="dia_inicial6" value="<? echo $dia_final; ?>">
  <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
  <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
  </span>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?





$num_proposta = $_POST['num_proposta'];




$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$num_proposta = $linha[0];

//$nome_operador = $linha[1];

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

$valor_a_receber = $linha[87];


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

<form name="form1" method="post" action="grava_alterar_comissoes_da_proposta.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="4"><div align="center"><font color="#0000FF" size="4">EDITANDO PROPOSTA N&ordm; <strong><? echo $num_proposta; ?>

                <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $num_proposta; ?>">

      </strong></font></div></td>
    </tr>

    <tr>

      <td width="24%"><strong>Cliente:</strong></td>

      <td width="22%"><strong><font color="#0000FF"><? echo $nome; ?></font></strong></td>

      <td width="21%">CPF do cliente </td>

      <td width="33%"><p><strong><font color="#0000FF"><? echo $cpf; ?>

              <input name="cpf" type="hidden" id="cpf2" value="<? echo $cpf; ?>">

      </font></strong><strong><font color="#0000FF">

      </font></strong><strong><font color="#0000FF">

</font></strong></p>      </td>
    </tr>

    <tr>

      <td><strong>Operador:</strong></td>

      <td><strong><font color="#0000FF"><? echo $nome_operador; ?>
        <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
      </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;      </td>
    </tr>

    <tr>

      <td><strong>Valor bruto de opera&ccedil;&atilde;o R$ </strong></td>

      <td><strong><font color="#0000FF"><? echo $valor_total; ?></font></strong></td>

      <td><strong>Valor Solicitado </strong></td>

      <td><strong><font color="#0000FF"><? echo $valor_credito; ?></font></strong></td>
    </tr>

    <tr>

      <td><strong><font color="#000000">Valor Liberado R$ </font></strong></td>

      <td><strong><font color="#0000FF"><? echo $valor_liberado; ?></font></strong></td>

      <td><strong>Valor da parcela </strong></td>

      <td><strong><font color="#0000FF"><? echo $parcela; ?></font></strong></td>
    </tr>

    <tr>

      <td><strong>Valor liquido cliente R$ </strong></td>

      <td><strong><font color="#0000FF"><? echo $valor_liquido_cliente; ?></font></strong></td>

      <td>Bco da Opera&ccedil;&atilde;o </td>

      <td><strong><font color="#0000FF"><? echo $bco_operacao; ?>

            <input name="bco_operacao" type="hidden" id="bco_operacao3" value="<? echo $bco_operacao; ?>">



      </font></strong></td>
    </tr>

    <tr>

      <td><strong>Percentual do operador </strong></td>

      <td><strong><font color="#0000FF"><? echo $percentual_opr; ?>        <font color="#0000FF"><strong>%</strong></font></font></strong></td>

      <td>Quoeficiente</td>

      <td><strong><font color="#0000FF"><? echo $quoeficiente; ?>

        <input name="quoeficiente" type="hidden" id="quoeficiente" value="<? echo $quoeficiente; ?>">

% </font><font color="#0000FF" size="4"><strong>

</strong></font><font color="#0000FF">     </font></strong></td>
    </tr>

    <tr>

      <td><strong>Comiss&atilde;o do operador</strong></td>

      <td><input name="comissao_op" type="text" id="comissao_op" value="<? echo $comissao_op; ?>"></td>

      <td>Valor a Receber </td>

      <td><input name="valor_a_receber" type="text" id="valor_a_receber" value="<? echo $valor_a_receber; ?>"> </td>
    </tr>



    <tr>

      <td colspan="2"><strong><font color="#0000FF">
        <input name="dataalteracao_comissao" type="hidden" id="dataalteracao_comissao" value="<? echo date('d-m-Y'); ?>">

        <input name="horaalteracao_comissao" type="hidden" id="horaalteracao_comissao" value="<? echo date('H:i:s'); ?>">

        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">

        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">

        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">

        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estab_pertence; ?>">

        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estab_pertence; ?>">

        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estab_pertence; ?>">

        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estab_pertence; ?>">
        <input name="campanha" type="hidden" id="campanha" value="selecione">
        <span class="style3">
        <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
        <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
        <input name="ano_inicial" type="hidden" id="dia_inicial3" value="<? echo $ano_inicial; ?>">
        <input name="dia_final" type="hidden" id="dia_inicial4" value="<? echo $dia_final; ?>">
        <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      </span></font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>
    </tr>

    <tr> 

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit" value="Gravar altera&ccedil;&atilde;o de comiss&otilde;es da Proposta"> 

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

