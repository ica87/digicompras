<?php
session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
else //se n�o for...
header("Location: alerta.php");

?>

<html>
<head>
<title>EDI&Ccedil;&Atilde;O DE FICHAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {font-size: 9px}
-->
</style>
</head>
<?

require '../../conect/conect.php';

$codigo_ficha = $_POST['codigo_ficha'];
$num_plano = $_POST['num_plano'];
$num_ficha = $_POST['num_ficha'];
$grupo = $_POST['grupo'];
$modelo = $_POST['modelo'];
$codigo_cliente = $_POST['codigo_cliente'];
$justificativa = $_POST['justificativa'];





if($justificativa == ""){

echo "<script>

alert('ATEN��O!!!... VOC� EST� PRESTES A EDITAR UMA FICHA QUE J� FOI ENVIADA!!!... � NECESS�RIO JUSTIFICAR ESSA A��O!!!...');

</script>";

}




$sql = "SELECT * FROM modelos where modelo = '$modelo'";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

//$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$nivel_dificuldade = $linha[13];

}





			
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>


<body bgcolor="#<? printf("$linha[1]"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>



<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>

  <?

$sql = "SELECT * FROM clientes where codigo = '$codigo_cliente'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

//$codigo_cliente = $linha[0];
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
$email = $linha[11];
$comprador = $linha[12];
$fone = $linha[13];
$fax = $linha[14];
$celular = $linha[15];

$skype = $linha[41];
$data_nasc = $linha[42];
$mes_nasc = $linha[43];
$salario = $linha[44];
$limite = $linha[45];
$empresa_trab = $linha[46];
$tel_trab = $linha[47];
$nome1 = $linha[48];
$cpf1 = $linha[49];
$nome2 = $linha[50];
$cpf2 = $linha[51];
$nome3 = $linha[52];
$cpf3 = $linha[53];
}
?>

<?

$sql = "SELECT * FROM fichas where codigo_ficha = '$codigo_ficha' limit 1";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {



//$codigo_ficha = $linha[0];
$dia = $linha[1];
$mes = $linha[2];
$ano = $linha[3];
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
$dia_envio = $linha[22];
$mes_envio = $linha[23];
$ano_envio = $linha[24];
$hora_envio = $linha[25];
$valor_unit_empresa = $linha[26];
$total_ficha_empresa = $linha[27];
$saldo = $linha[28];
$codigo_cliente = $linha[29];
$cnpj = $linha[32];
$obs = $linha[43];
$caixa = $linha[62];
$justificativa = $linha[63];

$status_producao = $linha[71];

$dia_termino_producao = $linha[84];
$mes_termino_producao = $linha[85];
$ano_termino_producao = $linha[86];
$data_termino_producao = $linha[87];
$hora_termino_producao = $linha[88];

}
?>


<form name="form2" method="post" action="">
</form>
<form name="form1" method="post" action="../relatorios/menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<p>
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";
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
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="calcula_editar_ficha_pos_envio_para_fabrica.php">
<p>
</p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><div align="center"><strong>
      <input name="codigo_ficha" type="hidden" id="codigo_ficha" value="<? echo $codigo_ficha; ?>">
FICHA DE PRODU&Ccedil;&Atilde;O <font color="#0000FF"><strong><? echo $num_ficha; ?></strong></font> - EDI&Ccedil;&Atilde;O P&Oacute;S ENVIO PARA CLIENTE</strong></div></td>
  </tr>
