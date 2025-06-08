<?

//no início:

mb_internal_encoding("UTF-8"); 

mb_http_output( "iso-8859-1" );  

ob_start("mb_output_handler");   

header("Content-Type: text/html; charset=ISO-8859-1",true);



ini_set('default_charset','UTF8_general_mysql500_ci');



?>



<?



require 'conect/conect.php';

include 'css/navegacao_admgeral.css';

include 'css/botoes_index_site.css';

include 'css/botoes.css';



$sql = "SELECT * FROM palavras_chave";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$palavras = $linha[1];

}

?>

<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>DIGICOMPRAS - Desenvolvimento de sistemas personalizados (16) 99739-1418</title>

<meta name="keywords" content="<? echo "$palavras"; ?>" />

<?



$_SERVER['REMOTE_ADDR'] . "<br/>";

 

$_SERVER['HTTP_X_FORWARDED_FOR'] . "<br/>";

 

$_SERVER['HTTP_CLIENT_IP'] . "<br/>";



 

$ip_acessando = $_SERVER['REMOTE_ADDR'];







$solicitacao = $_POST['solicitacao'];

$categoria = $_POST['categoria'];



$sql = "select * from pag_inicial";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$pagina_inicial = $linha[1];

$texto2 = $linha[2];

$tamanho_fonte = $linha[3];

}

?>



<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

	

}



-->

</style>

<style type="text/css">

<!--

.botao  {

	padding-left: 35px;

	float: left;

	middle:77px;

	

	margin:0px;

	padding:0px;

	width: 130px;

	height:25px;

        }



.botao a:visited {

	font: bold 12px/24px arial, helvetica, sans-aerif;

	padding:0px;

	text-decoration: none;

	text-align:center;



	background:  url('imagens/botao.png') no-repeat 

center center;

	width:130px;

	height:25px;

	display:block;

	}



.botao a:hover {

	background:  url('imagens/botao2.png') no-repeat 

center center;

	border: #ff4300;

               }

.botao1 {	padding-left: 35px;

	float: left;

	middle:77px;

	

	margin:0px;

	padding:0px;

	width: 130px;

	height:25px;

}

.botao11 {padding-left: 35px;

	float: left;

	middle:77px;

	

	margin:0px;

	padding:0px;

	width: 130px;

	height:25px;

}

.style13 {

color: #FFFFFF;

font-size: 18px;

font-weight: bold; }

#apDiv1 {

	position:absolute;

	width:200px;

	height:115px;

	z-index:1;

}

#apDiv2 {

	position:absolute;

	width:200px;

	height:19px;

	z-index:1;

	left: 512px;

	top: 606px;

}

#apDiv3 {

	position:absolute;

	width:200px;

	height:115px;

	z-index:1;

	left: 641px;

	top: 162px;

}

.style1 {font-size: <? echo "$tamanho_fonte" ?>px}

body,td,th {

	color: #000000;

}

-->



</style>







<script language="JavaScript" type="text/JavaScript">

<!--

function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}

//-->

</script>

</head>



<?



setlocale(LC_TIME, 'pt_BR');



$data_completa = strftime("%A, %d de %B de %Y<br><br>");



$hoje = strftime("%A");

$data_hoje = date('Y-m-d');

$dia_atual = date('d');

$mes = date('m');

$ano = date('Y');

$mes_ano = date('m-Y');





$instrucao = $_GET['instrucao'];



?>



<?

	  

$sql = "SELECT * FROM franquia";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$franquia = $linha[1];

}

?>



<?

	  

$sql = "SELECT * FROM a_empresa";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$aempresa = $linha[1];

}

?>



<?

$sql = "select * from hora_encerramento where dia = '$hoje' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$dia = $linha[1];

$horas_inicio = $linha[2];

$minutos_inicio = $linha[3];

$segundos_inicio = $linha[4];

$horas_termino = $linha[5];

$minutos_termino = $linha[6];

