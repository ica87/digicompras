<?php

session_start(); //inicia sess�o...

if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...

echo ""; //se for emite mensagem positiva.

else //se n�o for...

header("Location: alerta.php");



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];



?>

<html>

<head>

<title>DIGICOMPRAS - CONTRATO PARTICULAR DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS E OUTRAS AVEN&Ccedil;AS </title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

</head>



<?

//require("conexao.php"); or die("erro na requisi��o");

require '../../conect/conect.php';

?>

<?





$sql = "SELECT * FROM logo";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;



//printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'><br><br>"); ?>

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





<body bgcolor="#<? printf("$linha[1]"); ?>">

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

?>



<?

$sql = "SELECT * FROM estabelecimentos where codigo = '$codigo'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>

<?

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



$plano = $linha[51];

$valor = $linha[52];



}

$mensalidade = bcdiv($valor,12,2);

?>

<?

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia_dc = $linha[2];

$email_empresa = $linha[14];

$site = $linha[15];



}

?>

<?

$sql = "SELECT * FROM adm limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome_dc = $linha[1];

$cpf_dc = $linha[4];



}

?>



	



<table width="100%"  border="0">

  <tr>

    <td width="37%">&nbsp;</td>

    <td width="46%"><form name="form1" method="post" action="javascript:window.close()">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit" value="Fechar">

    </form></td>

    <td width="17%">&nbsp;</td>

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

    <td><strong>1 - &nbsp; DAS PARTES </strong></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3"><p> 1.1 <br>
A contratada Ivan Campos de Ara&uacute;jo 150.856.128-17 CNPJ 35.591.299/0001-80 localizada na rua rubi n&ordm; 45, bairro jd Planalto, C&aacute;ssia-MG, doravante chamada pelo nome fantasia &ldquo;Digicompras&rdquo;. </td>

  </tr>

  <tr>

    <td>1.2</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3"><p>O(a) conratante <strong><? echo $razaosocial; ?></strong>, CNPJ<strong> <? echo $cnpj; ?> </strong>e INSCR. EST.<strong> <? echo $inscr_est; ?></strong>, situada &agrave; rua/av<strong> <? echo $endereco; ?></strong>, n&uacute;mero <strong><? echo $numero; ?></strong>, complemento <strong><? echo $complemento; ?> </strong>bairro<strong> <? echo $bairro; ?> </strong><br>CEP <strong><? echo $cep; ?></strong>, na cidade <strong><? echo $cidade; ?> </strong>estado de <strong><? echo $estado; ?></strong>, devidamente identificado pelo seu nome de contratante. </p></td>

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

    <td><p><strong>2 - &nbsp; DO OBJETIVO </strong></p></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>2.1</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3"><p>&#149;&nbsp; Loca&ccedil;&atilde;o de sistema em plataforma web para controle de cart&atilde;o fidelidade e poss&iacute;vel divulga&ccedil;&atilde;o*(conforme o plano) da empresa contratante no  site www.digicompras.com.br na categoria**(escolher apenas uma) que melhor lhe convier.</p></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><p><strong>3 -  DAS OBRIGA&Ccedil;&Otilde;ES DA CONTRATADA </strong></p></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>3.1</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3">&#149;&nbsp; Manuten&ccedil;&atilde;o do sistema <a href="http://www.digicompras.com.br/">www.digicompras.com.br </a> para constante aperfei&ccedil;oamento do mesmo.<br>

      &#149;&nbsp; Publica&ccedil;&atilde;o imediata da contratada no site <a href="http://www.digicompras.com.br/">www.digicompras.com.br </a> como, nome, endere&ccedil;o telefone, email e foto da fachada da empresa (a contratante fornece a foto), no caso de op&ccedil;&atilde;o por um dos planos pagos.</td>

  </tr>

  <tr>

    <td><p><strong>4&nbsp; - DAS OBRIGA&Ccedil;&Otilde;ES DA CONTRATANTE </strong></p></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>4.1</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3">&#149;&nbsp; Manter  seus dados sempre absolutamente atualizados junto a contratada. <br>
