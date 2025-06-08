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
<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO CORRESPONDENTE</title>
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

require '../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];


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
      <form name="form1" method="post" action="informe_empresa_conveniada.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <strong><font color="#0000FF">
        </font></strong>        
        <input type="submit" name="Submit2" value="Voltar">
</form>
      <table width="100%"  border="0">
        <tr>
          <td colspan="4"><div align="left"><span class="style2">
                  
          Listando todos os usu&aacute;rios que falta entregar o cart&atilde;o da empresa conveniada:</span> <span class="style2"><? echo $nfantasia; ?>
          </span></div></td>
        </tr>
        <tr>
          <td width="35%"><div align="right"></div></td>
          <td width="15%">&nbsp;</td>
          <td width="24%">&nbsp;</td>
          <td width="26%">&nbsp;</td>
        </tr>
        <tr>
          <td>Somat&oacute;ria do limite de todos funcion&aacute;rios </td>
          <td><div align="center">
            <?
$sql = "select sum(limite) as total from usuarios where estab_pertence = '$nfantasia' and status_de_envio = 'Em Produção'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td><div align="center">
          </div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <br><br>
<table width="100%"  border="0">
        <tr>
          <td>
<?
$sql = "SELECT * FROM usuarios where estab_pertence = '$nfantasia' and status_de_envio = 'Em Produção' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_producao++;

$codigo = $linha[0];
}
if($reg_producao==0){
$reg_prod = "0";
}else{
$reg_prod = $reg_producao;
}

$sql = "SELECT * FROM usuarios where estab_pertence = '$nfantasia' and status_de_envio = 'Entregue' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg_entregue++;

$codigo = $linha[0];
}
if($reg_entregue==0){
$reg_ent = "0";
}else{
$reg_ent = $reg_entregue;
}

?>
          Cart&otilde;es a entregar <? echo $reg_prod;?></td>
          <td><div align="center">Total de cart&otilde;es entregues <? echo $reg_ent;?></div></td>
          <td colspan="2">Total de cartoes da empresa <? echo bcadd($reg_prod,$reg_ent); ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr bgcolor="#<? echo $cor ?>">

          <td>N&ordm; Cart&atilde;o </td>
          <td><div align="center">Usu&aacute;rio</div></td>
          <td><div align="center">Status</div></td>
          <td><div align="center">Status de Entrega </div></td>
          <td><div align="center">Limite</div></td>
        </tr>
<?

			
$sql = "SELECT * FROM usuarios where estab_pertence = '$nfantasia' and status_de_envio = 'Em Produção' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros++;

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
$senha = $linha[40];
$funcao = $linha[41];
$estab_pertence = $linha[42];
$cidade_estab_pertence = $linha[43];
$tel_estab_pertence = $linha[44];
$email_estab_pertence = $linha[45];
$status = $linha[46];
$salario = $linha[47];
$limite = $linha[48];
$operador_atende = $linha[49];
$status_de_envio = $linha[52];


?>
        <tr>
          <td width="17%"><div align="center">               <form name="form2" method="post" action="grava_entrega_de_cartoes.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
  <input name="status_de_envio" type="hidden" id="status_de_envio" value="<? echo "Entregue"; ?>">
  <input name="data_entrega" type="hidden" id="data_entrega" value="<? echo date('d-m-Y'); ?>">
  <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
            <? echo $codigo; ?> 
            <input type="submit" name="Submit" value="Entregar">               
          </form></div></td>
          <td width="37%">
            <div align="center"><? echo $nome;?> </div></td>
          <td width="15%"><div align="center"><? echo $status;?></div></td>
          <td width="15%"><div align="center"><? echo $status_de_envio;?></div></td>
          <td width="16%"><div align="center"><? echo $limite;?>
          </div></td>
          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
}
?>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        <tr>
          <td><div align="center"><? echo $registros;?></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
</table>

<p>&nbsp;</p>



</body>
</html>
