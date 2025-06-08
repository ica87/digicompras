<html>

<head>

<title>COMUNICADO DE VENDA DE VE&Iacute;CULO</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require 'conect/conect.php';





$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg++;

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <?

if($reg==1){

echo "</tr><tr>";

$reg=0;

}

?>

  

<? } ?>









<?

$codigo = $_POST['codigo'];

$concessionaria = $_POST['concessionaria'];

$cnpj = $_POST['cnpj'];



$chassi = $_POST['chassi'];

$renavam = $_POST['renavam'];



$cnpj = $_SESSION['cnpj'];

$data_hoje = $_SESSION['data_hoje'];





if($chassi==""){



$sql = "SELECT * FROM veiculos where renavam = '$renavam'";



}

else{



$sql = "SELECT * FROM veiculos where chassi = '$chassi'";



}

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {



$codigo_veiculo = $linha[0];

$datacadastro = $linha[1];

$horacadastro = $linha[2];

$operador = $linha[3];

$cel_operador = $linha[4];

$email_operador = $linha[5];

$estabelecimento = $linha[6];

$cidade_estabelecimento = $linha[7];

$tel_estabelecimento = $linha[8];

$email_estabelecimento = $linha[9];

$concessionaria = $linha[10];

$cnpj_concessionaria = $linha[11];

$tel_concessionaria = $linha[12];

$email_concessionaria = $linha[13];

$cidade_concessionaria = $linha[14];

$estado_concessionaria = $linha[15];

$veiculo = $linha[16];

$ano = $linha[17];

$modelo = $linha[18];

$chassi = $linha[19];

$renavam = $linha[20];

$placa = $linha[21];

$obs_veiculo = $linha[22];

$dia_inicio_contrato = $linha[23];

$mes_inicio_contrato = $linha[24];

$ano_inicio_contrato = $linha[25];

$dia_termino_contrato = $linha[26];

$mes_termino_contrato = $linha[27];

$ano_termino_contrato = $linha[28];

$nome = $linha[29];

$alcunha = $linha[30];

$data_nasc = $linha[31];

$mes_nasc = $linha[32];

$sexo = $linha[33];

$estadocivil = $linha[34];

$cpf = $linha[35];

$rg = $linha[36];

$orgao = $linha[37];

$emissao = $linha[38];

$pai = $linha[39];

$mae = $linha[40];

$endereco = $linha[41];

$numero = $linha[42];

$bairro = $linha[43];

$complemento = $linha[44];

$cidade = $linha[45];

$estado = $linha[46];

$cep = $linha[47];

$telefone = $linha[48];

$celular = $linha[49];

$email = $linha[50];

$obs = $linha[51];



$status = $linha[61];





?>

<? } ?>

<?



$cnpj = $_SESSION['cnpj'];

$data_hoje = $_SESSION['data_hoje'];





$sql = "SELECT * FROM estabelecimentos where cnpj = '$cnpj' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$nfantasia = $linha[2];

$cnpj = $linha[3];

$cidade_concessionaria = $linha[10];

$estado_concessionaria = $linha[11];

$tel_concessionaria = $linha[12];

$email_concessionaria = $linha[14];



}



?>

<div align="center">

  <p><strong><font color="#FF0000">ATEN&Ccedil;&Atilde;O!!!.</font>.. AO PREENCHER O FORMUL&Aacute;RIO ABAIXO E CLICAR NO BOT&Atilde;O &quot;Efetivar contrato de garantia&quot; VOC&Ecirc; EST&Aacute; </strong></p>

  <p><strong>ADQUIRINDO O SERVI&Ccedil;O  DE GARANTIA DE MOTOR E C&Acirc;MBIO DE SEU VEICULO E ACEITANDO TODAS AS CL&Aacute;USULAS DO CONTRATO QUE SER&Aacute; ENVIADO PARA SEU ENDERE&Ccedil;O INFORMADO!</strong>

    </p>

</div>

<div align="center"></div>

<form name="form1" method="post" action="grava_cadcli.php">



<table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="5"><div align="center"><strong>INFORMA&Ccedil;&Otilde;ES SOBRE O CONTRATO </strong></div></td>

    </tr>

    <tr> 

      <td>N&ordm; Contrato </td>

      <td><strong><font color="#0000FF"><? echo "Será informado ao término da operação!"; ?></font>

      </strong></td>

      <td>Status: <strong><? echo "Ativo"; ?>

          <input name="status" type="hidden" id="status2" value="<? echo "Ativo"; ?>">

          <input name="status_pagto" type="hidden" id="status_pagto" value="<? echo "Em Aberto"; ?>">

</strong></td>

      <td><strong>

