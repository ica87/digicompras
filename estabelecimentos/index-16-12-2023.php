<?php



/* Define o limitador de cache para 'private' */

session_cache_limiter('private');

$cache_limiter = session_cache_limiter();



/* Define o limite de tempo do cache em minutos */

session_cache_expire(720);

$cache_expire = session_cache_expire();



session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["data_hoje"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["dia"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["mes"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["ano"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["mes_ano"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");





$_SESSION["codigo"]; //verifica se a variável "senha" é verdadeira...

$mensagem = $_GET['mensagem'];





//$referencia = $vg;







?>





<html>

<head>

<title>Servi&ccedil;os ao Cliente</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<script language="JavaScript">

 /*

 A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)

 onkeypress="mascara(this, '## ####-####')"

 onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função

 O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara

 no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562

 para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]

 para o RG '##.###.###.# [40.123.456.7]

 para o CPF '###.###.###.##' [789.456.123.10]

 Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 



 lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12

 <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">

 neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço

 */



 function mascara(t, mask){

 var i = t.value.length;

 var saida = mask.substring(1,0);

 var texto = mask.substring(i)

 if (texto.substring(0,1) != saida){

 t.value += texto.substring(0,1);

 }

 }

 </script>





<?



require '../conect/conect.php';

include '../css/botoes.css';



$solicitacao = $_POST[solicitacao];



$codigo = $_SESSION['codigo'];



$data_hoje = $_SESSION['data_hoje'];

$dia = $_SESSION['dia'];

$mes = $_SESSION['mes'];

$ano = $_SESSION['ano'];

$mes_ano = $_SESSION['mes_ano'];



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



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



background="../background/<? //printf("$linha[1]"); ?>" bgproperties="fixed">

  

<?







$sql = "SELECT * FROM estabelecimentos where cnpj = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





//$codigo = $linha[0];

$razaosocial = $linha[1];

$nfantasia = $linha[2];

$cnpj = $linha[3];

$inscr_est = $linha[4];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$complemento = $linha[8];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email = $linha[14];

$site = $linha[15];

$proprietario = $linha[16];

$cpf = $linha[17];

$rg = $linha[18];

$operador = $linha[24];

$cel_operador = $linha[25];

$email_operador = $linha[26];

$estabelecimento = $linha[27];

$cidade_estabelecimento = $linha[28];

$tel_estabelecimento = $linha[29];

$email_estabelecimento = $linha[30];

$obs = $linha[19];

$datacadastro = $linha[20];

$horacadastro = $linha[21];

$dataalteracao = $linha[22];

$horaalteracao = $linha[23];

$operador_alterou = $linha[31];

$cel_operador_alterou = $linha[32];

$email_operador_alterou = $linha[33];

$estabelecimento_alterou = $linha[34];

$cidade_estabelecimento_alterou = $linha[35];

$tel_estabelecimento_alterou = $linha[36];

$email_estabelecimento_alterou = $linha[37];

$operador_atendente = $linha[41];

$banco = $linha[42];

$agencia = $linha[43];

$conta = $linha[44];

$categoria = $linha[45];

$foto = $linha[46];

$aliquota = $linha[47];

$usuario_estab = $linha[48];

$senha_estab = $linha[49];

$status_estabelecimento = $linha[50];



$plano = $linha[51];



$aliquota_de_comissao_digicompras = $linha[57];



$teto_de_pontos = $linha[58];



?>

<? } ?>

<?



if($solicitacao=="utilizarpontos"){

	

$num_cartao = $_POST['num_cartao'];

$consumidor = $_POST['consumidor'];

$quant_pontos = $_POST['quant_pontos'];

$data_utilizacao = $_POST['data_hoje'];

$hora_utilizacao = date('H:i:s');





$sql = "SELECT * FROM pontos_utilizados where estab_pertence_com = '$nfantasia' and cnpj_estab_com = '$cnpj' and num_cartao = '$num_cartao' and usuario = '$consumidor' and data = '$data_utilizacao' and quant_pontos = '$quant_pontos' order by data desc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

	

$verifica_registros_de_pontos_utilizados = mysql_num_rows($res);

	

}



if($verifica_registros_de_pontos_utilizados>=1){

	

}

else{

	

$comando = "insert into pontos_utilizados(estab_pertence_com,cnpj_estab_com,num_cartao,usuario,quant_pontos,data,hora) 



values('$nfantasia','$cnpj','$num_cartao','$consumidor','$quant_pontos','$data_utilizacao','$hora_utilizacao')";



mysql_query($comando,$conexao) or die("Erro ao registrar a venda! Tente novamente");





echo "Pontos utilizados com sucesso!<br>";



}



}



?>











  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <strong><font color="#0000FF">
  <?

	

if($solicitacao=="registrarvenda"){



$num_cartao = $_POST['num_cartao'];

$valor_compra = $_POST['valor_compra'];

$pontos_obtidos = bcmul($valor_compra,0.2,2);



if($plano=="ND"){



$comissao_digicompras = "0.00";



}

else{



$comissao_digicompras = bcmul($valor_compra,$aliquota_de_comissao_digicompras,2);



}



$data_compra = $data_hoje;

$date_compra = date('Y-m-d');

$hora_compra = date('H:i:s');
	
$hora_compra2 = explode(":", $hora_compra);

$hc = $hora_compra2[0];

$mc = $hora_compra2[1];

$sc = $hora_compra2[2];



$sql = "SELECT * FROM usuarios where codigo = '$num_cartao'";

$res = mysql_query($sql);

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

$senha = $linha[40];

$funcao = $linha[41];

$estab_pertence = $linha[42];

$cidade_estab_pertence = $linha[43];

$tel_estab_pertence = $linha[44];

$email_estab_pertence = $linha[45];

$status_usuario = $linha[46];

$salario = $linha[47];

$limite = $linha[48];

$operador_atende = $linha[49];

}

	

$sql = "SELECT * FROM compras where num_cartao = '$num_cartao' and estab_pertence_com = '$nfantasia' and cnpj_estab_com = '$cnpj' and mes_ano = '$mes_ano' and data_compra = '$data_compra' and valor_compra = '$valor_compra' order by `data_compra`,`hora_compra` desc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$verifica_registros = mysql_num_rows($res);

$hora_de_registro_da_compra = $linha[15];	

}
	
$hora_de_registro_da_compra2 = explode(":", $hora_de_registro_da_compra);

$hrc = $hora_de_registro_da_compra2[0];

$mrc = $hora_de_registro_da_compra2[1];

$src = $hora_de_registro_da_compra2[2];
	

$convert_hora_de_registro_da_compra_em_minutos = bcmul($hrc,60);
	$totaliza_minutos_rc = bcadd($convert_hora_de_registro_da_compra_em_minutos,$mrc);

$convert_hora_atual_em_minutos = bcmul($hc,60);
	$totaliza_minutos_hc = bcadd($convert_hora_atual_em_minutos,$mc);


$totaldeminutos = bcsub($totaliza_minutos_hc,$totaliza_minutos_rc);



if(($verifica_registros>=1) && ($totaldeminutos<=2)){
	
echo "<script>

alert('ATENCAO!!!... Venda nao registrada! *Possivelmente registro duplicado pois, o sistema identificou: Mesmo número de cartao $num_cartao, nesta mesma data e exatamente o mesmo valor e com apenas $totaldeminutos minuto(s) de intervalo!.');

</script>";

}

else{

	

$comando = "insert into compras(nome,cpf,endereco,numero,bairro,cep,telefone,celular,estab_pertence,cidade_estab_pertence,tel_estab_pertence,email_estab_pertence,valor_compra,data_compra,hora_compra,dia,mes,ano,mes_ano,num_cartao,estab_pertence_com,tel_estab_pertence_com,cidade_estab_pertence_com,email_estab_pertence_com,operador_atende,operador_realizou,cel_operador_realizou,email_operador_realizou,comissao_digicompras,cnpj_estab_com,pontos) 



values('$nome','$cpf','$endereco','$numero','$bairro','$cep','$telefone','$celular','$estab_pertence','$cidade_estab_pertence','$tel_estab_pertence','$email_estab_pertence','$valor_compra','$data_compra','$hora_compra','$dia','$mes','$ano','$mes_ano','$num_cartao','$nfantasia','$telefone','$cidade','$email','$operador_atendente','$nfantasia','$fax','$email','$comissao_digicompras','$cnpj','$pontos_obtidos')";
mysql_query($comando,$conexao) or die("Erro ao registrar a venda! Tente novamente");


	
echo "<script>

alert('Venda registrada com sucesso!<br> Compra gerou $pontos_obtidos pontos!');

</script>";

}

	

}

	  

?>
  </font></strong>

<table width="100%" border="0" cellpadding="0" cellspacing="0">

    <tr>

      <td width="27%"><strong>Ol&aacute;! Seja bem vindo<br>

      </strong><strong><font color="#0000FF"><? echo $nfantasia; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="17%"><? printf("<a href='foto.php?chamar=$codigo' >Trocar fotos</a> ");?></td>

      <td width="23%" align="center"><strong>Total Vendas<font color="#0000FF"><br>

            <? 

$sql = "select sum(valor_compra) as total_vendas from compras where cnpj_estab_com = '$cnpj' and mes_ano = '$mes_ano'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$vendas_realizadas = $linha['total_vendas'];

if($vendas_realizadas<=0){

echo " R$ 0.00";

}else{

$subtotal = bcadd($vendas_realizadas,0,2);

echo "R$ $subtotal"; 

}

	

?>

      </font></strong></td>

      <td width="18%" valign="top"><div align="center"><strong>

<?

	  if($plano=="ND"){

	

}

else{



echo "Comiss&atilde;o Digicompras"; }



?>

<font color="#0000FF"><br>

<? 

	

$sql = "select sum(comissao_digicompras) as total_comissao from compras where cnpj_estab_com = '$cnpj' and mes_ano = '$mes_ano'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$comissao_a_receber = $linha['total_comissao'];



if($plano=="ND"){

	

}

else{

	

if($comissao_a_receber<=0){

echo " R$ 0.00";

}else{

echo "R$ $comissao_a_receber"; 

}



}



?>

      </font><font color="#0000FF"></font></strong></div></td>

      <td width="15%" valign="top"><div align="center"><strong><font color="#0000FF">Confira a data de hoje </font></strong><br>

      <strong><font color="#0000FF"><? echo "$data_hoje $hora_compra "; ?></font></strong></div></td>

    </tr>

  <?

if($reg==3){

echo "</tr><tr>";

$reg=0;

}

?>



<? } ?>

