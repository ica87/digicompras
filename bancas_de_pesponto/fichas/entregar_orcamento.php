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
<title>EMISS&Atilde;O DE BOLETINS DE ALUNOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$codigo_boletim = $_POST['codigo_boletim'];

			
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
<p>
  <?

//dados do operador que alterou
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$dataentrega = $_POST['dataentrega'];
$horaentrega = $_POST['horaentrega'];

$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
//dados do establecimento que alterou
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];



$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`boletins` set `codigo` = '$codigo_boletim',`dataentrega` = '$dataentrega',`horaentrega` = '$horaentrega',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `boletins`. `codigo` = '$codigo_boletim' limit 1 ";
}

mysql_query($comando,$conexao);



?>
</p>
<form name="form1" method="post" action="grava_editar_boletim.php">
<p>
  <?

$sql = "SELECT * FROM boletins where codigo = '$codigo_boletim'";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$codigo_aluno = $linha[1];
$codigo_curso = $linha[2];
$nome = $linha[3];
$nome_resp = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cidade = $linha[8];
$estado = $linha[9];
$telefone = $linha[10];

$num_certificado = $linha[11];
$num_nota_fiscal = $linha[12];

$curso = $linha[13];
$modulos = $linha[65];

$curso1 = $linha[14];
$nota1 = $linha[15];

$curso2 = $linha[16];
$nota2 = $linha[17];

$curso3 = $linha[18];
$nota3 = $linha[19];

$curso4 = $linha[20];
$nota4 = $linha[21];

$curso5 = $linha[22];
$nota5 = $linha[23];

$curso6 = $linha[24];
$nota6 = $linha[25];

$curso7 = $linha[26];
$nota7 = $linha[27];

$curso8 = $linha[28];
$nota8 = $linha[29];

$curso9 = $linha[30];
$nota9 = $linha[31];

$curso10 = $linha[32];
$nota10 = $linha[33];

$curso11 = $linha[34];
$nota11 = $linha[35];

$curso12 = $linha[36];
$nota12 = $linha[37];

$curso13 = $linha[38];
$nota13 = $linha[39];

$curso14 = $linha[40];
$nota14 = $linha[41];

$curso15 = $linha[42];
$nota15 = $linha[43];

$historico_contato = $linha[44];

$dataalteracao = $linha[61];
$dataentrega = $linha[63];
$horaentrega = $linha[64];

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
$telefone = $linha[12];
$email_empresa = $linha[14];
$site = $linha[15];

}
?>



</p>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>BOLETIM DO ALUNO</strong><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
    <input name="codigo_boletim" type="hidden" id="codigo_luno3" value="<? echo $codigo_boletim; ?>">
    </font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></font></strong></div></td>
  </tr>
</table>
<br>

<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><br><table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td><strong>C&oacute;digo:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $codigo_aluno; ?></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Aluno:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $nome; ?></strong></font></strong></td>
        <td><strong>N&ordm;  Certificado:</strong></td>
        <td><div align="center"><strong><font color="#0000FF"><strong><? echo $num_certificado; ?></strong></font></strong></div></td>
      </tr>
      <tr>
        <td><strong>Respons&aacute;vel:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $nome_resp; ?></strong></font></strong></td>
        <td><strong>N&ordm; Nota Fiscal:</strong></td>
        <td><div align="center"><strong><font color="#0000FF"><strong><? echo $num_nota_fiscal; ?></strong></font></strong></div></td>
      </tr>
      <tr>
        <td width="11%"><strong>Endere&ccedil;o:</strong></td>
        <td width="53%"><strong><font color="#0000FF"><strong><? echo $endereco; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero; ?></strong></font></strong></font></strong></td>
        <td width="17%">&nbsp;</td>
        <td width="19%">&nbsp;</td>
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
        <td><strong><font color="#0000FF"><strong><? echo $telefone; ?></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
    </table><br>
</td>
</tr>
</table><br>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td>
      <div align="center"><br>
        <table width="60%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
            <tr>
              <td colspan="2"><div align="center"><strong>CURSO</strong></div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center"><strong><font color="#0000FF"><strong><? echo $curso; ?></strong></font></strong>
                  <input name="curso" type="hidden" id="curso15" value="<? echo $curso; ?>">
                </div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center"><strong>M&Oacute;DULOS</strong></div></td>
            </tr>
            <tr>
              <?
 $sql = "SELECT * FROM cursos where curso = '$curso' and codigo_aluno = '$codigo_aluno'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$modulos = $linha[46];
}
 
  ?>
              <td colspan="2"><div align="center"><strong><font color="#0000FF"><strong><? echo $modulos; ?></strong></font></strong>
                  <input name="modulos" type="hidden" id="modulos" value="<? echo $modulos; ?>">
                </div></td>
            </tr>
            <tr>
              <td><div align="center"><strong>M&Oacute;DULOS</strong></div></td>
              <td><div align="center"><strong>NOTAS</strong></div></td>
            </tr>
            <tr>
              <td width="50%"><div align="center"><strong><font color="#0000FF"><strong><? echo $curso1; ?></strong></font></strong></div></td>
              <td width="50%"><div align="center"><strong><font color="#0000FF"><strong><? echo $nota1; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso2; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota2; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso3; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota3; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso4; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota4; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso5; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota5; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso6; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota6; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso7; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota7; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso8; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota8; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso9; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota9; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso10; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota10; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso11; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota11; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso12; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota12; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso13; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota13; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso14; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota14; ?></strong></font></strong></div></td>
            </tr>
            <tr>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $curso15; ?></strong></font></strong></div></td>
              <td><div align="center"><strong><font color="#0000FF"><strong><? echo $nota15; ?></strong></font></strong></div></td>
            </tr>
                              </table>
        <br>
      </div></td>
  </tr>
</table>
<br>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><strong>Histórico de Contatos<br><font color="#0000FF"><? echo $historico_contato; ?></font></strong></td>
  </tr>
</table>
<div align="center"><br><br>
  <strong><? echo $cidade; ?>, <font color="#0000FF"><strong><? echo $dataentrega; ?></strong></font> - <font color="#0000FF"><strong><? echo $horaentrega; ?></strong></font></strong>____________________________________________________<br>
  <strong><font color="#0000FF"><strong><? echo $nome; ?></strong></font></strong> Aluno(a)<br>
  <br><br>
    <img src="../../assinatura/assinatura.jpg" width="305" height="80"><br>
  <strong><? echo $razaosocial; ?></strong><br>
  
  
</div>
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><strong>RAZ&Atilde;O SOCIAL: <? echo $razaosocial; ?> - <? echo $nfantasia; ?><br>
      END: <? echo $endereco; ?> n&ordm; <? echo $numero; ?>, bairro <? echo $bairro; ?>, em <? echo $cidade; ?> estado de <? echo $estado; ?><br>
      CNPJ: <? echo $cnpj; ?> IE: <? echo $inscr_est; ?><br>
      TEL: <? echo $telefone; ?></strong></td>
  </tr>
</table>
<p align="center"><strong><br>
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

mysql_close($conexao);

?>
</strong></p>
</form>
<p></p>
<p></p>
</body>
</html>
