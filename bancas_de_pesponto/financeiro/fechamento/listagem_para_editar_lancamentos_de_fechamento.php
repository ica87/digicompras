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
-->
</style>
</head>
<?

require '../../../conect/conect.php';

$mes = $_POST['mes'];
$ano = $_POST['ano'];


?>

<?

$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
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
          Listando todos os investimentos</span><span class="style2">
no m&ecirc;s <? echo $mes; ?> do ano <? echo $ano; ?></span></div></td>
        </tr>
        <tr>
          <td width="5%"><div align="right"></div></td>
          <td width="6%">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="18%">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td width="7%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="5%">&nbsp;</td>
          <td width="10%"><div align="center">
          </div></td>
          <td width="12%">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center">
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td><div align="center">
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
          <td><div align="center">BANCO</div></td>
          <td><div align="center">INSS</div></td>
          <td><div align="center">EX&Eacute;RCITO</div></td>
          <td><div align="center">PREFEITURA</div></td>
          <td><div align="center"></div>            
          <div align="center"></div></td>
        </tr>
<?
//where mes = '$mes' and ano = '$ano' order by codigo asc
			
$sql = "SELECT * FROM fechamento where mes = '$mes' and ano = '$ano'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$banco = $linha[22];
$inss = $linha[23];
$exercito = $linha[24];
$prefeitura = $linha[25];
$obs = $linha[26];

?>
        <tr>
          <td width="31%"> 
            <form name="form2" method="post" action="editar.php">
              <div align="center"><? echo $banco;?>
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="codigo" type="hidden" id="codigo2" value="<? echo $codigo; ?>">
                <input type="submit" name="Submit" value="Editar">
              </div>
            </form>              
            </td>
          <td width="17%"><div align="center">
<? echo "R$ ". $inss;?>          </div></td>
          <td width="17%"><div align="center">
            <? echo "R$ ". $exercito;?>          </div></td>
          <td width="16%"><div align="center">
            <? echo "R$ ". $prefeitura;?>          </div></td>
          <td width="19%"><form name="form2" method="post" action="excluir_confirma.php">
            <div align="center">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                <input name="codigo" type="hidden" id="codigo3" value="<? echo $codigo; ?>">
                <input type="submit" name="Submit3" value="Excluir">
            </div>
          </form></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>

</table>

<p>&nbsp;</p>



</body>
</html>
