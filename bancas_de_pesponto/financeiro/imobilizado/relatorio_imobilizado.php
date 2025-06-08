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
<title>LISTANDO TODO O IMOBILIZADO DA LOJA</title>
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

require '../../../conect/conect.php';

$nfantasia = $_POST['nfantasia'];


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
      <table width="120%"  border="0">
        <tr>
          <td colspan="12"><div align="left"><span class="style2">
            <?
			
$sql = "SELECT * FROM imobilizado where nfantasia = '$nfantasia' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nfantasia = $linha[15];


}
?>
          Listando todo o imobilizado da loja </span><span class="style2"><? echo $nfantasia; ?></span></div></td>
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
          <td colspan="2">Total do imobilizado 
            <div align="center">
            </div></td>
          <td><?
$sql = "select sum(valor) as total from imobilizado where nfantasia = '$nfantasia'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_imobilizado = $linha['total'];

echo "R$ ".$valor_total_imobilizado;
?></td>
          <td><div align="center"></div></td>
          <td><div align="center">
          </div></td>
          <td colspan="2"><div align="center">Total de deprecia&ccedil;&atilde;o mensal </div></td>
          <td colspan="2"><div align="center">
            <?
$sql = "select sum(depreciacao_mensal) as total from imobilizado where nfantasia = '$nfantasia'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_depreciacao = $linha['total'];

echo "R$ ".$valor_total_depreciacao;
?>
</div></td>
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
      <table width="120%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; do Lan&ccedil;amento </td>
          <td><div align="center">Objeto</div></td>
          <td><div align="center">Descri&ccedil;&atilde;o</div></td>
          <td><div align="center">Valor</div></td>
          <td><div align="center">Tempo de vida &uacute;til </div></td>
          <td><div align="center"> Deprecia&ccedil;&atilde;o mensal </div></td>
          <td width="25%"><div align="center">Observa&ccedil;&otilde;es</div></td>
        </tr>
<?

			
$sql = "SELECT * FROM imobilizado where nfantasia = '$nfantasia' order by codigo desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$operador = $linha[1];
$cel_operador = $linha[2];
$email_operador = $linha[3];
$estabelecimento = $linha[4];
$cidade_estabelecimento = $linha[5];
$tel_estabelecimento = $linha[6];
$email_estabelecimento = $linha[7];

$operador_alterou = $linha[8];
$cel_operador_alterou = $linha[9];
$email_operador_alterou = $linha[10];
$estabelecimento_alterou = $linha[11];
$cidade_estabelecimento_alterou = $linha[12];
$tel_estabelecimento_alterou = $linha[13];
$email_estabelecimento_alterou = $linha[14];

$nfantasia = $linha[15];
$objeto = $linha[16];
$descricao = $linha[17];
$datacadastro = $linha[18];
$horacadastro = $linha[19];
$data_aquisicao = $linha[20];
$valor = $linha[21];
$tempo_vida_util = $linha[22];
$depreciacao_mensal = $linha[23];
$data_saida = $linha[24];
$hora_saida = $linha[25];
$motivo_saida = $linha[26];
$valor_saida = $linha[27];
$obs = $linha[28];

?>        <tr>
          <td width="12%"><div align="center">               
            <form name="form2" method="post" action="editar.php">
              <? echo $codigo; ?>
              <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
              <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
              <strong><font color="#0000FF">
              <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
              </font></strong>
              
              
              <input type="submit" name="Submit" value="Editar">
              <strong><font color="#0000FF">
              <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
              <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
              <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
              <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
              <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
              <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
              <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
              </font></strong>
            </form>
          </div></td>
          <td width="13%"><div align="center"><? echo $objeto;?></div></td>
          <td width="18%"><div align="center">
            <textarea name="textarea" cols="" rows="" readonly="readonly"><? echo $descricao; ?></textarea>
          </div></td>
          <td width="9%"><div align="center"><? echo "R$ ".$valor;?></div></td>
          <td width="12%"><div align="center"><? echo $tempo_vida_util;?></div></td>
          <td width="11%"><div align="center"><? echo "R$ ".$depreciacao_mensal;?></div></td>
          <td><div align="center">
            <textarea name="textarea2" cols="" rows="" readonly="readonly"><? echo $obs; ?></textarea>
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
