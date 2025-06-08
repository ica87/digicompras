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

<title>Menu principal do Administrador</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
<!--
.style11 {font-size: 9px; color: #000000; font-weight: bold; }
.style13 {font-weight: bold}
.style14 {font-weight: bold}
.style15 {font-size: 18px}
.style2 {	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style5 {color: #0000FF}
.style6 {font-size: 9px; font-weight: bold; }
.style7 {color: #000000}
-->
</style>
</head>

<?



require '../conect/conect.php';


$dia_hoje = date('d');



$nfantasia = $_POST['nfantasia'];
$codigo_ficha = $_POST['codigo_ficha'];
$num_plano = $_POST['num_plano'];
$num_ficha = $_POST['num_ficha'];
$modelo = $_POST['modelo'];
$metal_entregue = $_POST['metal_entregue'];

//-----------AQUI INICIA A ALTERAÇAO DE STATUS DA FICHA------------------------

$status = $_POST['status'];
$dia_envio = $_POST['dia_envio'];
$mes_envio = $_POST['mes_envio'];
$ano_envio = $_POST['ano_envio'];
$hora_envio = $_POST['hora_envio'];
$dataevolucao = "$dia_envio-$mes_envio-$ano_envio";

if($dia_hoje<="20"){
$data_envio = "$ano_envio-$mes_envio-$dia_envio";
}
else{
$data_envio = $_POST['data_envio'];
}

if($status=="Enviado"){

$sql = "select * from fichas where codigo_ficha = '$codigo_ficha' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$verifica_status_producao = $linha[71]; 


}

if($verifica_status_producao=="Finalizado"){


$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `status` = '$status',`status_producao` = 'Finalizado',`data_envio` = '$data_envio',`dia_envio` = '$dia_envio',`mes_envio` = '$mes_envio',`ano_envio` = '$ano_envio',`hora_envio` = '$hora_envio', where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}
}
else{
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `status` = '$status',`status_producao` = 'Finalizado',`data_envio` = '$data_envio',`dia_envio` = '$dia_envio',`mes_envio` = '$mes_envio',`ano_envio` = '$ano_envio',`hora_envio` = '$hora_envio',`data_termino_producao` = '$data_envio',`dia_termino_producao` = '$dia_envio',`mes_termino_producao` = '$mes_envio',`ano_termino_producao` = '$ano_envio',`hora_termino_producao` = '$hora_envio' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

}
}

mysql_query($comando,$conexao);

//------------AQUI TERMINA A ALTERAÇAO DE STATUS DA FICHA------------------------



//----------AQUI INICIA A ALTERAÇAO DE STATUS DA PRODUÇÃO-----------------------

$status_producao = $_POST['status_producao'];
$dia_termino_producao = $_POST['dia_termino_producao'];
$mes_termino_producao = $_POST['mes_termino_producao'];
$ano_termino_producao = $_POST['ano_termino_producao'];
$data_termino_producao = $_POST['data_termino_producao'];
$hora_termino_producao = $_POST['hora_termino_producao'];
//$data_termino_producao = "$ano_termino_producao-$mes_termino_producao-$dia_termino_producao";


if($status_producao=="Finalizado"){
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `status_producao` = 'Finalizado',`data_termino_producao` = '$data_termino_producao',`dia_termino_producao` = '$dia_termino_producao',`mes_termino_producao` = '$mes_termino_producao',`ano_termino_producao` = '$ano_termino_producao',`hora_termino_producao` = '$hora_termino_producao' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}
}

mysql_query($comando,$conexao);


//-----------AQUI TERMINA A ALTERAÇÃO DE STATUS DA PRODUÇÃO------------------


			

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#ffffff"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>

<a href="cad_admin/menu.php"><font color="#FFFFFF"><strong>Cadastrar Administrador</strong></font></a>
<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome = $linha[1];
$estab_pertence = $linha[44];
$celular = $linha[19];
$funcao = $linha[43];
$cidade = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

}
?>

<form name="form1" method="post" action="cad_admin/editar.php">









  <table width="100%" border="0" cellspacing="4">

    <tr> 

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br> </strong><strong><font color="#0000FF"><? echo $nome; ?> 

            <input name="nome" type="hidden" id="razaosocial2" value="<? echo $nome; ?>">

