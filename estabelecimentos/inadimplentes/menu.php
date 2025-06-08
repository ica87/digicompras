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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
?>
<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores_ec where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
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
$usuario_op = $linha[40];
$senha_op = $linha[41];
$tipo_op = $linha[42];
$funcao = $linha[43];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

?>
<? } ?>
<?

error_reporting(E_ALL);
?>


</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="77%"><strong><font color="#0000FF" size="4">Escolha uma a&ccedil;&atilde;o que deseja efetuar! </font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../index.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit22" value="Voltar ao menu principal">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="inserir.php" method="post" name="form2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Inserir Inadimplente">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="informe_nome_para_edicao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit3" value="Editar Inadimplente">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form4" method="post" action="informe_nome_para_ativar_ou_desativar_cartao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit4" value="Ativar / Desativar Usu&aacute;rio">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form4" method="post" action="informe_nome_para_exclusao.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit42" value="Excluir Inadimplente">
      </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