$segundos_termino = $linha[7];



}

//$ajuste_horario = 2;

//$horacerta = date('H')+2;

//$hora_atual = "0".$horacerta.date(':i:s');

$date = date('d-m-Y');

?>



<?

$sql = "SELECT * FROM hora_certa limit 1";



$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {





$acao = $linha[5];

$hora_ajuste = $linha[2];



}



$horacerta = date('H')+$hora_ajuste;

if($horacerta<=9){

$hora_atual = "0".$horacerta.date(':i:s');

}

else{

$hora_atual = $horacerta.date(':i:s');

}

?>



<?

$sql = "SELECT * FROM hora_ponto limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$h_ponto = $linha[1];

$m_ponto = $linha[2];

$s_ponto = $linha[3];



}



$hora_ponto = "$h_ponto:$m_ponto:$s_ponto";

?>







<?

$hora_iniciar = "$horas_inicio".":"."$minutos_inicio".":"."$segundos_inicio";

$hora_terminar = "$horas_termino".":"."$minutos_termino".":"."$segundos_termino";

?>

<script language="javascript">

function foco(usuario)

{

document.getElementById(usuario).focus();

}

</script>







<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$img_background = $linha[1];



}

?>



<body background="background/<? echo "$img_background"; ?>" no-repeat fixed background-attachment:fixed>



<table width="100%"  border="0" cellpadding="0">

  <tr>

    <td><table width="100%" border="0" cellspacing="4" background="logo/cabecalho_.jpg" no-repeat>

      <tr>

        <td width="8%">&nbsp;</td>

        <td width="82%"><div align="center">

          <input type="image" name="imageField" id="imageField" src="logo/logo2021.jpg" width="1100" height="200">

        </div></td>

        <td width="10%">&nbsp;</td>

      </tr>

    </table>    

    </td>

  </tr>

</table>

<table width="100%"  border="0" cellpadding="0" cellspacing="0">

<tr background='imagens_sistema/fundocelulas2.png'>

      <td width="10%"><div align="center">

        <form action="index.php" method="post" name="form1" target="_top">

        <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Home'>";

		

		?>

        </form>

        </div></td>

      <td width="10%"><form action="index.php" method="post" name="form1" target="_top">

        <div align="center">

          <input name="solicitacao" type="hidden" id="solicitacao" value="empregos">

          <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Empregos'>";

		

		?>

        </div>

    </form></td>

      <td width="10%"><div align="center">

        <form action="trabalhe_conosco.php" method="post" name="form1" target="_top">

          <input name="solicitacao" type="hidden" id="solicitacao" value="curriculos">

          <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Currículo grátis'>";

		

		?>

        </form>

    </div></td>

      <td width="10%"><div align="center">

        <form action="index.php?instrucao=contato" method="post" name="form1" target="_top">

          <input name="solicitacao" type="hidden" id="solicitacao" value="contato">

          <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Fale Conosco'>";

		

		?>

        </form>

    </div></td>

      <td width="10%"><div align="center">

        <form action="login.php" method="post" name="form1">

          <div align="center">

            <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Area Restrita'>";

		

		?>

            <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

              <input name="dia" type="hidden" id="dia" value="<? echo $dia_atual; ?>">

              <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

              <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

              <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

          </div></form>

    </div></td>

      <td width="10%"><div align="center">

        <form action="login_lojista.php" method="post" name="form1">

          <div align="center">

            <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Area do Lojista'>";

		

		?>

            <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

            <input name="dia" type="hidden" id="dia" value="<? echo $dia_atual; ?>">

            <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

            <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

            <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

          </div>

        </form>

    </div></td>

      <td width="10%"><div align="center">

        <form action="login_usuario.php" method="post" name="form3" target="_top">

          <div align="center">

            <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Usuário Consumidor'>";

		

		?>

            <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

              <input name="dia" type="hidden" id="dia" value="<? echo $dia_atual; ?>">

              <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

              <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

              <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

          </div></form>

    </div></td>

