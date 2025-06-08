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
<title>EMISS&Atilde;O DE OR&Ccedil;AMENTOS DE CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

$codigo_for = $_POST['codigo_for'];

			
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

$sql = "SELECT * FROM fornecedores where codigo = '$codigo_for'";
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

		  <?
$dataorcamento = $_POST['dataorcamento'];
$horaorcamento = $_POST['horaorcamento'];

//dados do orçamento
$referencia = $_POST['referencia'];
$descricao_servico = $_POST['descricao_servico'];

//-------------INICIO PREÇO 1------------------------------------
$ref1 = $_POST['ref1'];
$quantpecas1 = $_POST['quantpecas1'];

$item1 = $_POST['item1'];
$quant1 = $_POST['quant1'];
if($item1<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item1' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_1 = $linha[4];

$preco_1 = $linha[7];
$oferta1 = $linha[8];
$preco_oferta_1 = $linha[9];
$preco_compra_1 = $linha[21];

}
if($oferta1=="Sim"){
$preco1 = $preco_oferta_1;
}
else{
$preco1 = $preco_1;
}

$total1 = bcmul($quant1,$preco1,2);
}
else{ $total1 = 0; }

//-------------FIM PREÇO 1------------------------------------

//-------------INICIO PREÇO 2------------------------------------
$ref2 = $_POST['ref2'];
$quantpecas2 = $_POST['quantpecas2'];

$item2 = $_POST['item2'];
$quant2 = $_POST['quant2'];
if($item2<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item2' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_2 = $linha[4];

$preco_2 = $linha[7];
$oferta2 = $linha[8];
$preco_oferta_2 = $linha[9];
$preco_compra_2 = $linha[21];

}
if($oferta2=="Sim"){
$preco2 = $preco_oferta_2;
}
else{
$preco2 = $preco_2;
}

$total2 = bcmul($quant2,$preco2,2);
}
else{ $total2 = 0; }

//-------------FIM PREÇO 2------------------------------------

//-------------INICIO PREÇO 3------------------------------------
$ref3 = $_POST['ref3'];
$quantpecas3 = $_POST['quantpecas3'];

$item3 = $_POST['item3'];
$quant3 = $_POST['quant3'];
if($item3<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item3' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_3 = $linha[4];

$preco_3 = $linha[7];
$oferta3 = $linha[8];
$preco_oferta_3 = $linha[9];
$preco_compra_3 = $linha[21];

}
if($oferta3=="Sim"){
$preco3 = $preco_oferta_3;
}
else{
$preco3 = $preco_3;
}

$total3 = bcmul($quant3,$preco3,2);
}
else{ $total3 = 0; }

//-------------FIM PREÇO 3------------------------------------

//-------------INICIO PREÇO 4------------------------------------
$ref4 = $_POST['ref4'];
$quantpecas4 = $_POST['quantpecas4'];

$item4 = $_POST['item4'];
$quant4 = $_POST['quant4'];
if($item4<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item4' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_4 = $linha[4];

$preco_4 = $linha[7];
$oferta4 = $linha[8];
$preco_oferta_4 = $linha[9];
$preco_compra_4 = $linha[21];

}
if($oferta4=="Sim"){
$preco4 = $preco_oferta_4;
}
else{
$preco4 = $preco_4;
}

$total4 = bcmul($quant4,$preco4,2);
}
else{ $total4 = 0; }

//-------------FIM PREÇO 4------------------------------------

//-------------INICIO PREÇO 5------------------------------------
$ref5 = $_POST['ref5'];
$quantpecas5 = $_POST['quantpecas5'];

$item5 = $_POST['item5'];
$quant5 = $_POST['quant5'];
if($item5<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item5' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_5 = $linha[4];

$preco_5 = $linha[7];
$oferta5 = $linha[8];
$preco_oferta_5 = $linha[9];
$preco_compra_5 = $linha[21];

}
if($oferta5=="Sim"){
$preco5 = $preco_oferta_5;
}
else{
$preco5 = $preco_5;
}

$total5 = bcmul($quant5,$preco5,2);
}
else{ $total5 = 0; }

