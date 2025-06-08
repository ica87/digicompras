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
<title>Faturamento</title>
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
.style3 {font-size: 10px}
.style6 {font-size: 18px; font-weight: bold; }
.style8 {color: #000000}
.style9 {color: #CCCCCC}
.style11 {color: #999999; }
.style12 {font-size: 10px; color: #999999; }
-->
</style>
</head>
<?

require '../../conect/conect.php';


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome_operador = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];
}

$nfantasia_cliente = $_POST['nfantasia'];
$cnpj_cliente = $_POST['cnpj'];


$status_orcamento = $_POST['status_orcamento'];
$num_orcamento_add = $_POST['num_orcamento_add'];
$num_fatura_add = $_POST['num_fatura_add'];



$num_orcamento_ret = $_POST['num_orcamento_ret'];
$num_fatura_ret = $_POST['num_fatura_ret'];

$dataabertura = date('d-m-Y');
$horaabertura = date('H:i:s');
$diaabertura = date('d');
$mesabertura = date('m');
$anoabertura = date('Y');


$datafechameno = date('d-m-Y');
$horafechamento = date('H:i:s');
$diafechamento = date('d');
$mesfechamento = date('m');
$anofechamento = date('Y');

$dia_inicial = $_POST['dia_inicial'];
$mes_inicial = $_POST['mes_inicial'];
$ano_inicial = $_POST['ano_inicial'];

$dia_final = $_POST['dia_final'];
$mes_final = $_POST['mes_final'];
$ano_final = $_POST['ano_final'];


$sql = "SELECT * FROM faturamento where cnpj = '$cnpj_cliente' and status = 'Aberto'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}



if($registros==0){

$sql = "select * from clientes where cnpj = '$cnpj_cliente' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo_cliente = $linha[0];
$razaosocial_cliente = $linha[1];
$cnpj_cliente = $linha[2];
$nfantasia_cliente = $linha[3];
$inscr_est_cliente = $linha[4];
$endereco_cliente = $linha[5];
$numero_cliente = $linha[6];
$bairro_cliente = $linha[7];
$cidade_cliente = $linha[8];
$estado_cliente = $linha[9];
$cep_cliente = $linha[10];
$email_cliente = $linha[11];
$comprador_cliente = $linha[12];
$fone_cliente = $linha[13];
$celular_cliente = $linha[15];


}


$comando = "insert into faturamento(status,razaosocial,cnpj,nfantasia,inscr_est,endereco,numero,bairro,cidade,estado,cep,email_cliente,fone,operador,dataabertura,horaabertura,diaabertura,mesabertura,anoabertura,codigo_cliente)

values('Aberto','$razaosocial_cliente','$cnpj_cliente','$nfantasia_cliente','$inscr_est_cliente','$endereco_cliente','$numero_cliente','$bairro_cliente','$cidade_cliente','$estado_cliente','$cep_cliente','$email_cliente','$fone_cliente','$nome_operador','$dataabertura','$horaabertura','$diaabertura','$mesabertura','$anoabertura','$codigo_cliente')";
 
mysql_query($comando,$conexao);
 
 
$sql = "SELECT * FROM faturamento where cnpj = '$cnpj_cliente' and status = 'Aberto' order by num_fatura desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_fatura_zero = $linha[0];
$nfantasia_cliente = $linha[3];
$status = $linha[1];
$codigo_cliente = $linha[52];

}

}
else{

$sql = "SELECT * FROM faturamento where cnpj = '$cnpj_cliente' and status = 'Aberto' order by num_fatura desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_fatura_um = $linha[0];
$nfantasia_cliente = $linha[3];
$status = $linha[1];
$codigo_cliente = $linha[52];

}



}


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`orcamentos` set `codigo_orcamento` = '$num_orcamento_add',`num_fatura` = '$num_fatura_add',`cnpj` = '$cnpj_cliente' where `orcamentos`. `codigo_orcamento` = '$num_orcamento_add' limit 1 ";
}

mysql_query($comando,$conexao);


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`orcamentos` set `codigo_orcamento` = '$num_orcamento_ret',`num_fatura` = '',`cnpj` = '$cnpj_cliente' where `orcamentos`. `codigo_orcamento` = '$num_orcamento_ret' limit 1 ";
}