&#149;&nbsp; Zelar expressamente pela senha que receber&atilde;o para operar o sistema Digicompras. Lembrando que a mesma &eacute; de uso exclusivo da empresa e intransfer&iacute;vel, n&atilde;o sendo sob hip&oacute;tese alguma permitido emprestar senha a ningu&eacute;m. Constatando o fato a contratada tomar&aacute; as devidas provid&ecirc;ncias, 





 sob a legisla&ccedil;&atilde;o em vigor resguardando-se o direito de at&eacute; mesmo bloquear a contratante se constatado poss&iacute;vel fonte de amea&ccedil;a &aacute;s informa&ccedil;&otilde;es contidas no sistema.<br>
&#149;&nbsp; Solicitar a troca da senha sempre que necessario, pois a contratada n&atilde;o se responsabiliza pelo uso mal intencionado ou n&atilde;o se por ventura ocorrer. Pois zelar pelo acesso ao sistema &eacute; &uacute;nica e exclusivamente responsabilidade da contratante.</td>

  </tr>

  <tr>

    <td><p><strong>5&nbsp; � DOS PLANOS E VALORES </strong></p></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td>5.1</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3">&#149;&nbsp;Ades&atilde;o R$ 50.00(Taxa incidente nos casos de ingresso no sistema e/ou reativa&ccedil;&atilde;o da contratante).<br>
&#149;&nbsp; Plano b&aacute;sico (Banner simples com ender&ccedil;o completo + telefone). <?
		  $sql = "SELECT * FROM planos where plano = 'BASICO' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$valorbasico = $linha[2];
}
		  echo "R$ $valorbasico"
		  ?>
<br>
&#149;&nbsp; Plano Master (Banner com link para o site da empresa caso a mesma possua com endere&ccedil;o completo + telefone + email com link ativo para abrir a caixa de envio). <?
		  $sql = "SELECT * FROM planos where plano = 'MASTER' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$valormaster = $linha[2];
}
		  echo "R$ $valormaster"
		  ?>
<br>
<br>
Plano escolhido pela contratante foi <strong><? echo $plano; ?></strong>valor<strong> R$
<?  echo $valor; ?>
</strong>mensais.
<p>Categoria escolhida para exibi&ccedil;&atilde;o <strong><? echo $categoria; ?></strong></p></td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3">Fica eleito o f&oacute;rum desta cidade de C&aacute;ssia-MG para dirimir quaisquer d&uacute;vidas sobre este, dispensando qualquer outro por mais privilegiado que seja. </td>

  </tr>

  <tr>

    <td colspan="3">&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3"> E, por assim estarem de m&uacute;tuo e comum acordo as partes assinam o presente instrumento legal, em 02(duas) vias de igual teor, conte&uacute;do e para o mesmo efeito, na presen&ccedil;a de duas testemunhas. </td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td colspan="3"><div align="center">

      <p align="center">C&aacute;ssia �MG, <? echo date('d-m-Y'); ?></p>

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

    <td><p align="center">____________________</p>

      <div align="center">Assinatura </div></td>

    <td><div align="center">

      <p align="center"><? echo $razaosocial; ?></p>

      <div align="center">Nome/Raz&atilde;o Social</div>

    </div></td>

    <td><div align="center">

      <p align="center"><? echo $cnpj; ?></p>

      <div align="center">CNPJ/CPF</div>

    </div></td>

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

    <td><p align="center">____________________</p>

        <div align="center">Assinatura </div></td>

    <td><div align="center">

        <p align="center"><? echo "Ivan Campos de Ara&uacute;jo 150.856.128-17"; ?></p>

        <div align="center">Nome/Raz&atilde;o Social</div>

    </div></td>

    <td><div align="center">

        <p align="center"><? echo "35.591.299/0001-80"; ?></p>

        <div align="center">CNPJ</div>

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