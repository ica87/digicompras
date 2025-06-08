<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>
<html>
<head>
<title>JALLF INFORM&Aacute;TICA - CONTRATO PARTICULAR DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS E OUTRAS AVEN&Ccedil;AS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {font-size: 12px}
-->
</style>
</head>

<?
//require("conexao.php"); or die("erro na requisição");
require '../../conect/conect.php';
?>
<?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'><br><br>"); ?>
<?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>



<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("ffffff"); ?>">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>

<?
// dados do estabelecimento

$codigo = $_POST['codigo'];


$sql = "SELECT * FROM clientes where codigo = '$codigo'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

//dados do aluno
$codigo = $linha[0];
$datacadastro = $linha[1];
$horacadastro = $linha[2];
$como_conheceu_escola = $linha[3];
$nome = $linha[4];
$sexo = $linha[5];
$data_nasc = $linha[6];
$estadocivil = $linha[7];
$enderecoa = $linha[8];
$numeroa = $linha[9];
$bairroa = $linha[10];
$complementoa = $linha[11];
$cidadea = $linha[12];
$estadoa = $linha[13];
$cepa = $linha[14];
$telefonea = $linha[15];
$celulara = $linha[16];
$emaila = $linha[17];
$cpf = $linha[18];
$rg = $linha[19];
$orgao = $linha[20];
$emissao = $linha[21];
$pai = $linha[22];
$mae = $linha[23];

//dados do responsavel
$nome_resp = $linha[24];
$sexo_resp = $linha[25];
$data_nasc_resp = $linha[26];
$estadocivil_resp = $linha[27];
$endereco_resp = $linha[28];
$numero_resp = $linha[29];
$bairro_resp = $linha[30];
$complemento_resp = $linha[31];
$cidade_resp = $linha[32];
$estado_resp = $linha[33];
$telefone_resp = $linha[34];
$celular_resp = $linha[35];
$email_resp = $linha[36];
$cep_resp = $linha[37];
$cpf_resp = $linha[38];
$rg_resp = $linha[39];
$orgao_resp = $linha[40];
$emissao_resp = $linha[41];
$pai_resp = $linha[42];
$mae_resp = $linha[43];
$obs = $linha[44];

}
?>
<?
$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo' order by codigo asc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$vencto = $linha[12];
}
?>
<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

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
$email_empresa = $linha[14];
$site = $linha[15];

}
?>
<?
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
$sql = "SELECT * FROM cursos where codigo_aluno = '$codigo' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$num_matricula_curso = $linha[0];
$codigo_aluno = $linha[1];
$datacadastro = $linha[2];
$horacadastro = $linha[3];
$nome = $linha[4];
$nome_resp = $linha[24];
$cpf_resp = $linha[38];



$curso = $linha[45];
$modulos = $linha[46];
$data_inicio = $linha[47];
$duracao = $linha[48];
$mensalidade = $linha[49];
$quant_parc = $linha[50];
$modo_pagto = $linha[51];



$operador = $linha[52];
$cel_operador = $linha[53];
$email_operador = $linha[54];
$estabelecimento = $linha[55];
$cidade_estabelecimento = $linha[56];
$tel_estabelecimento = $linha[57];
$email_estabelecimento = $linha[58];

}
?>

	

