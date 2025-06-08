<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

?>

<html>
<head>
<title>INCLUS&Atilde;O DE FICHAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {font-size: 9px}
.style5 {font-size: 24px}
-->
</style>
</head>
<?

require '../../conect/conect.php';
//require '../../../conect/conect.php';

$codigo = $_POST['codigo'];
$grupo = $_POST['grupo'];
$modelo = $_POST['modelo'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$hora = $_POST['hora'];


$sql = "SELECT * FROM modelos where modelo = '$modelo'";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

//$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$nivel_dificuldade = $linha[13];
$costura_manual = $linha[19];
$trice = $linha[20];

}





			
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

$sql = "SELECT * FROM clientes where codigo = '$codigo'";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_cliente = $linha[40];
$razaosocial = $linha[1];
$cnpj = $linha[2];
$nfantasia = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cidade = $linha[8];
$estado = $linha[9];
$cep = $linha[10];
$email = $linha[11];
$comprador = $linha[12];
$fone = $linha[13];
$fax = $linha[14];
$celular = $linha[15];

$skype = $linha[41];
$data_nasc = $linha[42];
$mes_nasc = $linha[43];
$salario = $linha[44];
$limite = $linha[45];
$empresa_trab = $linha[46];
$tel_trab = $linha[47];
$nome1 = $linha[48];
$cpf1 = $linha[49];
$nome2 = $linha[50];
$cpf2 = $linha[51];
$nome3 = $linha[52];
$cpf3 = $linha[53];
}
?>

<form name="form2" method="post" action="">
</form>
<form name="form1" method="post" action="historico_cliente.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
  </font></strong></font></strong></font></strong>
  <input type="submit" name="Submit3" value="Voltar Hist&oacute;rico do Cliente">
</form>
<p>
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
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
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="calcula_ficha.php">
<p>
</p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>FICHA DE PRODU&Ccedil;&Atilde;O</strong></div></td>
  </tr>
</table><p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" cellspacing="4">
      
      <tr>
        <td><strong>C&oacute;digo:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $codigo_cliente; ?>
          <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        </strong></font></strong></td>
        <td><strong>Comprador:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $comprador; ?><font color="#0000FF"><strong>
          <input name="comprador" type="hidden" id="comprador" value="<? echo $comprador; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><strong>Raz&atilde;o Social:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $razaosocial; ?><font color="#0000FF"><strong>
          <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $razaosocial; ?>">
          <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>">
        </strong></font></strong></font></strong></td>
        <td><strong>Celular:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $celular; ?><font color="#0000FF"><strong>
          <input name="celular" type="hidden" id="celular" value="<? echo $celular; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><strong>Nome Fantasia:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $nfantasia; ?><font color="#0000FF"><strong>
          <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
        </strong></font></strong></font></strong></td>
        <td><strong>E-Mail:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $email; ?><font color="#0000FF"><strong>
          <input name="email" type="hidden" id="email" value="<? echo $email; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td width="11%"><strong>Endere&ccedil;o:</strong></td>
        <td width="40%"><strong><font color="#0000FF"><strong><? echo $endereco; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero; ?><font color="#0000FF"><strong>
          <input name="endereco" type="hidden" id="endereco" value="<? echo $endereco; ?>">
        </strong></font><font color="#0000FF"><strong>
        <input name="numero" type="hidden" id="numero" value="<? echo $numero; ?>">
        </strong></font></strong></font></strong></font></strong></td>
        <td width="13%"><strong>CEP:</strong></td>
        <td width="36%"><strong><font color="#0000FF"><strong><? echo $cep; ?><font color="#0000FF"><strong>
          <input name="cep" type="hidden" id="cep" value="<? echo $cep; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><p><strong>Bairro:</strong></p></td>
        <td><strong><font color="#0000FF"><strong><? echo $bairro; ?><font color="#0000FF"><strong>
          <input name="bairro" type="hidden" id="bairro" value="<? echo $bairro; ?>">
        </strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Cidade:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $cidade; ?> Estado <font color="#0000FF"><strong><? echo $estado; ?><font color="#0000FF"><strong>
          <input name="cidade" type="hidden" id="cidade" value="<? echo $cidade; ?>">
        </strong></font><font color="#0000FF"><strong>
        <input name="estado" type="hidden" id="estado" value="<? echo $estado; ?>">
        </strong></font></strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Telefone:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $fone; ?><font color="#0000FF"><strong>
          <input name="fone" type="hidden" id="fone" value="<? echo $fone; ?>">
        </strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td><strong><font color="#0000FF">
          <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
          <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
          <input name="hora" type="hidden" id="hora" value="<? echo date('H:i:s'); ?>">
        </font></strong></td>
      </tr>
    </table></td>