//-------------FIM PREÇO 5------------------------------------

//-------------INICIO PREÇO 6------------------------------------
$ref6 = $_POST['ref6'];
$quantpecas6 = $_POST['quantpecas6'];

$item6 = $_POST['item6'];
$quant6 = $_POST['quant6'];
if($item6<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item6' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_6 = $linha[4];

$preco_6 = $linha[7];
$oferta6 = $linha[8];
$preco_oferta_6 = $linha[9];
$preco_compra_6 = $linha[21];

}
if($oferta6=="Sim"){
$preco6 = $preco_oferta_6;
}
else{
$preco6 = $preco_6;
}

$total6 = bcmul($quant6,$preco6,2);
}
else{ $total6 = 0; }

//-------------FIM PREÇO 6------------------------------------

//-------------INICIO PREÇO 7------------------------------------
$ref7 = $_POST['ref7'];
$quantpecas7 = $_POST['quantpecas7'];

$item7 = $_POST['item7'];
$quant7 = $_POST['quant7'];
if($item7<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item7' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_7 = $linha[4];

$preco_7 = $linha[7];
$oferta7 = $linha[8];
$preco_oferta_7 = $linha[9];
$preco_compra_7 = $linha[21];

}
if($oferta7=="Sim"){
$preco7 = $preco_oferta_7;
}
else{
$preco7 = $preco_7;
}

$total7 = bcmul($quant7,$preco7,2);
}
else{ $total7 = 0; }

//-------------FIM PREÇO 7------------------------------------

//-------------INICIO PREÇO 8------------------------------------
$ref8 = $_POST['ref8'];
$quantpecas8 = $_POST['quantpecas8'];

$item8 = $_POST['item8'];
$quant8 = $_POST['quant8'];
if($item8<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item8' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_8 = $linha[4];

$preco_8 = $linha[7];
$oferta8 = $linha[8];
$preco_oferta_8 = $linha[9];
$preco_compra_8 = $linha[21];

}
if($oferta8=="Sim"){
$preco8 = $preco_oferta_8;
}
else{
$preco8 = $preco_8;
}

$total8 = bcmul($quant8,$preco8,2);
}
else{ $total8 = 0; }

//-------------FIM PREÇO 8------------------------------------

//-------------INICIO PREÇO 9------------------------------------
$ref9 = $_POST['ref9'];
$quantpecas9 = $_POST['quantpecas9'];

$item9 = $_POST['item9'];
$quant9 = $_POST['quant9'];
if($item9<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item9' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_9 = $linha[4];

$preco_9 = $linha[7];
$oferta9 = $linha[8];
$preco_oferta_9 = $linha[9];
$preco_compra_9 = $linha[21];

}
if($oferta9=="Sim"){
$preco9 = $preco_oferta_9;
}
else{
$preco9 = $preco_9;
}

$total9 = bcmul($quant9,$preco9,2);
}
else{ $total9 = 0; }

//-------------FIM PREÇO 9------------------------------------

//-------------INICIO PREÇO 10------------------------------------
$ref10 = $_POST['ref10'];
$quantpecas10 = $_POST['quantpecas10'];

$item10 = $_POST['item10'];
$quant10 = $_POST['quant10'];
if($item10<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item10' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_10 = $linha[4];

$preco_10 = $linha[7];
$oferta10 = $linha[8];
$preco_oferta_10 = $linha[9];
$preco_compra_10 = $linha[21];

}
if($oferta10=="Sim"){
$preco10 = $preco_oferta_10;
}
else{
$preco10 = $preco_10;
}

$total10 = bcmul($quant10,$preco10,2);
}
else{ $total10 = 0; }

//-------------FIM PREÇO 10------------------------------------

//-------------INICIO PREÇO 11------------------------------------
$ref11 = $_POST['ref11'];
$quantpecas11 = $_POST['quantpecas11'];