<table width="100%"  border="0">
  <tr>
    <td width="38%">&nbsp;</td>
    <td width="35%"><form name="form1" method="post" action="javascript:window.close()">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Fechar">
    </form></td>
    <td width="27%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"> <strong>CONTRATO PARTICULAR DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS E OUTRAS AVEN&Ccedil;AS </strong> </div></td>
  </tr>
  <tr>
    <td>1 - &nbsp; DAS PARTES </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p>      1.1 <br>
    A contratada <? echo $razaosocial; ?>, CNPJ <? echo $cnpj; ?>, Inscr. Munic : <? echo $inscr_est; ?><br>
    <br> localizada no endere&ccedil;o <? echo $endereco; ?>  n&ordm; <? echo $numero; ?>, bairro <? echo $bairro; ?>, em <? echo $cidade; ?> estado <br><br>de <? echo $estado; ?>, doravante chamada pelo nome fantasia <? echo $nfantasia; ?>.</td>
  </tr>
  <tr>
    <td>1.2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">O(a) contratante <strong><? echo $nome_resp; ?></strong>, data nascimento <strong><? echo $data_nasc_resp; ?></strong>, CPF <strong> <? echo $cpf_resp; ?> </strong>e RG.<strong> <? echo $rg_resp; ?></strong>, situado(a) &agrave; rua/av<strong> 
          <? echo $endereco_resp; ?></strong>,<br>
    n&uacute;mero <strong><? echo $numero_resp; ?></strong>, complemento <strong><? echo $complemento_resp; ?> </strong>bairro<strong> <? echo $bairro_resp; ?> </strong> CEP <strong><? echo $cep_resp; ?></strong>, na cidade <strong><? echo $cidade_resp; ?> </strong>estado de <strong><? echo $estado_resp; ?></strong>, devidamente identificado pelo seu nome de contratante. </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>DADOS DO ALUNO </strong></div></td>
  </tr>
  <tr>
    <td colspan="3"><p>C&oacute;digo <strong><? echo $codigo; ?></strong>, Nome <strong><? echo $nome; ?></strong>, data nascimento <strong><? echo $data_nasc; ?></strong>, endere&ccedil;o <strong><? echo $enderecoa; ?></strong>, n&uacute;mero <strong><? echo $numeroa; ?></strong>, bairro <strong><? echo $bairroa; ?></strong>, celular <strong><? echo $celulara; ?></strong>, email <strong><? echo $emaila; ?></strong></p>    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>DADOS DO CURSO </strong></div></td>
  </tr>
  <tr>
    <td colspan="3">Curso <strong><? echo $curso; ?> </strong>- M&oacute;dulos <strong><? echo $modulos; ?></strong> - data de in&iacute;cio <strong><? echo $data_inicio; ?></strong> com dura&ccedil;&atilde;o prevista de <strong><? echo $duracao; ?></strong> meses.</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>DADOS DO PAGAMENTO </strong></div></td>
  </tr>
  <tr>
    <td colspan="3">Valor da mensalidade <strong><? echo "R$ ". $mensalidade; ?></strong> - n&uacute;mero de parcelas previstas <strong><? echo $quant_parc; ?></strong> - forma de pagamento <strong><? echo $modo_pagto; ?></strong> - vencimento da 1&ordm; parcela <strong><? echo $vencto; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <p align="center"><strong>CONTRATAM E ACORDAM ENTRE SI OS SEGUINTES </strong></p>
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><p><strong>2 - &nbsp; OBRIGA&Ccedil;&Otilde;ES DA CONTRATADA </strong></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><span class="style2">&#149;&nbsp; Dever&aacute; prestar ensino atrav&eacute;s de aulas pr&aacute;ticas com dura&ccedil;&atilde;o de duas horas semanais em uma &uacute;nica aula, dando seguimento aos cursos contratados, fornecendo &agrave; contratante o certificado dos cursos devidamente conclu&iacute;dos; <br>
    &#149;&nbsp; Se responsabilizar&aacute; pela orienta&ccedil;&atilde;o pedag&oacute;gica dos cursos, o fornecimento e sele&ccedil;&atilde;o do material did&aacute;tico, fixa&ccedil;&atilde;o de datas e hor&aacute;rios para in&iacute;cio das turmas, provas e hor&aacute;rios segundo seu exclusivo crit&eacute;rio. </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p><strong>3 -  OBRIGA&Ccedil;&Otilde;ES DA CONTRATANTE</strong></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p class="style2">&#149;&nbsp; Pagar&aacute; pelos cursos contratadas em valores iguais e mensais, conforme seu cadastro rubricado e anexado a este contrato, com entrada e os demais pagamentos no mesmo dia em meses subseq&uuml;entes at&eacute; o t&eacute;rmino total do curso contratado. O pagamento poder&aacute; ser feito na escola. Ap&oacute;s o vencimento ser&aacute; cobrado juros de 4% ao m&ecirc;s. O atraso de 30 dias no pagamento da mensalidade, acarretar&aacute; suspens&atilde;o das aulas e o nome do respons&aacute;vel ser&aacute; levado ao scpc. <br>
