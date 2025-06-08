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

$hoje = date('d/m/Y')+1;


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
.style3 {color: #0000FF}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #000000}
.style6 {color: #000000; font-weight: bold; }
body {
	margin-top: 10px;
}
-->
</style>
<title>Folha de Presen&ccedil;a de Aluno</title><body bgcolor="#ffffff"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" bgproperties="fixed" marginwidth="0" 
  
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
<table width="100%"  border="1">
        <tr>
          <td width="47%"><span class="style2">
            <?
$codigo_aluno = $_POST['codigo_aluno'];

			
$sql = "SELECT * FROM clientes where codigo = '$codigo_aluno' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_mensalidade++;

$codigo = $linha[0];
$nome = $linha[4];
$endereco = $linha[8];
$numero = $linha[9];
$bairro = $linha[10];
$telefone = $linha[15];
$nome_resp = $linha[24];
$cpf_resp = $linha[38];

}
?>
            <?
			


$sql = "SELECT * FROM cursos where codigo_aluno = '$codigo_aluno'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$curso = $linha[45];
$modulos = $linha[46];
$duracao = $linha[48];

}
?>
Aluno:</span> <span class="style1"><? echo $nome; ?></span><span class="style2"> </span></td>
          <td width="53%"><span class="style2">c&oacute;digo<span class="style1"> <? echo $codigo_aluno; ?></span></span></td>
        </tr>
        <tr>
          <td><div align="center">
            <p align="left"><span class="style2">Respons&aacute;vel: <span class="style3"><? echo $nome_resp; ?></span>     </span></p>
            </div></td>
          <td><span class="style2">CPF: <span class="style3"><? echo $cpf_resp; ?></span></span></td>
        </tr>
        <tr>
          <td><strong>Endere&ccedil;o: <span class="style3"><? echo $endereco; ?></span></strong></td>
          <td><strong>N&uacute;mero: <span class="style3"><? echo $numero; ?></span></strong></td>
        </tr>
        <tr>
          <td><strong>Bairro: <span class="style3"><? echo $bairro; ?></span></strong></td>
          <td><strong>Telefone: <span class="style3"><? echo $telefone; ?></span></strong></td>
        </tr>
        <tr>
          <td><strong>Curso: <span class="style3"><? echo $curso; ?></span></strong></td>
          <td><strong>Dura&ccedil;&atilde;o do curso : <span class="style3"><? echo $duracao; ?> <span class="style5">meses</span> </span></strong></td>
        </tr>
        <tr>
          <td colspan="2"><strong>M&oacute;dulos: <span class="style3"><? echo $modulos; ?></span></strong></td>
        </tr>
  </table>
  <br><br>    
<table width="100%"  border="1" bordercolor="#000000">
        <tr bgcolor="#ffffff">
          <td width="14%"><div align="center" class="style4 style5">Data</div></td>
          <td width="30%"><div align="center" class="style6">Assinatura</div></td>
          <td width="27%"><div align="center" class="style2">Curso</div></td>
          <td width="29%"><div align="center" class="style6">Observa&ccedil;&otilde;es</div></td>
        </tr>
		<tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
</table>