</font></strong><strong><font color="#0000FF">
<input type="submit" name="button" id="button" value="Alterar Informa&ccedil;&otilde;es">
</font></strong></td>

      <td width="41%"><strong>Estabelecimento:</strong> <br><strong><font color="#0000FF"><? echo $estab_pertence; ?></font></strong><strong><font color="#0000FF">      </font></strong></td>

      <td width="14%"><strong>Celular:<font color="#0000FF"><br> <? echo $celular; ?></font><font color="#0000FF">

      </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong>Cidade: <br><font color="#0000FF"><? echo $cidade; ?></font><font color="#0000FF">      </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

        <? echo $linha[26]; ?></font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

            <? echo $email_estab_pertence; ?></font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">      </font></strong></td>

      <td>&nbsp;</td>

      <td><?

//echo date('localtime()'); ?>

</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>


  </table>

  

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>



</form>

<?







$num_proposta = $_POST['num_proposta'];



$sql = "SELECT * FROM propostas where num_proposta = '$num_proposta'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;

?>
<table width="100%"  border="0">

  <tr>

    <td colspan="3"><strong>A proposta de seu cliente  de N&ordm;</strong> <strong><font color="#0000FF"><? echo $linha[0]; ?></font></strong><font color="#000000"><strong>, efetuada em</strong> <strong><font color="#0000FF"><? echo $linha[40]; ?></font>, Tem seu status definido em </strong> <strong><font color="#0000FF"><? echo $linha[51]; ?></font></strong> <strong>!</strong></font></td>

  </tr>

  <tr>

    <td width="37%">&nbsp;</td>

    <td width="20%"><form action="propostas/imprimir_proposta.PHP" method="post" name="form3" target="_blank">

      <strong><font color="#0000FF">

      <input name="num_proposta" type="hidden" id="num_proposta" value="<? echo $linha[0]; ?>">

      </font></strong>

      <input type="submit" name="Submit4" value="Imprimir Proposta">

    </form></td>

    <td width="43%">&nbsp;</td>

  </tr>

</table>

<?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

<? } ?>



<table width="100%"  border="0">

  <tr>
    <td width="15%"><form action="clientes/menu.php" method="post" name="form2">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit5" value="Clientes">
    </form></td>
    <td width="14%"><form name="form6" method="post" action="grupos/menu.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit8" value="Grupos">
    </form></td>
    <td width="31%"><div align="center"><strong>Pesquisa  de Fichas</strong></div></td>
    <td width="24%"><form name="form16" method="post" action="hora_de_encerramento_do_sistema/hora_encerramento.php">
      <div align="left">
        <input type="submit" name="Submit3" value="Definir hora de Encerramento do sistema">
      </div>
    </form></td>
    <td width="16%"><form name="form8" method="post" action="ips/menu.php">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit21" value="Autoriza&ccedil;&atilde;o de IP's">
    </form></td>
  </tr>
  <tr>

    <td><form action="fornecedores/menu.php" method="post" name="form2">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit63" value="Fornecedores">
    </form></td>
    <td><form action="modelos/menu.php" method="post" name="form20">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit20" value="Modelos">
    </form></td>
    <td><div align="center">N&ordm; da Ficha</div></td>

    <td><form action="fichas/selecione_cliente_para_abrir_orcamento.php" method="post" name="form20">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit" value="Fichas">
    </form></td>

    <td><form action="financeiro/principal.php" method="post" name="form2">
      <div align="left">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit54" value="Financeiro">
      </div>
    </form></td>
  </tr>

  <tr>

    <td><form action="status/menu.php" method="post" name="form17">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit172" value="Status">
    </form></td>
    <td><form action="depto_pessoal/principal.php" method="post" name="form2">
      <div align="left">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
        <input type="submit" name="Submit11" value="Depto Pessoal">
      </div>
    </form></td>
    <td><div align="center">
      <form name="form4" method="post" action="principal.php">
        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

$grupo = $_POST['grupo'];


?>
        <input name="num_ficha" type="text" id="num_ficha2" size="20">
        <input type="submit" name="Submit2" value="Pesquisa Ficha">
      </form>
    </div></td>
    <td><form action="relatorios/menu.php" method="post" name="form20">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit7" value="Relat&oacute;rios">
    </form></td>

    <td>&nbsp;</td>
  </tr>
</table>

<? if(empty($num_ficha)){}else{ echo"<p align='center' class='style5'><strong>PESQUISA VISUAL DE FICHA</strong>"; } ?>
  <?

