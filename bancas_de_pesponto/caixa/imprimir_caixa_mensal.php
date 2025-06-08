<?

session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");
?>

<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

require '../../conect/conect.php';

$hoje = date('d-m-Y');
$mes = $_POST['mes'];
$ano = $_POST['ano'];


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>



<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {font-weight: bold}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #000000}
.style9 {color: #000000; font-weight: bold; }
-->
</style>
<body bgcolor="ffffff"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>




<?
$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
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
  <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
  <? } ?>
<table width="100%"  border="0">
        <tr>
          <td><div align="center"><span class="style2">
</span> <span class="style1"><? echo $nome_op; ?></span><span class="style2"> verificando os lan&ccedil;amentos do caixa mensal <BR>
	      </span></div></td>
        </tr>
</table>
      
  <table width="100%"  border="0">
    <tr>
      <td width="50%" valign="top"><table width="97%"  border="0">
        <tr bgcolor="ffffff">
          <td><div align="center" class="style3 style8">Data Lan&ccedil;amento </div></td>
          <td width="31%"><div align="center" class="style9">Valor Entrada </div></td>
          <td><div align="center" class="style9">Hist&oacute;rico</div></td>
        </tr>
        <tr>
          <?
			


$sql = "SELECT * FROM cx_entradas where mes = '$mes' and ano = '$ano'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$datacadastro = $linha[3];
$valor_recebido = $linha[17];
$historico = $linha[35];


?>
          <td width="28%"><div align="center"><? echo $datacadastro; ?></div></td>
          <td><div align="center"><? echo "R$ ". $valor_recebido; ?> </div></td>
          <td width="41%">
            <div align="center"><? echo $historico; ?></div></td>
        </tr>
        <? } ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center">Total</div></td>
          <td><div align="center">
              <?
$sql = "select sum(valor_recebido) as total_entradas from cx_entradas where mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_entradas = $linha['total_entradas'];

echo "R$ ".$valor_total_entradas;
?>
          </div></td>
          <td>&nbsp;</td>
        </tr>
      </table>      </td>
     
      <td width="50%" valign="top"><table width="97%"  border="0">
        <tr bgcolor="ffffff">
          <td width="49%"><div align="center" class="style9">Valor Sa&iacute;da </div></td>
          <td><div align="center" class="style9">Hist&oacute;rico</div></td>
        </tr>
        <tr>
          <?
			


$sql = "SELECT * FROM cx_saidas where mes = '$mes' and ano = '$ano'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$datacadastro = $linha[3];
$valor_recebido = $linha[17];
$historico_saida = $linha[35];


?>
          <td><div align="center"><? echo "R$ ". $valor_recebido; ?> </div></td>
          <td width="51%">
            <div align="center"><? echo $historico_saida; ?></div></td>
        </tr>
        <? } ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center">
              <?
$sql = "select sum(valor_saida) as total_saidas from cx_saidas where mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_saidas = $linha['total_saidas'];

echo "R$ ".$valor_total_saidas;
?>
          </div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
        <div align="center"></div></td>
    </tr>
  </table>
<br><br>
<table width="100%"  border="0">
  <tr>
    <td width="33%"><div align="right"></div></td>
    <td width="34%"><div align="left"></div>      
    <div align="center">Saldo <? echo "R$ ". bcsub($valor_total_entradas, $valor_total_saidas, 2);
 ?></div></td>
    <td width="33%">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