</strong></td>

      <td><strong>Valor <font color="#000000"><? echo "Sob Consulta"; ?> / por ano</font><font color="#0000FF">

      <input name="valor" type="hidden" id="valor2" value="<? echo "235.00"; ?>">

      </font></strong></td>

    </tr>

    <tr>

      <td colspan="5"><div align="center"><strong>

        <input name="concessionaria" type="hidden" id="concessionaria" value="<? echo "PARTICULAR"; ?>">

        <input name="tel_concessionaria" type="hidden" id="tel_concessionaria2" value="<? echo $tel_concessionaria; ?>">

        <input name="cidade_concessionaria" type="hidden" id="cidade_concessionaria2" value="<? echo $cidade_concessionaria; ?>">

        <input name="cnpj_concessionaria" type="hidden" id="cnpj_concessionaria2" value="<? echo $cnpj_concessionaria; ?>">

        <font color="#0000FF">

        <input name="email_concessionaria" type="hidden" id="email_concessionaria2" value="<? echo $email_concessionaria; ?>">

        <input name="estado_concessionaria" type="hidden" id="estado_concessionaria2" value="<? echo $estado_concessionaria; ?>">

      </font>INFORMA&Ccedil;&Otilde;ES DO VE&Iacute;CULO </strong></div></td>

    </tr>

    <tr>

      <td>Ve&iacute;culo</td>

      <td>        <input name="veiculo" type="text" id="veiculo"></td>

      <td>Placas</td>

      <td colspan="2">        <input name="placa" type="text" id="placa"></td>

    </tr>

    <tr>

      <td>Ano</td>

      <td>        <input name="ano" type="text" id="ano"></td>

      <td>Modelo</td>

      <td colspan="2">        <input name="modelo" type="text" id="modelo"></td>

    </tr>

    <tr>

      <td>Chassi</td>

      <td>        <input name="chassi" type="text" id="chassi"></td>

      <td>Renavam</td>

      <td colspan="2">        <input name="renavam" type="text" id="renavam"></td>

    </tr>

    <tr>

      <td>Observa&ccedil;&otilde;es</td>

      <td colspan="4">        <input name="obs_veiculo" type="text" id="obs_veiculo" size="90"></td>

    </tr>

    <tr>

      <td colspan="5"><div align="center"><strong>INFORMA&Ccedil;&Otilde;ES DO CLIENTE </strong></div></td>

    </tr>

    <tr>

      <td>In&iacute;cio Contrato </td>

      <td><strong><font color="#0000FF">

        <select name="dia_inicio_contrato" id="dia_inicio_contrato">

          <option selected><? if($dia_inicio_contrato==""){echo date('d'); } else {echo $dia_inicio_contrato; } ?></option>

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

        <strong><font color="#0000FF"> </font></strong>

        <select name="mes_inicio_contrato" id="mes_inicio_contrato">

          <option selected><? if($mes_inicio_contrato==""){ echo date('m'); } else {echo $mes_inicio_contrato; } ?></option>

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

        <strong><font color="#0000FF">

        <select name="ano_inicio_contrato" id="ano_inicio_contrato">

          <option selected><? if($ano_inicio_contrato==""){ echo date('Y'); } else {echo $ano_inicio_contrato; } ?></option>

          <option>

          <?



$ano_atual = date('Y');

$proximo_ano = bcadd($ano_atual,1);

echo "$ano_atual";



	  ?>

          </option>

          <option><? echo "$proximo_ano"; ?></option>

        </select>

        </font></strong></font></strong></td>

      <td>T&eacute;rmino Contrato </td>

      <td colspan="2"><strong><font color="#0000FF">

        <select name="dia_termino_contrato" id="select4">

          <option selected><? if($dia_termino_contrato==""){echo date('d'); } else {echo $dia_termino_contrato; } ?></option>

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

        <strong><font color="#0000FF"> </font></strong>

        <select name="mes_termino_contrato" id="select5">

          <option selected><? if($mes_termino_contrato==""){ echo date('m'); } else {echo $mes_termino_contrato; }?></option>

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

        <strong><font color="#0000FF">

        <select name="ano_termino_contrato" id="ano_termino_contrato">

          <option selected><? if($ano_termino_contrato==""){ echo date('Y')+1; } else {echo $ano_termino_contrato; } ?></option>

          <option>

          <?



$ano_atual = date('Y');

$proximo_ano = bcadd($ano_atual,1);

echo "$ano_atual";



	  ?>

          </option>

          <option><? echo "$proximo_ano"; ?></option>

        </select>

        </font></strong></font></strong></td>

    </tr>

    <tr> 

      <td>Nome/Raz&atilde;o Social </td>

      <td><input name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50"></td>

      <td>Alcunha/Nome Fantasia </td>

      <td colspan="2"><strong>

      <input name="alcunha" type="text" id="alcunha" value="<? echo $alcunha; ?>" size="40">