</table>

<?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

<div align="center"></div>

<table width="100%"  border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td colspan="4"><div align="center"><strong><font color="#FF0000"><? echo $mensagem; ?></font></strong></div></td>

  </tr>

  <tr>

    <td><div align="center"></div></td>

    <td><div align="center"><strong>N&ordm;  cart&atilde;o</strong></div></td>

    <td><div align="center"><strong>CPF</strong></div></td>

    <td background='../imagens_sistema/fundocelulas2.png'><div align="center"><strong>M&iacute;nimo de Pontos para utiliza&ccedil;&atilde;o</strong></div></td>

  </tr>

  <tr>

    <td width="23%"><div align="center">

      <form action="usuarios/menu.php" method="post" name="form2" id="form11">

        <div align="center">

          <?



$usuario = $_SESSION['usuario'];



$senha = $_SESSION['senha'];



?>

          <? if($reg_mensagem==0){ echo "<input type='submit' class='class01' name='Submit5' value='Usuarios'>"; } ?>

          <input type="hidden" name="nome" id="nome" />

        </div>

      </form>

    </div></td>

    <td width="23%"><form action="index.php" method="post" name="form2">

      <div align="center">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        

        <input  name="codigo" type="text" class="class02" id="codigo" value="<? echo "$codigo"; ?>" size="15">      

        <input type="submit" class="class01" name="Submit3" value="Consultar">

      </div>

    </form></td>

    <td width="27%"><form action="index.php" method="post" name="form2">

      <div align="center">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input  name="cpfpesquisar" type="text" class="class02" id="cpfpesquisar" value="<? echo "$cpfpesquisar"; ?>" size="15">

        <input type="submit" class="class01" name="Submit2" value="Consultar">

      </div>

    </form></td>

    <td width="27%" background='../imagens_sistema/fundocelulas2.png'><div align="center"><font color="#000000"><strong><font color="#0000FF"><? echo $teto_de_pontos; ?></font></strong></font></div></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td><form name="form1" method="post" action="relatorio_de_faturamento_mensal_todas_empresas_sintetico.php">

      <div align="center">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <strong><font color="#FF0000">m&ecirc;s-ano</font></strong>

        <input name="mes_ano" class="class02" type="text" id="mes_ano" size="7" maxlength="7">

        <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">

        <input type="submit" class="class01" name="Submit" value="Relat&oacute;rio mensal">

      </div>

    </form></td>

  </tr>

