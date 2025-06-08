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
<title>CADASTRO DE CLIENTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../../conect/conect.php';

			
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
<form name="form2" method="post" action="">
</form>
<form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="Submit3" value="Voltar">
</form>
<div align="center">

<?
$nome = $_POST['nome'];

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM clientes where nome = '$nome'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome = $linha[1];
$sexo = $linha[2];
$estadocivil = $linha[3];
$cpf = $linha[4];
$rg = $linha[5];
$orgao = $linha[6];
$emissao = $linha[7];
$data_nasc = $linha[8];
$pai = $linha[9];
$mae = $linha[10];
$endereco = $linha[11];
$numero = $linha[12];
$bairro = $linha[13];
$complemento = $linha[14];
$cidade = $linha[15];
$estado = $linha[16];
$cep = $linha[17];
$telefone = $linha[18];
$celular = $linha[19];
$email = $linha[20];
$operador = $linha[21];
$cel_operador = $linha[22];
$email_operador = $linha[23];
$estabelecimento = $linha[24];
$cidade_estabelecimento = $linha[25];
$tel_estabelecimento = $linha[26];
$email_estabelecimento = $linha[27];
$obs = $linha[28];
$datacadastro = $linha[29];
$horacadastro = $linha[30];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$tipo = $linha[40];
$banco = $linha[41];
$agencia = $linha[42];
$conta = $linha[43];
$num_beneficio = $linha[44];

$parc1 = $linha[45];
$banco1 = $linha[46];
$vencto1 = $linha[47];
$compra1 = $linha[48];

$parc2 = $linha[49];
$banco2 = $linha[50];
$vencto2 = $linha[51];
$compra2 = $linha[52];

$parc3 = $linha[53];
$banco3 = $linha[54];
$vencto3 = $linha[55];
$compra3 = $linha[56];

$parc4 = $linha[57];
$banco4 = $linha[58];
$vencto4 = $linha[59];
$compra4 = $linha[60];

$parc5 = $linha[61];
$banco5 = $linha[62];
$vencto5 = $linha[63];
$compra5 = $linha[64];

$parc6 = $linha[65];
$banco6 = $linha[66];
$vencto6 = $linha[67];
$compra6 = $linha[68];

$parc7 = $linha[69];
$banco7 = $linha[70];
$vencto7 = $linha[71];
$compra7 = $linha[72];

$num_beneficio2 = $linha[73];
$num_beneficio3 = $linha[74];
$num_beneficio4 = $linha[75];

$dataprev2 = $linha[76];
$obs2 = $linha[77];


$dataprev = $_POST['dataprev'];

$cpf_rg = $linha[78];
$comp_end = $linha[79];
$comp_quit1 = $linha[80];
$comp_quit2 = $linha[81];
$comp_quit3 = $linha[82];
$comp_quit4 = $linha[83];
$comp_quit5 = $linha[84];
$comp_quit6 = $linha[85];
$comp_renda = $linha[86];
$cpf_rg_testemunha = $linha[87];
$mes_niver = $linha[88];

?>
<? } ?>
<?

if($mes_niver == ""){
echo "<script>
alert('ATENÇÃO!!!... INFORME O MÊS DO ANIVERSÁRIO QUE SE ENCONTRA AO LADO DA DATA DE NASCIMENTO!.');
</script>";
}
?>

<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

?>
<? } ?>
<?
//Define o caminho da pasta/arquivo
$pasta = "../../$cpf";
$jaexiste = "Pasta do cliente existente!";
?>

<p><strong><font color="#0000FF" size="4">Tela de edi&ccedil;&atilde;o do cadastro de clientes!</font></strong>
</p>
<form name="form3" method="post" action="cria_diretorio.php">
  <div align="center"> <strong>
    <input name="codigo3" type="hidden" id="codigo4" value="<? echo $codigo; ?>">
    <input name="cpf3" type="hidden" id="cpf5" value="<? echo $cpf; ?>">
    </strong>
      <?
//Checa se o arquivo/pasta existe
if(file_exists($pasta)) { echo $jaexiste; echo'<input type="hidden" name="criar_pasta" value="N&atilde;o">';}
else {
        echo'<input type="submit" name="Submit2" value="Criar Pasta">';
		        echo'<input type="hidden" name="criar_pasta" value="Sim">';

}
?>
  </div>