</table><p>
<table width="100%" border="1" bordercolor="#000000">
  <tr>
    <td><table width="100%" border="0" cellspacing="4">
      
      <tr>
        <td><strong>C&oacute;digo:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $codigo_cliente; ?>
          <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
        </strong></font></strong></td>
        <td><strong>Comprador:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $comprador; ?><font color="#0000FF"><strong>
          <input name="comprador" type="hidden" id="comprador" value="<? echo $comprador; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><strong>Raz&atilde;o Social:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $razaosocial; ?><font color="#0000FF"><strong>
          <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $razaosocial; ?>">
          <input name="cnpj" type="hidden" id="cnpj" value="<? echo $cnpj; ?>">
        </strong></font></strong></font></strong></td>
        <td><strong>Celular:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $celular; ?><font color="#0000FF"><strong>
          <input name="celular" type="hidden" id="celular" value="<? echo $celular; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><strong>Nome Fantasia:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $nfantasia; ?><font color="#0000FF"><strong>
          <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
        </strong></font></strong></font></strong></td>
        <td><strong>E-Mail:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $email; ?><font color="#0000FF"><strong>
          <input name="email" type="hidden" id="email" value="<? echo $email; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td width="15%"><strong>Endere&ccedil;o:</strong></td>
        <td width="22%"><strong><font color="#0000FF"><strong><? echo $endereco; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero; ?><font color="#0000FF"><strong>
          <input name="endereco" type="hidden" id="endereco" value="<? echo $endereco; ?>">
        </strong></font><font color="#0000FF"><strong>
        <input name="numero" type="hidden" id="numero" value="<? echo $numero; ?>">
        </strong></font></strong></font></strong></font></strong></td>
        <td width="14%"><strong>CEP:</strong></td>
        <td width="49%"><strong><font color="#0000FF"><strong><? echo $cep; ?><font color="#0000FF"><strong>
          <input name="cep" type="hidden" id="cep" value="<? echo $cep; ?>">
        </strong></font></strong></font></strong></td>
      </tr>
      <tr>
        <td><p><strong>Bairro:</strong></p></td>
        <td><strong><font color="#0000FF"><strong><? echo $bairro; ?><font color="#0000FF"><strong>
          <input name="bairro" type="hidden" id="bairro" value="<? echo $bairro; ?>">
        </strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Cidade:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $cidade; ?> Estado <font color="#0000FF"><strong><? echo $estado; ?><font color="#0000FF"><strong>
          <input name="cidade" type="hidden" id="cidade" value="<? echo $cidade; ?>">
        </strong></font><font color="#0000FF"><strong>
        <input name="estado" type="hidden" id="estado" value="<? echo $estado; ?>">
        </strong></font></strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Telefone:</strong></td>
        <td><strong><font color="#0000FF"><strong><? echo $fone; ?><font color="#0000FF"><strong>
          <input name="fone" type="hidden" id="fone" value="<? echo $fone; ?>">
        </strong></font></strong></font></strong></td>
        <td>&nbsp;</td>
        <td><strong><font color="#0000FF">
          <input name="dia" type="hidden" id="dia" value="<? echo date('d'); ?>">
          <input name="mes" type="hidden" id="mes" value="<? echo date('m'); ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo date('Y'); ?>">
          <input name="hora" type="hidden" id="hora" value="<? echo date('H:i:s'); ?>">
        </font></strong></td>
      </tr>
      <tr>
        <td><strong>Status</strong></td>
        <td><select name="status" id="select6">
        <option selected><? echo $status; ?></option>
          <?


    $sql = "select * from status where status <> 'Finalizado' order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
    }
?>
                </select></td>
        <td><strong>Data T&eacute;rmino Produ&ccedil;&atilde;o</strong></td>
        <td><?
$ano_atual = date('Y');
$ano_anterior = date('Y')-1;
$ano_posterior = date('Y')+1;
		  ?>
          <select name="dia_termino_producao" id="dia_termino_producao">
            <option selected><? echo $dia_termino_producao; ?></option>
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
          <select name="mes_termino_producao" id="mes_termino_producao">
            <option selected><? echo $mes_termino_producao; ?></option>
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
          </select>
          <select name="ano_termino_producao" id="ano_termino_producao">
            <option selected>
              <? if(empty($ano_termino_producao)){echo $ano_atual;}else{ echo $ano_termino_producao; } ?>
              </option>
            <option><? echo $ano_anterior; ?></option>
            <option><? echo $ano_posterior; ?></option>
          </select></td>
      </tr>
      <tr>
        <td><strong>Status da Produ&ccedil;&atilde;o</strong></td>
        <td><select name="status_producao" id="status_producao">
          <option selected><? echo $status_producao; ?></option>
          <?


    $sql = "select * from status where status <> 'Enviado' order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
    }
