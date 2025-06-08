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

require '../../../conect/conect.php';

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

  <form name="form1" method="post" action="menu.php">
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    <input type="submit" name="Submit22" value="Voltar">
</form>
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
Operador que est&aacute; abrindo o caixa hoje:</span> <span class="style1"><? echo $nome_op; ?></span><span class="style2"> <BR>
		  </span></div></td>
        </tr>
  </table>
      
<table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style3">Data</div></td>
          <td><div align="center" class="style3">Valor de abertura do Caixa </div></td>
        </tr>
		
        <tr>
  <?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$datacadastro = $linha[3];

}
?>

          <td width="11%"><div align="center"><? echo $hoje; ?></div></td>
          <td width="32%">               <form action="grava_cx_abertura.php" method="post" name="form2">
            <div align="center"> 
               R$
               <input name="valor_recebido" type="text" id="valor_recebido" size="10" maxlength="10">
               <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y'); ?>">
  <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo date('H:i:s'); ?>">
  <input name="operador" type="hidden" id="operador" value="<? echo $nome_op; ?>">
  <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
  <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
  <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estab_pertence_op; ?>">
  <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estab_pertence_op; ?>">
  <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estab_pertence_op; ?>">
  <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estab_pertence_op; ?>">               
  <input name="historico" type="hidden" id="historico" value="<? echo "Abertura de Caixa"; ?>">
  <input name="categoria_conta" type="hidden" id="categoria_conta" value="<? echo "Abertura de Caixa"; ?>">



<input type="submit" name="Submit" value="Abrir Caixa">
				
				

          </div>
          </form></td>
  </tr>
		  
		  
</table>