</table>

<?



$num_cartao = $_POST['codigo'];



$cpfpesquisar = $_POST['cpfpesquisar'];





?>



<?



if(empty($num_cartao)){

$sql = "SELECT * FROM usuarios where cpf = '$cpfpesquisar'";

}

else{

$sql = "SELECT * FROM usuarios where codigo = '$num_cartao'";

}

$res = mysql_query($sql);

$reg = 0;

while($linha=mysql_fetch_row($res)) {

$reg++;



$codigo = $linha[0];

$numero_do_cartao = $linha[0];



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

$senha = $linha[40];

$funcao = $linha[41];

$estab_pertence = $linha[42];

$cidade_estab_pertence = $linha[43];

$tel_estab_pertence = $linha[44];

$email_estab_pertence = $linha[45];

	

$status_usuario = $linha[46];

	

$salario = $linha[47];

	

$limite = $linha[48];

	

$operador_atende = $linha[49];

$status_de_envio = $linha[52];





?>

<?

//$sql = "SELECT * FROM empresas_conveniadas where nfantasia = '$estab_pertence'";

//$res = mysql_query($sql);

//while($linha=mysql_fetch_row($res)) {



//$nfantasia = $linha[2];

//$status = $linha[42];

//}

?>





<strong></strong>

<div align="center"><strong></strong></div>

<table width="100%"  border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td width="26%"><div align="center"><strong>N&ordm; Cart&atilde;o fidelidade</strong></div></td>

    <td width="21%"><div align="center"><strong>Cliente</strong></div></td>

    <td width="25%" align="center"><font color="#000000"><strong>Status</strong></font></td>

    <td width="28%" align="center">    <strong>Total de compras em </strong> <strong><font color="#0000FF"><? echo $mes_ano; ?></font></strong></td>

  </tr>

  <tr>

    <td><div align="center"><strong></strong><strong><font color="#0000FF"><? echo $codigo; ?></font></strong></div></td>

    <td><div align="center"><strong><font color="#0000FF"><? echo $nome; ?></font></strong></div></td>

    <td align="center"><font color="#000000"><strong><font color="#0000FF"><? echo $status_usuario; ?></font></strong></font></td>

    <td align="center"><strong>

    <?

$sql = "select sum(valor_compra) as total from compras where cnpj_estab_com = '$cnpj' and num_cartao = '$numero_do_cartao' and mes_ano = '$mes_ano'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = bcadd($linha['total'],0,2);

if($valor_total==0){

echo "R$ 0.00";

}else{

echo "R$ $valor_total";

}

?>

    </strong></td>

  </tr>

  <tr>

    <td><form action="usuarios/impressao.php" method="post" name="form3" target="_blank">

      <div align="center"><strong>

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <?

$sql2 = "select sum(quant_impressao) as total_impressoes from impressao_de_cartao where num_cartao = '$codigo'";

$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$quant_impressao = bcadd($linha['total_impressoes'],1,0);



?>

  <? if($quant_impressao<=0){

$conteudo_botao_imprimir = "Imprimir Via 1";

}else{

$conteudo_botao_imprimir = "Imprimir Via $quant_impressao";

}

?>

        <font color="#0000FF">

          <input name="codigo" type="hidden" id="codigo" value="<? echo "$codigo"; ?>">

          </font></strong>

        <input type="submit" class='class01' name="button2" id="button2" value="<? echo "$conteudo_botao_imprimir"; ?>">

      </div>

    </form></td>

    <td><div align="center"></div></td>

    <td><div align="center"></div></td>

    <td align="center" valign="bottom"><strong><font color="#0000FF">

      <? 

$sql = "select sum(quant_pontos) as total_pontos_utilizados from pontos_utilizados where cnpj_estab_com = '$cnpj' and num_cartao = '$numero_do_cartao'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$saldo_de_pontos_utilizados = $linha['total_pontos_utilizados'];

if($saldo_de_pontos_utilizados<=0){

//echo "0.00";

}else{

//echo "$total_pontos_utilizados"; 

}

	

		

		?>

    </font>Saldo de Pontos</strong></td>

  </tr>

  <tr>

    <td><div align="center"><strong></strong></div></td>

    <td colspan="2"><div align="center">      <form action="index.php" method="post" name="form3">

      <p align="center"><strong><font color="#0000FF">
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">

        <input name="solicitacao" type="hidden" id="solicitacao" value="registrarvenda">

        <input name="num_cartao" type="hidden" id="num_cartao" value="<? echo $codigo; ?>">

        <input name="calculo" type="hidden" id="calculo" value="<? echo $calculo; ?>">

        

        </font><font color="#FF0000">

          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <? 

	      if(($status_estabelecimento=="Inativo") or ($plano=="ND")){echo "<br>Prezado(a) $nfantasia você encontra-se com status $status_estabelecimento e Plano $plano! <br>Entre em contato com a DIGICOMPRAS para ativar o serviço e come&ccedil;ar a utilizar o cart&atilde;o fidelidade para seus clientes!";

		  }else{

		  if($status_usuario=="Inativo"){

		  echo "<br>Prezado $nome <br> Seu cart&atilde;o est&aacute; inativo! Utiliza&ccedil;&atilde;o n&atilde;o permitida<br> Entre em contato com o estabelecimento comercial que cadastrou o cart&atilde;o fidelidade para maiores informa&ccedil;&otilde;es!";

		  }else{

			  

		echo "Registro da compra<br>

        R$<input name='valor_compra' class='class02' type='text' id='valor_compra' value='' size='6' maxlength='9'>";

  		  

		  echo '<br><input type="submit" class="class01" name="Submit4" value="Registrar">';

		  

		  }

		  }

		   ?>

          </font><font color="#0000FF"> </font></strong>

        <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

        <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">

        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

        <input name="data_compra" type="hidden" id="data_compra" value="<? echo $data_hoje; ?>">

        </p>

    </form>      </div></td>

    <td valign="top"><div align="center"><strong><font color="#0000FF">

      <? 

$sql = "select sum(pontos) as total from compras where cnpj_estab_com = '$cnpj' and num_cartao = '$numero_do_cartao'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$saldo_de_pontos = bcsub($linha['total'],$saldo_de_pontos_utilizados,2);

if($saldo_de_pontos<=0){

echo "0.00";

}else{

echo "$saldo_de_pontos"; 

}

	

		

		?>

    </font></strong></div></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td colspan="2">&nbsp;</td>

    <td valign="top" 

<?

if($saldo_de_pontos>=$teto_de_pontos){

    echo "background='../imagens_sistema/fundocelulas1.png'";

}

?>

><div align="center">

      <form name="form1" method="post" action="index.php">

        <strong><font color="#0000FF">

        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">

        </font></strong>

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

<?

if($saldo_de_pontos>=$teto_de_pontos){

        echo "<input name='quant_pontos' class='class02' type='text' id='quant_pontos' size='7' maxlength='9'><br>";

}

?>

<?

if($saldo_de_pontos>=$teto_de_pontos){

        echo "<input type='submit' class='class01' name='Submit2' value='Utilizar meus pontos'>";

}

?>

        <input name="solicitacao" type="hidden" id="solicitacao" value="utilizarpontos">

        <input name="estab_pertence_com" type="hidden" id="estab_pertence_com" value="<? echo $nfantasia; ?>">

        <input name="cnpj_estab_com" type="hidden" id="cnpj_estab_com" value="<? echo "$cnpj"; ?>">

        <input name="num_cartao" type="hidden" id="num_cartao" value="<? echo "$codigo"; ?>">

        <input name="consumidor" type="hidden" id="consumidor" value="<? echo "$nome"; ?>">

<input name="usuario" type="hidden" id="usuario" value="<? echo "$cnpj"; ?>">

        <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

        <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">

        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

      </form>

    </div></td>

  </tr>

</table>

<p align="center">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  <? } ?>

</p>

<p align="center">&nbsp;</p>

<p align="center">&nbsp;</p>

</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>