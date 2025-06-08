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
.style4 {font-size: 10px}
-->
</style>
</head>
<?

require '../../../conect/conect.php';

$dia_ref_inicial = $_POST['dia_ref_inicial'];
$mes_ref_inicial = $_POST['mes_ref_inicial'];
$ano_ref_inicial = $_POST['ano_ref_inicial'];

$dia_ref_final = $_POST['dia_ref_final'];
$mes_ref_final = $_POST['mes_ref_final'];
$ano_ref_final = $_POST['ano_ref_final'];

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
          Listando o per&iacute;odo de </span><span class="style2"><? echo $dia_ref_inicial; ?> -<? echo $mes_ref_inicial; ?>-<? echo $ano_ref_inicial; ?> at&eacute; <? echo $dia_ref_final; ?></span>-<span class="style2"><? echo $mes_ref_final; ?></span>-<span class="style2"><? echo $ano_ref_final; ?></span></div></td>
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
      <table width="200%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style4">BANCO</div></td>
          <td><div align="center" class="style4">INSS</div></td>
          <td><div align="center" class="style4">EX&Eacute;RCITO</div></td>
          <td><div align="center" class="style4">PREFEITURA FRANCA </div></td>
          <td><div align="center">Prefeitura Morro Agudo </div></td>
          <td><div align="center">Prefeitura Jardinopolis </div></td>
          <td><div align="center">Prefeitura Pat. Paulista </div></td>
          <td><div align="center">Carro BV </div></td>
          <td><div align="center">Carro Omni </div></td>
          <td><div align="center">Privado</div></td>
          <td><div align="center">Siape</div></td>
          <td><div align="center">Aeronautica</div></td>
          <td><div align="center">Correios</div></td>
          <td><div align="center" class="style4">TOTAL </div>
              <div align="center" class="style4"></div></td>
        </tr>
<?
//where mes = '$mes' and ano = '$ano' order by codigo asc
			
$sql = "SELECT * FROM bco_operacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$banco = $linha[1];
?>
        <tr>
          <td width="9%"><div align="center" class="style4"><? echo $banco;?>               
            </div></td>
          <td width="7%"><div align="center" class="style4">
            <?
$sql = "select sum(inss) as total_inss from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_inss = $linha['total_inss'];

echo "R$ ".$total_inss;
?>
          </div></td>
          <td width="6%"><div align="center" class="style4">
            <?
$sql = "select sum(exercito) as total_exercito from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_exercito = $linha['total_exercito'];

echo "R$ ".$total_exercito;
?>
          </div></td>
          <td width="7%"><div align="center" class="style4">
            <?
$sql = "select sum(prefeitura) as total_prefeitura from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura = $linha['total_prefeitura'];

echo "R$ ".$total_prefeitura;

?>
          </div></td>
          <td width="9%"><div align="center"><span class="style4">
            <?
$sql = "select sum(prefeitura_morro_agudo) as total_prefeitura_morro_agudo from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_morro_agudo = $linha['total_prefeitura_morro_agudo'];

echo "R$ ".$total_prefeitura_morro_agudo;

?>
          </span></div></td>
          <td width="8%"><div align="center"><span class="style4">
            <?
$sql = "select sum(prefeitura_jardinopolis) as total_prefeitura_jardinopolis from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_jardinopolis = $linha['total_prefeitura_jardinopolis'];

echo "R$ ".$total_prefeitura_jardinopolis;

?>
          </span></div></td>
          <td width="8%"><div align="center"><span class="style4">
            <?
$sql = "select sum(prefeitura_pat_paulista) as total_prefeitura_pat_paulista from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_prefeitura_pat_paulista = $linha['total_prefeitura_pat_paulista'];

echo "R$ ".$total_prefeitura_pat_paulista;

?>
          </span></div></td>
          <td width="7%"><div align="center"><span class="style4">
            <?
$sql = "select sum(carro_bv) as total_carro_bv from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_carro_bv = $linha['total_carro_bv'];

echo "R$ ".$total_carro_bv;

?>
          </span></div></td>
          <td width="7%"><div align="center"><span class="style4">
            <?
$sql = "select sum(carro_omni) as total_carro_omni from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_carro_omni = $linha['total_carro_omni'];

echo "R$ ".$total_carro_omni;

?>
          </span></div></td>
          <td width="7%"><div align="center"><span class="style4">
            <?
$sql = "select sum(privado) as total_privado from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_privado = $linha['total_privado'];

echo "R$ ".$total_privado;

?>
          </span></div></td>
          <td width="6%"><div align="center"><span class="style4">
            <?
$sql = "select sum(siape) as total_siape from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_siape = $linha['total_siape'];

echo "R$ ".$total_siape;

?>
          </span></div></td>
          <td width="6%"><div align="center"><span class="style4">
            <?
$sql = "select sum(aeronautica) as total_aeronautica from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_aeronautica = $linha['total_aeronautica'];

echo "R$ ".$total_aeronautica;

?>
          </span></div></td>
          <td width="6%"><div align="center"><span class="style4">
            <?
$sql = "select sum(correios) as total_correios from fechamento where banco = '$banco' and dia_ref between '$dia_ref_inicial' and '$dia_ref_final' and mes_ref between '$mes_ref_inicial' and '$mes_ref_final' and ano_ref between '$ano_ref_inicial' and '$ano_ref_final'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$total_correios = $linha['total_correios'];

echo "R$ ".$total_correios;

?>
          </span></div></td>
          <td width="7%"><div align="center" class="style4">
              <?
$soma_inss_exercito = bcadd($total_inss,$total_exercito,2);
$soma_prefeitura = bcadd($total_prefeitura,0.00,2);

$soma_prefeitura_morro_agudo = bcadd($total_prefeitura_morro_agudo,0.00,2);
$soma_prefeitura_jardinopolis = bcadd($total_prefeitura_jardinopolis,0.00,2);
$soma_prefeitura_pat_paulista = bcadd($total_prefeitura_pat_paulista,0.00,2);
$soma_carro_bv = bcadd($total_carro_bv,0.00,2);
$soma_carro_omni = bcadd($total_carro_omni,0.00,2);
$soma_privado = bcadd($total_privado,0.00,2);
$soma_siape = bcadd($total_siape,0.00,2);
$soma_aeronautica = bcadd($total_aeronautica,0.00,2);
$soma_correios = bcadd($total_correios,0.00,2);

$total_1 = bcadd($soma_inss_exercito,$soma_prefeitura,2);
$total_2 = bcadd($soma_prefeitura_morro_agudo,$soma_prefeitura_jardinopolis,2);
$total_3 = bcadd($soma_prefeitura_pat_paulista,$soma_carro_bv,2);
$total_4 = bcadd($soma_carro_omni,$soma_privado,2);
$total_5 = bcadd($soma_siape,$soma_aeronautica,2);
$total_6 = bcadd($soma_correios,0,2);

$total_geral = $total_1+$total_2+$total_3+$total_4+$total_5+$total_6;

//$total_geral = bcadd($soma_inss_exercito,$soma_prefeitura,2);
echo "R$ ".$total_geral;
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

<p>&nbsp;</p>



</body>
</html>
