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
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style5 {
	font-size: 24px;
	font-weight: bold;
	color: #0000FF;
}
.style6 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
.style7 {
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>
<?

require '../../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];


?>

<?

$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

?>
<? } ?>

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

background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">
  
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
      <form name="form1" method="post" action="menu.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="100%"  border="0">
        <tr>
          <td colspan="12"><div align="left"><span class="style2">
          Relat&oacute;rio de entradas e sa&iacute;das da loja </span><span class="style2">
no <? echo $nfantasia; ?> m&ecirc;s <? echo $mes; ?> do ano <? echo $ano; ?></span></div></td>
        </tr>
        <tr>
          <td width="5%"><div align="right"></div></td>
          <td width="6%">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="5%">&nbsp;</td>
          <td width="19%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="4%">&nbsp;</td>
          <td width="5%">&nbsp;</td>
          <td width="10%"><div align="center">
          </div></td>
          <td width="12%">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4"><div align="center">
          </div>            
            <div align="center"><strong>Total Entradas da loja </strong></div></td>
          <td><div align="center" class="style5">
          <?
$sql = "select sum(valor) as total_entradas from cx_entradas where nfantasia = '$nfantasia' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_entradas = $linha['total_entradas'];

echo "R$ ".$total_entradas;
?>
</div></td>
          <td colspan="4"><div align="center"></div>                        <div align="center"><strong>Total Sa&iacute;das da loja </strong></div></td>
          <td colspan="3"><span class="style6">
          <?
$sql = "select sum(valor) as total_saidas from cx_saidas where nfantasia = '$nfantasia' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_saidas = $linha['total_saidas'];

echo "R$ ".$total_saidas;
?>
          </span></td>
        </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="12"><div align="center"><span class="style7">Saldo 
            <?
$saldo = bcsub($total_entradas,$total_saidas,2);

echo "R$ ".$saldo;
?>
          </span><span class="style7">          </span></div></td>
        </tr>
</table>
<p></p>
      <table width="100%"  border="0">
        <tr>
          <td width="44%" valign="top"><div align="center">
            <table width="100%"  border="1">
              <tr bgcolor="#<? echo $cor ?>">
                <td colspan="2"><div align="center" class="style4">Entradas</div></td>
              </tr>
              <tr bgcolor="#<? echo $cor ?>">
                <td><div align="center" class="style3">Categoria Contas </div></td>
                <td><div align="center" class="style3">Total</div></td>
              </tr>
              <?

			
$sql = "SELECT * FROM categorias_receitas";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$categoria_conta_receita = $linha[1];
?>
              <tr>
                <td width="69%"><? echo $categoria_conta_receita;?></td>
                <td width="31%"><div align="center">
                    <?
$sql = "select sum(valor) as total_entradas from cx_entradas where nfantasia = '$nfantasia' and mes = '$mes' and ano = '$ano' and categoria_conta = '$categoria_conta_receita'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_entradas = $linha['total_entradas'];

echo "R$ ".$total_entradas;
?>
                </div></td>
                <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
                <? } ?>
            </table>
          </div></td>
          <td width="4%">&nbsp;</td>
          <td width="52%" valign="top"><div align="center">
            <table width="100%"  border="1">
              <tr bgcolor="#<? echo $cor ?>">
                <td colspan="2"><div align="center" class="style4">Sa&iacute;das</div></td>
              </tr>
              <tr bgcolor="#<? echo $cor ?>">
                <td><div align="center" class="style3">Categoria Contas </div></td>
                <td><div align="center" class="style3">Total</div></td>
              </tr>
              <?

			
$sql = "SELECT * FROM categorias_despesas";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$categoria_conta = $linha[1];
?>
              <tr>
                <td width="69%"><? echo $categoria_conta;?></td>
                <td width="31%"><div align="center">
                    <?
$sql = "select sum(valor) as total_saidas from cx_saidas where nfantasia = '$nfantasia' and mes = '$mes' and ano = '$ano' and categoria_conta = '$categoria_conta'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_saidas = $linha['total_saidas'];

echo "R$ ".$total_saidas;
?>
                </div></td>
                <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
                <? } ?>
            </table>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p><br>
          <br>
            </p>
      <table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <p>&nbsp;</p>



</body>
</html>