$item11 = $_POST['item11'];
$quant11 = $_POST['quant11'];
if($item11<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item11' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_11 = $linha[4];

$preco_11 = $linha[7];
$oferta11 = $linha[8];
$preco_oferta_11 = $linha[9];
$preco_compra_11 = $linha[21];

}
if($oferta11=="Sim"){
$preco11 = $preco_oferta_11;
}
else{
$preco11 = $preco_11;
}

$total11 = bcmul($quant11,$preco11,2);
}
else{ $total11 = 0; }

//-------------FIM PREÇO 11------------------------------------

//-------------INICIO PREÇO 12------------------------------------
$ref12 = $_POST['ref12'];
$quantpecas12 = $_POST['quantpecas12'];

$item12 = $_POST['item12'];
$quant12 = $_POST['quant12'];
if($item12<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item12' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_12 = $linha[4];

$preco_12 = $linha[7];
$oferta12 = $linha[8];
$preco_oferta_12 = $linha[9];
$preco_compra_12 = $linha[21];

}
if($oferta12=="Sim"){
$preco12 = $preco_oferta_12;
}
else{
$preco12 = $preco_12;
}

$total12 = bcmul($quant12,$preco12,2);
}
else{ $total12 = 0; }

//-------------FIM PREÇO 12------------------------------------

//-------------INICIO PREÇO 13------------------------------------
$ref13 = $_POST['ref13'];
$quantpecas13 = $_POST['quantpecas13'];

$item13 = $_POST['item13'];
$quant13 = $_POST['quant13'];
if($item13<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item13' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_13 = $linha[4];

$preco_13 = $linha[7];
$oferta13 = $linha[8];
$preco_oferta_13 = $linha[9];
$preco_compra_13 = $linha[21];

}
if($oferta13=="Sim"){
$preco13 = $preco_oferta_13;
}
else{
$preco13 = $preco_13;
}

$total13 = bcmul($quant13,$preco13,2);
}
else{ $total13 = 0; }

//-------------FIM PREÇO 13------------------------------------

//-------------INICIO PREÇO 14------------------------------------
$ref14 = $_POST['ref14'];
$quantpecas14 = $_POST['quantpecas14'];

$item14 = $_POST['item14'];
$quant14 = $_POST['quant14'];
if($item15<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item14' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_14 = $linha[4];

$preco_14 = $linha[7];
$oferta14 = $linha[8];
$preco_oferta_14 = $linha[9];
$preco_compra_14 = $linha[21];

}
if($oferta14=="Sim"){
$preco14 = $preco_oferta_14;
}
else{
$preco14 = $preco_14;
}

$total14 = bcmul($quant14,$preco14,2);
}
else{ $total14 = 0; }

//-------------FIM PREÇO 14------------------------------------

//-------------INICIO PREÇO 15------------------------------------
$ref15 = $_POST['ref15'];
$quantpecas15 = $_POST['quantpecas15'];

$item15 = $_POST['item15'];
$quant15 = $_POST['quant15'];
if($item15<>""){
$sql = "SELECT * FROM produtos_for where nome_produto = '$item15' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$categoria_15 = $linha[4];

$preco_15 = $linha[7];
$oferta15 = $linha[8];
$preco_oferta_15 = $linha[9];
$preco_compra_15 = $linha[21];

}
if($oferta15=="Sim"){
$preco15 = $preco_oferta_15;
}
else{
$preco15 = $preco_15;
}

$total15 = bcmul($quant15,$preco15,2);
}
else{ $total15 = 0; }

//-------------FIM PREÇO 15------------------------------------

$quantparc = $_POST['quantparc'];
$condpagto = $_POST['condpagto'];
$obs = $_POST['obs'];

$total_geral = $total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12+$total13+$total14+$total15;


