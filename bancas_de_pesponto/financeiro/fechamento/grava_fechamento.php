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

// dados do fechamento

$datacadastro = date('d-m-Y');

$horacadastro = date('H:i:s');

$dia = date('d');

$mes = date('m');

$ano = date('Y');

$banco = $_POST['banco'];


$exercito = $_POST['exercito'];
$exercito_liquido = $_POST['exercito_liquido'];

$inss = $_POST['inss'];
$inss_liquido = $_POST['inss_liquido'];

$prefeitura = $_POST['prefeitura'];
$prefeitura_liquido = $_POST['prefeitura_liquido'];

$prefeitura_morro_agudo = $_POST['prefeitura_morro_agudo'];
$prefeitura_morro_agudo_liquido = $_POST['prefeitura_morro_agudo_liquido'];

$prefeitura_jardinopolis = $_POST['prefeitura_jardinopolis'];
$prefeitura_jardinopolis_liquido = $_POST['prefeitura_jardinopolis_liquido'];

$prefeitura_pat_paulista = $_POST['prefeitura_pat_paulista'];
$prefeitura_pat_paulista_liquido = $_POST['prefeitura_pat_paulista_liquido'];

$prefeitura_orlandia = $_POST['prefeitura_orlandia'];
$prefeitura_orlandia_liquido = $_POST['prefeitura_orlandia_liquido'];


$carro_bv = $_POST['carro_bv'];
$carro_bv_liquido = $_POST['carro_bv_liquido'];

$carro_omni = $_POST['carro_omni'];
$carro_omni_liquido = $_POST['carro_omni_liquido'];

$privado = $_POST['privado'];
$privado_liquido = $_POST['privado_liquido'];

$siape = $_POST['siape'];
$siape_liquido = $_POST['siape_liquido'];

$aeronautica = $_POST['aeronautica'];
$aeronautica_liquido = $_POST['aeronautica_liquido'];

$correios = $_POST['correios'];
$correios_liquido = $_POST['correios_liquido'];

$governo_minas_gerais = $_POST['governo_minas_gerais'];
$governo_minas_gerais_liquido = $_POST['governo_minas_gerais_liquido'];

$ipremo = $_POST['ipremo'];
$ipremo_liquido = $_POST['ipremo_liquido'];



$obs = $_POST['obs'];

$dia_ref = $_POST['dia_ref'];

$mes_ref = $_POST['mes_ref'];

$ano_ref = $_POST['ano_ref'];

$nf = $_POST['nf'];

$comissao = $_POST['comissao'];



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



$comando = "insert into fechamento(datacadastro,horacadastro,dia,mes,ano,banco,inss,exercito,prefeitura,obs,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dia_ref,mes_ref,ano_ref,prefeitura_morro_agudo,prefeitura_jardinopolis,prefeitura_pat_paulista,prefeitura_orlandia,carro_bv,carro_omni,privado,siape,aeronautica,correios,nf,comissao,governo_minas_gerais,ipremo,exercito_liquido,inss_liquido,prefeitura_liquido,prefeitura_morro_agudo_liquido,prefeitura_jardinopolis_liquido,prefeitura_pat_paulista_liquido,carro_bv_liquido,carro_omni_liquido,privado_liquido,siape_liquido,aeronautica_liquido,correios_liquido,governo_minas_gerais_liquido,ipremo_liquido) 

values

('$datacadastro','$horacadastro','$dia','$mes','$ano','$banco','$inss','$exercito','$prefeitura','$obs','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dia_ref','$mes_ref','$ano_ref','$prefeitura_morro_agudo','$prefeitura_jardinopolis','$prefeitura_pat_paulista','$prefeitura_orlandia','$carro_bv','$carro_omni','$privado','$siape','$aeronautica','$correios','$nf','$comissao','$governo_minas_gerais','$ipremo','$exercito_liquido','$inss_liquido','$prefeitura_liquido','$prefeitura_morro_agudo_liquido','$prefeitura_jardinopolis_liquido','$prefeitura_pat_paulista_liquido','$carro_bv_liquido','$carro_omni_liquido','$privado_liquido','$siape_liquido','$aeronautica_liquido','$correios_liquido','$governo_minas_gerais_liquido','$ipremo_liquido')";