?>
        </select></td>
        <td><strong>Data Envio:</strong></td>
        <td><strong>
          <select name="dia_envio" id="dia_envio">
            <option selected><? echo $dia_envio; ?></option>
            <?


    $sql = "select * from fichas where dia_envio <> '' group by dia_envio order by dia_envio desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['dia_envio']."</option>";
    }
?>
          </select>
          <select name="mes_envio" id="mes_envio">
            <option selected><? echo $mes_envio; ?></option>
            <?


    $sql = "select * from fichas where mes_envio <> '' group by mes_envio order by mes_envio desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['mes_envio']."</option>";
    }
?>
          </select>
          <select name="ano_envio" id="ano_envio">
            <option selected><? echo $ano_atual; ?></option>
            <option><? echo $ano_anterior; ?></option>
            <option><? echo $ano_posterior; ?></option>
          </select>
        </strong></td>
      </tr>
    </table></td>
</tr>
</table>


<table width="100%" border="0">
  <tr>
    <td width="7%" height="15"><div align="center" class="style2">Data entrada</div></td>
    <td width="10%"><div align="center" class="style2">N&ordm; Plano</div></td>
    <td width="11%"><div align="center" class="style2">N&ordm; Ficha</div></td>
    <td width="14%"><div align="center"><span class="style2">Status</span></div></td>
    <td width="7%"><div align="center" class="style2">Quant Pares</div></td>
    <td width="9%"><div align="center" class="style2">N&ordm; Modelo</div></td>
    <td width="7%"><div align="center" class="style2">Caixa</div></td>
    <td width="5%"><div align="center" class="style2">Grupo</div></td>
    <td width="7%"><div align="center" class="style2">R$ Unit Pesponto</div></td>
    <td width="8%"><div align="center" class="style2">R$ Unit Coladeira 1 </div></td>
    <td width="8%"><div align="center" class="style2">R$ Unit Coladeira 2</div></td>
    <td width="7%"><div align="center" class="style2">R$ Unit Empresa</div></td>
    </tr>
  <tr>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo "$dia-$mes-$ano $hora"; ?></strong></font></strong></div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
      <input name="num_plano" type="text" id="num_plano" value="<? echo $num_plano; ?>" size="10">
    </strong></font></strong></div></td>
    <td><div align="center" class="style2">
      <input name="num_ficha" type="text" id="num_ficha" value="<? echo $num_ficha; ?>" size="10">
    </div></td>
    <td><div align="center" class="style2"><strong>
      <select name="status" id="status">
        <option selected><? echo $status; ?></option>
        <?


    $sql = "select * from status order by status asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['status']."</option>";
    }
?>
      </select>
      </strong></div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
      <input name="quant_pares" type="text" id="quant_pares" value="<? echo $quant_pares; ?>" size="10">
    </strong></font></strong></div></td>
    <td><div align="center" class="style2"><strong>
      <select name="modelo" id="modelo">
        <option selected><? echo $modelo; ?></option>
        <?


    $sql = "select * from modelos order by modelo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['modelo']."</option>";
    }
?>
      </select>
    </strong></div></td>
    <td><div align="center">
      <input name="caixa" type="text" id="caixa" value="<? echo $caixa; ?>" size="10">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
      <select name="grupo" id="grupo">
        <option selected><? echo $grupo; ?></option>
        <?


    $sql = "select * from grupos order by grupo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['grupo']."</option>";
    }
?>
      </select>
      </strong></font></strong></div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong>