if($metal_entregue=="Sim"){
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `metal_entregue` = '$metal_entregue' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao);

}



?>
</p>
<table width="100%" border="0">
  <?

  

$sql = "select * from fichas where num_ficha = '$num_ficha' order by num_ficha asc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



  $codigo_ficha = $linha[0];
  $dia_cadastro = $linha[1];
  $mes_cadastro = $linha[2];
  $ano_cadastro = $linha[3];
  $hora = $linha[4];
  $status = $linha[5];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $grupo = $linha[8];
  $quant_pares = $linha[9];
  $pespontador = $linha[10];
  $valor_pespontador = $linha[11];
  $total_pespontador = $linha[12];
  $coladeira1 = $linha[13];
  $valor_coladeira1 = $linha[14];
  $total_coladeira1 = $linha[15];
  $coladeira2 = $linha[16];
  $valor_coladeira2 = $linha[17];
  $total_coladeira2 = $linha[18];
  
  $total_ficha = $linha[19];
  if($total_ficha<>""){
  $total_ficha_formatado = number_format($total_ficha, 2, ",", ".");
  }
  $modelo = $linha[20];
  $metal_entregue = $linha[21];
  $dia_envio = $linha[22];
  $mes_envio = $linha[23];
  $ano_envio = $linha[24];
  $hora_envio = $linha[25];
  $valor_unit_empresa = $linha[26];
  $total_ficha_empresa = $linha[27];
  $saldo = $linha[28];
  $codigo_cliente = $linha[29];
  $cnpj = $linha[30];
  $nfantasia = $linha[34]; 
  $caixa = $linha[62]; 
  $status_producao = $linha[71]; 



?>

  <tr>
    <td width="4%" height="15"><div align="center" class="style4">Data entrada</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style4">N&ordm; Ficha</div></td>
    <td width="8%"><div align="center" class="style4">Status Produ&ccedil;&atilde;o</div></td>
    <td width="8%"><div align="center"><span class="style4">Status</span></div></td>
    <td width="6%"><div align="center"><span class="style4">Data Envio para f&aacute;brica</span></div></td>
    <td width="4%"><div align="center" class="style4">Quant Pares</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Modelo</div></td>
    <td width="5%"><div align="center" class="style4">Metal Entregue?</div></td>
    <td width="3%"><div align="center"><span class="style4">Caixa</span></div></td>
    <td width="4%"><div align="center" class="style4">Grupo</div></td>
    <td width="4%"><div align="center" class="style4">R$ Unit Pesponto</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Pesponto</div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Coladeira 2</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Coladeira 2</div></td>
    <td width="4%"><div align="center" class="style4">R$ Total Ficha</div></td>
    <td width="5%"><div align="center" class="style4">R$ Unit Empresa</div></td>
    <td width="5%"><div align="center" class="style4">R$ Total Empresa</div></td>
    <td width="7%"><div align="center"><span class="style4">Saldo</span></div></td>
  </tr>
  <tr>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $num_plano; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4">
      <form action="fichas/excluir_ficha.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span> <strong><font color="#0000FF"><strong>
            <? //if($status=="Enviado"){ echo $num_ficha; } 
			//echo $num_ficha; ?>
            </strong></font></strong>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <? echo "<input type='submit' name='button' id='button' value='$num_ficha Excluir'>";  ?>
      </form>
    </div></td>
    <td><div align="center">
      <form action="principal.php" method="post" name="form2">
        <span class="style2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <?
echo $status_producao;
?>
        </span>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha7" value="<? echo $codigo_ficha; ?>">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
        <input name="nfantasia" type="hidden" id="nfantasia5" value="<? echo $nfantasia; ?>">
        </font><strong><strong><strong><strong>
        <input name="num_ficha" type="hidden" id="num_ficha5" value="<? echo $num_ficha;  ?>">
        </strong></strong></strong></strong><font color="#0000FF">
        <input name="status_producao" type="hidden" id="status_producao" value="Finalizado">
        <?

if(empty($num_ficha)){
}
else{
if($status_producao<>"Finalizado"){
echo"<select name='dia_termino_producao' id='select5'>";
  echo "<option selected>".$dia_hoje."</option>";
    $sql = "select * from fichas where dia_termino_producao <> '' group by dia_termino_producao order by dia_termino_producao desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['dia_termino_producao']."</option>";
   }
      echo"</select>";
	  }
	  }
