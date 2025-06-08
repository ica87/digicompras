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
<title>Historico do cliente</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {font-size: 9px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style3 {color: #0000FF; font-weight: bold;}
-->
</style>
</head>

<?
require '../../conect/conect.php';
error_reporting(E_ALL ^ E_NOTICE);

$dia_hoje = date('d');


?>

<?
$nfantasia = $_POST['nfantasia'];
$codigo_ficha = $_POST['codigo_ficha'];
$num_plano = $_POST['num_plano'];
$num_ficha = $_POST['num_ficha'];
$modelo = $_POST['modelo'];
$metal_entregue = $_POST['metal_entregue'];

$status = $_POST['status'];
$dia_envio = $_POST['dia_envio'];
$mes_envio = $_POST['mes_envio'];
$ano_envio = $_POST['ano_envio'];
$hora_envio = $_POST['hora_envio'];
$dataevolucao = "$dia_envio-$mes_envio-$ano_envio";

if($dia_hoje<="05"){
$data_envio = "$ano_envio-$mes_envio-$dia_envio";
}
else{
$data_envio = $_POST['data_envio'];
}



if($metal_entregue=="Sim"){
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `metal_entregue` = '$metal_entregue' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao);

}





$sql = "SELECT * FROM clientes where nfantasia = '$nfantasia'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_cliente = $linha[0];
$razaosocial = $linha[1];
$cnpj = $linha[2];
$nfantasia = $linha[3];
$inscr_est = $linha[4];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cidade = $linha[8];
$estado = $linha[9];
$cep = $linha[10];
$email_cliente = $linha[11];
$comprador = $linha[12];
$fone = $linha[13];
$fax = $linha[14];
$celular = $linha[15];

$skype = $linha[40];
$data_nasc = $linha[41];
$mes_nasc = $linha[42];
$salario = $linha[43];
$limite = $linha[44];
$empresa_trab = $linha[45];
$tel_trab = $linha[46];
$nome1 = $linha[47];
$cpf1 = $linha[48];
$nome2 = $linha[49];
$cpf2 = $linha[50];
$nome3 = $linha[51];
$cpf3 = $linha[52];

}



if($status=="Enviado"){
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `status` = '$status',`data_envio` = '$data_envio',`dia_envio` = '$dia_envio',`mes_envio` = '$mes_envio',`ano_envio` = '$ano_envio',`hora_envio` = '$hora_envio' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao);


$sql = "SELECT * FROM fichas where codigo_ficha = '$codigo_ficha' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



//$dia = $linha[1];
//$mes = $linha[2];
//$ano = $linha[3];
//$hora = $linha[4];
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
$modelo = $linha[20];
$metal_entregue = $linha[21];
$dia_baixa = $linha[22];
$mes_baixa = $linha[23];
$ano_baixa = $linha[24];
$hora_baixa = $linha[25];
$valor_unit_empresa = $linha[26];
$total_ficha_empresa = $linha[27];
$saldo = $linha[28];
$obs = $linha[43];


}

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador = $linha[1];
$cel_operador = $linha[19];
$email_operador = $linha[20];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
//$estab_pertence_op = $linha[44];
//$cidade_estab_pertence_op = $linha[45];
//$tel_estab_pertence_op = $linha[46];
//$email_estab_pertence_op = $linha[47];

}



$comando = "insert into contas_a_receber(codigo_cliente,datacadastro,horacadastro,nfantasia_cliente,razaosocial,cnpj,inscr_est,endereco,numero,bairro,cidade,estado,cep,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,dia,mes,ano,codigo_ficha,num_plano,num_ficha,pespontador,valor_pespontador,total_pespontador,coladeira1,valor_coladeira1,total_coladeira1,coladeira2,valor_coladeira2,total_coladeira2,total_ficha,valor_unit_empresa,mensalidade,quitacao,total_ficha_empresa,modelo,quant_pares) values('$codigo_cliente','$dataevolucao','$hora_envio','$nfantasia','$razaosocial','$cnpj','$inscr_est','$endereco','$numero','$bairro','$cidade','$estado','$cep','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$dia_envio','$mes_envio','$ano_envio','$codigo_ficha','$num_plano','$num_ficha','$pespontador','$valor_pespontador','$total_pespontador','$coladeira1','$valor_coladeira1','$total_coladeira1','$coladeira2','$valor_coladeira2','$total_coladeira2','$total_ficha','$valor_unit_empresa','$total_ficha_empresa','Em Aberto','$total_ficha_empresa','$modelo','$quant_pares')";

mysql_query($comando,$conexao);








}





?>

<?

