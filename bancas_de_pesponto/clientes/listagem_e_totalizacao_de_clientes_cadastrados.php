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
<title>LISTAGEM E TOTALIZA&Ccedil;&Atilde;O DE CLIENTES CADASTRADOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-right: 0mm;
	margin-bottom: 0mm;
	margin-left: 5mm;
	margin-top: 0mm;
}
.style1 {font-size: 12px}
.style4 {font-size: 11px}
-->
</style></head>


			<?
			
require '../../conect/conect.php';
			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("ffffff"); ?>" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>

background="background/<? printf("$linha[1]"); }?>" bgproperties="fixed">
<p></p>
    <?	
$sql = "SELECT * FROM clientes order by nome asc";
$res = mysql_query($sql);
$registros = mysql_num_rows($res);


echo "Total de registros encontrados ---> ".$registros;
?>
<TABLE width="100%" border=0 align="center" cellPadding=3 cellSpacing=4>
    <?	
$sql = "SELECT * FROM clientes order by nome asc";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$nome = $linha[1];
$sexo = $linha[2];
$estadocivil = $linha[3];
$cpf = $linha[4];
$rg = $linha[5];
$orgao = $linha[6];
$emissao = $linha[7];
$data_nasc = $linha[8];
$pai = $linha[9];
$mae = $linha[10];
$endereco = $linha[11];
$numero = $linha[12];
$bairro = $linha[13];
$complemento = $linha[14];
$cidade = $linha[15];
$estado = $linha[16];
$cep = $linha[17];
$telefone = $linha[18];
$celular = $linha[19];
$email = $linha[20];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$obs = $linha[28];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$tipo = $linha[40];
$banco = $linha[41];
$agencia = $linha[42];
$conta = $linha[43];
$num_beneficio = $linha[44];

$parc1 = $linha[45];
$banco1 = $linha[46];
$vencto1 = $linha[47];
$compra1 = $linha[48];

$parc2 = $linha[49];
$banco2 = $linha[50];
$vencto2 = $linha[51];
$compra2 = $linha[52];

$parc3 = $linha[53];
$banco3 = $linha[54];
$vencto3 = $linha[55];
$compra3 = $linha[56];

$parc4 = $linha[57];
$banco4 = $linha[58];
$vencto4 = $linha[59];
$compra4 = $linha[60];

$parc5 = $linha[61];
$banco5 = $linha[62];
$vencto5 = $linha[63];
$compra5 = $linha[64];

$parc6 = $linha[65];
$banco6 = $linha[66];
$vencto6 = $linha[67];
$compra6 = $linha[68];

$parc7 = $linha[69];
$banco7 = $linha[70];
$vencto7 = $linha[71];
$compra7 = $linha[72];

$num_beneficio2 = $linha[73];
$num_beneficio3 = $linha[74];
$num_beneficio4 = $linha[75];

$dataprev2 = $linha[76];


$dataprev = $linha[76];
$obs2 = $linha[77];
$arquivo = $linha[78];

?>
  <td>    <div align="center"><span class="style1"><font color="#000000"><span class="style4"><font color="#000000"><? echo "Cóadigo ".$codigo."<br>"; ?></font><? echo "Nome ".$nome; ?></span></font><span class="style4"> -            <font color="#000000"><? echo "CPF ".$cpf."<br>"; ?></font>         
            </span>
            <span class="style4"><font color="#000000"><? echo "Fone ".$telefone." / ".$celular; ?></font></span><br>
            <span class="style4"><font color="#000000"><? echo "Nasc ".$data_nasc; ?></font></span><br>
            <span class="style4"><font color="#000000"><? echo "Nº Benef ".$num_beneficio." / ".$num_beneficio2; ?></font></span><br>
            <span class="style4"><font color="#000000"><? echo "Nº Benef ".$num_beneficio3." / ".$num_beneficio4; ?></font></span><br>        
		  </span>
  </div></td>




          <?
if($reg==3){
echo "</tr><tr></tr><tr>";
$reg=0;
}
?>
<? } ?>

</TABLE>


</div>
<p>&nbsp;</p>
</body>
</html>