mysql_query($comando,$conexao);






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
<table width="100%" bgcolor="#ffffff"  border="0">
  <tr valign="top">
    <td width="36%" height="23">
      <?
$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'>"); 

}
?>
    </td>
    <td width="37%" valign="middle"><div align="center"> </div></td>
    <td width="27%" height="23">&nbsp;</td>
  </tr>
</table>
<p>
        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>
</p>
      <form name="form1" method="post" action="selecione_cliente_para_abrir_faturamento.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
<table width="100%"  border="0">
        <tr>
          <td colspan="9"><div align="left"><span class="style2 style8"> Listando t&iacute;tulos a serem faturados do cliente:</span> <span class="style2"><? echo $nfantasia_cliente; ?>
          </span></div></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td width="8%">&nbsp;</td>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="9">
            <form action="fechamento_fatura.php" method="post" name="form4" target="_blank">
              <div align="center"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <span class="style3">
              <input name="num_fatura_fechar" type="hidden" id="num_fatura_fechar" value="<?
if($registros==0){
echo $num_fatura_zero;
}			
else{
echo $num_fatura_um;
}
?>">
              <strong><font color="#0000FF">
              <input name="nfantasia_cliente" type="hidden" id="estab_pertence4" value="<? echo $nfantasia_cliente; ?>">
              <strong><font color="#0000FF">
              <strong><font color="#0000FF">
              <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj_cliente; ?>">
              </font></strong></font></strong></font></strong>              </span><span class="style8">              
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
              Quantidade de parcelas</span>                
              <strong>
              <select name="quant_parc" id="condpagto">
                
                <?


    $sql = "select * from quantparc order by quantparc asc limit 6";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['quantparc']."</option>";
    }
?>
                            </select>
              </strong>
              Intervalo entre as parcelas
              <strong>
              <select name="intervalo" id="quantparc">
                
                <?


    $sql = "select * from intervalos order by intervalo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['intervalo']."</option>";
    }
?>
              </select>
              </strong>
               1&ordm; Vencto Dia
               <select name="dia" id="dia">
                 <option>01</option>
                 <option>02</option>
                 <option>03</option>
                 <option>04</option>
                 <option>05</option>
                 <option>06</option>
                 <option>07</option>
                 <option>08</option>
                 <option>09</option>
                 <option>10</option>
                 <option>11</option>
                 <option>12</option>
                 <option>13</option>
                 <option>14</option>
                 <option>15</option>
                 <option>16</option>
                 <option>17</option>
                 <option>18</option>
                 <option>19</option>
                 <option>20</option>
                 <option>21</option>
                 <option>22</option>
                 <option>23</option>
                 <option>24</option>
                 <option>25</option>
                 <option>26</option>
                 <option>27</option>
                 <option>28</option>
                 <option>29</option>
                 <option>30</option>
                 <option>31</option>
               </select>
               M&ecirc;s
               <select name="mes" id="mes">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
</select>
 ano
 <select name="ano" id="ano">
  <option selected>
  <?

$ano_atual = date('Y');
$proximo_ano = bcadd($ano_atual,1);
echo "$ano_atual";

	  ?>
  </option>
  <option><? echo "$proximo_ano"; ?></option>
</select>
               <input type="submit" name="Submit32" value="Fechar Fatura">
              <input name="datafechamento" type="hidden" id="datafechamento" value="<? echo date('d-m-Y'); ?>">
              <input name="horafechamento" type="hidden" id="horafechamento" value="<? echo date('H:i:s'); ?>">
              <input name="diafechamento" type="hidden" id="diafechamento" value="<? echo date('d'); ?>">
              <input name="mesfechamento" type="hidden" id="mesfechamento" value="<? echo date('m'); ?>">
              <input name="anofechamento" type="hidden" id="anofechamento" value="<? echo date('Y'); ?>">
              <input name="recebimento" type="hidden" id="recebimento" value="<? echo "A Caminho"; ?>">
              <input name="datacadastro" type="hidden" id="datacadastro" value="<? echo date('d-m-Y'); ?>">
              <input name="horacadastro" type="hidden" id="horacadastro" value="<? echo date('H:i:s'); ?>">
              </div> 
            </form>          </td>
        </tr>
        <tr>
          <td colspan="9"><span class="style6">
          <?