</tr>

<tr background='imagens_sistema/fundocelulas2.png'>

  <td>&nbsp;</td>

  <td>&nbsp;</td>

  <td colspan="3"><div align="center">

    <form action="index.php" method="post" name="form2">

      <input name="solicitacao" type="hidden" id="solicitacao" value="buscarestabelecimentos">

      <select name="categoria" class="class02" id="categoria">

        <option selected><? if(empty($categoria)){ echo "Escolha o segmento que deseja pesquisar"; }else{ echo "$categoria"; } ?></option>

        <?





    $sql = "select * from categorias order by categoria asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['categoria']."</option>";

    }

?>

      </select>

      <input type="submit" class="class01" name="Submit3" value="Buscar">

    </form>

  </div></td>

  <td>&nbsp;</td>

  <td>&nbsp;</td>

</tr>

</table>



<table width="998"  border="0" cellpadding="0">
  <tr>
    <td width="18%" valign="top">&nbsp;</td>
    <td width="64%" valign="top"><div align="center">
      <?



if(($solicitacao=="contato") or ($solicitacao=="enviar_faleconosco")){ 



//INICIO DO SCRIPT PARA PEGAR IP

 

$_SERVER['REMOTE_ADDR'] . "<br/>";

 

$_SERVER['HTTP_X_FORWARDED_FOR'] . "<br/>";

 

$_SERVER['HTTP_CLIENT_IP'] . "<br/>";

 



 

 

$ip_faleconosco = $_SERVER['REMOTE_ADDR'];

 

 

 



//FIM DO SCRIPT PARA PEGAR IP



if($solicitacao=="enviar_faleconosco"){


    

	//RECEBE OS DADOS DO FORMULÁRIO

	$v_nome      =   $_POST[nome];

	$v_email    =  $_POST[email];

	$v_fone  =  $_POST[fone];

	$v_obs   =  $_POST[obs];

	$v_cidade   =  $_POST[cidade];

	$v_estado   =  $_POST[estado];



	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO

	

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia_empresa = $linha[2];

$email_empresa = $linha[14];

$site_empresa = $linha[15];



}

	

	$email_dest   =   $email_empresa;

	

	//PREPARA O PEDIDO

	$mens  .=  " A sua mensagem foi enviada com sucesso. A $nfantasia_empresa agradece o seu contato    \n";

	$mens  .=  " Em breve lhe retornaremos sobre o assunto! \n\n";

	

	$mens  .=  "IP Utilizado: ".$ip_faleconosco."                                                       \n";

	$mens  .=  "Nome: ".$v_nome."                                                       \n";

	$mens  .=  "E-Mail: ".$v_email."                                                    \n";

	$mens  .=  "Telefone: ".$v_fone."                                                    \n";

	$mens  .=  "Cidade: ".$v_cidade."                                                    \n";

	$mens  .=  "Estado: ".$v_estado."                                                    \n";



	$mens  .=  "Mensagem: ".$v_obs."                                                    \n";

	

	//DISPARA O EMAIL

	$envia  =  mail($email_dest, "$nfantasia_empresa - Fale conosco", $mens,"From:".$email_dest."\r\nBcc:".$v_email);

	

	//VERIFICA SE O EMAIL FOI ENVIADO COM SUCESSO

	if($envia) { 

	   //ELIMINA TODAS AS VARIÁVEIS DA SESSÃO

       $_SESSION = array();

       

	   //DESTRÓI A SESSÃO PARA GARANTIR

       @session_destroy(); ?>
      <script language="JavaScript">

	   <!--

	      alert("PARABÉNS!!\n\n A Sua mensagem foi enviada com sucesso! Em breve lhe retornaremos sobre o assunto.");

		  window.location.href = "index.php";

	   //-->

	   </script>
      <?

	}//FECHA IF(envia)

	else {?>
      <script language="JavaScript">

	   <!--

	      alert("ERRO!!\n\n Ocorreu um erro inesperado em seu servidor.\n\nPor favor, tente novamente...");

		  window.location.href = "index.php";

	   //-->

	   </script>
      <?

   }//FECHA ELSE (envia)

}//FECHA IF