</form>
<p>&nbsp;</p>
<table width="100%"  border="1">
  <tr>
    <td><div align="center">CPF E RG </div></td>
    <td><div align="center">Comp de Endere&ccedil;o </div></td>
    <td><div align="center">Comp de Quita&ccedil;&atilde;o </div></td>
    <td><div align="center">Comp de Quita&ccedil;&atilde;o </div></td>
    <td><div align="center">Comp de Quita&ccedil;&atilde;o </div></td>
  </tr>
  <?
if(file_exists($pasta)) { 

			
$sql = "SELECT * FROM clientes where codigo = '$codigo'";
$res = mysql_query($sql);

$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$cpf = $linha[4];
$cpf_rg = $linha[78];

}}
?>
  <tr>
    <td width="21%">
      <form action="atualizar_cpf_rg.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($cpf_rg<>""){
	  printf("<a href='../../$cpf/$cpf_rg' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo5" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf6" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td width="24%">
      <form action="atualizar_comp_end.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_end<>""){
	  printf("<a href='../../$cpf/$comp_end' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo6" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf7" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td width="20%">
      <form action="atualizar_comp_quit1.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_quit1<>""){
	  printf("<a href='../../$cpf/$comp_quit1' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo7" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf8" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td width="17%">
      <form action="atualizar_comp_quit2.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_quit2<>""){
	  printf("<a href='../../$cpf/$comp_quit2' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo8" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf9" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td width="16%">
      <form action="atualizar_comp_quit3.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_quit3<>""){
	  printf("<a href='../../$cpf/$comp_quit3' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo9" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf10" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
  </tr>
  <tr>
    <td><div align="center">Comp de Quita&ccedil;&atilde;o </div></td>
    <td><div align="center">Comp de Quita&ccedil;&atilde;o </div></td>
    <td><div align="center">Comp de Quita&ccedil;&atilde;o </div></td>
    <td><div align="center">Comp de Renda </div></td>
    <td><div align="center">CPF/RG testem/procur</div></td>
  </tr>
  <tr>
    <td>
      <form action="atualizar_comp_quit4.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_quit4<>""){
	  printf("<a href='../../$cpf/$comp_quit4' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo10" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf11" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td>
      <form action="atualizar_comp_quit5.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_quit5<>""){
	  printf("<a href='../../$cpf/$comp_quit5' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo11" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf12" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td>
      <form action="atualizar_comp_quit6.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_quit6<>""){
	  printf("<a href='../../$cpf/$comp_quit6' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo12" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf13" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td>
      <form action="atualizar_comp_renda.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($comp_renda<>""){
	  printf("<a href='../../$cpf/$comp_renda' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo13" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf14" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
    <td>
      <form action="atualizar_cpf_rg_testemunha.php" method="post" enctype="multipart/form-data" name="form2">
        <div align="center"> <strong>
          <?
						if($cpf_rg_testemunha<>""){
	  printf("<a href='../../$cpf/$cpf_rg_testemunha' target='_blank'>Abrir arquivo</a>");
	  }
	  ?>
          <br>
          <input name="codigo2" type="hidden" id="codigo14" value="<? echo $codigo; ?>">
          <input name="cpf2" type="hidden" id="cpf15" value="<? echo $cpf; ?>">
          <br>
        </strong> </div>
    </form></td>
  </tr>
</table>
</div>
<form name="form1" method="post" action="grava_editar_cliente.php">

<table width="100%" border="0" cellspacing="4">
    <tr> 
      <td>N&ordm; de Matr&iacute;cula </td>
      <td><strong><font color="#0000FF"><? echo $codigo; ?></font>
          <input name="codigo" type="hidden" id="codigo2" value="<? echo $codigo; ?>">
      </strong></td>
      <td>Status</td>
      <td><strong>
        <select name="status_cliente" id="status_cliente">
          <option selected><? echo $status_cliente; ?></option>
          <option>Ativo</option>
          <option>Inativo</option>
        </select>
</strong></td>
    </tr>
    <tr> 
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome2" value="<? echo $nome; ?>" size="50" maxlength="50"></td>
      <td>Tipo</td>
      <td><strong>
        <select name="tipo" id="tipo">
          <option selected><? echo $tipo; ?></option>
          <?


    $sql = "select * from tipos order by tipo asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['tipo']."</option>";
    }
?>
        </select>
      </strong>        </td>
    </tr>
    <tr> 
      <td width="15%">Data Nasc </td>
      <td width="37%"><input name="data_nasc" type="text" id="data_nasc" value="<? echo $data_nasc; ?>" size="15" maxlength="10">
        m&ecirc;s do anivers&aacute;rio
      <input name="mes_niver" type="text" id="mes_niver" value="<? echo $mes_niver; ?>" size="4" maxlength="2"></td>
      <td width="11%">Sexo</td>
      <td width="36%"><select name="sexo" id="sexo">
	    <option selected><? echo $sexo; ?></option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>        
        <font color="#0000FF">&nbsp; </font></td>
    </tr>
    <tr> 
      <td>Estado Civil </td>
      <td><select name="estadocivil" id="select3">
        <option selected><? echo $estadocivil; ?></option>
        <?


    $sql = "select * from estado_civil order by estadocivil asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";
    }
?>
      </select>        </td>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" value="<? echo $cpf; ?>" size="18" maxlength="14"> 
      </td>
    </tr>
    <tr>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg" value="<? echo $rg; ?>" size="25" maxlength="25"> 
        &Oacute;rg&atilde;o 
        <input name="orgao" type="text" id="cpf3" value="<? echo $orgao; ?>" size="15" maxlength="14"></td>
      <td>Emiss&atilde;o</td>
      <td><input name="emissao" type="text" id="cpf4" value="<? echo $emissao; ?>" size="15" maxlength="10"> 
        dd/mm/aaaa </td>
    </tr>
    <tr>
      <td>Pai</td>
      <td><input name="pai" type="text" id="pai" value="<? echo $pai; ?>" size="50" maxlength="50"></td>
      <td>M&atilde;e</td>
      <td><input name="mae" type="text" id="endereco3" value="<? echo $mae; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o</td>
      <td><input name="endereco" type="text" id="endereco" value="<? echo $endereco; ?>" size="50" maxlength="50"> 
      </td>
      <td>N&uacute;mero</td>
      <td><input name="numero" type="text" id="numero2" value="<? echo $numero; ?>" size="10" maxlength="10"> 
      </td>
    </tr>
    <tr> 
      <td><p>Bairro</p></td>
      <td><input name="bairro" type="text" id="bairro" value="<? echo $bairro; ?>" size="50" maxlength="50"> 
      </td>
      <td>Complemento</td>
      <td><input name="complemento" type="text" id="endereco4" value="<? echo $complemento; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Cidade</td>
      <td><input name="cidade" type="text" id="cidade" value="<? echo $cidade; ?>" size="50" maxlength="50"></td>
      <td>Estado</td>
      <td><select name="estado" id="select7">
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
      <td><input name="telefone" type="text" id="endereco5" value="<? echo $telefone; ?>" size="15" maxlength="14"> </td>
    </tr>
    <tr> 
      <td>Celular</td>
      <td><input name="celular" type="text" id="telefone" value="<? echo $celular; ?>" size="15" maxlength="14">
        Outros Telefones
        <select name="outros_telefones" id="outros_telefones">
          <?


    $sql = "select * from telefones_de_clientes where cod_cli = '$codigo' order by telefone asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['telefone']."</option>";
    }
?>
        </select></td>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email" value="<? echo $email; ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td>Banco para pagto </td>
      <td><select name="banco" id="banco">
	  <option selected><? echo $banco; ?></option>
        <?


    $sql = "select * from bancos order by banco asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['banco']."</option>";
    }
?>
      </select></td>
      <td>Ag&ecirc;ncia</td>
      <td><input name="agencia" type="text" id="agencia" value="<? echo $agencia; ?>"></td>
    </tr>
    <tr>
      <td>Conta</td>
      <td><input name="conta" type="text" id="conta" value="<? echo $conta; ?>"></td>
      <td>Senha DATAPREV </td>
      <td><input name="dataprev" type="text" id="num_beneficio23" value="<? echo $dataprev; ?>"></td>
    </tr>
    <tr>
      <td>N&ordm; do Benef&iacute;cio </td>
      <td><input name="num_beneficio" type="text" id="num_beneficio5" value="<? echo $num_beneficio; ?>"></td>
      <td>N&ordm; Benef&iacute;cio2</td>
      <td><input name="num_beneficio2" type="text" id="num_beneficio22" value="<? echo $num_beneficio2; ?>"></td>
    </tr>
    <tr>
      <td>N&ordm; Benef&iacute;cio 3 </td>
      <td><input name="num_beneficio3" type="text" id="num_beneficio32" value="<? echo $num_beneficio3; ?>"></td>
      <td>N&ordm; Benef&iacute;cio 4 </td>
      <td><input name="num_beneficio4" type="text" id="num_beneficio4" value="<? echo $num_beneficio4; ?>"></td>
    </tr>
    <tr>
      <td><div align="center">Valor Parcela </div></td>
      <td><div align="center">Banco</div></td>
      <td><div align="center">Vencimento do contrato </div></td>
      <td><div align="center">Previs&atilde;o de compra em </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="parc1" type="text" id="parc1" value="<? echo $parc1; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="banco1" type="text" id="banco1" value="<? echo $banco1; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto1" type="text" id="vencto1" value="<? echo $vencto1; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="compra1" type="text" id="compra1" value="<? echo $compra1; ?>">
      </div></td>
    </tr>
    <tr>
      <td><p align="center">
          <input name="parc2" type="text" id="parc2" value="<? echo $parc2; ?>">
      </p></td>
      <td>
        <div align="center">
          <input name="banco2" type="text" id="banco2" value="<? echo $banco2; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto2" type="text" id="vencto2" value="<? echo $vencto2; ?>">
      </div></td>
      <td><div align="center">
          <input name="compra2" type="text" id="compra3" value="<? echo $compra2; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="parc3" type="text" id="parc3" value="<? echo $parc3; ?>">
      </div></td>
      <td><div align="center">
          <input name="banco3" type="text" id="banco3" value="<? echo $banco3; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto3" type="text" id="vencto3" value="<? echo $vencto3; ?>">
      </div></td>
      <td><div align="center">
          <input name="compra3" type="text" id="compra4" value="<? echo $compra3; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="parc4" type="text" id="parc4" value="<? echo $parc4; ?>">
      </div></td>
      <td><div align="center">
          <input name="banco4" type="text" id="banco4" value="<? echo $banco4; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto4" type="text" id="vencto4" value="<? echo $vencto4; ?>">
      </div></td>
      <td>
        <div align="center">
          <input name="compra4" type="text" id="compra5" value="<? echo $compra4; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="parc5" type="text" id="parc5" value="<? echo $parc5; ?>">
      </div></td>
      <td><div align="center">
          <input name="banco5" type="text" id="banco5" value="<? echo $banco5; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto5" type="text" id="vencto5" value="<? echo $vencto5; ?>">
      </div></td>
      <td><div align="center">
          <input name="compra5" type="text" id="compra6" value="<? echo $compra5; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="parc6" type="text" id="parc6" value="<? echo $parc6; ?>">
      </div></td>
      <td><div align="center">
          <input name="banco6" type="text" id="banco6" value="<? echo $banco6; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto6" type="text" id="vencto6" value="<? echo $vencto6; ?>">
      </div></td>
      <td><div align="center">
          <input name="compra6" type="text" id="compra7" value="<? echo $compra6; ?>">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
          <input name="parc7" type="text" id="parc7" value="<? echo $parc7; ?>">
      </div></td>
      <td><div align="center">
          <input name="banco7" type="text" id="banco7" value="<? echo $banco7; ?>" size="40">
      </div></td>
      <td><div align="center">
          <input name="vencto7" type="text" id="vencto7" value="<? echo $vencto7; ?>">
      </div></td>
      <td><div align="center">
          <input name="compra7" type="text" id="compra8" value="<? echo $compra7; ?>">
      </div></td>
    </tr>
    <tr>
      <td>Obs</td>
      <td colspan="2">      <strong><font color="#0000FF"><? echo $obs; ?></font>
        <input name="obs" type="hidden" id="obs" value="<? echo $obs; ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Obs</td>
      <td><textarea name="obs2" cols="45" rows="7"   id="obs2"><? echo $obs2; ?></textarea></td>
      <td colspan="2" valign="top"><textarea name="obs_cli" cols="45" rows="7" readonly="readonly" id="obs_cli"><?  
$sql = "SELECT * FROM observacoes_de_clientes where cpf = '$cpf' order by codigo desc";
$res = mysql_query($sql);
$reg = 0;
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$cod_cli = $linha[1];
$cpf = $linha[2];
$data = $linha[3];
$hora = $linha[4];
$observacoes_do_cliente = $linha[5];
$operador = $linha[6];


echo "$data - "."$observacoes_do_cliente - "."$operador";
?>

<?

if($reg==1){
//echo "</tr>";
$reg=0;
}


}
	  
	  
	  
	  
	   ?>
      </textarea></td>
    </tr>
    <tr>
      <td colspan="2"><strong><font color="#0000FF">
        <input name="dataalteracao" type="hidden" id="dataalteracao" value="<? echo date('d-m-Y'); ?>">
        <input name="horaalteracao" type="hidden" id="horaalteracao" value="<? echo date('H:i:s'); ?>">
        <input name="operador_alterou" type="hidden" id="operador3" value="<? echo $operador_alterou; ?>">
        <input name="cel_operador_alterou" type="hidden" id="cel_operador_alterou" value="<? echo $cel_operador_alterou; ?>">
        <input name="email_operador_alterou" type="hidden" id="email_operador_alterou" value="<? echo $email_operador_alterou; ?>">
        <input name="estabelecimento_alterou" type="hidden" id="estabelecimento_alterou" value="<? echo $estabelecimento_alterou; ?>">
        <input name="cidade_estabelecimento_alterou" type="hidden" id="cidade_estabelecimento_alterou" value="<? echo $cidade_estabelecimento_alterou; ?>">
        <input name="tel_estabelecimento_alterou" type="hidden" id="tel_estabelecimento_alterou" value="<? echo $tel_estabelecimento_alterou; ?>">
        <input name="email_estabelecimento_alterou" type="hidden" id="email_estabelecimento_alterou" value="<? echo $email_estabelecimento_alterou; ?>">
      </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit" value="Alterar dados do Cliente"> 
          <input type="reset" name="Submit2" value="Limpar"> </td><td><div align="right"> </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<form name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong>Cadastro efetuado por <br>
        </strong><strong><font color="#0000FF"><? echo $operador; ?>
        
      </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento; ?>
      </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento; ?>
      </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento; ?>          </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Data do Cadastro <br>
              <font color="#0000FF"><? echo $datacadastro; ?> </font></strong></td>
      <td><strong>Hora que foi efetuado o Cadastro <br>
              <font color="#0000FF"><? echo $horacadastro; ?> </font></strong></td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
</form>
<form name="form1" method="post" action="">
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM clientes where cpf = '$cpf' limit 1";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[33];
$cel_operador_alterou = $linha[34];
$email_operador_alterou = $linha[35];
$estabelecimento_alterou = $linha[36];
$cidade_estabelecimento_alterou = $linha[37];
$tel_estabelecimento_alterou = $linha[38];
$email_estabelecimento_alterou = $linha[39];
$dataalteracao = $linha[31];
$horaalteracao = $linha[32];
?>

  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2" valign="top" bgcolor="#CCCCCC"><strong>&Uacute;ltima altera&ccedil;&atilde;o efetuada pelo operador: <br>
      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%" valign="top" bgcolor="#CCCCCC"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%" valign="top" bgcolor="#CCCCCC"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%" valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#CCCCCC"><strong>Data do Cadastro <br>
            <font color="#0000FF"><? echo $dataalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong>Hora que foi efetuado o Cadastro <br>
            <font color="#0000FF"><? echo $horaalteracao; ?> </font></strong></td>
      <td valign="top" bgcolor="#CCCCCC"><strong></strong></td>
      <td valign="top" bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <? } ?>
</form>
<form name="form1" method="post" action="">
  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM adm where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$operador_alterou = $linha[1];
$cel_operador_alterou = $linha[19];
$email_operador_alterou = $linha[20];
$estabelecimento_alterou = $linha[24];
$cidade_estabelecimento_alterou = $linha[25];
$tel_estabelecimento_alterou = $linha[26];
$email_estabelecimento_alterou = $linha[27];

?>
  <table width="100%" border="0" cellspacing="4">
    <tr>
      <td colspan="2"><strong><font color="#FF0000">Cadastro atualmente sendo alterado por: </font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>
      </strong><strong><font color="#0000FF"><? echo $operador_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>
              <? echo $email_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="20%"><strong>Celular:<font color="#0000FF"><br>
              <? echo $cel_operador_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td width="1%">&nbsp;</td>
    </tr>
    <tr>
      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>
          <strong><font color="#0000FF"><? echo $estabelecimento_alterou; ?> </font></strong><strong><font color="#0000FF"> </font></strong></td>
      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $tel_estabelecimento_alterou; ?> </font></strong></td>
      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>
              <? echo $email_estabelecimento_alterou; ?> </font><font color="#0000FF"> </font></strong></td>
      <td><strong>Cidade: <br>
            <font color="#0000FF"><? echo $cidade_estabelecimento_alterou; ?> </font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong><font color="#0000FF"> </font><font color="#0000FF"> </font></strong></td>
      <td>&nbsp;</td>
      <td><strong></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<? } ?>
</form>
</body>
</html>