</tr>
</table>


<table width="100%" border="0">
  <tr>
    <td width="6%" height="15"><div align="center" class="style2">Data entrada</div></td>
    <td width="6%"><div align="center" class="style2">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style2">N&ordm; Ficha</div></td>
    <td width="12%"><div align="center"><span class="style2">Status</span></div></td>
    <td width="8%"><div align="center" class="style2">Quant Pares</div></td>
    <td width="8%"><div align="center" class="style2">N&ordm; Modelo</div></td>
    <td width="6%"><div align="center" class="style2">Caixa</div></td>
    <td width="5%"><div align="center" class="style2">Grupo</div></td>
    <td width="7%"><div align="center" class="style2">R$ Unit Pesponto</div></td>
    <td width="8%"><div align="center" class="style2">R$ Unit Coladeira 1 </div></td>
    <td width="8%"><div align="center" class="style2">R$ Unit Coladeira 2</div></td>
    <td width="8%"><div align="center" class="style2">Cost Manual</div></td>
    <td width="5%"><div align="center" class="style2">Trice</div></td>
    <td width="7%"><div align="center" class="style2">R$ Unit Empresa</div></td>
    </tr>
  <tr>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "$dia-$mes-$ano $hora"; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
      <input name="num_plano" type="text" id="num_plano" size="10">
    </strong></font></strong></div></td>
    <td><div align="center" class="style2"><strong>
      <select name="num_ficha" id="num_ficha">
        <option selected></option>
        <?

require '../../../conect/conect.php';

    $sql = "select * from ficha_producao order by num_ficha_producao desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['num_ficha_producao']."</option>";
    }
?>
      </select>
    </strong></div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "Em Produção"; ?></strong></font></strong>
      <input name="status" type="hidden" id="status" value="<? echo "Em Produção"; ?>">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
      <input name="quant_pares" type="text" id="quant_pares" size="10">
    </strong></font></strong></div></td>
    <td><div align="center" class="style2">
      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><? echo $modelo; ?></strong></font></strong></font></strong>
      <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
      <input name="nivel_dificuldade" type="hidden" id="nivel_dificuldade" value="<? echo $nivel_dificuldade; ?>">
    </div></td>
    <td><div align="center">
      <input name="caixa" type="text" id="caixa" size="10">
    </div></td>
    <td><div align="center" class="style2">
      <strong><font color="#0000FF"><strong><? echo $grupo; ?></strong></font></strong>
      <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo ?>">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
</strong></font></strong>
        <strong><font color="#0000FF"><strong><? echo $preco_pespontador; ?></strong></font></strong>
        <input name="valor_pespontador" type="hidden" id="valor_pespontador" value="<? echo $preco_pespontador; ?>">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo $preco_coladeira1; ?></strong></font></strong>
      <input name="valor_coladeira1" type="hidden" id="valor_coladeira1" value="<? echo $preco_coladeira1; ?>">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo $preco_coladeira2; ?></strong></font></strong><span class="style2">
      <input name="valor_coladeira2" type="hidden" id="valor_coladeira2" value="<? echo $preco_coladeira2; ?>">
    </span></div></td>
    <td><div align="center"><span class="style2"><strong><font color="#0000FF"><strong><? echo $costura_manual; ?></strong></font></strong>
          <input name="valor_costura_manual" type="hidden" id="valor_costura_manual" value="<? echo $costura_manual; ?>">
    </span></div></td>
    <td><div align="center"><span class="style2"><strong><font color="#0000FF"><strong><? echo $trice; ?></strong></font></strong>
          <input name="valor_trice" type="hidden" id="valor_trice" value="<? echo $trice; ?>">
    </span></div></td>
    <td><div align="center" class="style2">
      <strong><font color="#0000FF"><strong><? echo $preco_empresa; ?></strong></font></strong>
      <input name="valor_unit_empresa" type="hidden" id="valor_unit_empresa" value="<? echo $preco_empresa; ?>">
    </div></td>
    </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>
<br>
<table width="100%" border="0" bordercolor="#000000">
  <tr>
    <td width="12%"><strong><font color="#0000FF">
      <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
      <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
      <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
      <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento_op; ?>">
      <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento2" value="<? echo $cidade_estabelecimento_op; ?>">
      <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento_op; ?>">
      <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento_op; ?>">
      </font></strong></td>
    </tr>
</table>
<p>Observa&ccedil;&otilde;es <br>
  <textarea name="obs" id="obs" cols="70" rows="7"></textarea>
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Calcular Ficha">
  <input type="reset" name="Submit2" value="Limpar">
</form>
<p></p>
<p></p>
</body>
</html>