?>
      <table width="519"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><form action="index.php" method="post" name="frmfinalizar" onSubmit="return finaliza();" target="_top">
            <p align="center">
              <input name="solicitacao" type="hidden" id="solicitacao" value="enviar_faleconosco">
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
              <table width="60%"  border="0" align="center" cellpadding="1" cellspacing="1">
                <!--DWLayoutTable-->
                <tr >
                  <td height="29" colspan="4"><div align="left">
                    <div align="center"><strong>Sua 
                      
                      mesagem &eacute; muito importante para n&oacute;s! Queremos 
                      
                      ouv&iacute;-lo!</strong></div>
                  </div></td>
                </tr>
                <tr>
                  <td height="26" colspan="4"><font color="#FFFFFF"><strong> </strong></font></td>
                </tr>
                <tr>
                  <td width="91" height="26"><div align="left"><strong>Nome:</strong></div></td>
                  <td colspan="3" valign="top"><strong>
                    <input class='class02' name="nome" type="text" id="nome"  size="40" maxlength="40">
                  </strong></td>
                </tr>
                <tr>
                  <td height="26"><div align="left" class="style6"><strong>Telefone:</strong></div></td>
                  <td colspan="3" valign="top"><div align="left"><strong>
                    <input class='class02' name="fone" type="text" id="fone"  size="20" maxlength="20">
                  </strong></div></td>
                </tr>
                <tr>
                  <td height="24"><strong>Cidade:</strong></td>
                  <td colspan="3" valign="top"><strong>
                    <input class='class02' type="text" name="cidade" id="cidade">
                  </strong></td>
                </tr>
                <tr>
                  <td height="24"><strong>Estado:</strong></td>
                  <td colspan="3" valign="top"><strong>
                    <select class='class02' name="estado" id="estado">
                      <option selected>Selecione</option>
                      <?











    $sql = "select * from estados_do_brasil order by estado asc";



    $result = mysql_query($sql);



    while($x=mysql_fetch_array($result)){



  echo "<option>".$x['estado']."</option>";



    }



?>
                    </select>
                  </strong></td>
                </tr>
                <tr>
                  <td height="24"><div align="left" class="style6"><strong>E-Mail:</strong></div></td>
                  <td colspan="3" valign="top"><div align="left"><strong>
                    <input class='class02' name="email" type="text" id="email"  size="40" maxlength="40">
                  </strong></div></td>
                </tr>
                <tr valign="bottom">
                  <td height="72" valign="top"><div align="left" class="style6"><strong>Mensagem: </strong></div></td>
                  <td colspan="2" valign="top"><div align="left"> <strong>
                    <textarea class='class02' name="obs" cols="30"></textarea>
                  </strong></div></td>
                  <td valign="top"><div align="left"> </div></td>
                </tr>
                <tr align="center" valign="middle">
                  <td height="26" valign="top"><div align="left"></div></td>
                  <td colspan="2" valign="top"><div align="left"> <strong>
                    <input type="submit" class='class01' name="Submit" value="Enviar">
                  </strong></div></td>
                  <td valign="top"><div align="left"><strong> </strong></div></td>
                </tr>
              </table>
            </div>
          </form>
        </table>
    </div>
      <? } ?></td>
    <td width="18%" valign="top">&nbsp;</td>
  </tr>
</table>
<table width="40%"  border="0" align="center" cellPadding=30 cellSpacing=10>
  <?



