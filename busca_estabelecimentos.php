<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0043)http://china-plastic-injection-molding.com/ -->
<HTML><HEAD><TITLE>Busca de produtos</TITLE>

<META 
content=" " 
name=description>
<META 
content=" " 
name=keywords>
<META 
content="" 
name=abstract>
<META content=index,follow name=ROBOTS>
<META content="Microsoft FrontPage 5.0" name=GENERATOR>
<META content=FrontPage.Editor.Document name=ProgId>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META http-equiv=EXPIRES content="Mon, 25 Dec 2009 00:00:01 PST">
<META content=General name=RATING>
<META content="24 days" name=REVISIT-AFTER><LINK 
type=text/css rel=stylesheet>


<style type="text/css">
<!--
body {
}
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 18px;
}
.style3 {font-size: 16px}
.style4 {font-size: 24px}
-->
</style>
<style type="text/css">
#slides{width:300px;overflow:hidden;margin:0px auto;border:0px solid #2bf;}
img{width:300px;}
#slides ul{margin:0px;color:#ff0;}
</style>

</HEAD>

			<?
			
require 'conect/conect.php';
			
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
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

        <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	
?>
<? } ?>


            <?


$categoria = $_POST['categoria'];

$sql = "SELECT * FROM estabelecimentos where categoria = '$categoria' and status = 'Ativo' order by nfantasia asc";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$complemento = $linha[8];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];
$telefone = $linha[12];
$fax = $linha[13];
$email = $linha[14];
$site = $linha[15];
$proprietario = $linha[16];
$cpf = $linha[17];
$rg = $linha[18];
$operador = $linha[24];
$cel_operador = $linha[25];
$email_operador = $linha[26];
$estabelecimento = $linha[27];
$cidade_estabelecimento = $linha[28];
$tel_estabelecimento = $linha[29];
$email_estabelecimento = $linha[30];
$obs = $linha[19];
$datacadastro = $linha[20];
$horacadastro = $linha[21];
$dataalteracao = $linha[22];
$horaalteracao = $linha[23];
$operador_alterou = $linha[31];
$cel_operador_alterou = $linha[32];
$email_operador_alterou = $linha[33];
$estabelecimento_alterou = $linha[34];
$cidade_estabelecimento_alterou = $linha[35];
$tel_estabelecimento_alterou = $linha[36];
$email_estabelecimento_alterou = $linha[37];
$operador_atendente = $linha[41];
$banco = $linha[42];
$agencia = $linha[43];
$conta = $linha[44];
$categoria = $linha[45];
$foto = $linha[46];

$plano = $linha[51];

$foto2 = $linha[53];
$foto3 = $linha[54];
$foto4 = $linha[55];
$atividade = $linha[56];

?>
<table width="100%"  border="0">
  <tr width="100%" bgcolor="#<? echo $cor; ?>">
    <td colspan="2"><div align="center"><span class="style2"><? echo $nfantasia; ?></span> - <span class="style2"><? echo $atividade; ?></span></div></td>
  </tr>
  <tr bgcolor='#ffffff'>
    <td width="25%" align="left" valign="middle">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.cycle.all.min.js"></script>
<script type="text/javascript">
$(function() {
$("#slides ul").cycle({
fx: 'zoom',
speed: 1000,
timeout: 5000,
prev : '#prev',
next : '#next'
})
})
</script>
 
 <div id="slides">
<ul>
<li>
<? if($foto<>""){ 
if($plano=="Master"){
printf("<a href='http://$site' target='_blank'><img src='admgeral/estabelecimentos/$cnpj/$foto' alt='imagem 01' title='imagem 01'></a>");
}
else{
	printf("<img src='admgeral/estabelecimentos/$cnpj/$foto' alt='imagem 01' title='imagem 01'>"); } } ?>
    </li>
<li>
<? if($foto2<>""){ 
if($plano=="Master"){
printf("<a href='http://$site' target='_blank'><img src='admgeral/estabelecimentos/$cnpj/$foto2' alt='imagem 02' title='imagem 02'></a>");
}
else{
	printf("<img src='admgeral/estabelecimentos/$cnpj/$foto2' alt='imagem 02' title='imagem 02'>"); } } ?>
    </li>
<li>
<? if($foto3<>""){ 
if($plano=="Master"){
printf("<a href='http://$site' target='_blank'><img src='admgeral/estabelecimentos/$cnpj/$foto3' alt='imagem 03' title='imagem 03'></a>");
}
else{
	printf("<img src='admgeral/estabelecimentos/$cnpj/$foto3' alt='imagem 03' title='imagem 03'>"); } } ?>
    </li>
<li>
<? if($foto4<>""){ 
if($plano=="Master"){
printf("<a href='http://$site' target='_blank'><img src='admgeral/estabelecimentos/$cnpj/$foto4' alt='imagem 04' title='imagem 04'></a>");
}
else{
	printf("<img src='admgeral/estabelecimentos/$cnpj/$foto4' alt='imagem 04' title='imagem 04'>"); } } ?>
    </li>



</ul>
</div>
  
    
    
    
    
    </td>
    <td width="75%"><div align="center" class="style4"><strong><span class="style4"><strong><? echo $telefone; ?><br>
    </strong><? echo $endereco; ?> N&ordm; <? echo $numero; ?></span></strong></div>      <div align="center" class="style4"><strong><? echo $bairro; ?></strong></div>      <div align="center" class="style4"><strong><? echo $cidade; ?> - <? echo $estado; ?><br><span class="style3"><strong><? echo $email; ?></strong></span><br></strong></div>      <div align="center" class="style3"></div>    <div align="center" class="style3"></div>    <div align="center"><span class="style3"></span></div>    <div align="center" class="style3"></div>    <div align="center"></div></td>
  </tr>
</table>
<p align="center">
  <? } ?><br>
</p>
<div align="center"><?
if($reg=="0"){
echo "Desculpe-nos! <br> Nenhum resultado encontrado nessa categoria! <br>Entre em contato conosco informando o que procura que tentaremos encontrar para você!";
}
?> 

</div>
</BODY></HTML>
<? 
mysql_close($conexao);
?>