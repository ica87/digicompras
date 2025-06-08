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
.style7 {color: #FFFFFF}
-->
</style>
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

  <table width="100%"  border="0">
    <tr>
      <td><form name="form1" method="post" action="menu.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit22" value="Voltar">
      </form></td>
      <td><form action="imprimir_caixa_hoje.php" method="post" name="form1" target="_blank">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit222" value="Tela de Impress&atilde;o">
      </form></td>
      <td>&nbsp;</td>
    </tr>
  </table>
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
</span> <span class="style1"><? echo $nome_op; ?></span><span class="style2"> verificando os lan&ccedil;amentos do caixa hoje <BR>
	      </span></div></td>
        </tr>
</table>
      
  <table width="100%"  border="0">
    <tr>
      <td width="50%" valign="top"><table width="97%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style3 style7">Data Lan&ccedil;amento </div></td>
          <td width="13%"><div align="center" class="style3">Valor Entrada </div></td>
          <td><div align="center" class="style3">Hist&oacute;rico</div></td>
        </tr>
        <tr>
          <?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$datacadastro = $linha[3];
$valor_recebido = $linha[17];
$historico = $linha[35];


?>
          <td width="17%"><div align="center"><? echo $datacadastro; ?></div></td>
          <td><div align="center"><? echo "R$ ". $valor_recebido; ?> </div></td>
          <td width="28%">
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
$sql = "select sum(valor_recebido) as total_entradas from cx_entradas where datacadastro = '$hoje'";
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
        <tr bgcolor="#<? echo $cor ?>">
          <td width="49%"><div align="center" class="style3">Valor Sa&iacute;da </div></td>
          <td><div align="center" class="style3">Hist&oacute;rico</div></td>
        </tr>
        <tr>
          <?
			


$sql = "SELECT * FROM cx_saidas where datacadastro = '$hoje'  order by codigo asc";
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
$sql = "select sum(valor_saida) as total_saidas from cx_saidas where datacadastro = '$hoje'";
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
