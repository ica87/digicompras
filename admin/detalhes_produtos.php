<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Nova pagina 1</title>
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style3 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style5 {
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
.style8 {color: #000000}
.style9 {font-weight: bold; color: #0000FF;}
.style10 {font-weight: bold; color: #FF0000;}
.style11 {color: #FF0000}
-->
</style>
</head>
<?

require 'conect/conect.php';
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
</p>
<p align="left">
  <?
  $vg = $_GET['chamar'];


$codigo = $vg;


	  
$sql = "select * from produtos where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
</p>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
    <td width="11%">&nbsp;</td>
    <td colspan="4" rowspan="5">
      <iframe name="I1" width="430" height="310" src="branco.htm" border="0" frameborder="0" scrolling="no">
    Seu navegador n�o oferece suporte para quadros entre linhas ou est� configurado no momento para n�o exibi-los.
    </iframe></td>
    <td><span class="style1"></span></td>
    <td>C&oacute;digo <span class="style1"><? echo $codigo; ?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="11%"><div align="center"><a href="navegacao.php">Voltar</a></div></td>
    <td width="2%"><span class="style1"></span></td>
    <td width="29%">Ve&iacute;culo<br><span class="style1"><? echo $linha[7]; ?></span></td>
    <td width="15%">Ano / Modelo<br><span class="style1"><? echo $linha[5]; ?> / <? echo $linha[6]; ?></span></td>
  </tr>
  <tr>
    <td width="11%">&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style1"><span class="style8">Opcionais</span></span><br>
          <span class="style1"><? echo $linha[10]; ?></span>
    </td>
    <td><span class="style8">Marca</span><br><span class="style1"><? echo $linha[4]; ?></span> </td>
  </tr>
  <tr>
    <td width="11%">&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style11"><span class="style1"><span class="style8">Informa&ccedil;&otilde;es Adicionais</span></span></span><span class="style10"><span class="style1"><br>
          <? echo $linha[11]; ?></span>
    </span></td>
    <td>Combust&iacute;vel<br>
    <span class="style1"><? echo $linha[8]; ?></span></td>
  </tr>
  <tr>
    <td width="11%">&nbsp;</td>
    <td><span class="style1"></span></td>
    <td>Cor<br><span class="style1"> <? echo $linha[9]; ?></span></td>
    <td>Status<br><span class="style1"> <? echo $linha[1]; ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">Pre�o<br><span class="style3"><? printf("R$ $linha[12]"); ?></span></td>
  </tr>
  <tr>
    <td width="11%">&nbsp;</td>
    <td width="10%"><div align="center"><? printf("<a href='fotos.php?chamar=$linha[0]&imagem=imagens/$linha[15]' target='I1'><img src='imagens/$linha[15]' border='0' width='67' height='56'></a>") ?>
      </div>
    <div align="center"></div></td>
    <td width="10%"><div align="center"><? printf("<a href='fotos.php?chamar=$linha[0]&imagem=imagens2/$linha[16]' target='I1'><img src='imagens2/$linha[16]' border='0' width='67' height='56'></a>") ?>
      </div>
    <div align="center"></div></td>
    <td width="11%"><div align="center"><? printf("<a href='fotos.php?chamar=$linha[0]&imagem=imagens3/$linha[17]' target='I1'><img src='imagens3/$linha[17]' border='0' width='67' height='56'></a>") ?>
      </div>
    <div align="center"></div></td>
    <td width="12%"><div align="center"><? printf("<a href='fotos.php?chamar=$linha[0]&imagem=imagens4/$linha[18]' target='I1'><img src='imagens4/$linha[18]' border='0' width='67' height='56'></a>") ?>
      </div>
    <div align="center"></div></td>
    <td><span class="style1"></span></td>
    <td colspan="2"><span class="style5">
      <? if($linha[13]=="Sim"){
printf("Pre�o de Oferta<br> R$ $linha[14]");
$linha[13]="N�o";
}
?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
	  	<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>
</body>

</html>
