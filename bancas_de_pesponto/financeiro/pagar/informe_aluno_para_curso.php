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
<title>CADASTRO DE CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

?>

<?
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
$endereco = $linha[8];
$numero = $linha[9];
$bairro = $linha[10];
$complemento = $linha[11];
$cidade = $linha[12];
$estado = $linha[13];
$telefone = $linha[14];
$celular = $linha[15];
$email = $linha[16];
$cep = $linha[17];
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
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


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


?>
<? } ?>
<form name="form1" method="post" action="informe_aluno_para_curso_confirma.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong>INFORME O NOME DO ALUNO PARA QUE ELE SEJA MATRICULADO NO CURSO QUE DESEJA </strong></div></td>
    </tr>
    <tr>
      <td width="15%">&nbsp;</td>
      <td width="26%"><div align="center">Selecione o aluno </div></td>
      <td width="26%"><select name="nome" id="select">
        <?


    $sql = "select * from clientes order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
      </select>
      </td>
      <td width="33%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
        <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estab_pertence_op; ?>">
        <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estab_pertence_op; ?>">
        <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estab_pertence_op; ?>">
        <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estab_pertence_op; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Avan&ccedil;ar"> 
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
      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $nome_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $celular_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estab_pertence_op; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estab_pertence_op; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estab_pertence_op; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estab_pertence_op; ?> </font></strong></td>
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
</form>
</body>
</html>
