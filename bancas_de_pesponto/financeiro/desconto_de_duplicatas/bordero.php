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
<title>Border&ocirc; de antecipa&ccedil;&atilde;o de receb&iacute;veis</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {font-size: 10px}
.style6 {font-size: 18px; font-weight: bold; }
.style9 {color: #999999}
.style10 {font-size: 10px; color: #999999; }
-->
</style>
</head>
<?

require '../../../conect/conect.php';


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


$codigo_add = $_POST['codigo_add'];
$num_bordero_add = $_POST['num_bordero_add'];
$mensalidade_add = $_POST['mensalidade_add'];



$codigo_ret = $_POST['codigo_ret'];
$num_bordero_ret = $_POST['num_bordero_ret'];

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


$sql = "SELECT * FROM bordero where status = 'Aberto'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}



if($registros==0){



$comando = "insert into bordero(status,operador,dataabertura,horaabertura,diaabertura,mesabertura,anoabertura)

values('Aberto','$nome_operador','$dataabertura','$horaabertura','$diaabertura','$mesabertura','$anoabertura')";
 
mysql_query($comando,$conexao);
 
 
$sql = "SELECT * FROM bordero where status = 'Aberto' order by num_bordero desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_bordero = $linha[0];
$status = $linha[1];

}

}
else{

$sql = "SELECT * FROM bordero where status = 'Aberto' order by num_bordero desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_bordero = $linha[0];
$status = $linha[1];

}



}

//-------QUITANDO O TITULO----------------

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$codigo_add',`num_bordero` = '$num_bordero_add',`quitacao` = 'Pago',`modo_pagto` = 'Título Descontado' where `contas_a_receber`. `codigo` = '$codigo_add' limit 1 ";
}

mysql_query($comando,$conexao);


//-------ENTRADA NO CAIXA DEVIDO A QUITAÇÃO DO TITULO---------------------------------

$dataalteracao = date('d-m-Y');
$horaalteracao = date('H:i:s');
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

if($codigo_add<>""){

$sql = "SELECT * FROM contas_a_receber where codigo = '$codigo_add' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo_cliente = $linha[1];
$nfantasia_cliente = $linha[4];
$razaosocial = $linha[5];
$inscr_est = $linha[7];
$endereco = $linha[8];
$numero = $linha[9];
$bairro = $linha[10];
//$mensalidade = $linha[11];
$vencto = $linha[12];
$quant_parc = $linha[13];
$modo_pagto = $linha[14];
$juros_diarios = $linha[15];
//$valor_recebido = $linha[16];
$quitacao = $linha[17];
$operador = $linha[18];
$historico = $linha[34];
$num_mensalidade = $linha[35];
$num_fatura = $linha[42];
$num_boleto = $linha[44];
$num_agrupamento = $linha[45];
$juros_ativos = $linha[46];
$descontos_concedidos = $linha[47];


}



$comando = "insert into cx_entradas(num_contas_a_receber,codigo_cliente,datacadastro,horacadastro,dia,mes,ano,razaosocial,nfantasia_cliente,cnpj,mensalidade,vencto,juros_ativos,descontos_concedidos,valor_recebido,historico,num_fatura,num_agrupamento,inscr_est,num_boleto,modo_pagto,num_mensalidade,quant_parc,quitacao,operador_alterou,cel_operador_alterou,email_operador_alterou,estabelecimento_alterou,cidade_estabelecimento_alterou,tel_estabelecimento_alterou,email_estabelecimento_alterou)
 values('$codigo_add','$codigo_cliente','$dataalteracao','$horaalteracao','$dia','$mes','$ano','$razaosocial','$nfantasia_cliente','$cnpj_cliente','$mensalidade_add','$vencto','$juros_ativos','$descontos_concedidos','$mensalidade_add','Antecipação de Recebíveis','$num_fatura','$num_agrupamento','$inscr_est','$num_boleto','$modo_pagto','$num_mensalidade','$quant_parc','$quitacao','$nome_operador','$cel_operador_alterou','$email_operador_alterou','$estab_pertence','$cidade_estabelecimento_alterou','$tel_estabelecimento_alterou','$email_estabelecimento_alterou')";

mysql_query($comando,$conexao);

}
//---------------------FIM DA ENTRADA NO CAIXA--------------------------------------------------------







//--------------ESTORNO DA QUITAÇÃO DO TITULO------------------------------------------------

$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`contas_a_receber` set `codigo` = '$codigo_ret',`num_bordero` = '',`quitacao` = 'Em Aberto',`modo_pagto` = '' where `contas_a_receber`. `codigo` = '$codigo_ret' limit 1 ";
}

mysql_query($comando,$conexao);


//---------------------------------------------------------



//-----------DELETANDO ENTRADA DE CAIXA DEVIDO AO ESTORNO DE QUITAÇÃO DE TITULO-------------------------------------------



$comando = "delete from `cx_entradas` where `cx_entradas`. `num_contas_a_receber` = '$codigo_ret' and historico <> 'Abertura de Caixa' limit 1 ";

mysql_query($comando,$conexao);


//-----------------------------------------------------------------------------------



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
      <form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit2" value="Voltar">
</form>
<table width="100%"  border="0">
        
        <tr>
          <td colspan="4"><div align="center" class="style6">Antecipa&ccedil;&atilde;o de Receb&iacute;veis</div></td>
        </tr>
        <tr>
          <td colspan="4">
            <form action="fechamento_bordero.php" method="post" name="form4">
              <div align="center"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <span class="style3">
              <input name="num_bordero_fechar" type="hidden" id="num_bordero_fechar" value="<? echo $num_bordero; ?>">
              </span>
              <input type="text" name="valor_saida" id="valor_saida">
              <input type="submit" name="Submit32" value="Fechar Border&ocirc;">
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
          <td colspan="4"><span class="style6">
          <?
