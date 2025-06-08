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
$cep = $linha[14];
$telefone = $linha[15];
$celular = $linha[16];
$email = $linha[17];
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

<?

$curso = $_POST['curso'];

$sql = "SELECT * FROM produtos where nome_curso = '$curso'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$modulos = $linha[2];
$duracao = $linha[4];

if($linha[6]=="Sim"){
$mensalidade = $linha[7];
}else{
$mensalidade = $linha[5];
}

}
?>

<form name="form1" method="post" action="grava_matricula.php">

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4"> </font>DADOS DO ALUNO</strong></div></td>
    </tr>
    <tr>
      <td> <div align="left"><font size="4"><strong><font color="#0000FF"> C&Oacute;DIGO <? echo $codigo; ?>
                <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
      </font></strong></font> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><font color="#0000FF"><strong>Data Cadastro <? echo $datacadastro; ?> </strong></font></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">Como conheceu a escola? 
        <font size="4"><strong><font color="#0000FF"><? echo $como_conheceu_escola; ?></font></strong></font>
      <input name="como_conheceu_escola" type="hidden" id="como_conheceu_escola" value="<? echo $como_conheceu_escola; ?>"></td>
      <td><strong><font color="#0000FF">Hora do cadastro<strong><? echo $horacadastro; ?></strong></font> </strong></td>
    </tr>
    <tr> 
      <td>Nome</td>
      <td><font size="4"><strong></strong></font>
      <input name="nome" type="hidden" id="nome2" value="<? echo $nome; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $nome; ?></font></strong></font></td>
      <td>Sexo</td>
      <td><strong>
      <input name="sexo" type="hidden" id="sexo" value="<? echo $sexo; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $sexo; ?></font></strong></font></strong>      </td>
    </tr>
    <tr>
      <td>Data Nasc </td>
      <td><strong>
        <input name="data_nasc" type="hidden" id="data_nasc2" value="<? echo $data_nasc; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $data_nasc; ?></font></strong></font> </strong></td>
      <td>Estado Civil </td>
      <td><input name="estadocivil" type="hidden" id="estadocivil" value="<? echo $estadocivil; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $estadocivil; ?></font></strong></font></td>
    </tr>
    <tr> 
      <td width="15%">Endere&ccedil;o</td>
      <td width="37%"><input name="endereco" type="hidden" id="endereco2" value="<? echo $endereco; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $endereco; ?></font></strong></font></td>
      <td width="15%">N&uacute;mero</td>
      <td width="33%">        <font color="#0000FF">
        <input name="numero" type="hidden" id="numero" value="<? echo $numero; ?>"> 
      </font><font size="4"><strong><font color="#0000FF"><? echo $numero; ?></font></strong></font><font color="#0000FF">&nbsp;      </font></td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro" type="hidden" id="bairro" value="<? echo $bairro; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $bairro; ?></font></strong></font> </td>
      <td>Complemento</td>
      <td><input name="complemento" type="hidden" id="endereco4" value="<? echo $complemento; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $complemento; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade" type="hidden" id="cidade" value="<? echo $cidade; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $cidade; ?></font></strong></font></td>
      <td>Estado</td>
      <td><input name="estado" type="hidden" id="estado" value="<? echo $estado; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $estado; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td><input name="telefone" type="hidden" id="telefone2" value="<? echo $telefone; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $telefone; ?></font></strong></font></td>
      <td>Celular</td>
      <td><input name="celular" type="hidden" id="celular" value="<? echo $celular; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $celular; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><input name="email" type="hidden" id="email2" value="<? echo $email; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $email; ?></font></strong></font></td>
      <td>Cep</td>
      <td><input name="cep" type="hidden" id="cep" value="<? echo $cep; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $cep; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>CPF</td>
      <td><input name="cpf" type="hidden" id="cpf2" value="<? echo $cpf; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $cpf; ?></font></strong></font></td>
      <td>RG</td>
      <td><input name="rg" type="hidden" id="rg2" value="<? echo $rg; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $rg; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td>
        <input name="orgao" type="hidden" id="cpf3" value="<? echo $orgao; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $orgao; ?></font></strong></font></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao" type="hidden" id="cpf4" value="<? echo $emissao; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $emissao; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai" type="hidden" id="pai" value="<? echo $pai; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $pai; ?></font></strong></font></td>
      <td>M&atilde;e</td>
      <td><input name="mae" type="hidden" id="endereco3" value="<? echo $mae; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $mae; ?></font></strong></font></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>DADOS DO RESPONS&Aacute;VEL </strong></div></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome_resp" type="hidden" id="nome2" value="<? echo $nome_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $nome_resp; ?></font></strong></font></td>
      <td>Sexo</td>
      <td><strong>
      <input name="sexo_resp" type="hidden" id="sexo_resp" value="<? echo $sexo_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $sexo_resp; ?></font></strong></font></strong> </td>
    </tr>
    <tr>
      <td>Data Nasc </td>
      <td><strong>
        <input name="data_nasc_resp" type="hidden" id="data_nasc2" value="<? echo $data_nasc_resp; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $data_nasc_resp; ?></font></strong></font> </strong></td>
      <td>Estado Civil </td>
      <td><input name="estadocivil_resp" type="hidden" id="estadocivil_resp" value="<? echo $estadocivil_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $estadocivil_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Endere&ccedil;o</td>
      <td><input name="endereco_resp" type="hidden" id="endereco6" value="<? echo $endereco_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $endereco_resp; ?></font></strong></font></td>
      <td>N&uacute;mero</td>
      <td> <font color="#0000FF">
        <input name="numero_resp" type="hidden" id="numero_resp" value="<? echo $numero_resp; ?>">
