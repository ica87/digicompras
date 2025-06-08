<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<!-- saved from url=(0043)http://china-plastic-injection-molding.com/ -->

<HTML><HEAD><TITLE>FLUXOCAR</TITLE>



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

.style3 {

	color: #FFFFFF;

	font-weight: bold;

}

.style4 {color: #000000}

.style6 {color: #000000; font-weight: bold; }

-->

</style>



<script language="JavaScript">

<!--

   function finaliza() {

      if(confirm('Deseja mesmo enviar essa mensagem?'))

	     return true;

	  else return false;

   }//FECHA FUNCTION

//-->

</script>





</HEAD>



			<?

			

require 'conect/conect.php';

			

$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor_fundo_navegacao = $linha[1];



}

?>





<body bgcolor="#<? echo $cor_fundo_navegacao; ?>" 

  

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$background = $linha[1];

}





?>



background="imagens_sistema/<? echo $background; ?>" bgproperties="fixed">



<?php

//VERIFICA SE FOI ESCOLHIDA A OPÇÃO PARA FECHAR O PEDIDO

if($_POST[opc_enviar]) {

    

	//RECEBE OS DADOS DO FORMULÁRIO

	$v_nome      =   $_POST[nome];

	$v_email    =  $_POST[email];

	$v_fone  =  $_POST[fone];

	$v_obs   =  $_POST[obs];

	

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$email_empresa = $linha[14];

$site = $linha[15];



}



	

	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	$email_dest   =   $email_empresa;

	

	//PREPARA O PEDIDO

	$mens  .=  " A sua mensagem foi enviada com sucesso. A $nfantasia agradece o seu contato    \n";

	$mens  .=  " Em breve lhe retornaremos sobre o assunto! \n";

	$mens  .=  "Nome: ".$v_nome."                                                       \n";

	$mens  .=  "E-Mail: ".$v_email."                                                    \n";

	$mens  .=  "Telefone: ".$v_fone."                                                    \n";

	$mens  .=  "Mensagem: ".$v_obs."                                                    \n";

	

	//DISPARA O EMAIL

	$envia  =  mail($email_dest, "$nfantasia - Fale conosco", $mens,"From:".$email_dest."\r\nBcc:".$v_email);

	

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

		  window.location.href = "contato.php";

	   //-->

	   </script>

<?

   }//FECHA ELSE (envia)

}//FECHA IF

?>

   

<table width="519"  border="0" cellspacing="0" cellpadding="0">

  <tr> 

    <td> <form method="post" name="frmfinalizar" onSubmit="return finaliza();">

        <p align="center"> 

          <input type="hidden" name="opc_enviar" value="1">

          <input type="hidden" name="v_produtos" value="<? echo $v_produtos; ?>">

          <input type="hidden" name="v_nome" value="<? echo $v_nome; ?>">

          <input type="hidden" name="v_email" value="<? echo $v_email; ?>">

          <input type="hidden" name="v_user" value="<? echo $v_user; ?>">

          <input type="hidden" name="v_nomeE" value="<? echo $v_nomeE; ?>">

          <input type="hidden" name="v_EnderecoE" value="<? echo $v_EnderecoE; ?>">

          <input type="hidden" name="v_cidadeE" value="<? echo $v_cidadeE; ?>">

          <input type="hidden" name="v_EstadoE" value="<? echo $v_EstadoE; ?>">

          <input type="hidden" name="v_fonee" value="<? echo $v_fonee; ?>">

          <input type="hidden" name="v_CEPE" value="<? echo $v_CEPE; ?>">

          <input type="hidden" name="v_EmailE" value="<? echo $v_EmailE; ?>">

          <input type="hidden" name="v_insc" value="<? echo $v_insc; ?>">

          <input type="hidden" name="v_cnpj" value="<? echo $v_cnpj; ?>">

          <input type="hidden" name="v_pgto" value="<? echo $v_pgto; ?>">

          <input type="hidden" name="v_transp" value="<? echo $v_transp; ?>">

          <input type="hidden" name="v_total" value="<? echo $total; ?>">

          <input type="hidden" name="v_dataped" value="<? echo $dataped; ?>">

          <input type="hidden" name="v_dataent" value="<? echo $dataent; ?>">

        

      <div align="center">

        <table width="48%"  border="0" align="center" cellpadding="1" cellspacing="1">

                  <!--DWLayoutTable-->

                  <tr > 

                    <td height="29" colspan="4"> <div align="left" class="style3 style4">

                      <div align="center">Sua 

                            mesagem &eacute; muito importante para n&oacute;s! Queremos 

                        ouv&iacute;-lo!</div>

                    </div></td>

                  </tr>

                  <tr> 

                    <td height="26"><!--DWLayoutEmptyCell-->&nbsp;</td>

                    <td width="260" colspan="3" valign="top"><font color="#FFFFFF"><strong> 

                      </strong></font></td>

                  </tr>

                  <tr> 

                    <td width="91" height="26"><div align="left" class="style3 style4">Nome:</div></td>

                    <td colspan="3" valign="top"><strong> 

                      <input class='class02' name="nome" type="text" id="cnpj"  size="40" maxlength="40">

                      </strong></td>

                  </tr>

                  <tr> 

                    <td height="26"><div align="left" class="style6">Telefone:</div></td>

                    <td colspan="3" valign="top"><div align="left"><strong> 

                        <input class='class02' name="fone" type="text" id="fonee2"  size="20" maxlength="20">

                        <font face="Arial" size="2"> </font></strong></div></td>

                  </tr>

                  <tr> 

                    <td height="24"> <div align="left" class="style6">E-Mail:</div></td>

                    <td colspan="3" valign="top"><div align="left"><strong> 

                        <input class='class02' name="email" type="text" id="nome"  size="40" maxlength="40">

                        <font face="Arial" size="2"> </font></strong></div></td>

                  </tr>

                  <tr valign="bottom"> 

                    <td height="72" valign="top"> <div align="left" class="style6">Mensagem: 

                    </div></td>

                    <td colspan="2" valign="top"><div align="left"> <strong> 

                        <textarea class='class02' name="obs" cols="30"></textarea>

                        </strong></div></td>

                    <td valign="top"><div align="left"> </div></td>

                  </tr>

                  <tr align="center" valign="middle"> 

                    <td height="26" valign="top"><div align="left"></div></td>

                    <td colspan="2" valign="top"> <div align="left"> <strong> 

                    <input class='class01' type="submit" name="Submit" value="Enviar">
                    </strong></div></td>

                    <td valign="top"><div align="left"><strong> </strong></div></td>

                  </tr>

                </table>

      </div>

    </form>



</BODY></HTML>