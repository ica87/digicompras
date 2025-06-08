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
$codigo = $linha[0];
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
}
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
    <td width="56%"><form name="form1" method="post" action="javascript:window.close()">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Fechar">
    </form></td>
    <td width="7%">&nbsp;</td>
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
    A contratada Ivan Campos de Ara&uacute;jo, Inscr. Municipal: 34.944-9 localizada na rua S&atilde;o Luis n&ordm; 1533, bairro jd Brasil&acirc;ndia 1, em franca, doravante chamada pelo nome fantasia “Digicompras”. </td>
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
    <td colspan="3"><p>&#149;&nbsp; Divulga&ccedil;&atilde;o da empresa contratante na internet pelo site www.digicopras.com.br </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p><strong>3 -  OBRIGA&Ccedil;&Otilde;ES DA CONTRATADA </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; Manuten&ccedil;&atilde;o do sistema <a href="http://www.digicompras.com.br/">www.digicompras.com.br </a> para constante aperfei&ccedil;oamento do sistema.<br>
      &#149;&nbsp; Publica&ccedil;&atilde;o imediata da contratada no site <a href="http://www.digicompras.com.br/">www.digicompras.com.br </a> como, nome, endere&ccedil;o telefone, email e foto da fachada da empresa (a contratante fornece a foto). </td>
  </tr>
  <tr>
    <td><p><strong>4&nbsp; - OBRIGA&Ccedil;&Otilde;ES DA CONTRATANTE </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; Manter absolutamente seus dados sempre atualizados junto a contratada. <br>
      &#149;&nbsp; Zelar expressamente pela senha que receber&atilde;o para operar o sistema Digicompras. Lembrando que a mesma &eacute; de uso exclusivo da empresa e intransfer&iacute;vel, n&atilde;o sendo sob hip&oacute;tese alguma permitido emprestar senha a ningu&eacute;m. Constatando o fato a contratada tomar&aacute; as devidas provid&ecirc;ncias, 


 sob a legisla&ccedil;&atilde;o em vigor . <br>
      &#149;&nbsp; Solicitar a troca da senha sempre que necessario, caso n&atilde;o o fa&ccedil;a a contratada n&atilde;o se responsabiliza pelo uso mal intencionado se por ventura ocorrer. </td>
  </tr>
  <tr>
    <td><p><strong>5&nbsp; – OS VALORES </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; Plano b&aacute;sico (Banner simples + ender&ccedil;o completo +telefone+email) R$ 125,00 anual <br>
      &#149;&nbsp; Plano Master (Banner com link para o site da empresa caso a mesma possua+ endere&ccedil;o completo+telefone+email+site+painel de ferramentas) R$ 250,00 anual <br>
      <br> 
      Plano escolhido pela contratante foi _______________________________ </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Fica eleito o f&oacute;rum desta cidade para dirimir quaisquer d&uacute;vidas sobre este, dispensando qualquer outro por mais privilegiado que seja. </td>
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
      <p align="center">Franca – SP, <? echo date('d-m-Y'); ?></p>
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
      <p align="center"><? echo $proprietario; ?></p>
      <div align="center">Nome por extenso </div>
    </div></td>
    <td><div align="center">
      <p align="center"><? echo $cpf; ?></p>
      <div align="center">CPF</div>
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
        <p align="center"><? echo $nfantasia_dc; ?> (<? echo $nome_dc; ?>) </p>
        <div align="center">Nome por extenso </div>
    </div></td>
    <td><div align="center">
        <p align="center"><? echo $cpf_dc; ?></p>
        <div align="center">CPF</div>
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