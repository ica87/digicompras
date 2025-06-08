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
-->
</style></head>

<?
//require("conexao.php"); or die("erro na requisição");
require 'conect/conect.php';



//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM fundo_navegacao";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>


<body bgcolor="#<? printf("$linha[1]"); ?>">
  <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>
<?
// dados do veiculo

$datacadastro = $_POST['data_comunicado'];
$horacadastro = $_POST['hora_comunicado'];
$data_comunicado = $_POST['data_comunicado'];
$hora_comunicado = $_POST['hora_comunicado'];


//dados da concessionaria
$concessionaria = $_POST['concessionaria'];
$cnpj = $_POST['cnpj'];
$tel_concessionaria = $_POST['tel_concessionaria'];
$email_concessionaria = $_POST['email_concessionaria'];
$cidade_concessionaria = $_POST['cidade_concessionaria'];
$estado_concessionaria = $_POST['estado_concessionaria'];

//dados do veiculo
$veiculo = $_POST['veiculo'];
$placa = $_POST['placa'];
$ano = $_POST['ano'];
$modelo = $_POST['modelo'];
$chassi = $_POST['chassi'];
$renavam  = $_POST['renavam'];
$obs_veiculo = $_POST['obs_veiculo'];
$status = $_POST['status'];

//dados do cliente

$dia_inicio_contrato = $_POST['dia_inicio_contrato'];
$mes_inicio_contrato = $_POST['mes_inicio_contrato'];
$ano_inicio_contrato = $_POST['ano_inicio_contrato'];
$dia_termino_contrato = $_POST['dia_termino_contrato'];
$mes_termino_contrato = $_POST['mes_termino_contrato'];
$ano_termino_contrato = $_POST['ano_termino_contrato'];
$valor = $_POST['valor'];
$status_pagto = $_POST['status_pagto'];


$nome = $_POST['nome'];
$alcunha = $_POST['alcunha'];
$data_nasc = $_POST['data_nasc'];
$mes_nasc = $_POST['mes_nasc'];
$sexo = $_POST['sexo'];
$estadocivil = $_POST['estadocivil'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao = $_POST['orgao'];
$emissao = $_POST['emissao'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];


//dados do operador que comunicou
$operador_comunicou = $_POST['operador_comunicou'];
$cel_operador_comunicou = $_POST['cel_operador_comunicou'];
$email_operador_comunicou = $_POST['email_operador_comunicou'];
$estabelecimento_comunicou = $_POST['estabelecimento_comunicou'];
$tel_estabelecimento_comunicou = $_POST['tel_estabelecimento_comunicou'];
$cidade_estabelecimento_comunicou = $_POST['cidade_estabelecimento_comunicou'];
$email_estabelecimento_comunicou = $_POST['email_estabelecimento_comunicou'];




$comando = "insert into veiculos(datacadastro,horacadastro,data_comunicado,hora_comunicado,concessionaria,cnpj_concessionaria,tel_concessionaria,email_concessionaria,cidade_concessionaria,estado_concessionaria,veiculo,placa,ano,modelo,chassi,renavam,obs_veiculo,operador_comunicou,cel_operador_comunicou,email_operador_comunicou,estabelecimento_comunicou,cidade_estabelecimento_comunicou,tel_estabelecimento_comunicou,email_estabelecimento_comunicou,status,dia_inicio_contrato,mes_inicio_contrato,ano_inicio_contrato,dia_termino_contrato,mes_termino_contrato,ano_termino_contrato,valor,nome,alcunha,data_nasc,mes_nasc,sexo,estadocivil,cpf,rg,orgao,emissao,pai,mae,endereco,numero,bairro,complemento,cidade,estado,cep,telefone,celular,email,obs,status_pagto) 

values('$datacadastro','$horacadastro','$data_comunicado','$hora_comunicado','$concessionaria','$cnpj','$tel_concessionaria','$email_concessionaria','$cidade_concessionaria','$estado_concessionaria','$veiculo','$placa','$ano','$modelo','$chassi','$renavam','$obs_veiculo','$operador_comunicou','$cel_operador_comunicou','$email_operador_comunicou','$estabelecimento_comunicou','$cidade_estabelecimento_comunicou','$tel_estabelecimento_comunicou','$email_estabelecimento_comunicou','$status','$dia_inicio_contrato','$mes_inicio_contrato','$ano_inicio_contrato','$dia_termino_contrato','$mes_termino_contrato','$ano_termino_contrato','$valor','$nome','$alcunha','$data_nasc','$mes_nasc','$sexo','$estadocivil','$cpf','$rg','$orgao','$emissao','$pai','$mae','$endereco','$numero','$bairro','$complemento','$cidade','$estado','$cep','$telefone','$celular','$email','$obs','$status_pagto')";

mysql_query($comando,$conexao) or die("Erro ao registrar seu contrato! Tente novamente");

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}


