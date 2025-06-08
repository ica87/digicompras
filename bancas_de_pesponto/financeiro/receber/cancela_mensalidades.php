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

  <form name="form1" method="post" action="../index.php">
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    <input type="submit" name="Submit22" value="Voltar ao menu principal">
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
            <?
$codigo_aluno = $_POST['codigo_aluno'];

			
$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo_aluno' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_mensalidade++;


$nome = $linha[4];
$nome_resp = $linha[5];
$cpf_resp = $linha[6];


?>
          Listando todas as mensalidades do aluno:</span> <span class="style1"><? echo $nome; ?></span><span class="style2"> c&oacute;digo<span class="style1"> <? echo $codigo_aluno; ?></span><BR>
		  Respons&aacute;vel: <span class="style3"><? echo $nome_resp; ?></span>    CPF: <span class="style3"><? echo $cpf_resp; ?></span>		  <? } ?> </span></div></td>
        </tr>
  </table>
      
<table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td><div align="center" class="style4 style7">Vencimento</div></td>
          <td><div align="center" class="style4">Mensalidade</div></td>
          <td width="14%"><div align="center" class="style4">Valor Mensalidade </div></td>
          <td width="11%"><div align="center" class="style4">Juros Di&aacute;rios </div></td>
          <td><div align="center" class="style4">Quita&ccedil;&atilde;o</div></td>
          <td><div align="center" class="style4"> </div></td>
        </tr>
		
        <tr>
  <?
			


$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo_aluno' and quitacao = 'Em Aberto'  order by codigo asc";
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

          <td width="11%"><div align="center"><? echo $vencto; ?></div></td>
          <td width="10%"><div align="center"><? echo $reg; ?> / <? echo $quant_parc; ?></div></td>
          <td><div align="center"><? echo "R$ ".$mensalidade; ?> </div></td>
          <td><div align="center"><? echo "R$ ".$juros_diarios; ?> </div></td>
          <td width="12%"><div align="center"><? echo $quitacao; ?> </div></td>
          <td width="42%">               <form action="cancelar_mensalidade_confirma.php" method="post" name="form2">
             <div align="center"> 
               <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
               <input name="codigo_contas_a_receber" type="hidden" id="codigo_contas_a_receber" value="<? echo $codigo; ?>">
  <input name="codigo_aluno" type="hidden" id="codigo_aluno" value="<? echo $codigo_aluno; ?>">
  <input name="operador" type="hidden" id="operador" value="<? echo $nome_op; ?>">
  <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
  <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
  <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estab_pertence_op; ?>">
  <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento" value="<? echo $cidade_estab_pertence_op; ?>">
  <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estab_pertence_op; ?>">
  <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estab_pertence_op; ?>">               
  <input name="categoria_conta" type="hidden" id="categoria_conta" value="<? echo "Mensalidade"; ?>">
  <input name="num_mensalidade" type="hidden" id="num_mensalidade" value="<? echo $num_mensalidade; ?>">
<?
if($quitacao=="Em Aberto"){

printf('<input type="submit" name="Submit" value="Cancelar">');
				}
				
?>
          </div></form></td>
  </tr>
		  <?
if($reg==1){
echo "<tr>";
//$reg=0;
}
?>
<? } ?>
		  
		  
</table>