//----------AQUI ALTERA O STATUS E DISPARA O EMAIL PARA A FABRICA INFORMANDO A POSIÇÃO DA FICHA------
if(empty($status)){

}
else{
if($status<>"Enviado"){
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`fichas` set `status` = '$status' where `fichas`. `codigo_ficha` = '$codigo_ficha' limit 1 ";
}

mysql_query($comando,$conexao);


$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_empresa = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! A ficha $num_ficha do plano $num_plano na $nfantasia_empresa teve uma evolução  \n";
	$mens  .=  " \n";
	$mens  .=  "Seção: ".$status."                                                       \n";
	$mens  .=  "Data: ".$dia_envio."-".$mes_envio."-".$ano_envio."                                                    \n";
	$mens  .=  "Hora: ".$hora_envio."                                                    \n\n";
	
	$mens  .=  "Nº do Plano: ".$num_plano."                                                    \n";
	$mens  .=  "Nº da ficha: ".$num_ficha."                                                    \n";
	$mens  .=  "Modelo: ".$modelo."                                                    \n";
	$mens  .=  "Metal Entregue? ".$metal_entregue."                                                    \n\n";
	

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Evolução de Ficha em ".$dataevolucao, $mens,"From:".$email_dest."\r\nBcc:".$email_cliente);
	$envia  =  mail($email_cliente, "Evolução de Ficha em ".$dataevolucao, $mens,"From:".$email_dest);


}
}

//FIM DO SCRIPT DE ALTERAÇÃO DE STATUSO E ENVIO DE EMAIL PARA A FABRICA



?>

  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>





<?
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<body bgcolor="#<? printf("$linha[1]"); ?>"> 
<? } ?>
<table width="100%" border="0" cellspacing="4">
  <tr>
    <td>&nbsp;</td>
    <td><form name="form1" method="post" action="selecione_cliente_para_abrir_orcamento.php">
      <input type="submit" name="Submit" value="Voltar a sele&ccedil;&atilde;o de cliente">
      <span class="style1">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </span>
    </form>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>C&oacute;digo:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $codigo_cliente; ?></strong></font></strong></td>
    <td><strong>Comprador:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $comprador; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><strong>Raz&atilde;o Social:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $razaosocial; ?></strong></font></strong></td>
    <td><strong>Celular:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $celular; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><strong>Nome Fantasia:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $nfantasia; ?></strong></font></strong></td>
    <td><strong>E-Mail:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $email_cliente; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td width="11%"><strong>Endere&ccedil;o:</strong></td>
    <td width="40%"><strong><font color="#0000FF"><strong><? echo $endereco; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero; ?></strong></font></strong></font></strong></td>
    <td width="13%"><strong>CEP:</strong></td>
    <td width="36%"><strong><font color="#0000FF"><strong><? echo $cep; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><p><strong>Bairro:</strong></p></td>
    <td><strong><font color="#0000FF"><strong><? echo $bairro; ?></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Cidade:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $cidade; ?> Estado <font color="#0000FF"><strong><? echo $estado; ?></strong></font></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Telefone:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $fone; ?></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
<table width="100%" border="0" cellspacing="5">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td width="19%">&nbsp;</td>
      <td colspan="2"><strong><font color="#0000FF" size="4">Inlus&atilde;o de Ficha</font></strong></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><form action="ficha.php" method="post" name="form5">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>
        <strong>
        <select name="modelo" id="grupo">
          <option selected>Informe o Modelo</option>
          <?


    $sql = "select * from modelos order by modelo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['modelo']."</option>";
    }
?>
        </select>
        <select name="grupo" id="condpagto">
          <option selected>Informe o Grupo</option>
          <?


    $sql = "select * from grupos order by grupo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['grupo']."</option>";
    }
?>
        </select>
        </strong>
        <strong><font color="#0000FF">
        <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
        <input name="hora" type="hidden" id="hora" value="<? echo date('H:i:s'); ?>">
        </font></strong>
        <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo_cliente; ?>">
        <input type="submit" name="Submit4" value="Incluir Ficha">
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="39%"><div align="center"><strong>PLANOS E FICHAS J&Aacute; EM PRODU&Ccedil;&Atilde;O  PARA ESSE CLIENTE</strong></div></td>
      <td width="42%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><table width="140%" border="0">
        <tr>
          <td width="3%" height="15"><div align="center" class="style2">Data entrada</div></td>
          <td width="4%"><div align="center" class="style2">N&ordm; Plano</div></td>
          <td width="6%"><div align="center" class="style2">N&ordm; Ficha</div></td>
          <td width="11%"><div align="center"><span class="style2">Status</span></div></td>
          <td width="4%"><div align="center" class="style2">Metal Entregue?</div></td>
          <td width="14%"><div align="center"><span class="style2">Data Envio para f&aacute;brica</span></div></td>
          <td width="4%"><div align="center" class="style2">Quant Pares</div></td>
          <td width="4%"><div align="center" class="style2">N&ordm; Modelo</div></td>
          <td width="5%"><div align="center" class="style2">Metal Entregue?</div></td>
          <td width="3%"><div align="center" class="style2">Caixa</div></td>
          <td width="3%"><div align="center" class="style2">Grupo</div></td>
          <td width="4%"><div align="center" class="style2">R$ Unit Pesponto</div></td>
          <td width="4%"><div align="center" class="style2">R$ Total Pesponto</div></td>
          <td width="4%"><div align="center" class="style2">R$ Unit Coladeira 1 </div></td>
          <td width="4%"><div align="center" class="style2">R$ Total Coladeira 1 </div></td>
          <td width="4%"><div align="center" class="style2">R$ Unit Coladeira 2</div></td>
          <td width="4%"><div align="center" class="style2">R$ Total Coladeira 2</div></td>
          <td width="3%"><div align="center" class="style2">R$ Total Ficha</div></td>
          <td width="3%"><div align="center" class="style2">R$ Unit Empresa</div></td>
          <td width="3%"><div align="center" class="style2">R$ Total Empresa</div></td>
          <td width="6%"><div align="center"><span class="style2">Saldo</span></div></td>
        </tr>