?>
        <?

$mes_atual = date('m');

if(empty($num_ficha)){
}
else{
if($status_producao<>"Finalizado"){
echo"<select name='mes_termino_producao' id='select5'>";
  echo "<option selected>".$mes_atual."</option>";
    $sql = "select * from fichas where mes_termino_producao <> '' group by mes_termino_producao order by mes_termino_producao desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['mes_termino_producao']."</option>";
   }
      echo"</select>";
	  }
	  }
     
?>
        <input name="ano_termino_producao" type="hidden" id="ano_envio7" value="<? echo date('Y'); ?>">
        <input name="data_termino_producao" type="hidden" id="data_termino_producao" value="<? echo date('Y-m-d'); ?>">
        <input name="hora_termino_producao" type="hidden" id="hora_envio7" value="<? echo date('H:i:s'); ?>">
        </font></strong></font></strong></font></strong></font></strong></font></strong>
        <? if($status_producao<>"Finalizado") echo "<input type='submit' name='button2' id='button2' value='Finalizar Produção'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4">
      <form name="form3" method="post" action="../fichas/historico_cliente.php">
        <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
          <input name="metal_entregue" type="hidden" id="metal_entregue" value="<? echo $metal_entregue; ?>">
          <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>">
          <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>">
          <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
          <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
          </font></strong></font></strong></font></strong></font></strong></font></strong>
        <?
if($status=="Enviado"){
echo $status;
}
else{

//echo"<select name='status' id='status'>";
  //echo "<option selected>".$status."</option>";

    //$sql = "select * from status where status <> 'Enviado' and status <> '$status' order by status asc";
    //$result = mysql_query($sql);
    //while($x=mysql_fetch_array($result)){
  //echo "<option>".$x['status']."</option>";
  
   //}
      //echo"</select>";
 echo $status;     
}
?>
        <? //if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Alterar'>"; } ?>
      </form>
    </div></td>
    <td><div align="center" class="style4">
      <form action="fichas/editar_ficha_apos_envio_para_fabrica.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span> <span class="style5"><strong><strong><? echo "$dia_envio-$mes_envio-$ano_envio $hora_envio"; ?></strong></strong>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha3" value="<? echo $codigo_ficha; ?>">
            <strong><strong><strong><strong><strong>
              <input name="num_plano" type="hidden" id="nfantasia3" value="<? echo $num_plano; ?>">
              <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha;  ?>">
              <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
              <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
              <input name="dia_envio" type="hidden" id="dia_envio3" value="<? echo date('d'); ?>">
              <input name="mes_envio" type="hidden" id="mes_envio3" value="<? echo date('m'); ?>">
              <input name="ano_envio" type="hidden" id="ano_envio3" value="<? echo date('Y'); ?>">
              <input name="hora_envio" type="hidden" id="hora_envio3" value="<? echo date('H:i:s'); ?>">
              <input type="hidden" name="justificativa" id="justificativa">
              <? if($status=="Enviado" & $funcao=="Administrador"){ echo "<input type='submit' name='button' id='button' value='Edi&ccedil;&atilde;o P&oacute;s Envio'>"; } ?>
              </strong></strong></strong></strong></strong></span>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $quant_pares; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $modelo; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style5">
      <form action="principal.php" method="post" name="form2">
        <span class="style4">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <strong>
            <? if($metal_entregue<>"Não"){ echo $metal_entregue; } ?>
            <input name="codigo_ficha" type="hidden" id="codigo_ficha5" value="<? echo $codigo_ficha; ?>">
            <font color="#0000FF"><font color="#0000FF"><font color="#0000FF"><font color="#0000FF"><font color="#0000FF">
              <input name="metal_entregue" type="hidden" id="metal_entregue" value="Sim">
              <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
              <input name="dia_envio" type="hidden" id="dia_envio5">
              <input name="mes_envio" type="hidden" id="mes_envio5">
              <input name="ano_envio" type="hidden" id="ano_envio5">
              <input name="hora_envio" type="hidden" id="hora_envio5" value="<? echo date('H:i:s'); ?>">
              </font></font></font></font></font>
            <? if($metal_entregue=="Não"){ echo "<input type='submit' name='button2' id='button2' value='Receber Metal'>"; } ?>
          </strong></span><strong> </strong>
      </form>
    </div></td>
    <td><div align="center" class="style4"><strong><strong><? echo $caixa; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo $grupo; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_pespontador; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_pespontador; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira1; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira1; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira2; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira2; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2 style2 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></font></strong></div></td>
    <td><div align="center" class="style4 style4"><strong><font color="#0000FF"><strong><? echo "R$ ".$saldo; ?></strong></font></strong></div></td>
  </tr>
  <?