mysql_query($comando,$conexao) or die("Erro ao registrar fechamento!... Tente novamente");



echo "Fechamento resgistrado com sucesso!<br><br>";







$sql = "SELECT * FROM fechamento order by codigo desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$codigo = $linha[0];

$datacadastro = $linha[1];

$horacadastro = $linha[2];

$dia = $linha[3];

$mes = $linha[4];

$ano = $linha[5];



$operador = $linha[6];

$cel_operador = $linha[7];

$email_operador = $linha[8];

$estabelecimento = $linha[9];

$cidade_estabelecimento = $linha[10];

$tel_estabelecimento = $linha[11];

$email_estabelecimento = $linha[12];



$operador_alterou = $linha[13];

$cel_operador_alterou = $linha[14];

$email_operador_alterou = $linha[15];

$estabelecimento_alterou = $linha[16];

$cidade_estabelecimento_alterou = $linha[17];

$tel_estabelecimento_alterou = $linha[18];

$email_estabelecimento_alterou = $linha[19];

$dataalteracao = $linha[20];

$horaalteracao = $linha[21];



$banco = $linha[22];

$inss = $linha[23];

$exercito = $linha[24];

$prefeitura = $linha[25];

$obs = $linha[26];

$dia_alteracao = $linha[27];

$mes_alteracao = $linha[28];

$ano_alteracao = $linha[29];

$dia_ref = $linha[30];

$mes_ref = $linha[31];

$ano_ref = $linha[32];



$prefeitura_morro_agudo = $linha[33];

$prefeitura_jardinopolis = $linha[34];

$prefeitura_pat_paulista = $linha[35];

$carro_bv = $linha[36];

$carro_omni = $linha[37];

$privado = $linha[38];

$siape = $linha[39];

$aeronautica = $linha[40];

$nf = $linha[41];

$comissao = $linha[42];

$correios = $linha[43];