if($solicitacao=="buscarestabelecimentos"){ 





$sql = "SELECT * FROM estabelecimentos where categoria = '$categoria' and status = 'Ativo' and plano <> 'ND' order by rand()";

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
    <td valign="middle" background='imagens_sistema/fundocelulas1.png'><div align="center"> <span><strong>
      <? if($plano=="MASTER"){ echo "<marquee>$nfantasia - $atividade</marquee>"; }else{ echo "$nfantasia"; } ?>
      </strong></span><br>
      <? 





if($plano=="MASTER"){

echo "<a href='http://$site' target='_blank'><img src='admgeral/estabelecimentos/$cnpj/$foto' width='200' height='150' border='6'></a>";

}

else{

echo "<img src='admgeral/estabelecimentos/$cnpj/$foto' width='200' height='150' alt='imagem 01' title='imagem 01'>"; }





?>
      <br>
      <strong><span class="style4"> <? echo $telefone; ?><br>
        <? echo $endereco; ?>, N&ordm; <? echo $numero; ?><br>
        <? echo $bairro; ?><br>
        <? echo $cidade; ?>-<? echo $estado; ?><br>
        <? if($plano=="MASTER"){ echo "<a href='mailto:$email'>$email</a>"; }else{ echo "$email"; } ?>
      </span></strong></div>
      <br></td>
    <? 



if($reg==4){

echo "</tr><tr></tr><tr>";

$reg=0;

}

} 





}



?>
</table>
<p align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="center"><?

if(empty($soliitacao)){ 

$sql = "select * from publicidade order by posicao asc limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$posicao = $linha[1];

$imagem = $linha[2];







echo "<a href='multimaterias/' target='_blank'><img src='publicidade/$imagem' border='0' width='800'></a> "; 



}

}

?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<p align="center">
  
  
  
</p>

<p align="center">

  <?



if($solicitacao=="empregos"){ 



?>

</p>

<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="38%" rowspan="2">&nbsp;</td>

    <td width="38%"><div align="center"><strong>Sou Empregador</strong></div></td>

    <td width="25%"><div align="center"></div></td>

    <td width="37%"><div align="center"><strong>Procuro Emprego</strong></div></td>

    <td width="37%" rowspan="2">&nbsp;</td>

  </tr>

  <tr>

    <td><div align="center">

      <form action="vagas.php" method="post" name="form1" target="_top">

        <div align="center">

          <?

		

		echo "<input class='class03' type='submit' name='button' id='button' value='Inserir Vagas'>";

		

		?>

          </div>

        </form>

    </div></td>

    <td><div align="center"></div></td>

    <td><div align="center">

      <form action="index.php" method="post" name="form1" target="_top">

        <div align="center">

          <input name="solicitacao" type="hidden" id="solicitacao" value="buscarvagas">

          <?

		

		echo "<input class='class03' type='submit' name='button' id='button' value='Buscar Vagas'>";

		

		?>

          </div>

        </form>

    </div></td>

  </tr>

</table>

<div align="center">

  <p>

    <?



}



?>

  </p>

</div>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="16%">&nbsp;</td>

    <td width="2%">&nbsp;</td>

    <td width="63%"><div align="center">

      <?



