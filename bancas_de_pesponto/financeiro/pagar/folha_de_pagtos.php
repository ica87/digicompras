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
<title>Folha de Pagamentos de Aluno</title><body bgcolor="#ffffff"

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
			


$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo_aluno'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$curso = $linha[8];
$modulos = $linha[9];
$duracao = $linha[10];

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
          <td><div align="center" class="style4 style5">Vencimento</div></td>
          <td><div align="center" class="style6">Mens</div></td>
          <td width="9%"><div align="center" class="style6">Valor Mens</div></td>
          <td width="11%"><div align="center" class="style6">Juros Di&aacute;rios </div></td>
          <td><div align="center" class="style6">Quita&ccedil;&atilde;o</div></td>
          <td><div align="center" class="style6">Data pagto </div></td>
          <td><div align="center"><span class="style6">Hora pagto </span></div></td>
          <td><div align="center" class="style6">Observa&ccedil;&otilde;es</div></td>
        </tr>
		
        <tr>
  <?
			


$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo_aluno'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$codigo_aluno = $linha[1];
$datacadastro = $linha[2];
$horacadastro = $linha[3];
$nome = $linha[4];
$nome_resp = $linha[5];
$cpf_resp = $linha[6];
$curso = $linha[8];
$modulos = $linha[9];
$duracao = $linha[10];
$mensalidade = $linha[11];
$vencto = $linha[12];
$quant_parc = $linha[13];
$modo_pagto = $linha[14];
$juros_diarios = $linha[15];
$valor_recebido = $linha[16];
$quitacao = $linha[17];
$dataalteracao = $linha[25];
$horaalteracao = $linha[26];

$num_mensalidade = $linha[35];

$dias_atraso = ($hoje-$vencto)*-1;


?>

          <td width="8%"><div align="center"><? echo $vencto; ?></div></td>
          <td width="8%"><div align="center"><? echo $num_mensalidade; ?> / <? echo $quant_parc; ?></div></td>
          <td><div align="center"><? echo "R$ ".$mensalidade; ?> </div></td>
          <td><div align="center"><? echo "R$ ".$juros_diarios; ?> </div></td>
          <td width="10%"><div align="center"><? echo $quitacao; ?> </div></td>
          <td width="10%"><div align="center"><? echo $dataalteracao; ?></div></td>
          <td width="16%"><div align="center"><? echo $horaalteracao; ?></div></td>
          <td width="28%"><div align="center"></div></td>
  </tr>
		  <?
if($reg==1){
echo "<tr>";
//$reg=0;
}
?>
<? } ?>
		  
		  
</table>