//dados do operador que registoru o orçamento
$operador = $_POST['operador'];
$cel_operador = $_POST['cel_operador'];
$email_operador = $_POST['email_operador'];
//dados do establecimento que registrou o orçamento
$estabelecimento = $_POST['estabelecimento'];
$cidade_estabelecimento = $_POST['cidade_estabelecimento'];
$tel_estabelecimento = $_POST['tel_estabelecimento'];
$email_estabelecimento = $_POST['email_estabelecimento'];



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
<form name="form1" method="post" action="grava_ordem_de_compra.php">
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
        <td><strong><font color="#0000FF"><strong><? echo $codigo_cliente; ?>
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
          <font color="#0000FF"><strong><font color="#0000FF"><strong>
          <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>">
          </strong></font></strong></font></strong></font></strong></font></strong></td>
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
          <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
          <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
          <input name="horaorcamento" type="hidden" id="horaorcamento" value="<? echo date('H:i:s'); ?>">
          <input name="diaalteracao" type="hidden" id="diaalteracao" value="<? echo date('d'); ?>">
          <input name="mesalteracao" type="hidden" id="mesalteracao" value="<? echo date('m'); ?>">
          <input name="anoalteracao" type="hidden" id="anoalteracao" value="<? echo date('Y'); ?>">
</font></strong></td>
      </tr>
    </table></td>