</strong></font></strong>
        <strong><font color="#0000FF"><strong><? echo $preco_pespontador; ?></strong></font></strong>
        <input name="valor_pespontador" type="hidden" id="valor_pespontador" value="<? echo $preco_pespontador; ?>">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo $preco_coladeira1; ?></strong></font></strong>
      <input name="valor_coladeira1" type="hidden" id="valor_coladeira1" value="<? echo $preco_coladeira1; ?>">
    </div></td>
    <td><div align="center" class="style2"><strong><font color="#0000FF"><strong><? echo $preco_coladeira2; ?></strong></font></strong><span class="style2">
      <input name="valor_coladeira2" type="hidden" id="valor_coladeira2" value="<? echo $preco_coladeira2; ?>">
    </span></div></td>
    <td><div align="center" class="style2">
      <strong><font color="#0000FF"><strong><? echo $preco_empresa; ?></strong></font></strong>
      <input name="valor_unit_empresa" type="hidden" id="valor_unit_empresa" value="<? echo $preco_empresa; ?>">
    </div></td>
    </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>
<br>
<table width="100%" border="0" bordercolor="#000000">
  <tr>
    <td width="12%"><strong><font color="#0000FF">
      <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">
      <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">
      <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">
      <input name="estabelecimento" type="hidden" id="estabelecimento" value="<? echo $estabelecimento_op; ?>">
      <input name="cidade_estabelecimento" type="hidden" id="cidade_estabelecimento2" value="<? echo $cidade_estabelecimento_op; ?>">
      <input name="tel_estabelecimento" type="hidden" id="tel_estabelecimento" value="<? echo $tel_estabelecimento_op; ?>">
      <input name="email_estabelecimento" type="hidden" id="email_estabelecimento" value="<? echo $email_estabelecimento_op; ?>">
      </font></strong></td>
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="38%"><div align="center"><strong>Observa&ccedil;&otilde;es</strong></div></td>
    <td width="32%"><div align="center"><strong>Justificativa</strong></div></td>
    <td width="30%">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
      <textarea name="obs" cols="50" rows="7" readonly="readonly" id="obs"><? echo $obs; ?></textarea>
    </div></td>
    <td><textarea name="justificativa" cols="50" rows="7" id="justificativa"><? echo $justificativa; ?></textarea></td>
    <td valign="bottom"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Re-Calcular Ficha P&oacute;s-Envio"></td>
  </tr>
</table>

</form>
<p></p>
<?

$comando = "insert into historico_alteracoes_fichas(dia,mes,ano,hora,status,num_plano,num_ficha,grupo,quant_pares,pespontador,valor_pespontador,total_pespontador,coladeira1,valor_coladeira1,total_coladeira1,coladeira2,valor_coladeira2,total_coladeira2,total_ficha,modelo,metal_entregue,valor_unit_empresa,total_ficha_empresa,saldo,codigo_cliente,razaosocial,cnpj,nfantasia,endereco,numero,bairro,cidade,estado,fone,comprador,celular,email,cep,operador,cel_operador,email_operador,estabelecimento,cidade_estabelecimento,tel_estabelecimento,email_estabelecimento,obs,caixa,dia_envio,mes_envio,ano_envio,justificativa)

values('$dia','$mes','$ano','$hora','$status','$num_plano','$num_ficha','$grupo','$quant_pares','$pespontador','$valor_pespontador','$total_pespontador','$coladeira1','$valor_coladeira1','$total_coladeira1','$coladeira2','$valor_coladeira2','$total_coladeira2','$total_ficha','$modelo','$metal_entregue','$valor_unit_empresa','$total_ficha_empresa','$saldo','$codigo_cliente','$razaosocial','$cnpj','$nfantasia','$endereco','$numero','$bairro','$cidade','$estado','$fone','$comprador','$celular','$email','$cep','$operador','$cel_operador','$email_operador','$estabelecimento','$cidade_estabelecimento','$tel_estabelecimento','$email_estabelecimento','$obs','$caixa','$dia_envio','$mes_envio','$ano_envio','$justificativa')";

mysql_query($comando,$conexao) or die("Erro ao gravar ficha no sistema!");

?>
</body>
</html>