if($registros==0){
echo "A Fatura para seu cliente $nfantasia CNPJ: $cnpj_cliente foi aberta com sucesso! Nº ". $num_fatura_zero;
}			
else{
echo "Seu cliente $nfantasia CNPJ: $cnpj_cliente já possui uma Fatura aberto! Nº ". $num_fatura_um;
}
?>
          </span>            <div align="center"></div>          <div align="center">
          </div></td>
        </tr>
        <tr>
          <td><strong>Total do Agrupamento:</strong></td>
          <td colspan="6"><strong><strong><strong>
            <?


$sql = "select sum(total_geral) as total_orcamentos from orcamentos where num_fatura = '$num_fatura_add' and cnpj = '$cnpj_cliente' and status_fatura = 'A FATURAR'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_orcamentos'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
echo "R$ 0.00";
}
else{
if (empty($num_fatura_add)) {
echo "R$ 0.00";
}
else{
echo "R$ ".$valor_total_formatado;
}
}

?>
                <?
	  
function extenso($valor_total = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milh&atilde;o", "bilh&atilde;o", "trilh&atilde;o", "quatrilh&atilde;o");
$plural = array("centavos", "reais", "mil", "milh&otilde;es", "bilh&otilde;es", "trilh&otilde;es",
"quatrilh&otilde;es");

$c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
"quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
$d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
"sessenta", "setenta", "oitenta", "noventa");
$d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
"dezesseis", "dezesete", "dezoito", "dezenove");
$u = array("", "um", "dois", "tr&ecirc;s", "quatro", "cinco", "seis",
"sete", "oito", "nove");

$z = 0;
$rt = "";

$valor_total = number_format($valor_total, 2, ".", ".");
$inteiro = explode(".", $valor_total);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_total = $inteiro[$i];
$rc = (($valor_total > 100) && ($valor_total < 200)) ? "cento" : $c[$valor_total[0]];
$rd = ($valor_total[1] < 2) ? "" : $d[$valor_total[1]];
$ru = ($valor_total > 0) ? (($valor_total[1] == 1) ? $d10[$valor_total[2]] : $u[$valor_total[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_total > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_total == "000")$z++; elseif ($z > 0) $z--;
if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
}

if(!$maiusculas){
return($rt ? $rt : "zero");
} else {

if ($rt) $rt=ereg_replace(" E "," e ",ucwords($rt));
return (($rt) ? ($rt) : "Zero");
}

}

$valor_total = $valor_total;
$dim = extenso($valor_total);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_total = number_format($valor_total, 2, ",", ".");


echo "$dim";


?>
</strong></strong></strong></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="13%">              <?
$sql = "SELECT * FROM orcamentos where nfantasia = '$nfantasia_cliente' and status = 'Efetivado' and num_fatura = '' order by num_fatura asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}
?></td>
          <td colspan="6">
            <form name="form4" method="post" action="faturamento.php">
              <div align="center"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <select name="num_orcamento_ret" id="select4">
                
                <?

    $sql = "select * from orcamentos where nfantasia = '$nfantasia_cliente' and num_fatura = '$num_fatura_um' order by codigo_orcamento asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
	$registros_nesse_bordero = mysql_num_rows($result);

  echo "<option>".$x['codigo_orcamento']."</option>";
    }
?>
              </select>
              <span class="style3">
              <input name="num_fatura_ret" type="hidden" id="num_fatura_ret" value="<?
echo $num_fatura_um;
?>">
              <strong><font color="#0000FF">
              <input name="nfantasia_cliente" type="hidden" id="estab_pertence7" value="<? echo $nfantasia_cliente; ?>">
              <strong><font color="#0000FF">
              <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj_cliente; ?>">
              <input name="nome_operador" type="hidden" id="nome_operador6" value="<? echo $nome_operador; ?>">
              </font></strong> </font></strong> </span> <span class="style3"><strong><font color="#0000FF">
              <input name="status_orcamento" type="hidden" id="status_proposta5" value="<? echo "Efetivado"; ?>">
              <input name="num_fatura_add" type="hidden" id="num_fatura_add" value="<?