</tr>
</table>
<p>
<table width="100%" border="1" bordercolor="#000000">
  
  
  <tr>
    <td><strong>ITENS
      <input name="descricao_servico" type="hidden" id="descricao_servico" value="<? echo $descricao_servico; ?>">
      <input name="referencia" type="hidden" id="curso15" value="">
    </strong></td>
    <td width="12%"><strong>QUANTIDADE</strong></td>
    <td width="12%"><strong>REFER&Ecirc;NCIA</strong></td>
    <td width="13%"><strong>QUANT PE&Ccedil;AS</strong></td>
    <td width="14%"><strong>PAR&Acirc;METRO</strong></td>
    <td width="15%"><strong>PRE&Ccedil;O DE COMPRA</strong></td>
    <td width="12%">&nbsp;</td>
  </tr>
  <tr>
    <td width="22%"><strong><font color="#0000FF"><strong><? echo $item1; ?>
      <input name="item1" type="hidden" id="item1" value="<? echo $item1; ?>">
      <input name="categoria_1" type="hidden" id="categoria_1" value="<? echo $categoria_1; ?>">
    </strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant1; ?></strong></font></strong>
      <input name="quant1" type="hidden" id="quant1" value="<? echo $quant1; ?>"></td><td><strong><font color="#0000FF"><strong><? echo $ref1; ?></strong></font></strong>
        <input name="ref1" type="hidden" id="ref1" value="<? echo $ref1; ?>"></td>
      <td><strong><font color="#0000FF"><strong><? echo $quantpecas1; ?></strong></font></strong>
        <input name="quantpecas1" type="hidden" id="quantpecas1" value="<? echo $quantpecas1; ?>"></td>
      <td><strong><font color="#0000FF"><strong><? echo $preco_compra_1; ?></strong></font></strong>
      <input name="preco_compra_1" type="hidden" id="preco_compra_1" value="<? echo $preco_compra_1; ?>"></td>
        <td><strong><font color="#0000FF"><strong>
          <input name="preco1" type="text" id="preco1" value="<? echo $preco1; ?>" size="10">
        </strong></font></strong></td>
        <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item2; ?><font color="#0000FF"><strong>
      <input name="item2" type="hidden" id="item2" value="<? echo $item2; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_2" type="hidden" id="categoria_2" value="<? echo $categoria_2; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant2; ?><font color="#0000FF"><strong>
      <input name="quant2" type="hidden" id="quant2" value="<? echo $quant2; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref2; ?></strong></font></strong>
      <input name="ref2" type="hidden" id="ref2" value="<? echo $ref2; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas2; ?></strong></font></strong>
      <input name="quantpecas2" type="hidden" id="quantpecas2" value="<? echo $quantpecas2; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_2; ?></strong></font></strong>
        <input name="preco_compra_2" type="hidden" id="preco_compra_2" value="<? echo $preco_compra_2; ?>"></td>
      <td><input name="preco2" type="text" id="preco2" value="<? echo $preco2; ?>" size="10"></td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item3; ?><font color="#0000FF"><strong>
      <input name="item3" type="hidden" id="item3" value="<? echo $item3; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_3" type="hidden" id="categoria_3" value="<? echo $categoria_3; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant3; ?><font color="#0000FF"><strong>
      <input name="quant3" type="hidden" id="quant3" value="<? echo $quant3; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref3; ?></strong></font></strong>
      <input name="ref3" type="hidden" id="ref3" value="<? echo $ref3; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas3; ?></strong></font></strong>
      <input name="quantpecas3" type="hidden" id="quantpecas3" value="<? echo $quantpecas3; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_3; ?></strong></font></strong>
        <input name="preco_compra_3" type="hidden" id="preco_compra_3" value="<? echo $preco_compra_3; ?>"></td>
      <td><input name="preco3" type="text" id="preco3" value="<? echo $preco3; ?>" size="10"></td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item4; ?><font color="#0000FF"><strong>
      <input name="item4" type="hidden" id="item4" value="<? echo $item4; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_4" type="hidden" id="categoria_4" value="<? echo $categoria_4; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant4; ?><font color="#0000FF"><strong>
      <input name="quant4" type="hidden" id="quant4" value="<? echo $quant4; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref4; ?></strong></font></strong>
      <input name="ref4" type="hidden" id="ref4" value="<? echo $ref4; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas4; ?></strong></font></strong>
      <input name="quantpecas4" type="hidden" id="quantpecas4" value="<? echo $quantpecas4; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_4; ?></strong></font></strong>
        <input name="preco_compra_4" type="hidden" id="preco_compra_4" value="<? echo $preco_compra_4; ?>"></td>
      <td><input name="preco4" type="text" id="preco4" value="<? echo $preco4; ?>" size="10"></td>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item5; ?><font color="#0000FF"><strong>
      <input name="item5" type="hidden" id="item5" value="<? echo $item5; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_5" type="hidden" id="categoria_5" value="<? echo $categoria_5; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant5; ?><font color="#0000FF"><strong>
      <input name="quant5" type="hidden" id="quant5" value="<? echo $quant5; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref5; ?></strong></font></strong>
      <input name="ref5" type="hidden" id="ref5" value="<? echo $ref5; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas5; ?></strong></font></strong>
      <input name="quantpecas5" type="hidden" id="quantpecas5" value="<? echo $quantpecas5; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_5; ?></strong></font></strong>
      <input name="preco_compra_5" type="hidden" id="preco_compra_5" value="<? echo $preco_compra_5; ?>"></td>
    <td><input name="preco5" type="text" id="preco5" value="<? echo $preco5; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item6; ?><font color="#0000FF"><strong>
      <input name="item6" type="hidden" id="item6" value="<? echo $item6; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_6" type="hidden" id="categoria_6" value="<? echo $categoria_6; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant6; ?><font color="#0000FF"><strong>
      <input name="quant6" type="hidden" id="quant6" value="<? echo $quant6; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref6; ?></strong></font></strong>
      <input name="ref6" type="hidden" id="ref6" value="<? echo $ref6; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas6; ?></strong></font></strong>
      <input name="quantpecas6" type="hidden" id="quantpecas6" value="<? echo $quantpecas6; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_6; ?></strong></font></strong>
      <input name="preco_compra_6" type="hidden" id="preco_compra_6" value="<? echo $preco_compra_6; ?>"></td>
    <td><input name="preco6" type="text" id="preco6" value="<? echo $preco6; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item7; ?><font color="#0000FF"><strong>
      <input name="item7" type="hidden" id="item7" value="<? echo $item7; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_7" type="hidden" id="categoria_7" value="<? echo $categoria_7; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant7; ?><font color="#0000FF"><strong>
      <input name="quant7" type="hidden" id="quant7" value="<? echo $quant7; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref7; ?></strong></font></strong>
      <input name="ref7" type="hidden" id="ref7" value="<? echo $ref7; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas7; ?></strong></font></strong>
      <input name="quantpecas7" type="hidden" id="quantpecas7" value="<? echo $quantpecas7; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_7; ?></strong></font></strong>
      <input name="preco_compra_7" type="hidden" id="preco_compra_7" value="<? echo $preco_compra_7; ?>"></td>
    <td><input name="preco7" type="text" id="preco7" value="<? echo $preco7; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item8; ?><font color="#0000FF"><strong>
      <input name="item8" type="hidden" id="item8" value="<? echo $item8; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_8" type="hidden" id="categoria_8" value="<? echo $categoria_8; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant8; ?><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong>
      <input name="quant8" type="hidden" id="quant8" value="<? echo $quant8; ?>">
    </strong></font></strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref8; ?></strong></font></strong>
      <input name="ref8" type="hidden" id="ref8" value="<? echo $ref8; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas8; ?></strong></font></strong>
      <input name="quantpecas8" type="hidden" id="quantpecas8" value="<? echo $quantpecas8; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_8; ?></strong></font></strong>
      <input name="preco_compra_8" type="hidden" id="preco_compra_8" value="<? echo $preco_compra_8; ?>"></td>
    <td><input name="preco8" type="text" id="preco8" value="<? echo $preco8; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item9; ?><font color="#0000FF"><strong>
      <input name="item9" type="hidden" id="item9" value="<? echo $item9; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_9" type="hidden" id="categoria_9" value="<? echo $categoria_9; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant9; ?><font color="#0000FF"><strong>
      <input name="quant9" type="hidden" id="quant9" value="<? echo $quant9; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref9; ?></strong></font></strong>
      <input name="ref9" type="hidden" id="ref9" value="<? echo $ref9; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas9; ?></strong></font></strong>
      <input name="quantpecas9" type="hidden" id="quantpecas9" value="<? echo $quantpecas9; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_9; ?></strong></font></strong>
      <input name="preco_compra_9" type="hidden" id="preco_compra_9" value="<? echo $preco_compra_9; ?>"></td>
    <td><input name="preco9" type="text" id="preco9" value="<? echo $preco9; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item10; ?><font color="#0000FF"><strong>
      <input name="item10" type="hidden" id="item10" value="<? echo $item10; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_10" type="hidden" id="categoria_10" value="<? echo $categoria_10; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant10; ?><font color="#0000FF"><strong>
      <input name="quant10" type="hidden" id="quant10" value="<? echo $quant10; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref10; ?></strong></font></strong>
      <input name="ref10" type="hidden" id="ref10" value="<? echo $ref10; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas10; ?></strong></font></strong>
      <input name="quantpecas10" type="hidden" id="quantpecas10" value="<? echo $quantpecas10; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_10; ?></strong></font></strong>
      <input name="preco_compra_10" type="hidden" id="preco_compra_10" value="<? echo $preco_compra_10; ?>"></td>
    <td><input name="preco10" type="text" id="preco10" value="<? echo $preco10; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item11; ?><font color="#0000FF"><strong>
      <input name="item11" type="hidden" id="item11" value="<? echo $item11; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_11" type="hidden" id="categoria_11" value="<? echo $categoria_11; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant11; ?><font color="#0000FF"><strong>
      <input name="quant11" type="hidden" id="quant11" value="<? echo $quant11; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref11; ?></strong></font></strong>
      <input name="ref11" type="hidden" id="ref11" value="<? echo $ref11; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas11; ?></strong></font></strong>
      <input name="quantpecas11" type="hidden" id="quantpecas11" value="<? echo $quantpecas11; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_11; ?></strong></font></strong>
      <input name="preco_compra_11" type="hidden" id="preco_compra_11" value="<? echo $preco_compra_11; ?>"></td>
    <td><input name="preco11" type="text" id="preco11" value="<? echo $preco11; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item12; ?><font color="#0000FF"><strong>
      <input name="item12" type="hidden" id="item12" value="<? echo $item12; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_12" type="hidden" id="categoria_12" value="<? echo $categoria_12; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant12; ?><font color="#0000FF"><strong>
      <input name="quant12" type="hidden" id="quant12" value="<? echo $quant12; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref12; ?></strong></font></strong>
      <input name="ref12" type="hidden" id="ref12" value="<? echo $ref12; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas12; ?></strong></font></strong>
      <input name="quantpecas12" type="hidden" id="quantpecas12" value="<? echo $quantpecas12; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_12; ?></strong></font></strong>
      <input name="preco_compra_12" type="hidden" id="preco_compra_12" value="<? echo $preco_compra_12; ?>"></td>
    <td><input name="preco12" type="text" id="preco12" value="<? echo $preco12; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item13; ?><font color="#0000FF"><strong>
      <input name="item13" type="hidden" id="item13" value="<? echo $item13; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_13" type="hidden" id="categoria_13" value="<? echo $categoria_13; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant13; ?><font color="#0000FF"><strong>
      <input name="quant13" type="hidden" id="quant13" value="<? echo $quant13; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref13; ?></strong></font></strong>
      <input name="ref13" type="hidden" id="ref13" value="<? echo $ref13; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas13; ?></strong></font></strong>
      <input name="quantpecas13" type="hidden" id="quantpecas13" value="<? echo $quantpecas13; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_13; ?></strong></font></strong>
      <input name="preco_compra_13" type="hidden" id="preco_compra_13" value="<? echo $preco_compra_13; ?>"></td>
    <td><input name="preco13" type="text" id="preco13" value="<? echo $preco13; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item14; ?><font color="#0000FF"><strong>
      <input name="item14" type="hidden" id="item14" value="<? echo $item14; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_14" type="hidden" id="categoria_14" value="<? echo $categoria_14; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant14; ?><font color="#0000FF"><strong>
      <input name="quant14" type="hidden" id="quant14" value="<? echo $quant14; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref14; ?></strong></font></strong>
      <input name="ref14" type="hidden" id="ref14" value="<? echo $ref14; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas14; ?></strong></font></strong>
      <input name="quantpecas14" type="hidden" id="quantpecas14" value="<? echo $quantpecas14; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_14; ?></strong></font></strong>
      <input name="preco_compra_14" type="hidden" id="preco_compra_14" value="<? echo $preco_compra_14; ?>"></td>
    <td><input name="preco14" type="text" id="preco14" value="<? echo $preco14; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong><font color="#0000FF"><strong><? echo $item15; ?><font color="#0000FF"><strong>
      <input name="item15" type="hidden" id="item15" value="<? echo $item15; ?>">
      <font color="#0000FF"><strong>
      <input name="categoria_15" type="hidden" id="categoria_15" value="<? echo $categoria_15; ?>">
      </strong></font></strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $quant15; ?><font color="#0000FF"><strong>
      <input name="quant15" type="hidden" id="quant15" value="<? echo $quant15; ?>">
    </strong></font></strong></font></strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $ref15; ?></strong></font></strong>
      <input name="ref15" type="hidden" id="ref15" value="<? echo $ref15; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $quantpecas15; ?></strong></font></strong>
      <input name="quantpecas15" type="hidden" id="quantpecas15" value="<? echo $quantpecas15; ?>"></td>
    <td><strong><font color="#0000FF"><strong><? echo $preco_compra_15; ?></strong></font></strong>
      <input name="preco_compra_15" type="hidden" id="preco_compra_15" value="<? echo $preco_compra_15; ?>"></td>
    <td><input name="preco15" type="text" id="preco15" value="<? echo $preco15; ?>" size="10"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td width="12%"><strong>Condi&ccedil;&otilde;es de Pagto: Parcelamento em
        
        <font color="#0000FF"><strong><? echo $quantparc; ?></strong></font>
        <input name="quantparc" type="hidden" id="quantparc" value="<? echo $quantparc; ?>"> 
        vezes. Modo do parcelamento
        <font color="#0000FF"><strong><? echo $condpagto; ?></strong></font>
        <input name="condpagto" type="hidden" id="condpagto" value="<? echo $condpagto; ?>">
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
  <tr>
    <td><strong>Observa&ccedil;&otilde;es:</strong>      <strong><font color="#0000FF"><strong><? echo $obs; ?></strong></font></strong>
      <input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>"></td>
  </tr>
</table>
<p><br><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit" value="Gravar Ordem de Compra">
  <input type="reset" name="Submit2" value="Limpar">
</form>
<p></p>
<p></p>
</body>
</html>