if($reg>=2){

echo "<script>

alert('ATENÇÃO!!!... EXISTEM MAIS DE 1 FICHA COM O MESMO NÚMERO!!!... VERIFIQUE ATENTAMENTE QUAL PLANO VOCÊ DESEJA ALTERAR!');

</script>";


	}



?>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><form action="principal.php" method="post" name="form2">
      <span class="style2">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span>
      <input name="codigo_ficha" type="hidden" id="codigo_ficha6" value="<? echo $codigo_ficha; ?>">
      <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
      <input name="nfantasia" type="hidden" id="nfantasia6" value="<? echo $nfantasia; ?>">
      </font><strong><strong><strong><strong>
      <input name="num_ficha" type="hidden" id="num_ficha4" value="<? echo $num_ficha;  ?>">
      </strong></strong></strong></strong><font color="#0000FF">
      <input name="status" type="hidden" id="status" value="Enviado">
      <?
if($metal_entregue=="Não"){

}
else{

if(empty($num_ficha)){
}
else{
if($status<>"Enviado"){
echo"<select name='dia_envio' id='select5'>";
  echo "<option selected>".$dia_hoje."</option>";
    $sql = "select * from fichas where dia_envio <> '' group by dia_envio order by dia_envio desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['dia_envio']."</option>";
   }
      echo"</select>";
	  }
	  }
	  }
?>
      <?
if($metal_entregue=="Não"){

}
else{

$mes_atual = date('m');

if(empty($num_ficha)){
}
else{
if($status<>"Enviado"){
echo"<select name='mes_envio' id='select5'>";
  echo "<option selected>".$mes_atual."</option>";
    $sql = "select * from fichas where mes_envio <> '' group by mes_envio order by mes_envio desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['mes_envio']."</option>";
   }
      echo"</select>";
	  }
	  }
}
     
?>
      <input name="ano_envio" type="hidden" id="ano_envio6" value="<? echo date('Y'); ?>">
      <input name="data_envio" type="hidden" id="data_envio" value="<? echo date('Y-m-d'); ?>">
      <input name="hora_envio" type="hidden" id="hora_envio6" value="<? echo date('H:i:s'); ?>">
            </font></strong></font></strong></font></strong></font></strong></font></strong>
      <? if($metal_entregue=="Sim" & $status<>"Enviado"){ echo "<input type='submit' name='button2' id='button2' value='Enviar p/ F&aacute;brica'>"; } ?>
        </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<? if(empty($num_ficha)){}else{ echo "<p align='center' class='style5'><strong>HISTÓRICO DAS ALTERAÇÕES JÁ REALIZADAS NESSA FICHA</strong></p>"; } ?>
<table width="100%" border="1" cellspacing="0" bordercolor="#CCCCCC">
  <?
  //$num_plano = $_POST['num_plano'];
  $num_ficha = $_POST['num_ficha'];

  

$sql = "select * from historico_alteracoes_fichas where num_ficha = '$num_ficha' order by codigo_ficha desc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



  $codigo_ficha = $linha[0];
  $dia_cadastro = $linha[1];
  $mes_cadastro = $linha[2];
  $ano_cadastro = $linha[3];
  $hora = $linha[4];
  $status = $linha[5];
  $num_plano = $linha[6];
  $num_ficha = $linha[7];
  $grupo = $linha[8];
  $quant_pares = $linha[9];
  $pespontador = $linha[10];
  $valor_pespontador = $linha[11];
  $total_pespontador = $linha[12];
  $coladeira1 = $linha[13];
  $valor_coladeira1 = $linha[14];
  $total_coladeira1 = $linha[15];
  $coladeira2 = $linha[16];
  $valor_coladeira2 = $linha[17];
  $total_coladeira2 = $linha[18];
  
  $total_ficha = $linha[19];
  if($total_ficha<>""){
  $total_ficha_formatado = number_format($total_ficha, 2, ",", ".");
  }
  
  $modelo = $linha[20];
  $metal_entregue = $linha[21];
  $dia_envio = $linha[22];
  $mes_envio = $linha[23];
  $ano_envio = $linha[24];
  $hora_envio = $linha[25];
  $valor_unit_empresa = $linha[26];
  $total_ficha_empresa = $linha[27];
  $saldo = $linha[28];
  $codigo_cliente = $linha[29];
  $cnpj = $linha[30];
  $nfantasia = $linha[34]; 
  $caixa = $linha[62]; 
  $justificativa = $linha[63]; 


