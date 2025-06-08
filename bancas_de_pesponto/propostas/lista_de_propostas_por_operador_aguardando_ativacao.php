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
<title>LISTANDO TODAS AS PROPOSTAS DO CLIENTE</title>
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
      <table width="100%"  border="0">
        <tr>
          <td><form name="form1" method="post" action="informe_operador_para_verificar_propostas_aguardando_ativacao.php">
            <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
            <input type="submit" name="Submit2" value="Voltar">
          </form></td>
          <td><form name="form1" method="post" action="../principal.php">
            <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
            <input type="submit" name="Submit22" value="Voltar ao menu principal">
          </form></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="100%"  border="0">
        <tr>
          <td><div align="center"><span class="style2">
            <?
$nome_operador = $_POST['nome_operador'];
$mes_ano = $_POST['mes_ano'];
			
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_operador = $linha[1];



?>
          Listando todas as propostas do cliente:</span> <span class="style2"><? echo $nome_operador; ?><? } ?></span></div></td>
        </tr>
      </table><br><br>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
      <?
			
$sql = "SELECT * FROM propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'Aguardando_Ativação' order by num_proposta desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>            
      <table width="100%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; da Proposta </td>
          <td>Valor do Cr&eacute;dito Solicitado </td>
          <td width="9%">Quant de parc</td>
          <td width="14%">Valor das parcelas </td>
          <td><div align="center">Status</div></td>
        </tr>
		
        <tr>
          <td width="42%"><div align="center">               <form name="form2" method="post" action="status_proposta.php">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              
  <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">
  <? // printf("<a href='editar_proposta.php?chamar=$linha[0]' >$linha[0]</a>"); ?>
                <? printf("$linha[0]"); ?>
                Comiss&atilde;o
                <input name="percentual" type="text" id="percentual" size="4" maxlength="4">
                % Comiss&atilde;o OP 
                <input name="percentual_op" type="text" id="percentual_op" size="4" maxlength="4">
                %             
                <input type="submit" name="Submit" value="Alterar Status">
              
          </form></div></td>
          <td width="18%"><div align="center"><? printf("R$ $linha[25]</a> ");?>
          </div></td>
          <td><div align="center"><? printf("$linha[26]"); ?>
          </div></td>
          <td><div align="center"><? printf("$linha[27]"); ?>
          </div></td>
          <td width="17%"><div align="center"><? printf("$linha[51]"); ?>
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