&#149;&nbsp; O curso, seu andamento, certificado e aulas &eacute; pessoal e intransfer&iacute;vel. </p>
    <p class="style2">&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p><strong>4&nbsp; - DISPOSI&Ccedil;&Otilde;ES GERAIS </strong></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><span class="style2">&#149;&nbsp; O contrato ter&aacute; dura&ccedil;&atilde;o at&eacute; o t&eacute;rmino do curso e pagamento das parcelas, conforme cl&aacute;usula 2, por se tratar de curso ministrado de forma individual, dependendo exclusivamente do desempenho do aluno no que se trata do per&iacute;odo exato da dura&ccedil;&atilde;o do curso, ent&atilde;o: <br>
  - O aluno pagar&aacute; pelo tempo que estiver fazendo os cursos contratados, em mensalidades, conforme valores na folha do cadastro rubricado em anexo. <br>
  - O aluno para de pagar as mensalidades no m&ecirc;s do t&eacute;rmino do curso. <br>
  - Se o aluno n&atilde;o terminar o curso at&eacute; a data prevista, ele continua pagando as mensalidades at&eacute; o t&eacute;rmino dos cursos contratados. <br>
  - Se o aluno terminar o curso antes da data prevista, ele paga as mensalidades do per&iacute;odo em que esteve fazendo o curso e desobriga-se ao pagamento das mensalidades a vencer. <br>
  - Se o aluno n&atilde;o receber ou perder o carn&ecirc; dever&aacute; comunicar a escola, pois o mesmo n&atilde;o poder&aacute; deixar de pagar por este motivo. </span></td>
  </tr>
  <tr>
    <td colspan="2"><p><strong>5&nbsp; – CONDI&Ccedil;&Otilde;ES A SEREM RESPEITADAS </strong></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><span class="style2">A - Quatro faltas consecutivas ser&aacute; considerado abandono de curso.<br>
  B - O contrato poder&aacute; ser cancelado pela contratada, havendo duas mensalidades ou mais em atraso (aberto), mediante notifica&ccedil;&atilde;o anterior. <br>
  C - O contrato poder&aacute; ser cancelado pelo aluno somente mediante notifica&ccedil;&atilde;o por escrito com pelo menos 10 dias de anteced&ecirc;ncia. <br>
  POR&Eacute;M, NOS DOIS CASOS ACIMA, o aluno obriga-se ao pagamento de todas as parcelas vencidas at&eacute; a data do cancelamento independentemente dele ter ou n&atilde;o freq&uuml;entado as aulas. De forma nenhuma ser&aacute; devolvido ao aluno as parcelas j&aacute; quitadas. <br>
  D - S&oacute; fazemos trancamento de matr&iacute;cula perante todas as mensalidades quitadas at&eacute; a data e no prazo m&aacute;ximo de 2 (dois) meses. <br>
  E - S&oacute; fazemos reposi&ccedil;&otilde;es de aula enquanto o aluno estiver cursando as aulas. O t&eacute;rmino ou cancelamento da matr&iacute;cula exclui o direito &aacute; reposi&ccedil;&otilde;es. </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p class="style2">As partes elegem o F&oacute;rum de Franca para dirimirem qualquer d&uacute;vida a respeito do presente contrato, dispensando qualquer outro por mais privilegiado que seja. </p>
    </td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="style2"> E, por assim estarem de m&uacute;tuo e comum acordo as partes assinam o presente instrumento legal, em 02(duas) vias de igual teor, conte&uacute;do e para o mesmo efeito, na presen&ccedil;a de duas testemunhas. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <p align="center">Franca – SP, <? echo $datacadastro; ?></p>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>CONTRATANTE</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <div align="center">_________________________________________<br>
      </div>      <div align="center">Assinatura </div></td>
    <td colspan="2"><div align="center">
      <div align="center">
        <? echo $nome_resp; ?>
<br>
      <div align="center">Nome por extenso </div>
    </div>      <div align="center">
      <div align="center">
        <div align="center"></div>
      </div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>TESTEMUNHAS</strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <p align="center">____________________</p>
      <div align="center">Testemunha</div>
    </div></td>
    <td><div align="center">
      <p align="center">____________________</p>
      <div align="center">Testemunha</div>
    </div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>CONTRATADA</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <div align="center">________________________________________<br>
      </div>      <div align="center">Assinatura </div></td>
    <td colspan="2"><div align="center">
        <div align="center"><? echo $razaosocial; ?> (<? echo $nfantasia; ?>) <br>
        <div align="center">Nome por extenso </div>
    </div>      <div align="center">
        <div align="center">
          <div align="center"></div>
        </div></td>
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
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>