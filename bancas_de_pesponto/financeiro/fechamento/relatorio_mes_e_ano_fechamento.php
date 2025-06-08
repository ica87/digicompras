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
      <table width="150%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center">BANCO</div></td>
          <td><div align="center">INSS</div></td>
          <td><div align="center">EX&Eacute;RCITO</div></td>
          <td><div align="center">Pref Franca </div></td>
          <td><div align="center">Pref Morro Agudo</div></td>
          <td><div align="center">Pref Jardinoplois </div></td>
          <td><div align="center">Pref Pat Paulista </div></td>
          <td><div align="center">Carro BV </div></td>
          <td><div align="center">Carro Omni </div></td>
          <td><div align="center">Privado</div></td>
          <td><div align="center">Siape</div></td>
          <td><div align="center">Aeronautica</div></td>
          <td><div align="center">Correios</div></td>
          <td><div align="center">Governo MInas Gerais </div></td>
          <td><div align="center">Ipremo</div></td>
          <td><div align="center">TOTAL
          </div>            <div align="center"></div></td>
        </tr>
<?
//where mes = '$mes' and ano = '$ano' order by codigo asc
			
$sql = "SELECT * FROM bco_operacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$banco = $linha[1];
?>
        <tr>
          <td width="9%"><div align="center"><? echo $banco;?>               
            </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(inss) as total_inss from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_inss = $linha['total_inss'];

echo "R$ ".$total_inss;
?>
          </div></td>
          <td width="10%"><div align="center">
            <?
$sql = "select sum(exercito) as total_exercito from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_exercito = $linha['total_exercito'];

echo "R$ ".$total_exercito;
?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(prefeitura) as total_prefeitura_franca from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_franca = $linha['total_prefeitura_franca'];

echo "R$ ".$total_prefeitura_franca;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(prefeitura_morro_agudo) as total_prefeitura_morro_agudo from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_morro_agudo = $linha['total_prefeitura_morro_agudo'];

echo "R$ ".$totaltotal_prefeitura_morro_agudo;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(prefeitura_jardinopolis) as total_prefeitura_jardinopolis from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_jardinopolis = $linha['total_prefeitura_jardinopolis'];

echo "R$ ".$totaltotal_prefeitura_jardinopolis;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(prefeitura_pat_paulista) as total_prefeitura_pat_paulista from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_pat_paulista = $linha['total_prefeitura_pat_paulista'];

echo "R$ ".$total_prefeitura_pat_paulista;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(carro_bv) as total_carro_bv from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_carro_bv = $linha['total_carro_bv'];

echo "R$ ".$total_carro_bv;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(carro_omni) as total_carro_omni from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_carro_omni = $linha['total_carro_omni'];

echo "R$ ".$total_carro_omni;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(privado) as total_privado from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_privado = $linha['total_privado'];

echo "R$ ".$total_privado;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(siape) as total_siape from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_siape = $linha['total_siape'];

echo "R$ ".$total_siape;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(aeronautica) as total_aeronautica from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_aeronautica = $linha['total_aeronautica'];

echo "R$ ".$total_aeronautica;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(correios) as total_correios from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_correios = $linha['total_correios'];

echo "R$ ".$total_correios;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(governo_minas_gerais) as total_governo_minas_gerais from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_governo_minas_gerais = $linha['total_governo_minas_gerais'];

echo "R$ ".$total_governo_minas_gerais;

?>
          </div></td>
          <td width="8%"><div align="center">
            <?
$sql = "select sum(ipremo) as total_ipremo from fechamento where banco = '$banco' and mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_ipremo = $linha['total_ipremo'];

echo "R$ ".$total_ipremo;

?>
          </div></td>
          <td width="8%"><div align="center">
		  <?

$total_geral = $total_inss+$total_exercito+$total_prefeitura_franca+$total_prefeitura_morro_agudo+$total_prefeitura_jardinopolis+$total_prefeitura_pat_paulista+$carro_bv+$carro_omni+$total_privado+$total_siape+$total_aeronautica+$total_coreios+$total_governo_minas_gerais+$total_ipremo;

echo "R$ ".$total_geral;
?></div></td>
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