<?

$sql = "SELECT * FROM fichas where codigo_cliente = '$codigo_cliente' and status <> 'Enviado' order by num_plano,num_ficha asc";
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
$modelo = $linha[20];
$metal_entregue = $linha[21];
$dia_baixa = $linha[22];
$mes_baixa = $linha[23];
$ano_baixa = $linha[24];
$hora_baixa = $linha[25];
$valor_unit_empresa = $linha[26];
$total_ficha_empresa = $linha[27];
$saldo = $linha[28];
$codigo_cliente = $linha[29];
$cnpj = $linha[30];
$nfantasia = $linha[34];
$caixa = $linha[62];



?>
        <tr>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo $num_plano; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2">
            <form action="editar_ficha.php" method="post" name="form2">
              <span class="style3"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <strong><font color="#0000FF"><strong><? if($status=="Enviado"){ echo $num_ficha; } ?></strong></font></strong>
              <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
              <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
              <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
              <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
              <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
              <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Editar $num_ficha'>"; } ?>
            </form>
          </div></td>
          <td><div align="center" class="style2 style2">
            <form name="form3" method="post" action="">
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

echo"<select name='status' id='status'>";
  echo "<option selected>".$status."</option>";

    $sql = "select * from status where status <> 'Enviado' and status <> '$status' order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
  
   }
      echo"</select>";
      
}
?>
                        <? if($status<>"Enviado"){ echo "<input type='submit' name='button' id='button' value='Alterar'>"; } ?>
            </form>
            </div></td>
          <td valign="bottom"><div align="center">
            <form action="historico_cliente.php" method="post" name="form2">
              
              <span class="style2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
               <strong>
              <? if($metal_entregue<>"Não"){ echo $metal_entregue; } ?>
              
              <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
              <font color="#0000FF"><font color="#0000FF"><font color="#0000FF"><font color="#0000FF"><font color="#0000FF">
              <input name="metal_entregue" type="hidden" id="metal_entregue" value="Sim">
              <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
              <input name="dia_envio" type="hidden" id="dia_envio">
              <input name="mes_envio" type="hidden" id="mes_envio">
              <input name="ano_envio" type="hidden" id="ano_envio">
              <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
              </font></font></font></font></font>
              <? if($metal_entregue=="Não"){ echo "<input type='submit' name='button2' id='button2' value='Receber Metal'>"; } ?>
               </strong></span><strong>                              </strong>
            </form>
          </div></td>
          <td><div align="center">
            <form action="historico_cliente.php" method="post" name="form2">
              <span class="style3">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
              <strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF"><strong><font color="#0000FF">
              <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
              <input name="status" type="hidden" id="status" value="Enviado">
                    <?
if($metal_entregue=="Não"){

}
else{


if($dia_hoje>"05"){
echo " <input name='dia_envio' type='hidden' id='dia_envio' value='$dia_hoje'>";
}
else{
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
?>

                                  <?
if($metal_entregue=="Não"){

}
else{

$mes_atual = date('m');

if($dia_hoje>"05"){
echo " <input name='mes_envio' type='hidden' id='mes_envio' value='$mes_atual'>";
}
else{

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
?>
                                  <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
              <input name="data_envio" type="hidden" id="data_envio" value="<? echo date('Y-m-d'); ?>">
              <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
              </font></strong></font></strong></font></strong></font></strong></font></strong>
              <? if($metal_entregue=="Sim"){ echo "<input type='submit' name='button2' id='button2' value='Enviar p/ Fábrica'>"; } ?>
            </form>
          </div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo $quant_pares; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo $modelo; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo $metal_entregue; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo $caixa; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo $grupo; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_pespontador; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_pespontador; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira1; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira1; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_coladeira2; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_coladeira2; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2 style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></font></strong></div></td>
          <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "R$ ".$saldo; ?></strong></font></strong></div></td>
        </tr>
<?
}
?>
        <tr>
          <td colspan="3"><div align="center"><strong>Observa&ccedil;&otilde;es:</strong></div></td>
          <td colspan="18"><strong><font color="#0000FF"><strong><? echo $obs; ?></strong></font></strong></td>
        </tr>
        <tr>
          <td colspan="3"><div align="center"><strong>Justificativa:</strong></div>            <div align="center"></div>            <div align="center"></div></td>
          <td colspan="18"><strong><font color="#0000FF"><strong><? echo $justificativa; ?></strong></font></strong>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div></td>
        </tr>
      </table></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