</strong>        </td>

    </tr>

    <tr> 

      <td width="15%">Data Nasc </td>

      <td width="37%"><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10"></td>

      <td width="11%">Mes Nasc </td>

      <td width="36%" colspan="2">        <font color="#0000FF">

        <input name="mes_nasc" type="text" id="mes_nasc" value="<? echo $mes_nasc; ?>" size="3" maxlength="2"> 

      </font></td>

    </tr>

    <tr>

      <td>Sexo</td>

      <td><select name="sexo" id="select">

        <option selected><? echo $sexo; ?></option>

        <option>Masculino</option>

        <option>Feminino</option>

      </select></td>

      <td>Estado Civil </td>

      <td colspan="2"><select name="estadocivil" id="select2">

        <option selected><? echo $estadocivil; ?></option>

        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>

      </select></td>

    </tr>

    <tr> 

      <td>CPF/CNPJ</td>

      <td><input name="cpf" type="text" id="cpf2" value="<? echo $cpf; ?>" size="50"></td>

      <td>RG/INSCR.EST.</td>

      <td colspan="2"><input name="rg" type="text" id="rg2" value="<? echo $rg; ?>" size="40" maxlength="25"></td>

    </tr>

    <tr>

      <td>&Oacute;rg&atilde;o</td>

      <td>        <input name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>

      <td>Emiss&atilde;o</td>

      <td colspan="2"><input name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10"> 

        dd-mm-aaaa </td>

    </tr>

    <tr>

      <td>Pai</td>

      <td><input name="pai" type="text" id="pai" value="<? echo $pai; ?>" size="50" maxlength="50"></td>

      <td>M&atilde;e</td>

      <td colspan="2"><input name="mae" type="text" id="endereco3" value="<? echo $mae; ?>" size="50" maxlength="50"></td>

    </tr>

    <tr> 

      <td>Endere&ccedil;o</td>

      <td><input name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50"> 

      </td>

      <td>N&uacute;mero</td>

      <td colspan="2"><input name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10"> 

      </td>

    </tr>

    <tr> 

      <td><p>Bairro</p></td>

      <td><input name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50"> 

      </td>

      <td>Complemento</td>

      <td colspan="2"><input name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>

    </tr>

    <tr>

      <td>Cidade</td>

      <td><input name="cidade" type="text" id="cidade" value="<? echo $cidade; ?>" size="50" maxlength="50"></td>

      <td>Estado</td>

      <td colspan="2"><select name="estado" id="select7">

        <option selected><? echo $estado; ?></option>

        <?





    $sql = "select * from estados_do_brasil order by estado asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";

    }

?>

      </select></td>

    </tr>

    <tr> 

      <td>Cep</td>

      <td><input name="cep" type="text" id="cep" value="<? echo $cep; ?>" size="9" maxlength="9">

Use o formato 00000-000</td>

      <td>Telefone</td>

      <td colspan="2"><input name="telefone" type="text" id="endereco5" value="<? echo $telefone; ?>" size="15" maxlength="14"> </td>

    </tr>

    <tr> 

      <td>Celular</td>

      <td><input name="celular" type="text" id="telefone" value="<? echo $celular; ?>" size="15" maxlength="14"></td>

      <td>E-Mail</td>

      <td colspan="2"><input name="email" type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50"></td>

    </tr>

    <tr>

      <td>Obs</td>

      <td colspan="2"><textarea name="obs" cols="50" rows="7" id="obs"><? echo $obs; ?></textarea></td>

      <td colspan="2">&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">

        <input name="data_comunicado" type="hidden" id="data_comunicado3" value="<? echo date('d-m-Y'); ?>">

        <input name="hora_comunicado" type="hidden" id="hora_comunicado3" value="<? echo date('H:i:s'); ?>">

        <input name="operador_comunicou" type="hidden" id="operador_comunicou2" value="<? echo $nfantasia; ?>">

        <input name="cel_operador_comunicou" type="hidden" id="cel_operador_comunicou3" value="<? echo $cel_concessionaria; ?>">

        <input name="email_operador_comunicou" type="hidden" id="email_operador_comunicou3" value="<? echo $email_concessionaria; ?>">

        <input name="estabelecimento_comunicou" type="hidden" id="estabelecimento_comunicou3" value="<? echo $nfantasia; ?>">

        <input name="cidade_estabelecimento_comunicou" type="hidden" id="cidade_estabelecimento_comunicou3" value="<? echo $cidade_concessionaria; ?>">

        <input name="tel_estabelecimento_comunicou" type="hidden" id="tel_estabelecimento_comunicou3" value="<? echo $tel_concessionaria; ?>">

        <input name="email_estabelecimento_comunicou" type="hidden" id="email_estabelecimento_comunicou3" value="<? echo $email_concessionaria; ?>">

      </font></strong></td>

      <td><strong></strong></td>

      <td>&nbsp;</td>

      <td colspan="2"><strong><font color="#0000FF">

      </font></strong></td>

    </tr>

    <tr> 

      <td colspan="2"><?

$cnpj = $_SESSION['cnpj'];

$data_hoje = $_SESSION['data_hoje'];

?>

        <input type="submit" name="Submit" value="Efetivar contrato de garantia"> 

          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>

      <td colspan="2">&nbsp;</td>

    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td colspan="2">&nbsp;</td>

    </tr>

  </table>

</form>

</body>

</html>