</font><font size="4"><strong><font color="#0000FF"><? echo $numero_resp; ?></font></strong></font><font color="#0000FF">&nbsp;      </font></td>
    </tr>
    <tr>
      <td><p>Bairro</p></td>
      <td><input name="bairro_resp" type="hidden" id="bairro_resp" value="<? echo $bairro_resp; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $bairro_resp; ?></font></strong></font> </td>
      <td>Complemento</td>
      <td><input name="complemento_resp" type="hidden" id="endereco4" value="<? echo $complemento_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $complemento_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade_resp" type="hidden" id="cidade_resp" value="<? echo $cidade_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $cidade_resp; ?></font></strong></font></td>
      <td>Estado</td>
      <td><input name="estado_resp" type="hidden" id="estado_resp" value="<? echo $estado_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $estado_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td><input name="telefone_resp" type="hidden" id="telefone2" value="<? echo $telefone_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $telefone_resp; ?></font></strong></font></td>
      <td>Celular</td>
      <td><input name="celular_resp" type="hidden" id="celular_resp" value="<? echo $celular_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $celular_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>E-Mail</td>
      <td><input name="email_resp" type="hidden" id="email2" value="<? echo $email_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $email_resp; ?></font></strong></font></td>
      <td>Cep</td>
      <td><input name="cep_resp" type="hidden" id="cep_resp" value="<? echo $cep_resp; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $cep_resp; ?></font></strong></font></td>
    </tr>
    <tr> 
      <td>CPF</td>
      <td><input name="cpf_resp" type="hidden" id="cpf2" value="<? echo $cpf_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $cpf_resp; ?></font></strong></font></td>
      <td>RG</td>
      <td><input name="rg_resp" type="hidden" id="rg2" value="<? echo $rg_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $rg_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>&Oacute;rg&atilde;o</td>
      <td>        <input name="orgao_resp" type="hidden" id="cpf3" value="<? echo $orgao_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $orgao_resp; ?></font></strong></font></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao_resp" type="hidden" id="cpf4" value="<? echo $emissao_resp; ?>">
        <font size="4"><strong><font color="#0000FF"><? echo $emissao_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai_resp" type="hidden" id="pai_resp" value="<? echo $pai_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $pai_resp; ?></font></strong></font></td>
      <td>M&atilde;e</td>
      <td><input name="mae_resp" type="hidden" id="endereco3" value="<? echo $mae_resp; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $mae_resp; ?></font></strong></font></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td><input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>">
      <font size="4"><strong><font color="#0000FF"><? echo $obs; ?></font></strong></font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>DADOS DO CURSO</strong> </div></td>
    </tr>
    <tr>
      <td>Curso escolhido </td>
      <td><font size="4"><strong><font color="#0000FF"><? echo $curso; ?>
        <input name="curso" type="hidden" id="curso" value="<? echo $curso; ?>">
      </font></strong></font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>M&oacute;dulos do Curso </td>
      <td colspan="3"><font size="4"><strong><font color="#0000FF"><? echo $modulos; ?></font><font size="4"><strong><font color="#0000FF">
        <input name="modulos" type="hidden" id="modulos" value="<? echo $modulos; ?>">
      </font></strong></font></strong></font></td>
    </tr>
    <tr>
      <td>Inicio do Curso </td>
      <td><input name="data_inicio" type="text" id="num_beneficio5">
formato dd-mm-aaaa</td>
      <td>Tempo previsto </td>
      <td><font size="4"><strong><font color="#0000FF"><? echo $duracao; ?><font size="4"><strong>
        <input name="duracao" type="hidden" id="curso3" value="<? echo $duracao; ?>">
</strong></font></font></strong></font><font color="#000000">meses</font></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>DADOS DO PAGAMENTO </strong></div></td>
    </tr>
    <tr>
      <td>Valor Mensalidade </td>
      <td><font size="4"><strong><font color="#0000FF"><? echo "R$ ".$mensalidade; ?></font><font size="4"><strong><font color="#0000FF">
        <input name="mensalidade" type="hidden" id="curso4" value="<? echo $mensalidade; ?>">
      </font></strong></font></strong></font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Quant Mens prevista </td>
      <td><font size="4"><strong><font color="#0000FF"><? echo $duracao; ?></font><font size="4"><strong><font color="#0000FF">
        <input name="quant_parc" type="hidden" id="curso5" value="<? echo $duracao; ?>">
      </font></strong></font></strong></font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Forma de pagamento</td>
      <td><select name="modo_pagto" id="select5">
        <?


    $sql = "select * from modo_pagto order by modopagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['modopagto']."</option>";
    }
?>
            </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>INFORMA O MELHOR DIA DE CADA M&Ecirc;S  PARA O VENCIMENTO DAS MENSALIDADES </strong></div></td>
    </tr>
    <tr>
      <td colspan="2">Dia
        <input name="dia" type="text" id="dia" size="4" maxlength="2">
        - M&ecirc;s
        <input name="mes" type="text" id="mes" size="4" maxlength="2">
      - ano
      <input name="ano" type="text" id="ano" size="8" maxlength="4"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
        <input type="submit" name="Submit" value="Efetuar matr&iacute;cula no curso"> 
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