?>
  <tr>
    <td width="4%" height="15"><div align="center" class="style4"><strong>Data entrada</strong></div></td>
    <td width="5%"><div align="center" class="style6">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style6">N&ordm; Ficha</div></td>
    <td width="8%"><div align="center"><strong><span class="style4">Status</span></strong></div></td>
    <td width="6%"><div align="center"><strong><span class="style4">Data Envio para f&aacute;brica</span></strong></div></td>
    <td width="4%"><div align="center" class="style6">Quant Pares</div></td>
    <td width="5%"><div align="center" class="style6">N&ordm; Modelo</div></td>
    <td width="5%"><div align="center" class="style6">Metal Entregue?</div></td>
    <td width="3%"><div align="center"><strong><span class="style4">Caixa</span></strong></div></td>
    <td width="4%"><div align="center" class="style6">Grupo</div></td>
    <td width="4%"><div align="center" class="style6">R$ Unit Pesponto</div></td>
    <td width="5%"><div align="center" class="style6">R$ Total Pesponto</div></td>
    <td width="5%"><div align="center" class="style6">R$ Unit Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style6">R$ Total Coladeira 1 </div></td>
    <td width="5%"><div align="center" class="style6">R$ Unit Coladeira 2</div></td>
    <td width="5%"><div align="center" class="style6">R$ Total Coladeira 2</div></td>
    <td width="4%"><div align="center" class="style6">R$ Total Ficha</div></td>
    <td width="5%"><div align="center" class="style6">R$ Unit Empresa</div></td>
    <td width="5%"><div align="center" class="style6">R$ Total Empresa</div></td>
    <td width="7%"><div align="center"><strong><span class="style4">Saldo</span></strong></div></td>
  </tr>
  <tr>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?>d</strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo $num_plano; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7 style13">
      <form action="../fichas/editar_ficha_apos_envio_para_fabrica.php" method="post" name="form2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? //if($status=="Enviado"){ echo $num_ficha; } 
			echo $num_ficha; ?>
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha3" value="<? echo $num_ficha; ?>">
        <input name="grupo2" type="hidden" id="grupo2" value="<? echo $grupo; ?>">
        <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
        <input name="codigo_cliente2" type="hidden" id="codigo_cliente2" value="<? echo $codigo_cliente; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano;  ?>">
      </form>
    </div></td>
    <td class="style4"><div align="center" class="style2 style4 style7 style14">
      <form name="form3" method="post" action="../fichas/historico_cliente.php">
        <input name="nfantasia2" type="hidden" id="nfantasia2" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha3" value="<? echo $num_ficha; ?>">
        <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
        <input name="metal_entregue2" type="hidden" id="metal_entregue2" value="<? echo $metal_entregue; ?>">
        <input name="dia_envio2" type="hidden" id="dia_envio2" value="<? echo date('d'); ?>">
        <input name="mes_envio2" type="hidden" id="mes_envio2" value="<? echo date('m'); ?>">
        <input name="ano_envio2" type="hidden" id="ano_envio2" value="<? echo date('Y'); ?>">
        <input name="hora_envio2" type="hidden" id="hora_envio2" value="<? echo date('H:i:s'); ?>">
        <?
