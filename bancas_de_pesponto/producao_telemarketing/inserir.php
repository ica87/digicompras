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
<title>LANCAMENTO DE PRODU&Ccedil;&Atilde;O DE OPERADOR </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';


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




<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<?
$tipo = $_POST['tipo'];
$tipo_proposta = $_POST['tipo_proposta'];
$cpf = $_POST['cpf'];
$estabelecimento_proposta = $_POST['estabelecimento_proposta'];
$valor_liberado = $_POST['valor_liberado'];
$bco_operacao = $_POST['bco_operacao'];


$sql = "SELECT * FROM clientes where cpf = '$cpf'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo_cli = $linha[0];
$nome_cli = $linha[1];
$sexo_cli = $linha[2];
$estadocivil_cli = $linha[3];
//$cpf_cli = $linha[4];
$rg_cli = $linha[5];
$orgao_cli = $linha[6];
$emissao_cli = $linha[7];
$data_nasc_cli = $linha[8];
$pai_cli = $linha[9];
$mae_cli = $linha[10];
$endereco_cli = $linha[11];
$numero_cli = $linha[12];
$bairro_cli = $linha[13];
$complemento_cli = $linha[14];
$cidade_cli = $linha[15];
$estado_cli = $linha[16];
$cep_cli = $linha[17];
$telefone_cli = $linha[18];
$celular_cli = $linha[19];
$email_cli = $linha[20];
$operador_cli = $linha[21];
$cel_operador_cli = $linha[22];
$email_operador_cli = $linha[23];
$estabelecimento_cli = $linha[24];
$cidade_estabelecimento_cli = $linha[25];
$tel_estabelecimento_cli = $linha[26];
$email_estabelecimento_cli = $linha[27];
$obs_cli = $linha[28];
$datacadastro_cli = $linha[29];
$horacadastro_cli = $linha[30];
$dataalteracao_cli = $linha[31];
$horaalteracao_cli = $linha[32];
$operador_alterou_cli = $linha[33];
$cel_operador_alterou_cli = $linha[34];
$email_operador_alterou_cli = $linha[35];
$estabelecimento_alterou_cli = $linha[36];
$cidade_estabelecimento_alterou_cli = $linha[37];
$tel_estabelecimento_alterou_cli = $linha[38];
$email_estabelecimento_alterou_cli = $linha[39];
$banco = $linha[41];
$agencia = $linha[42];
$conta = $linha[43];
$num_beneficio = $linha[44];
$num_beneficio2 = $linha[73];
$num_beneficio3 = $linha[74];
$num_beneficio4 = $linha[75];


?>
<? } ?>
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome = $linha[1];
$celular = $linha[19];
$email = $linha[20];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];

?>
<? } ?>
<form name="form1" method="post" action="gravar.php">

<table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="4"><div align="center"><strong><font color="#0000FF" size="4">LANCAMENTO DE PRODU&Ccedil;&Atilde;O DE OPERADOR </font></strong></div></td>
    </tr>
    <tr>
      <td width="15%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
      <td width="17%">&nbsp;</td>
      <td width="31%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Operador</td>
      <td><strong>
        <select name="operador" id="select6">
          <option selected></option>
          <?


    $sql = "select * from operadores where status = 'Ativo' order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
        </select>
      </strong></td>
      <td>Data do lan&ccedil;amento </td>
      <td>                <strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>
        <input name="data_lanc" type="hidden" id="dataproposta3" value="<? echo date('d-m-Y'); ?>">
        <input name="hora_lanc" type="hidden" id="horaproposta3" value="<? echo date('H:i:s'); ?>">
        <input name="dia_lanc" type="hidden" id="dia_lanc" value="<? echo date('d'); ?>"> 
        <input name="mes_lanc" type="hidden" id="mes_lanc" value="<? echo date('m'); ?>">
        <input name="ano_lanc" type="hidden" id="ano_lanc" value="<? echo date('Y'); ?>">       
        <strong><font color="#0000FF">
          </font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome2" size="50" maxlength="50"></td>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" size="18" maxlength="14"></td>
    </tr>
    <tr>
      <td>Categoria</td>
      <td><strong>
        <select name="categoria_veiculo" id="select8">
          <?


    $sql = "select * from categorias_veiculos order by categoria asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['categoria']."</option>";
    }
?>
        </select>
      </strong></td>
      <td>Ve&iacute;culo/Produto</td>
      <td><input name="veiculo_produto" type="text" id="veiculo_produto2" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Valor R$ </td>
      <td><input name="valor" type="text" id="valor2"></td>
      <td>Data do Pagto </td>
      <td><input name="data_pagto" type="text" id="data_pagto3">
dd-mm-aaaa</td>
    </tr>
    <tr>
      <td>Plano/PP R$ </td>
      <td><strong>
        <input name="plano_pp" type="text" id="plano_pp2">
      </strong></td>
      <td>Banco</td>
      <td><strong>
        <select name="bco_operacao" id="select7">
          <option selected></option>
          <?


    $sql = "select * from bco_operacao order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Origem</div></td>
      <td colspan="2"><div align="center">Destino</div></td>
    </tr>
    <tr>
      <td><div align="right">Loja</div></td>
      <td><strong>
        <select name="loja_origem" id="select2">
          <option selected></option>
          <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
        </select>
      </strong></td>
      <td><div align="right">Loja</div></td>
      <td><strong>
        <select name="loja_destino" id="select4">
          <option selected></option>
          <?


    $sql = "select * from estabelecimentos order by nfantasia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nfantasia']."</option>";
    }
?>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td><div align="right">Retorno</div></td>
      <td><strong>
        <select name="retorno_origem" id="retorno_origem">
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </strong></td>
      <td><div align="right">Retorno</div></td>
      <td><strong>
        <select name="retorno_destino" id="select5">
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><textarea name="obs" cols="50" rows="5" id="obs"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Gravar lan&ccedil;amento"> 
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
</body>
</html>
