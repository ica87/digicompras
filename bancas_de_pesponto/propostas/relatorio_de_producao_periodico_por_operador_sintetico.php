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
<title>RELATORIO DE PRODU&Ccedil;&Atilde;O SINTETICO</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style4 {font-size: 18px}
.style5 {font-size: 24px}
.style7 {
	font-size: 9px;
	font-weight: bold;
}
.style8 {font-size: 9px}
.style14 {font-size: 14px; font-weight: bold; }
.style15 {
	font-size: 10px;
	font-weight: bold;
}
.style16 {font-size: 10px}
.style18 {font-size: 18px; font-weight: bold; }
-->
</style>
</head>
<?

require '../../conect/conect.php';

$mes_ano = $_POST['mes_ano'];

$dia = date('d');
$mes = date('m');
$ano = date('Y');
$hora = date('H:i:s');

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
      <form name="form1" method="post" action="informe_operador_para_gerar_relatorio_mensal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Voltar">     
</form>
      <table width="100%"  border="0">
        <tr>
          <td width="26%"><span class="style4"><strong>Valor bruto de opera&ccedil;&atilde;o</strong></span></td>
          <td width="24%"><span class="style4"><strong><span class="style5"><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where mes_ano = '$mes_ano' and status = 'APROVADO E PAGO'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
</strong></strong></span></strong></span></td>
          <td width="27%"><span class="style4"><strong>Total de contratos efetivados</strong></span></td>
          <td width="23%"><span class="style4"><strong><span class="style5"><strong>
            <?
$sql = "select * from propostas where mes_ano = '$mes_ano' and status = 'APROVADO E PAGO'";
$resultado=mysql_query($sql);
$registros_total = mysql_num_rows($resultado);

echo $registros_total;
?>
          </strong></span></strong></span></td>
        </tr>
        <tr>
          <td><span class="style18">Comiss&atilde;o Empresa </span></td>
          <td><span class="style4"><strong><span class="style5"><strong><strong><strong><strong>
            <?
$sql = "select sum(valor_a_receber) as total from propostas where mes_ano = '$mes_ano' and status = 'APROVADO E PAGO'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
</strong></strong></strong>
          </strong></span></strong></span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
   <p class="style4">&nbsp;   </p>
      <table width="120%"  border="1">
        <tr bgcolor="#ffffff">
          <td><div align="center" class="style7">Nome</div></td>
          <td><div align="center" class="style8"><strong>FLEX 1 </strong></div></td>
          <td><div align="center" class="style8"><strong>FLEX 2 </strong></div></td>
          <td><div align="center" class="style8"><strong>FLEX 3 </strong></div></td>
          <td><div align="center" class="style8"><strong>NORMAL</strong></div></td>
          <td><div align="center" class="style7">PILOTO BV 1 </div></td>
          <td><div align="center" class="style7">PILOTO BV 2 </div></td>
          <td><div align="center" class="style7">PILOTO BV NORMAL </div></td>
          <td><div align="center" class="style8"><strong>R2</strong></div></td>
          <td><div align="center" class="style8"><strong>R3</strong></div></td>
          <td><div align="center" class="style8"><strong>R6</strong></div></td>
          <td><div align="center" class="style8"><strong>Total</strong></div></td>
        </tr>
            <?
	
$sql = "SELECT * FROM operadores where funcao <> 'Psicóloga Organizacional' and funcao <> 'Secretaria' and funcao <> 'Assistente' and funcao <> 'Operador de Privado' and status = 'Ativo' order by nome asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome_operador = $linha[1];
$meta = $linha[55];

?>            
        <tr>
          <td width="19%" align="center" valign="top">
            <form action="relatorio_de_producao_periodico_por_operador.php" method="post" name="form2">
              <input name="nome_operador" type="hidden" id="nome_operador" value="<? echo $nome_operador; ?>">
              <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
              <input name="campanha" type="hidden" id="campanha" value="selecione">
              <input type="submit" name="Submit2" value="<? echo $nome_operador; ?>">
            
            </form>
         </td>
          <td width="6%"><div align="center" class="style15">
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'FLEX 1'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </div></td>
          <td width="6%"><div align="center" class="style15"><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'FLEX 2'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></div></td>
          <td width="6%"><div align="center" class="style15"><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'FLEX 3'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></div></td>
          <td width="6%"><div align="center" class="style15"><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'NORMAL'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></div></td>
          <td width="6%"><div align="center" class="style14 style16">	        <strong><strong><strong>
          <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'PILOTO BV 1'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></strong></div></td>
          <td width="6%"><div align="center" class="style15"><strong><strong><strong>
          <strong><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'PILOTO BV 2'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
            </strong></strong></strong>          </strong></strong></strong>
</div></td>
          <td width="10%"><div align="center" class="style15">            <strong><strong><strong>
          <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'PILOTO BV NORMAL'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></strong> </div></td>
          <td width="8%"><div align="center"><span class="style15"><strong><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'R 2'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></strong></span></div></td>
          <td width="7%"><div align="center"><span class="style15"><strong><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'R 3'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></strong></span></div></td>
          <td width="8%"><div align="center"><span class="style15"><strong><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO' and tabela = 'R 6'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></strong></span></div></td>
          <td width="12%"><div align="center" class="style8"><strong><strong>
            <?
$sql = "select sum(valor_total) as total from propostas where nome_operador = '$nome_operador' and mes_ano = '$mes_ano' and status = 'APROVADO E PAGO'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total = $linha['total'];

echo "R$ ".$valor_total;
?>
          </strong></strong></div></td>
        </tr>
<? } ?>
</table>
<p align="center">
<?
$sql = "SELECT * FROM allcred limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email_empresa = $linha[14];
$site = $linha[15];

}

?>
<br>
<span class="style4"><strong><? echo $site; ?></strong></span>
<br>
<? echo $endereco; ?>
,
<? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?>
<br>
<? echo "Telefone / Fax: ". $telefone." "; ?>
/ <? echo $fax; ?>
<br>
<? echo "E-Mail: ". $email_empresa; ?>
</p>
<p align="center"><span class="style7">
  <? echo $meta_inss; ?>
</span><span class="style4"><strong><span class="style5"><strong>
</strong></span></strong></span> </p>
</body>
</html>