if($solicitacao=="buscarvagas"){



$sql = "SELECT * FROM vagas order by data_cadastro desc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

	

$empresa = $linha[1];

$telefones = $linha[2];

$email = $linha[3];

$endereco = $linha[4];

$numero = $linha[5];

$bairro = $linha[6];

$cidade = $linha[7];

$titulo = $linha[8];

$area_atuacao = $linha[9];

$escolaridade = $linha[12];

$funcoes = $linha[13];

$salario = $linha[14];

$requisitos = $linha[15];

$qualidades = $linha[17];

$pergunta = $linha[18];



?>

      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>

          <td colspan="3" bgcolor="#CCCCCC"><div align="center"><strong>Vaga: <font color="#000000"><? echo "$titulo"; ?></font></strong></div>

            <div align="center"></div>

            <div align="center"></div></td>

        </tr>

        <tr>

          <td width="38%" bgcolor="#999999"><div align="center"><strong>Escolaridade Exigida</strong></div></td>

          <td width="25%" bgcolor="#999999"><div align="center"><strong>&Aacute;rea de Atua&ccedil;&atilde;o</strong></div></td>

          <td width="37%" bgcolor="#999999"><div align="center"><strong>Fun&ccedil;&otilde;es a desempenhar</strong></div></td>

        </tr>

        <tr>

          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$escolaridade"; ?></font></strong></div></td>

          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$area_atuacao"; ?></font></strong></div></td>

          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$funcoes"; ?></font></strong></div></td>

        </tr>

        <tr bgcolor="#999999">

          <td><div align="center"><strong>Sal&aacute;rio</strong></div></td>

          <td><div align="center"><strong>Requisitos exigidos</strong></div></td>

          <td><div align="center"><strong>Qualidades/Desenvolturas/Diferenciais que ser&atilde;o apreciados</strong></div></td>

        </tr>

        <tr>

          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$salario"; ?></font></strong></div></td>

          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$requisitos"; ?></font></strong></div></td>

          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$qualidades"; ?></font></strong></div></td>

        </tr>

        <tr bgcolor="#999999">

          <td colspan="3"><div align="center"><strong><font color="#000000"><? echo "Enviar curriculo no e-mail para: $email respondendo a pergunta:"; ?></font></strong></div>

            <div align="center"></div>

            <div align="center"></div></td>

        </tr>

        <tr>

          <td colspan="3" bgcolor="#CCCCCC"><div align="center"><strong><font color="#000000"><? echo "$pergunta"; ?></font></strong></div>

            <div align="center"></div>

            <div align="center"></div></td>

        </tr>

        <tr>

          <td colspan="3"><div align="center"></div>            <div align="center">------ / / ------</div>            <div align="center"></div></td>

          </tr>

      </table>

      <? } 



}

?>

    </div></td>

    <td width="2%">&nbsp;</td>

    <td width="17%">&nbsp;</td>

  </tr>

  <tr>

    <td background='imagens_sistema/fundocelulas1111.png'><div align="center"></div></td>

    <td background='imagens_sistema/fundocelulas1.png'><div align="center"></div></td>

    <td background='imagens_sistema/fundocelulas1.png'><div align="center">
      <?

	  

if(empty($solicitacao)){ echo "<div align='center' class='style1'><blink>". utf8_encode($pagina_inicial). "</blink></div><br>"; }

?>

    </div></td>

    <td background='imagens_sistema/fundocelulas1.png'><div align="center"></div></td>

    <td background='imagens_sistema/fundocelulas1111.png'><div align="center"></div></td>

  </tr>

  <tr>

    <td background='imagens_sistema/fundocelulas1111.png'><div align="center"></div></td>

    <td background='imagens_sistema/fundocelulas1.png'><div align="center"></div></td>

    <td background='imagens_sistema/fundocelulas1.png'><div align="center">

      <?

if(empty($solicitacao)){ echo "<div align='center' class='style1'><blink>". utf8_encode($texto2) ."</blink></div><br>"; }



?>

    </div></td>

    <td background='imagens_sistema/fundocelulas1.png'><div align="center"></div></td>

    <td background='imagens_sistema/fundocelulas1111.png'><div align="center"></div></td>

  </tr>

</table>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="16%"><div align="center"></div></td>

    <td width="2%"><div align="center"></div></td>

    <td width="63%"><div align="center"></div></td>

    <td width="2%"><div align="center"></div></td>

    <td width="17%"><div align="center"></div></td>

  </tr>

</table>
<p align="center">

  <? 

 

$ip = $_SERVER["REMOTE_ADDR"]; //Pego o IP

//echo "$ip"."<br>"; // imprimi o número IP

$host = gethostbyaddr("$ip"); //pego o host

echo "$host"."<br>";



?>

</p>

<p align="center">&nbsp;</p>

</body>

</html>