echo "Contrato registrado com sucesso na $nfantasia! <br><br>";

?>


<?
$sql = "SELECT * FROM veiculos order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
$num_contrato = $linha[0];
$datacadastro = $linha[1];
$horacadastro = $linha[2];
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

?>
<?
echo "Anote o  Nº do seu contrato: $num_contrato";
?>
<? } ?>

<?
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! Veículo registrado na $nfantasia!   \n";
	$mens  .=  "Visite-nos $site \n\n";
	
	$mens  .=  "Data do cadastro: ".$datacadastro."                                                    \n";
	$mens  .=  "Hora do cadastro: ".$horacadastro."                                                    \n";
	$mens  .=  "Nº Contrato: ".$num_contrato."                                                    \n";
	$mens  .=  "Status do contrato: ".$status."                                                    \n";
	$mens  .=  "Status do Pagto: ".$status_pagto."                                                    \n\n";
	
	$mens  .=  "Vigência do contrato "."                                                    \n";
	$mens  .=  "Inicio em : ".$dia_inicio_contrato."/".$mes_inicio_contrato."/".$ano_inicio_contrato."              \n";
	$mens  .=  "Termino em : ".$dia_termino_contrato."/".$mes_termino_contrato."/".$ano_termino_contrato."         \n\n";
	
	$mens  .=  "Cliente: ".$nome."                                                       \n";
	$mens  .=  "CPF: ".$cpf."                                                    \n";
	$mens  .=  "Cidade: ".$cidade."                                                    \n";
	$mens  .=  "Estado: ".$estado."                                                    \n";
	$mens  .=  "Telefone: ".$telefone."                                                    \n";
	$mens  .=  "E-Mail: ".$email."                                                    \n\n";
	
	$mens  .=  "Veículo: ".$veiculo."                                                    \n";
	$mens  .=  "Ano: ".$ano."                                                    \n";
	$mens  .=  "Modelo: ".$modelo."                                                    \n";
	$mens  .=  "Chassi: ".$chassi."                                                    \n";
	$mens  .=  "Renavam: ".$renavam."                                                    \n";
	$mens  .=  "Placas: ".$placa."                                                    \n";
	$mens  .=  "Observações: ".$obs_veiculo."                                                    \n\n";
	
	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Contrato $num_contrato registrado na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest."\r\nBcc:".$email);
	//$envia  =  mail($email_concessionaria, "Veículo registrado na $nfantasia em ".$datacadastro, $mens,"From:".$email_dest);

?>




<p>&nbsp;</p>
<table width="100%"  border="0">
  <tr>
    <td colspan="2">Imprima o contrato em 2 vias e envie uma via assinada para MECANICACOM </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"><form action="contrato.php" method="post" name="form2" target="_blank">
      <input name="codigo" type="hidden" id="codigo" value="<? echo $num_contrato; ?>">
      <input name="Submit" type="submit" id="Submit" value="Imprimir Contrato">
    </form></td>
    <td width="60%"><form name="form1" method="post" action="../../login_clientes.php">
      <?
$cnpj = $_SESSION['cnpj'];
$data_hoje = $_SESSION['data_hoje'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="10%">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>