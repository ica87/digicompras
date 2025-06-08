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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style11 {font-size: 10px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<?
require '../../../conect/conect.php';
error_reporting(E_ALL);
error_reporting( E_ALL ^E_NOTICE );


?>

  <?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$setor = $linha[43];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];

}
?>


<?


$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];



$sql = "SELECT * FROM clientes where nome = '$nome'";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);


}

if($registros==0){

$comando = "insert into clientes(nome,celular,email,operador) values('$nome','$celular','$email','$nome_op')";


mysql_query($comando,$conexao) or die("Erro ao gravar cliente!");

}


$sql = "SELECT * FROM clientes where nome = '$nome'";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);

$codigo_cliente = $linha[0];

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





$dataprev = $linha[76];

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

$status_cliente = $linha[89];

$tem_margem = $linha[90];
$saldo1 = $linha[91];
$saldo2 = $linha[92];
$saldo3 = $linha[93];
$saldo4 = $linha[94];
$saldo5 = $linha[95];
$saldo6 = $linha[96];
$saldo7 = $linha[97];

$local_trabalho = $linha[134];
$fone_comercial = $linha[135];
$newsletter = $linha[136];

}
?>



	






<body bgcolor="#ffffff" 
leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="4">
  <tr>
    <td>&nbsp;</td>
    <td><form name="form1" method="post" action="selecione_cliente_para_abrir_orcamento.php">
      <input type="submit" name="Submit" value="Voltar a sele&ccedil;&atilde;o de cliente">
      <span class="style11">
      <input name="setor" type="hidden" id="setor" value="<? echo $setor; ?>">
      </span><span class="style1">
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
    <td><strong><font color="#0000FF"><strong><? echo $codigo_cliente;  ?></strong></font></strong></td>
    <td><strong>Telefone:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $telefone;  ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><strong>Nome</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $nome; ?></strong></font></strong></td>
    <td><strong>Celular:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $celular; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td width="11%"><strong>Endere&ccedil;o:</strong></td>
    <td width="36%"><strong><font color="#0000FF"><strong><? echo $endereco; ?> N&ordm; <font color="#0000FF"><strong><? echo $numero; ?></strong></font></strong></font></strong></td>
    <td width="8%"><strong>E-Mail:</strong></td>
    <td width="45%"><strong><font color="#0000FF"><strong><? echo $email; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><p><strong>Bairro:</strong></p></td>
    <td><strong><font color="#0000FF"><strong><? echo $bairro; ?></strong></font></strong></td>
    <td><strong>CEP:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $cep; ?></strong></font></strong></td>
  </tr>
  <tr>
    <td><strong>Cidade:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $cidade; ?> Estado <font color="#0000FF"><strong><? echo $estado; ?></strong></font></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Telefone:</strong></td>
    <td><strong><font color="#0000FF"><strong><? echo $telefone; ?></strong></font></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
<table width="100%" border="0" cellspacing="0">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#999999"><div align="center"><strong><font color="#d00a13" size="4">CONFIRMA&Ccedil;&Atilde;O!!!... &Eacute; o cliente correto?</font></strong></div></td>
    </tr>
    
    <tr>
      <td width="50%" bgcolor="#999999"><form action="orcamento.php" method="post" name="form5">
        <div align="right"><span class="style1">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <?

$sql = "SELECT * FROM orcamentos where codigo_cliente = '$codigo_cliente' and status = 'Aberto' order by codigo_orcamento desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);



}
?>
        </span>
          <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
          <input name="nome" type="hidden" id="nome" value="<? if($reg>=1){ echo $nome_cli; }else{ echo $nome; } ?>">
  <input name="solicitacao" type="hidden" id="solicitacao" value="abrir_orcamento">
  <input type="submit" name="button3" id="button3" value="Sim! Abrir Movimento">
        </div>
      </form></td>
      <td width="20%" bgcolor="#999999"> <div align="center"><form name="form1" method="post" action="selecione_cliente_para_abrir_orcamento.php">
       
          <input type="submit" name="Submit2" value="N&atilde;o">
          <span class="style11">
            <input name="setor" type="hidden" id="setor" value="<? echo $setor; ?>">
          </span><span class="style1">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
            </span> 
      </form>  </div>     </td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><table width="100%" border="0" cellspacing="0">
        <tr>
          <td colspan="9" bgcolor="#999999"><div align="center"><strong>HISTORICO DE MOVIMENTA&Ccedil;&Atilde;O DO CLIENTE</strong></div></td>
        </tr>
        <tr>
          <td width="8%"><div align="center">Or&ccedil;amento</div></td>
          <td width="27%"><div align="center">Operador</div></td>
          <td width="8%"><div align="center">Data</div></td>
          <td width="11%"><div align="center">Condi&ccedil;&atilde;o</div></td>
          <td width="9%"><div align="center">Status</div></td>
          <td width="9%"><div align="center">Total Geral</div></td>
          <td width="8%"><div align="center"></div></td>
          <td width="12%"><div align="center"></div></td>
          <td width="8%"><div align="center"></div></td>
        </tr>
<?

$sql = "SELECT * FROM orcamentos where codigo_cliente = '$codigo_cliente' order by codigo_orcamento desc";
$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {


$codigo_orcamento = $linha[0];
$dataabertura = $linha[1];
$condicao = $linha[16];
$status = $linha[17];
$operador = $linha[12];
$total_geral = $linha[7];


?>
        <tr>
          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#0000FF"><strong><? echo $codigo_orcamento; ?></strong></font></strong></div></td>
          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#0000FF"><strong><? echo $operador; ?></strong></font></strong></div></td>
          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#0000FF"><strong><? echo $dataabertura; ?></strong></font></strong></div></td>
          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#0000FF"><strong><? echo $condicao; ?></strong></font></strong></div></td>
          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#0000FF"><strong><? echo $status; ?></strong></font></strong></div></td>
          <td bgcolor="#CCCCCC"><div align="center"><strong><font color="#0000FF"><strong><? echo $total_geral; ?></strong></font></strong></div></td>
          <td bgcolor="#CCCCCC"><div align="center">
            <form action="imprime_orcamento.php" method="post" name="form2" target="_blank">
              <span class="style1">
                <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
                </span>
              <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
              <input type="submit" name="button" id="button" value="Imprimir">
              </form>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="center">
            <form action="imprime_orcamento_para_cliente.php" method="post" name="form2" target="_blank">
              <span class="style1">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
              <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
               <? if($status=="Finalizado"){ echo "<input type='submit' name='button2' id='button2' value='Imprimir p/ Cliente'>"; } ?>
            </form>
          </div></td>
          <td bgcolor="#CCCCCC"><div align="center">
            <form name="form2" method="post" action="orcamento.php">
              <span class="style1">
              <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
              </span>
              <input name="codigo_cliente" type="hidden" id="codigo_cliente" value="<? echo $codigo_cliente; ?>">
              <input name="codigo_orcamento" type="hidden" id="codigo_orcamento" value="<? echo $codigo_orcamento; ?>">
              <? if($status=="Aberto"){ echo "<input type='submit' name='button3' id='button3' value='Editar'>"; } ?>
            </form>
          </div></td>
        </tr>
<?
}
?>
        <tr>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td><div align="center"></div></td>
          <td>&nbsp;</td>
          <td><div align="center"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td width="30%">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
