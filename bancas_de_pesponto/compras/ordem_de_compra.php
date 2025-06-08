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
<title>EMISS&Atilde;O DE OR&Ccedil;AMENTOS PARA FORNECEDOR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$codigo = $_POST['codigo'];

			
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

$sql = "SELECT * FROM fornecedores where codigo = '$codigo'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_for = $linha[0];
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
<form name="form1" method="post" action="historico.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
  </font></strong></font></strong></font></strong>
  <input type="submit" name="Submit3" value="Voltar Hist&oacute;rico">
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
<form name="form1" method="post" action="calcula_orcamento.php">
<p>
</p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>ORDEM DE COMPRA</strong></div></td>
  </tr>
</table><p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" cellspacing="4">
      
      <tr>
        <td><strong>C&oacute;digo:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $codigo_for; ?>
          <input name="codigo_for" type="hidden" id="codigo_for" value="<? echo $codigo_for; ?>">
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
        <td><strong>Data Or&ccedil;amento:</strong></td>
        <td><strong><font color="#0000FF">
          <strong><? echo date('d-m-Y'); ?></strong>
          <input name="dataorcamento" type="hidden" id="dataorcamento" value="<? echo date('d-m-Y'); ?>">
          <input name="horaorcamento" type="hidden" id="horaorcamento" value="<? echo date('H:i:s'); ?>">
          <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
          <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
        </font></strong></td>
      </tr>
    </table></td>
</tr>
</table>
<p>
<table width="100%" border="1" bordercolor="#000000">
  
  <tr>
    <td><strong>ITENS
      <input name="referencia" type="hidden" id="curso15" value="">
      <input name="descricao_servico" type="hidden" id="descricao_servico" value="">
    </strong></td>
    <td width="9%"><strong>QUANTIDADE</strong></td>
    <td width="15%"><strong>REFER&Ecirc;NCIA</strong></td>
    <td width="13%"><strong>QUANT PE&Ccedil;AS</strong></td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td width="23%"><select name="item1" id="select7">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant1" type="text" id="quant1" size="4"></td>
    <td><input type="text" name="ref1" id="ref1"></td>
    <td><input name="quantpecas1" type="text" id="quantpecas1" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item2" id="item">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant2" type="text" id="quant2" size="4"></td>
    <td><input type="text" name="ref2" id="ref2"></td>
    <td><input name="quantpecas2" type="text" id="quantpecas2" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item3" id="item2">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant3" type="text" id="quant3" size="4"></td>
    <td><input type="text" name="ref3" id="ref3"></td>
    <td><input name="quantpecas3" type="text" id="quantpecas3" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item4" id="item3">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant4" type="text" id="quant4" size="4"></td>
    <td><input type="text" name="ref4" id="ref4"></td>
    <td><input name="quantpecas4" type="text" id="quantpecas4" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item5" id="item4">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant5" type="text" id="quant5" size="4"></td>
    <td><input type="text" name="ref5" id="ref5"></td>
    <td><input name="quantpecas5" type="text" id="quantpecas5" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item6" id="item5">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant6" type="text" id="quant6" size="4"></td>
    <td><input type="text" name="ref6" id="ref6"></td>
    <td><input name="quantpecas6" type="text" id="quantpecas6" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item7" id="item6">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant7" type="text" id="quant7" size="4"></td>
    <td><input type="text" name="ref7" id="ref7"></td>
    <td><input name="quantpecas7" type="text" id="quantpecas7" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item8" id="item7">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant8" type="text" id="quant8" size="4"></td>
    <td><input type="text" name="ref8" id="ref8"></td>
    <td><input name="quantpecas8" type="text" id="quantpecas8" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item9" id="item8">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant9" type="text" id="quant9" size="4"></td>
    <td><input type="text" name="ref9" id="ref9"></td>
    <td><input name="quantpecas9" type="text" id="quantpecas9" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item10" id="item9">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant10" type="text" id="quant10" size="4"></td>
    <td><input type="text" name="ref10" id="ref10"></td>
    <td><input name="quantpecas10" type="text" id="quantpecas10" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item11" id="item10">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant11" type="text" id="quant11" size="4"></td>
    <td><input type="text" name="ref11" id="ref11"></td>
    <td><input name="quantpecas11" type="text" id="quantpecas11" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item12" id="item11">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant12" type="text" id="quant12" size="4"></td>
    <td><input type="text" name="ref12" id="ref12"></td>
    <td><input name="quantpecas12" type="text" id="quantpecas12" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item13" id="item12">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant13" type="text" id="quant13" size="4"></td>
    <td><input type="text" name="ref13" id="ref13"></td>
    <td><input name="quantpecas13" type="text" id="quantpecas13" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item14" id="item13">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant14" type="text" id="quant14" size="4"></td>
    <td><input type="text" name="ref14" id="ref14"></td>
    <td><input name="quantpecas14" type="text" id="quantpecas14" size="4"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><select name="item15" id="item14">
      <option selected></option>
      <?


    $sql = "select * from produtos_for order by nome_produto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome_produto']."</option>";
    }
?>
    </select></td>
    <td><input name="quant15" type="text" id="quant15" size="4"></td>
    <td><input type="text" name="ref15" id="ref15"></td>
    <td><input name="quantpecas15" type="text" id="quantpecas15" size="4"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td width="12%"><strong>Condi&ccedil;&otilde;es de Pagto: Parcelamento em
        <select name="quantparc" id="condpagto">
          <option selected></option>
          <?


    $sql = "select * from quantparc order by quantparc asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['quantparc']."</option>";
    }
?>
        </select> 
        vezes. Modo do parcelamento
        <select name="condpagto" id="select4">
        <option selected></option>
        <?


    $sql = "select * from cond_pagto order by condpagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['condpagto']."</option>";
    }
?>
      </select>
      <font color="#0000FF">
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
  <input type="submit" name="Submit" value="Calcular Ordem de Compra">
  <input type="reset" name="Submit2" value="Limpar">
</form>
<p></p>
<p></p>
</body>
</html>