if($registros==0){
echo "O borderô para registro de títulos descontados foi aberto com sucesso! Nº ". $num_bordero;
}			
else{
echo "Seu borderô para registro de títulos descontados já está aberto! Nº ". $num_bordero;
}
?>
          </span>            <div align="center"></div>          <div align="center">
          </div></td>
        </tr>
        <tr>
          <td><strong>Total de T&iacute;tulos antecipados:</strong></td>
          <td colspan="2"><strong><strong><strong>
            <?


$sql = "select sum(mensalidade) as total_descontos from contas_a_receber where num_bordero = '$num_bordero'";

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$valor_total = $linha['total_descontos'];
$valor_total_formatado = number_format($valor_total, 2, ",", ".");


if($valor_total_formatado==0){
echo "R$ 0.00";
}
else{
if (empty($num_bordero_add)) {
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
        </tr>
        <tr>
          <td width="20%">              <?
$sql = "SELECT * FROM contas_a_receber where num_fatura <> '' and num_bordero = '' and quitacao = 'Em Aberto' order by num_fatura asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

}
?></td>
          <td>
            <form name="form4" method="post" action="bordero.php">
              <div align="center"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              <select name="codigo_ret" id="select4">
                
                <?

    $sql = "select * from contas_a_receber where num_fatura <> '' and num_bordero = '$num_bordero' order by codigo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
	$registros_nesse_bordero = mysql_num_rows($result);

  echo "<option>".$x['codigo']."</option>";
    }
?>
              </select>
              <span class="style3">
              <input name="num_bordero_ret" type="hidden" id="num_bordero_ret" value="<? echo $num_bordero; ?>">
              <strong><font color="#0000FF">
              <input name="nfantasia_cliente" type="hidden" id="estab_pertence7" value="<? echo $nfantasia_cliente; ?>">
              <strong><font color="#0000FF">
              <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj_cliente; ?>">
              <input name="nome_operador" type="hidden" id="nome_operador6" value="<? echo $nome_operador; ?>">
              </font></strong> </font></strong> </span> <span class="style3"><strong><font color="#0000FF">
              <input name="num_bordero_add" type="hidden" id="num_fatura_add" value="<? echo $num_bordero; ?>">
              </font></strong></span>
              <input type="submit" name="Submit3" value="Estornar">
  </div>
            </form>          </td>
          <td width="25%" colspan="-4">&nbsp;</td>
          <td width="25%">&nbsp;</td>
        </tr>
      </table>
<div align="center"><strong>T&iacute;tulos liberados para desconto junto a institui&ccedil;&atilde;o financeira! Registros encontrados <? echo $registros;?></strong></div>
<table width="100%"  border="0">
              <tr>
                <td>
</td>
              </tr>
</table>            
            <table width="100%"  border="0">
              <tr bgcolor="#<? echo $cor ?>">
                <td><div align="center" class="style9"><span class="style3">N&ordm; T&iacute;tulo</span></div></td>
                <td><div align="center" class="style10">Cliente </div></td>
                <td><div align="center" class="style10">Valor</div></td>
                <td><div align="center" class="style9"><span class="style3">Data Vencimento</span></div></td>
                <td><div align="center" class="style9"><span class="style3">Situa&ccedil;&atilde;o</span></div></td>
                <td><div align="center" class="style10">N&ordm; Fatura</div></td>
                <td><div align="center" class="style10">N&ordm; Parcela</div></td>
              </tr>
              <?
$sql = "SELECT * FROM contas_a_receber where num_fatura <> '' and num_bordero = '' and quitacao = 'Em Aberto' order by codigo asc";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nfantasia_cliente = $linha[4];
$mensalidade = $linha[11];
$vencto = $linha[12];
$quant_parc = $linha[13];
$quitacao = $linha[17];
$num_mensalidade = $linha[35];
$num_fatura = $linha[42];

?>
              <tr>
                <td width="18%"><div align="center" class="style3">
                    <form name="form2" method="post" action="bordero.php">
                      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                      <? echo $codigo; ?>
                      <input name="codigo_add" type="hidden" id="num_proposta5" value="<? echo $codigo; ?>">                      
                      <input name="mensalidade_add" type="hidden" id="mensalidade_add" value="<? echo $mensalidade; ?>">
                      <input name="num_bordero_add" type="hidden" id="num_bordero_add" value="<? echo $num_bordero; ?>">
                      <strong><font color="#0000FF">
                      <input name="nfantasia_cliente" type="hidden" id="estab_pertence3" value="<? echo $nfantasia_cliente; ?>">
                      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj_cliente; ?>">
                      <input name="nome_operador" type="hidden" id="nome_operador5" value="<? echo $nome_operador; ?>">
                      </font></strong>
                      <input type="submit" name="Submit" value="Antecipar">
                    </form>
                </div></td>
                <td width="24%"><div align="center" class="style3"><? echo $nfantasia_cliente;?></div></td>
                <td width="10%"><div align="center" class="style3"><? echo "R$ ".$mensalidade;?> </div></td>
                <td width="14%"><div align="center"><span class="style3"><? echo $vencto; ?></span></div></td>
                <td width="21%"><div align="center"><span class="style3"><? echo $quitacao; ?></span></div></td>
                <td width="13%"><div align="center"><span class="style3"><? echo $num_fatura; ?></span></div></td>
                <td width="13%"><div align="center"><span class="style3"><? echo "$num_mensalidade"." de"; ?></span> <span class="style3"><? echo $quant_parc; ?></span></div></td>
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
                <td><div align="center"></div></td>
            </table>
<p><strong></strong></p>
<p><strong></strong></p>
<p><strong></strong></p>





</body>
</html>
