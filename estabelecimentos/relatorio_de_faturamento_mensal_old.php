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
<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO MÊS POR BANCO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {color: #FF0000}
-->
</style>
</head>
<?

require '../conect/conect.php';

$estab_pertence_op = $_POST['estab_pertence_op'];
$mes_ano = $_POST['mes_ano'];

?>


<?

$sql = "SELECT * FROM estabelecimentos where nfantasia = '$estab_pertence_op'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

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
$aliquota_crua = $linha[47];

}

$aliquota = bcdiv($aliquota_crua,100,3);

?>


<?
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="../background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
<? } ?>





      <p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
      <form name="form1" method="post" action="index.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="100%"  border="0">
        <tr>
          <td colspan="4"><div align="left"><span class="style2">
          Listando todas as compras realizadas no estabelecimento<span class="style3"> <? echo $estab_pertence_op; ?></span></span> <span class="style2">no m&ecirc;s <span class="style3"><? echo $mes_ano; ?></span></span></div></td>
        </tr>
        <tr>
          <td width="25%"><div align="right"></div></td>
          <td width="29%">&nbsp;</td>
          <td width="19%">&nbsp;</td>
          <td width="27%">&nbsp;</td>
        </tr>
        <tr>
          <td><strong> Faturamento do m&ecirc;s </strong> <br>
              <strong>
              <?
$sql = "select sum(valor_compra) as total from compras where estab_pertence_com = '$estab_pertence_op' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];
if($valor_total==0){
echo "R$ "."0.00";
}else{
echo "R$ ".bcadd($valor_total,0,2);
}

$comissao_digicompras = bcmul($valor_total,$aliquota,2);

?>
              <font color="#0000FF"> </font></strong></td>
          <td><font color="#000000"><strong>Comiss&atilde;o Digicompras</strong> <strong><? echo $aliquota_crua."%"; ?></strong><br>
                <strong><? echo "R$ ".$comissao_digicompras ; ?></strong> </font></td>
          <td><strong><font color="#000000">Tarifa DOC / TED </font><font color="#000000"><br>
                  <strong>
                  <? 
$subtotal = bcsub($valor_total,$comissao_digicompras,2);
if($subtotal<=5000.00){
$doc_ted = "6.00";
}else{
$doc_ted = "12.00";
}
if($valor_total==0){
$liquido_a_receber = "0.00";
}else{
$liquido_a_receber = bcsub($subtotal,$doc_ted,2);
}

?>
                  <? echo "R$ ".$doc_ted; ?> </strong> </font></strong></td>
          <td><strong><font color="#000000">TOTAL LIQUIDO A RECEBER </font><font color="#000000"><br>
                  <strong>
                  <? 
echo "R$ ".$liquido_a_receber;			
?>
                </strong> </font></strong></td>
        </tr>
      </table>
      <br><br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; da Compra </td>
          <td><div align="center">Cliente</div></td>
          <td><div align="center">N&ordm; Cart&atilde;o </div></td>
          <td><div align="center">Data Compra </div></td>
          <td><div align="center">Hora Compra </div></td>
          <td><div align="center">Valor Compra </div></td>
          <td><div align="center">Empresa Conveniada </div></td>
        </tr>
      <?

			
$sql = "SELECT * FROM compras where estab_pertence_com = '$estab_pertence_op' and mes_ano = '$mes_ano' order by data_compra desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome = $linha[1];
$cpf = $linha[2];
$endereco = $linha[3];
$numero = $linha[4];
$bairro = $linha[5];
$cep = $linha[6];
$telefone = $linha[7];
$celular = $linha[8];
$estab_pertence = $linha[9];
$cidade_estab_pertence = $linha[10];
$tel_estab_pertence = $linha[11];
$email_estab_pertence = $linha[12];
$valor_compra = $linha[13];
$data_compra = $linha[14];
$hora_compra = $linha[15];
$dia = $linha[16];
$mes = $linha[17];
$ano = $linha[18];
$mes_ano = $linha[19];
$num_cartao = $linha[20];
$estab_pertence_com = $linha[21];
$tel_estab_pertence_com = $linha[22];
$cidade_estab_pertence_com = $linha[23];
$email_estab_pertence_com = $linha[24];
$operador_atende = $linha[25];
$operador_realizou = $linha[26];
$cel_operador_realizou = $linha[27];
$email_operador_realizou = $linha[28];


?>            

        <tr>
          <td width="10%"><div align="center">               <? echo $codigo;?></div></td>
          <td width="29%"><div align="center"><? echo $nome;?></div></td>
          <td width="11%"><div align="center"><? echo $num_cartao;?></div></td>
          <td width="11%"><div align="center"><? echo $data_compra;?></div></td>
          <td width="10%"><div align="center"><? echo $hora_compra;?></div></td>
          <td width="11%"><div align="center"><? echo "R$ ".$valor_compra;?></div></td>
          <td width="18%"><div align="center"><? echo $estab_pertence;?></div></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td colspan="2"><div align="center">Total Faturamento Bruto </div></td>
          <td><div align="center">
            <strong>
            <?
$sql = "select sum(valor_compra) as total from compras where estab_pertence_com = '$estab_pertence_op' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];
if($valor_total==0){
echo "R$ "."0.00";
}else{
echo "R$ ".bcadd($valor_total,0,2);
}

$comissao_digicompras = bcmul($valor_total,0.06,2);

?>
</strong> </div></td>
          <td><div align="center"></div></td>
</table>

<p>&nbsp;</p>



</body>
</html>