if($registros==0){
echo $num_fatura_zero;
}			
else{
echo $num_fatura_um;
}
?>">
              </font></strong></span>
              <input type="submit" name="Submit3" value="Retirar">
  </div>
            </form>          </td>
          <td width="25%"><form action="visualizacao_fatura.php" method="post" name="form5" target="_blank">
            <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
            <select name="num_fatura" id="select2">
              
                <?

    $sql = "select * from faturamento where cnpj = '$cnpj_cliente' order by num_fatura desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
	$registros_nesse_bordero = mysql_num_rows($result);

  echo "<option>".$x['num_fatura']."</option>";
    }
?>
            </select>
            <span class="style3"><strong><font color="#0000FF">
            <input name="nfantasia_cliente" type="hidden" id="nfantasia_cliente" value="<? echo $nfantasia_cliente; ?>">
            <strong><font color="#0000FF">
            <input name="cnpj_cliente" type="hidden" id="cnpj_cliente" value="<? echo $cnpj_cliente; ?>">
            </font></strong> </font></strong></span>
            <input type="submit" name="Submit4" value="Visualisar Fatura">
          </form></td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
<div align="center"><strong>T&iacute;tulos em aberto  que ainda n&atilde;o foram faturados! Registros encontrados <? echo $registros;?></strong></div>
            <table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
            <table width="100%"  border="0">
              <tr bgcolor="#<? echo $cor ?>">
                <td><div align="center" class="style11"><span class="style3">N&ordm; Or&ccedil;amento</span></div></td>
                <td><div align="center" class="style12">Cliente </div></td>
                <td><div align="center" class="style12">Valor</div></td>
                <td><div align="center" class="style11"><span class="style3">Data Gera&ccedil;&atilde;o</span></div></td>
                <td><div align="center" class="style11"><span class="style3">Status</span></div></td>
                <td><div align="center"><span class="style9"><span class="style11"></span></span></div></td>
              </tr>
              <?
$sql = "SELECT * FROM orcamentos where nfantasia = '$nfantasia_cliente' and status = 'Efetivado' and condicao = 'PEDIDO' and num_fatura = '' order by num_fatura asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_orcamento = $linha[0];
$nfantasia_cliente = $linha[3];
$total_geral = $linha[123];
$dataorcamento = $linha[14];
$status = $linha[174];
$num_fatura_relacionada = $linha[181];

?>
              <tr>
                <td width="11%"><div align="center" class="style3">
                    <form name="form2" method="post" action="faturamento.php">
                      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                      <? echo $codigo_orcamento; ?>
                      <input name="num_orcamento_add" type="hidden" id="num_proposta5" value="<? echo $codigo_orcamento; ?>">                      
                      <input name="num_fatura_add" type="hidden" id="num_fatura_add" value="<?
if($registros==0){
echo $num_fatura_zero;
}			
else{
echo $num_fatura_um;
}
?>">
                      <strong><font color="#0000FF">
                      <input name="nfantasia_cliente" type="hidden" id="estab_pertence3" value="<? echo $nfantasia_cliente; ?>">
                      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj_cliente; ?>">
                      <input name="nome_operador" type="hidden" id="nome_operador5" value="<? echo $nome_operador; ?>">
                      <input name="status_orcamento" type="hidden" id="status_proposta4" value="<? echo "Efetivado"; ?>">
                      </font></strong>
                      <input type="submit" name="Submit" value="Adicionar">
                    </form>
                </div></td>
                <td width="17%"><div align="center" class="style3"><? echo $nfantasia_cliente;?></div></td>
                <td width="8%"><div align="center" class="style3"><? echo "R$ ".$total_geral;?> </div></td>
                <td width="10%"><div align="center"><span class="style3"><? echo $dataorcamento; ?></span></div></td>
                <td width="8%"><div align="center"><span class="style3"><? echo $status; ?></span></div></td>
                <td width="6%"><div align="center"></div></td>
                <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
                <? } ?>
              <tr>
                <td><span class="style3"></span></td>
                <td><span class="style3"></span></td>
                <td><span class="style3"></span></td>
                <td><div align="center"></div></td>
                <td><div align="center"></div></td>
                <td><div align="center"></div></td>
            </table>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>





</body>
</html>