$exercito_liquido = $linha[46];
$inss_liquido = $linha[47];
$prefeitura_liquido = $linha[48];
$prefeitura_morro_agudo_liquido = $linha[49];
$prefeitura_jardinopolis_liquido = $linha[50];
$prefeitura_pat_paulista_liquido = $linha[51];
$carro_bv_liquido = $linha[52];
$carro_omni_liquido = $linha[53];
$privado_liquido = $linha[54];
$siape_liquido = $linha[55];
$aeronautica_liquido = $linha[56];
$correios_liquido = $linha[57];
$governo_minas_gerais_liquido = $linha[58];
$ipremo_liquido = $linha[59];
$prefeitura_orlandia = $linha[60];
$prefeitura_orlandia_liquido = $linha[61];

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

	$mens   =  "Olá Alessandra! Foi registrado uma entrada no caixa da $nfantasia   \n";

	$mens  .=  "Verifique abaixo \n\n";

	

	$mens  .=  "Código do Aluno : ".$codigo_aluno."                                                    \n";

	$mens  .=  "Nome: ".$nome."                                                       \n";

	$mens  .=  "Nome do Responsável: ".$nome_resp."                                                       \n";

	$mens  .=  "Curso : ".$curso."                                                    \n";

	$mens  .=  "Duração : ".$duracao."                                                    \n";

	$mens  .=  "Mensalide : R$ ".$mensalidade."                                                    \n";

	$mens  .=  "Vencimento: ".$vencto."                                                    \n";

	$mens  .=  "Valor Recebido: ".$valor_recebido."                                                    \n";

	$mens  .=  "Quitação : ".$quitacao."                                                    \n";

	$mens  .=  "Observações: ".$obs."                                                       \n";

	$mens  .=  "Data do registro: ".$datacadastro."                                                       \n";

	$mens  .=  "hora do registro: ".$horacadastro."                                                       \n";

	

	$mens  .=  "Operador que efetuou o cadastro: ".$operador."                                                    \n";

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

    <td colspan="6"><div align="center" class="style1">Lan&ccedil;amento de Fechamento de m&ecirc;s n&ordm; <? echo $codigo; ?></div></td>
  </tr>

  <tr>

    <td width="22%"><span class="style4">Data do lan&ccedil;amento </span></td>

    <td width="13%"><span class="style9"><? echo $datacadastro; ?></span></td>

    <td width="15%">&nbsp;</td>
    <td width="19%"><span class="style4">Hora do lan&ccedil;amento </span></td>

    <td width="16%"><span class="style9"><? echo $horacadastro; ?></span></td>
    <td width="15%">&nbsp;</td>
  </tr>

  <tr>

    <td><span class="style4">Valor Comiss&atilde;o </span></td>

    <td><span class="style10"><span class="style9"><? echo "R$ ". $comissao; ?></span></span></td>

    <td>&nbsp;</td>
    <td><span class="style5"><strong>Banco</strong></span></td>

    <td><span class="style10"><span class="style9"><? echo $banco; ?></span></span></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td><span class="style4">Nota Fiscal </span></td>
    <td><span class="style10"><span class="style9"><? echo $nf; ?></span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>

    <td>&nbsp;</td>

    <td><div align="center"><strong>Valor Bruto</strong></div></td>

    <td><div align="center"><strong>Valor Liquido</strong></div></td>
    <td>&nbsp;</td>

    <td><div align="center"><strong>Valor Bruto</strong></div></td>
    <td><div align="center"><strong>Valor Liquido</strong></div></td>
  </tr>

  <tr>
    <td><span class="style4">Ex&eacute;rcito</span></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$exercito; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$exercito_liquido; ?></span></div></td>
    <td><span class="style4">Carro OMNI </span></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$carro_omni; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$carro_omni_liquido; ?></span></div></td>
  </tr>
  <tr>

    <td><span class="style4">INSS</span></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$inss; ?></span></div></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$inss_liquido; ?></span></div></td>
    <td><span class="style4">Privado</span></td>

    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$privado; ?></span></span></div></td>
    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$privado_liquido; ?></span></span></div></td>
  </tr>

  <tr>
    <td><span class="style4">Prefeitura Franca </span></td>
    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$prefeitura; ?></span></span></div></td>
    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$prefeitura_liquido; ?></span></span></div></td>
    <td><span class="style4">Siape</span></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$siape; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$siape_liquido; ?></span></div></td>
  </tr>
  <tr>

    <td><span class="style4">Prefeitura Morro Agudo </span></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$prefeitura_morro_agudo; ?></span></div></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$prefeitura_morro_agudo_liquido; ?></span></div></td>
    <td><span class="style4">Aeronautica</span></td>

    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$aeronautica; ?></span></span></div></td>
    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$aeronautica_liquido; ?></span></span></div></td>
  </tr>

  <tr>
    <td><span class="style4">Prefeitura Jardinopolis </span></td>
    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$prefeitura_jardinopolis; ?></span></span></div></td>
    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$prefeitura_jardinopolis_liquido; ?></span></span></div></td>
    <td><span class="style4">Correios</span></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$correios; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$correios_liquido; ?></span></div></td>
  </tr>
  <tr>

    <td><span class="style4">Prefeitura Pat. Paulista </span></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$prefeitura_pat_paulista; ?></span></div></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$prefeitura_pat_paulista_liquido; ?></span></div></td>
    <td><span class="style4">Governo de Minas Gerais</span></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$governo_minas_gerais; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$governo_minas_gerais_liquido; ?></span></div></td>
  </tr>

  <tr>
    <td><span class="style5"><strong>Prefeitura Orl&acirc;ndia</strong></span></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$prefeitura_orlandia; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$prefeitura_orlandia_liquido; ?></span></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>

    <td><span class="style4">Carro BV </span></td>

    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$carro_bv; ?></span></span></div></td>

    <td><div align="center"><span class="style10"><span class="style9"><? echo "R$ ".$carro_bv_liquido; ?></span></span></div></td>
    <td><span class="style4">Ipremo</span></td>

    <td><div align="center"><span class="style9"><? echo "R$ ".$ipremo; ?></span></div></td>
    <td><div align="center"><span class="style9"><? echo "R$ ".$ipremo_liquido; ?></span></div></td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>

    <td><span class="style5"><strong>Observa&ccedil;&otilde;es</strong></span></td>

    <td colspan="5"><span class="style9"><? echo $obs; ?></span></td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td><span class="style10"></span></td>
    <td>&nbsp;</td>
  </tr>
</table>

<p></p>

<table width="100%" border="1" cellspacing="4">

  <tr>

    <td colspan="2"><strong>Cadastro efetuado por <br>

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

</table>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>