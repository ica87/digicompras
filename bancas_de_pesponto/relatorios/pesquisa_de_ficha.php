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
<title>Sele&ccedil;&atilde;o de clientes para cadastro de fichas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style5 {color: #0000FF}
.style6 {font-size: 9px; font-weight: bold; }
.style7 {color: #000000}
.style11 {font-size: 9px; color: #000000; font-weight: bold; }
.style13 {
	font-weight: bold;
	color: #000000;
}
.style15 {font-size: 18px}
.style18 {font-size: 14px}
-->
</style></head>

<body>
<p>        
<?



require '../../conect/conect.php';

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
//$data_envio = "$ano-$mes-$dia";
$data_envio = $_POST['data_envio'];



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
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>


<p align="center" class="style5"><strong>PESQUISA VISUAL DE FICHA</strong></p>

<table width="100%" border="0">
  <tr>
    <td width="4%" height="15"><div align="center" class="style4">Data entrada</div></td>
    <td width="5%"><div align="center" class="style4">N&ordm; Plano</div></td>
    <td width="6%"><div align="center" class="style4">N&ordm; Ficha</div></td>
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
  $total_ficha_formatado = number_format($total_ficha, 2, ",", ".");
  
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



?>
  <tr>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo $num_plano; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7">
      <form action="../fichas/editar_ficha_apos_envio_para_fabrica.php" method="post" name="form2">
        <span class="style2">
          <span class="style18">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span></span> <span class="style18"><strong><strong>
            <? //if($status=="Enviado"){ echo $num_ficha; } 
			echo $num_ficha; ?>
          </strong></strong>
          <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
          <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
          <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
          <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>">
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
          <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
          <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano;  ?>">
          </span>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4 style7">
      <form name="form3" method="post" action="../fichas/historico_cliente.php">
        <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano" type="hidden" id="num_plano" value="<? echo $num_plano; ?>">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <strong><strong><strong><strong><strong>
          <input name="modelo" type="hidden" id="modelo" value="<? echo $modelo; ?>">
          <input name="metal_entregue" type="hidden" id="metal_entregue" value="<? echo $metal_entregue; ?>">
          <input name="dia_envio" type="hidden" id="dia_envio" value="<? echo date('d'); ?>">
          <input name="mes_envio" type="hidden" id="mes_envio" value="<? echo date('m'); ?>">
          <input name="ano_envio" type="hidden" id="ano_envio" value="<? echo date('Y'); ?>">
          <input name="hora_envio" type="hidden" id="hora_envio" value="<? echo date('H:i:s'); ?>">
          </strong></strong></strong></strong></strong>
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
    <td><div align="center" class="style4 style7">
      <form action="../fichas/editar_ficha_apos_envio_para_fabrica.php" method="post" name="form2">
        <span class="style2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          </span>
        <span class="style5"><strong><strong><? echo "$dia_envio-$mes_envio-$ano_envio $hora_envio"; ?></strong></strong>
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
          <? if($status=="Enviado"){ echo "<input type='submit' name='button' id='button' value='Edição Pós Envio'>"; } ?>
          </strong></strong></strong></strong></strong></span>
      </form>
    </div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo $quant_pares; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo $modelo; ?></strong></strong></div></td>
    <td><div align="center" class="style4 style5 style7">
      <form action="pesquisa_de_ficha.php" method="post" name="form2">
        <span class="style4">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <strong>
        <? if($metal_entregue<>"N&atilde;o"){ echo $metal_entregue; } ?>
        <input name="codigo_ficha" type="hidden" id="codigo_ficha5" value="<? echo $codigo_ficha; ?>">
        
        <input name="metal_entregue" type="hidden" id="metal_entregue" value="Sim">
        <input name="num_ficha" type="hidden" id="num_ficha" value="<? echo $num_ficha; ?>">
        <input name="dia_envio" type="hidden" id="dia_envio5">
        <input name="mes_envio" type="hidden" id="mes_envio5">
        <input name="ano_envio" type="hidden" id="ano_envio5">
        <input name="hora_envio" type="hidden" id="hora_envio5" value="<? echo date('H:i:s'); ?>">
        
        <? if($metal_entregue=="Não"){ echo "<input type='submit' name='button2' id='button2' value='Receber Metal'>"; } ?>
        </strong></span>
      </form>
    </div></td>
    <td><div align="center" class="style4 style7"><strong><strong><? echo $caixa; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo $grupo; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo "R$ ".$valor_pespontador; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo "R$ ".$total_pespontador; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo "R$ ".$valor_coladeira1; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo "R$ ".$total_coladeira1; ?></strong></strong></div></td>
    <td><div align="center" class="style4 style4 style7"><strong><strong><? echo "R$ ".$valor_coladeira2; ?></strong></strong></div></td>
    <td><div align="center" class="style4 style4 style7"><strong><strong><? echo "R$ ".$total_coladeira2; ?></strong></strong></div></td>
    <td><div align="center" class="style2 style2 style4 style7"><strong><strong><? echo "R$ ".$total_ficha; ?></strong></strong></div></td>
    <td><div align="center" class="style4 style4 style7"><strong><strong><? echo "R$ ".$valor_unit_empresa; ?></strong></strong></div></td>
    <td><div align="center" class="style4 style4 style7"><strong><strong><? echo "R$ ".$total_ficha_empresa; ?></strong></strong></div></td>
    <td><div align="center" class="style4 style4 style7"><strong><strong><? echo "R$ ".$saldo; ?></strong></strong></div></td>
  </tr>
  <?
}

if($reg>=2){

echo "<script>

alert('ATENÇÃO!!!... EXISTE MAIS DE 1 FICHA COM O MESMO NÚMERO!!!... VERIFIQUE ATENTAMENTE QUAL PLANO VOCÊ DESEJA ALTERAR!');

</script>";


	}



?>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="style5"><strong>HIST&Oacute;RICO DAS ALTERA&Ccedil;&Otilde;ES J&Aacute; REALIZADAS NESSA FICHA</strong></p>
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
  $total_ficha_formatado = number_format($total_ficha, 2, ",", ".");
  
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
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo "$dia_cadastro-$mes_cadastro-$ano_cadastro $hora"; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7"><strong><? echo $num_plano; ?></strong></div></td>
    <td class="style4"><div align="center" class="style2 style4 style7 style13">
      <form action="../fichas/editar_ficha_apos_envio_para_fabrica.php" method="post" name="form2" class="style18">
          
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
           
          <? //if($status=="Enviado"){ echo $num_ficha; } 
			echo $num_ficha; ?>
            
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha; ?>">
        <input name="grupo2" type="hidden" id="grupo2" value="<? echo $grupo; ?>">
        <input name="modelo2" type="hidden" id="modelo2" value="<? echo $modelo; ?>">
        <input name="codigo_cliente2" type="hidden" id="codigo_cliente2" value="<? echo $codigo_cliente; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano;  ?>">
      </form>
    </div></td>
    <td class="style4"><div align="center" class="style4 style7 style13">
      <form name="form3" method="post" action="../fichas/historico_cliente.php">
        <input name="nfantasia2" type="hidden" id="nfantasia2" value="<? echo $nfantasia; ?>">
        <input name="codigo_ficha2" type="hidden" id="codigo_ficha2" value="<? echo $codigo_ficha; ?>">
        <input name="num_plano2" type="hidden" id="num_plano2" value="<? echo $num_plano; ?>">
        <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha; ?>">
        
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
              <input name="num_ficha2" type="hidden" id="num_ficha2" value="<? echo $num_ficha;  ?>">
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
<p>&nbsp;</p>
</body>
</html>
