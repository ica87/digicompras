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
<title>LISTANDO TODAS AS COMPRAS REALIZADAS DO PERIODO</title>
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

$nfantasia = $_POST['nfantasia'];
$mes_ano = $_POST['mes_ano'];

?>


<?

$sql = "SELECT * FROM estabelecimentos where cnpj = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$razaosocial = $linha[1];
//$nfantasia = $linha[2];
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

background="../background/<? //printf("$linha[1]"); ?>" bgproperties="fixed">
  
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
          Listando todas as compras realizadas no estabelecimento<span class="style3"> <? echo $nfantasia; ?></span></span> <span class="style2">no m&ecirc;s <span class="style3"><? echo $mes_ano; ?></span></span></div></td>
        </tr>
        <tr>
          <td width="25%"><div align="left"><strong><font color="#000000"><strong>Total de Opera&ccedil;&otilde;es </strong> <strong></strong><br>
          <?   
$sql = "SELECT * FROM compras where  estab_pertence_com = '$nfantasia' and mes_ano = '$mes_ano'";
$res = mysql_query($sql);
$registros_total = mysql_num_rows($res);
		  
echo $registros_total;		  
		  ?>
          </font></strong></div></td>
          <td width="29%">&nbsp;</td>
          <td width="19%">&nbsp;</td>
          <td width="27%"><strong></strong></td>
        </tr>
        <tr>
          <td><strong> Faturamento do m&ecirc;s </strong> <br>
              <strong>
              <?
$sql = "select sum(valor_compra) as total from compras where estab_pertence_com = '$nfantasia' and mes_ano = '$mes_ano'";
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
                <strong>
                <?
echo $comissao_digicompras;

?>
                </strong> </font></td>
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
                <? echo "R$ ".$doc_ted; ?> </strong></font></strong></td>
          <td><strong><font color="#000000">TOTAL LIQUIDO A RECEBER </font><font color="#000000"><br>
                <strong>
                <? 
echo "R$ ".$liquido_a_receber;			
?>
                </strong></font><font color="#000000"> </font></strong></td>
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
          <td><div align="center">Empresa Conveniada </div></td>
          <td><div align="center">Valor Compra </div></td>
          <td><div align="center"></div></td>
        </tr>
      <?
$sql = "SELECT * FROM compras where  estab_pertence_com = '$nfantasia' and mes_ano = '$mes_ano' group by estab_pertence order by estab_pertence asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = mysql_num_rows($res);

$empresa_conveniada = $linha[9];

	
		
?>            

        <tr>
          <td width="35%"><div align="center"><? if($reg>=1){echo $empresa_conveniada; }?></div></td>
          <td width="27%"><div align="center"><font color="#000000"><strong>
            <?
			if($reg>=1){
$sql = "select sum(valor_compra) as total from compras where estab_pertence_com = '$nfantasia' and estab_pertence = '$empresa_conveniada' and mes_ano = '$mes_ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);


$valor_total = $linha['total'];
if($valor_total==0){
echo "R$ "."0.00";
}else{
echo "R$ ".bcadd($valor_total,0,2);
}
}

?>
          </strong></font></div></td>
        
          <td width="38%">
            <form action="relatorio_de_faturamento_mensal.php" method="post" name="form2" target="_blank"><div align="center">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <input name="empresa_conveniada" type="hidden" id="empresa_conveniada" value="<? echo $empresa_conveniada; ?>">
              <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
              <input type="submit" name="Submit" value="Extrato Anal&iacute;tico">
           </div> </form>
          </td>
        <tr>
		<? } ?>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center">
            <strong>
            <?
$sql = "select sum(valor_compra) as total from compras where estab_pertence_com = '$nfantasia' and mes_ano = '$mes_ano'";
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
        </tr>

</table>

<p>&nbsp;</p>



</body>
</html>
