<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
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
	font-size: 12px;
	font-weight: bold;
}
.style3 {
	font-weight: bold;
	font-size: 18px;
}
-->
</style>

<script language="JavaScript">
<!--
   function finaliza() {
      if(confirm('Essa empresa / comércio é importante e fica mais comodo pra você comprar?'))
	     return true;
	  else return false;
   }//FECHA FUNCTION
//-->
</script>


</head>

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

background="background/<? printf("$linha[1] "); ?>" bgproperties="fixed">
  
<? } ?>



      <?



$sql = "SELECT * FROM pag_inicial";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
echo "<tr>";
$reg++;
?><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->

<!--
.style5 {font-weight: bold}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style6 {color: #FFFFFF}
-->
      </style>

<td><div align="center"><u>    </u><span class="style2"> </span></div></td>
<div align="center">
  <table width="100%" border="0">
    <tr>
      <td width="27%" valign="top"><div align="center"><a href="http://www.eesc.usp.br/babel/Ruskin_biografia.htm"><img src="imagens/jonh_ruskin.jpg" width="244" height="207"></a><br><a href="http://www.eesc.usp.br/babel/Ruskin_biografia.htm">Conhe&ccedil;a mais sobre Jonh Ruskin</a></div></td>
      <td width="49%"><div align="center" class="style3"><span class="estilo1 style5 "><? printf("$linha[1]<br>"); ?></span></div></td>
      <td width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>
  <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
  <? } ?>
  <p>
 
<table width="100%"  border="0">
  <tr>
    <td width="87%"><div align="center">
      <?
$sql = "select * from publicidade";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

printf("<a href='auto_cadastro/inserir_estabelecimento.php' ><img src='publicidade/$linha[1]' border='0' width='1000' height='150'></a>");
}
?></div></td>
    <td width="13%"><div align="center"></div></td>
  </tr>
</table>
<?php
if($_POST[opc_enviar]) {
   
	//RECEBE OS DADOS DO FORMULÁRIO
$nome      =   $_POST['nome'];
$email      =   $_POST['email'];
$empresa_trab      =   $_POST['empresa_trab'];
$comercio      =   $_POST['comercio'];
$endereco      =   $_POST['endereco'];
$telefone      =   $_POST['telefone'];
$mensagem      =   $_POST['mensagem'];

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   "digicompras@digicompras.com.br";
	
	//PREPARA O PEDIDO
	$mens  .=  " Muito obrigado! A sua sugestão foi enviada com sucesso. A Digicompras agradece o seu contato    \n";
	$mens  .=  " Em breve lhe retornaremos sobre o assunto! \n\n";
	
	$mens  .=  "Nome: ".$nome."                                                       \n";
	$mens  .=  "E-Mail: ".$email."                                                       \n";
	$mens  .=  "Empresa onde trabalha: ".$empresa_trab."                                                    \n";
	$mens  .=  "Comércio / empresa que sugere: ".$comercio."                                                    \n";
	$mens  .=  "Endereço do comérico / empresa: ".$endereco."                                                    \n";
	$mens  .=  "Telefone: ".$telefone."                                                    \n";
	$mens  .=  "Mensagem: ".$mensagem."                                                    \n";


	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Indicação de comercio para convênio", $mens,"From:".$email_dest."\r\nBcc:".$v_email);
	
	//VERIFICA SE O EMAIL FOI ENVIADO COM SUCESSO
	if($envia) { 
	   //ELIMINA TODAS AS VARIÁVEIS DA SESSÃO
       $_SESSION = array();
       
	   //DESTRÓI A SESSÃO PARA GARANTIR
       @session_destroy(); ?>
<script language="JavaScript">
	   <!--
	      alert("PARABÉNS!!\n\n A Sua mensagem foi enviada com sucesso! Em breve lhe retornaremos sobre o assunto.");
		  window.location.href = "navegacao.php";
	   //-->
	   </script>
    <?
	}//FECHA IF(envia)
	else {?>
       <script language="JavaScript">
	   <!--
	      alert("ERRO!!\n\n Ocorreu um erro inesperado em seu servidor.\n\nPor favor, tente novamente...");
		  window.location.href = "navegacao.php";
	   //-->
	   </script>
<?
   }//FECHA ELSE (envia)
   }
?>

<p>&nbsp;</p>
</div>

</body>
</html>