if($status=="Enviado"){
echo $status;
}
else{

//echo"<select name='status' id='status'>";
  //echo "<option selected>".$status."</option>";

    //$sql = "select * from status where status <> 'Enviado' and status <> '$status' order by status asc";
    //$result = mysql_query($sql);
    //while($x=mysql_fetch_array($result)){
  //echo "<option>".$x['status']."</option>";
  
   //}
      //echo"</select>";
 echo $status;     
}
?>
        <? //if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Alterar'>"; } ?>
      </form>
    </div></td>
    <td class="style4"><div align="center" class="style11">
      <form action="../fichas/editar_ficha_apos_envio_para_fabrica.php" method="post" name="form2">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <? echo "$dia_envio-$mes_envio-$ano_envio $hora_envio"; ?>
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha4" value="<? echo $codigo_ficha; ?>">
        <input name="nfantasia2" type="hidden" id="nfantasia4" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha3" value="<? echo $num_ficha;  ?>">
        <input name="grupo2" type="hidden" id="grupo2" value="<? echo $grupo; ?>">
        <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
        <input name="codigo_cliente2" type="hidden" id="codigo_cliente2" value="<? echo $codigo_cliente; ?>">
        <input name="dia_envio2" type="hidden" id="dia_envio4" value="<? echo date('d'); ?>">
        <input name="mes_envio2" type="hidden" id="mes_envio4" value="<? echo date('m'); ?>">
        <input name="ano_envio2" type="hidden" id="ano_envio4" value="<? echo date('Y'); ?>">
        <input name="hora_envio2" type="hidden" id="hora_envio4" value="<? echo date('H:i:s'); ?>">
        <input type="hidden" name="justificativa2" id="justificativa2">
      </form>
    </div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo $quant_pares; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo $modelo; ?></strong></div></td>
    <td class="style4"><div align="center" class="style4 style7"><strong><? echo $metal_entregue; ?></strong></div></td>
    <td class="style4"><div align="center" class="style11"><? echo $caixa; ?></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo $grupo; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "R$ ".$valor_pespontador; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "R$ ".$total_pespontador; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "R$ ".$valor_coladeira1; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "R$ ".$total_coladeira1; ?></strong></div></td>
    <td class="style4"><div align="center" class="style4 style7"><strong><? echo "R$ ".$valor_coladeira2; ?></strong></div></td>
    <td class="style4"><div align="center" class="style4 style7"><strong><? echo "R$ ".$total_coladeira2; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "R$ ".$total_ficha; ?></strong></div></td>
    <td class="style4"><div align="center" class="style4 style7"><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></div></td>
    <td class="style4"><div align="center" class="style4 style7"><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></div></td>
    <td class="style4"><div align="center" class="style4 style7"><strong><? echo "R$ ".$saldo; ?></strong></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>Observa&ccedil;&otilde;es:</strong></div></td>
    <td colspan="17"><strong><font color="#0000FF"><strong><? echo $obs; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>Justificativa:</strong></div></td>
    <td colspan="17"><strong><font color="#0000FF"><strong><? echo $justificativa; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td colspan="20"><div align="center" class="style2 style7 style15">--------------------------------------------------------------------/ /-------------------------------------------------------------------------------------</div></td>
  </tr>
  <?
}
?>
</table>
<table width="100%"  border="0">

  <tr>

    <td>&nbsp;</td>

    <td width="18%">&nbsp;</td>

    <td>Website</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td><form action="aempresa/menu.php" method="post" name="form1">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit9" value="A Empresa ">

    </form></td>

    <td><form action="imagem_fundo/menu.php" method="post" name="form14">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit27" value="Imagem de Fundo">
    </form></td>

    <td><form action="cores/menu.php" method="post" name="form5">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit53" value="Cores do website">

    </form></td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td><form action="comentarios/menu.php" method="post" name="form3">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit322" value="Coment&aacute;rios">

    </form></td>

    <td><form action="background_topo/menu.php" method="post" name="form14">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit142" value="Background Cabe&ccedil;alho">
    </form></td>

    <td><form action="pagina_inicial/menu.php" method="post" name="form10">

      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

      <input type="submit" name="Submit10" value="P&aacute;gina inicial do site ">

    </form></td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td><form action="ultimos_visitantes/ultimos_visitantes.php" method="post" name="form17">

          <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

          <input type="submit" name="Submit1722" value="&Uacute;ltimos visitantes">

    </form></td>

    <td><form action="background_navegacao/menu.php" method="post" name="form14">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit14" value="Background Navega&ccedil;&atilde;o">
    </form></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><form action="logo/menu.php" method="post" name="form7">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit72" value="Logotipo">
    </form></td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td><form action="publicidade/menu.php" method="post" name="form19">
      <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
      <input type="submit" name="Submit19" value="Publicidade">
    </form></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td width="19%">&nbsp;</td>

    <td>&nbsp;</td>

    <td width="35%">&nbsp;</td>

    <td width="28%">&nbsp;</td>
  </tr>
</table>

</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>