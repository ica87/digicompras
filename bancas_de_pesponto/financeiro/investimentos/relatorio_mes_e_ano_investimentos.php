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
<title>LISTANDO TODAS AS PROPOSTAS PAGAS DO MÊS POR BANCO</title>
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

$mes = $_POST['mes'];
$ano = $_POST['ano'];


?>

<?

$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
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
      <table width="200%"  border="0">
        <tr>
          <td colspan="12"><div align="left"><span class="style2">
            <?
			
$sql = "SELECT * FROM investimentos where mes = '$mes' and ano = '$ano' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nfantasia = $linha[1];


}
?>
          Listando todos os investimentos</span><span class="style2">
no m&ecirc;s <? echo $mes; ?> do ano <? echo $ano; ?></span></div></td>
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
          <td colspan="2">Total dos investimentos
            <div align="center">
            </div></td>
          <td><?
$sql = "select sum(valor) as total from investimentos where mes = '$mes' and ano = '$ano'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_investimentos = $linha['total'];

echo "R$ ".$valor_total_investimentos;
?></td>
          <td><div align="center"></div></td>
          <td><div align="center">
          </div></td>
          <td>&nbsp;</td>
          <td><div align="center">Total Operador</div></td>
          <td><div align="center">
            <?
$sql = "select sum(valor_credito) as total from propostas where bco_operacao = '$bco_operacao' and mes_ano = '$mes_ano' and status = 'Aprovado_e_Pago'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td>&nbsp;</td>
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
<?

			
$sql = "SELECT * FROM investimentos where mes = '$mes' and ano = '$ano' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nfantasia = $linha[1];
$banco = $linha[2];
$valor = $linha[3];
$datacadastro = $linha[4];
$horacadastro = $linha[5];
$dia = $linha[6];
$mes = $linha[7];
$ano = $linha[8];
$data_investimento = $linha[9];
$data_prev_resgate = $linha[10];
$resgatado = $linha[11];
$data_resgate = $linha[12];
$valor_resgatado = $linha[13];
$historico = $linha[14];

$operador = $linha[15];
$cel_operador = $linha[16];
$email_operador = $linha[17];
$estabelecimento = $linha[18];
$cidade_estabelecimento = $linha[19];
$tel_estabelecimento = $linha[20];
$email_estabelecimento = $linha[21];

$conta = $linha[31];

?>      <table width="200%"  border="0">
        <tr bgcolor="#<? echo $cor ?>">
          <td>N&ordm; do Lan&ccedil;amento </td>
          <td><div align="center">Loja</div></td>
          <td><div align="center">Banco</div></td>
          <td><div align="center">Conta</div></td>
          <td><div align="center">Valor</div></td>
          <td><div align="center"> Data  investimento </div></td>
          <td><div align="center">Data prevista para resgate </div></td>
          <td><div align="center">Resgatado?</div></td>
          <td><div align="center">Data do resgate </div></td>
          <td width="6%"><div align="center">Valor Resgatado </div></td>
          <td width="30%"><div align="center">Historico</div></td>
        </tr>
        <tr>
          <td width="9%"><div align="center">               
            <form name="form2" method="post" action="editar_investimento.php">
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
          <td width="8%"><div align="center"><? echo $nfantasia;?></div></td>
          <td width="10%"><div align="center"><? echo $banco;?></div></td>
          <td width="8%"><div align="center"><? echo $conta;?></div></td>
          <td width="8%"><div align="center"><? echo "R$ ".$valor;?></div></td>
          <td width="8%"><div align="center"><? echo $data_investimento;?></div></td>
          <td width="11%"> <div align="center"><? echo $data_prev_resgate;?>
         </div></td>
          <td width="4%"><div align="center"><? echo $resgatado;?>
          </div></td>
          <td width="6%"><div align="center"><? echo $data_resgate;?>
          </div></td>
          <td><div align="center"><? echo "R$ ".$valor_resgatado; ?>
          </div></td>
          <td><div align="center"><? echo $historico;?>
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
