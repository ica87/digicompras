<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>
<html>
<head>
<title>DIGICOMPRAS - CONTRATO PARTICULAR DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS E OUTRAS AVEN&Ccedil;AS </title>
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
</style>
</head>

<?
//require("conexao.php"); or die("erro na requisição");
require '../../conect/conect.php';
?>
<?


$sql = "SELECT * FROM logo";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<img src='../../imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'><br><br>"); ?>
<?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>
<? } ?>



<?
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
// dados do estabelecimento

$codigo = $_POST['codigo'];
?>

<?
$sql = "SELECT * FROM empresas_conveniadas where codigo = '$codigo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>
<?
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
}
?>
<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia_dc = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
?>
<?
$sql = "SELECT * FROM adm limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nome_dc = $linha[1];
$cpf_dc = $linha[4];

}
?>

	

<table width="100%"  border="0">
  <tr>
    <td width="37%">&nbsp;</td>
    <td width="56%"><form name="form1" method="post" action="javascript:window.close()">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit" value="Fechar">
    </form></td>
    <td width="7%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"> <strong>CONTRATO PARTICULAR DE PRESTA&Ccedil;&Atilde;O DE SERVI&Ccedil;OS E OUTRAS AVEN&Ccedil;AS </strong> </div></td>
  </tr>
  <tr>
    <td>1 - &nbsp; DAS PARTES </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p>      1.1 <br>
    A contratada Ivan Campos de Ara&uacute;jo, Inscr. Municipal: 34.944-9 localizada na rua Joaquim Garcia Souza n&ordm; 6183, bairro jd Paraty, em franca, doravante chamada pelo nome fantasia “Digicompras”. </td>
  </tr>
  <tr>
    <td>1.2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><p>O(a) conratante <strong><? echo $razaosocial; ?></strong>, CNPJ<strong> <? echo $cnpj; ?> </strong>e INSCR. EST.<strong> <? echo $inscr_est; ?></strong>, situada &agrave; rua/av<strong> <? echo $endereco; ?></strong>, n&uacute;mero <strong><? echo $numero; ?></strong>, complemento <strong><? echo $complemento; ?> </strong>bairro<strong> <? echo $bairro; ?> </strong><br>CEP <strong><? echo $cep; ?></strong>, na cidade <strong><? echo $cidade; ?> </strong>estado de <strong><? echo $estado; ?></strong>, devidamente identificado pelo seu nome de contratante. </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <p align="center"><strong>CONTRATAM E ACORDAM ENTRE SI OS SEGUINTES </strong></p>
    </div></td>
  </tr>
  <tr>
    <td><p><strong>2 - &nbsp; DO OBJETIVO </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; Reunir todos os conv&ecirc;nios que a empresa j&aacute; possui em um &uacute;nico (cart&atilde;o Digicompras). <br>
     &#149;&nbsp; Eliminar os adiantamentos fora do prazo (vales). <br>
     &#149;&nbsp; Otimiza&ccedil;&atilde;o do processo de fechamento de folha de pagamento, diminuindo consideravelmente a margem de erro e atrasos. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p><strong>3 -  OBRIGA&Ccedil;&Otilde;ES DA CONTRATADA </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; Efetuar visitas nos estabelecimentos comerciais para efetivar conv&ecirc;nio, com intuito de ampliar as op&ccedil;&otilde;es de compras dos funcion&aacute;rios. <br>
      &#149;&nbsp; Manuten&ccedil;&atilde;o do sistema <a href="http://www.digicompras.com.br/">www.digicompras.com.br </a> por onde ser&atilde;o executadas todas as transa&ccedil;&otilde;es comerciais via cart&atilde;o Digicompras. <br>
      &#149;&nbsp; Suporte t&eacute;cnico via e-mail <a href="mailto:digicompras@digicompras.com.br">digicompras@digicompras.com.br </a> . <br>
      &#149;&nbsp; Atualiza&ccedil;&atilde;o em tempo real dos valores comercializados de seus funcion&aacute;rios, onde a contratante ter&aacute; sempre vis&iacute;vel o total de todos os funcion&aacute;rios, ou seja, o montante a repassar ao fechamento do m&ecirc;s para a contratada. <br>
      &#149;&nbsp; O sistema ir&aacute; disparar um e-mail automaticamente para a contratante e outro para o funcion&aacute;rio a cada compra, permitindo assim um acompanhamento mais eficaz, por essa raz&atilde;o &eacute; indispens&aacute;vel que se mantenham os e-mails funcionando. <br>
    &#149;&nbsp; Faturar e receber da contratante e repassar o pagamento aos estabelecimentos comerciais sem atrasos. </td>
  </tr>
  <tr>
    <td><p><strong>4&nbsp; - OBRIGA&Ccedil;&Otilde;ES DA CONTRATANTE </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; Manter absolutamente seus dados e de seus funcion&aacute;rios sempre atualizados junto a contratada pelo site <a href="http://www.digicompras.com.br/">www.digicompras.com.br </a> onde se encontra a &aacute;rea empresarial. <br>
      &#149;&nbsp; Zelar expressamente por todas as informa&ccedil;&otilde;es que ser&atilde;o inseridas no sistema Digicompras. Lembrando que a senha do operador que for delegado a fun&ccedil;&atilde;o de operar no sistema &eacute; de uso pessoal e intransfer&iacute;vel, n&atilde;o sendo sob hip&oacute;tese alguma, permitido emprestar senha a ningu&eacute;m. Constatando o fato a contratada tomar&aacute; as devidas provid&ecirc;ncias, sob a legisla&ccedil;&atilde;o em vigor. <br>
      &#149;&nbsp; Comunicar antecipadamente, quando for o caso, o desligamento do funcion&aacute;rio da empresa ou dele ser subtra&iacute;do tal atribui&ccedil;&atilde;o, a contratada declara expressamente que n&atilde;o se responsabiliza por atitudes il&iacute;citas que o operador tomar, em fun&ccedil;&atilde;o do seu desligamento ou outro motivo que seja. <br>
      &#149;&nbsp; Quando das f&eacute;rias de quaisquer uns dos funcion&aacute;rios, definir o status do cart&atilde;o como inativo, se n&atilde;o o fizer, a contratante n&atilde;o ser&aacute; ressarcida porque a compra ter&aacute; sido efetuada e o pagamento ser&aacute; devido, visto que &eacute; obriga&ccedil;&atilde;o da contratante manter as informa&ccedil;&otilde;es devidamente atualizadas, conforme j&aacute; mencionado neste. <br>
      &#149;&nbsp; Quando do desligamento do funcion&aacute;rio da empresa, deve-se exclu&iacute;-lo imediatamente, pois assim o cart&atilde;o que &eacute; do funcion&aacute;rio, fica bloqueado e sem liga&ccedil;&atilde;o com empresa alguma at&eacute; ele se ligar a outra empresa novamente e que tenha conv&ecirc;nio com a Digicompras. <br>
      &#149;&nbsp; Emitir o protocolo do usu&aacute;rio para que possa de imediato, utilizar os servi&ccedil;os da Digicompras durante o per&iacute;odo de produ&ccedil;&atilde;o do cart&atilde;o, pois nele j&aacute; estar&aacute; impresso o n&ordm; do cart&atilde;o, importante ressaltar que somente ser&aacute; aceito o protocolo assim como o cart&atilde;o, mediante apresenta&ccedil;&atilde;o do RG. <br>
      &#149;&nbsp; Entregar os cart&otilde;es para os funcion&aacute;rios quando a Digicompras, os enviar, ter&aacute; uma taxa &uacute;nica de emiss&atilde;o do cart&atilde;o que ser&aacute; mencionada no decorrer deste, ressaltando mais uma vez que o cart&atilde;o &eacute; do funcion&aacute;rio e quando se desligar da empresa ele pode ativ&aacute;-lo novamente em seu novo trabalho, desde que a empresa tenha conv&ecirc;nio com a digicompras. <br>
      &#149;&nbsp; Informar ao funcion&aacute;rio que o cart&atilde;o &eacute; dele e pode sugerir a Digicompras, que fa&ccedil;a conv&ecirc;nio com a empresa onde esta trabalhando atualmente ou estabelecimentos comerciais, quando for o caso. <br>
      &#149;&nbsp; O fechamento do m&ecirc;s-refer&ecirc;ncia ser&aacute; todo dia 25 de cada m&ecirc;s, a partir do dia 26 de cada m&ecirc;s ser&aacute; considerado o m&ecirc;s subseq&uuml;ente como refer&ecirc;ncia. <br>
      &#149;&nbsp; Todo dia 26 de cada m&ecirc;s a contratante j&aacute; ter&aacute; dispon&iacute;vel em sua &aacute;rea empresarial o relat&oacute;rio completo de todos os valores de seus funcion&aacute;rios individualmente e coletivo, bem como o total a ser repassado a Digicompras, pois como mencionado anteriormente, o sistema se atualiza em tempo real, logo &eacute; poss&iacute;vel acompanhar diariamente os fatos. <br>
    &#149;&nbsp; Efetuar o pagamento devido &agrave; Digicompras todo dia 30 do m&ecirc;s corrente, via DOC/TED ou boleto banc&aacute;rio, sem atraso, pois precisa ser repassado aos estabelecimentos comerciais que tamb&eacute;m tem data certa. </td>
  </tr>
  <tr>
    <td><p><strong>5&nbsp; – OS VALORES </strong></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&#149;&nbsp; A contratante ter&aacute; custo de R$ 0,00 pelo sistema. <br>
      &#149;&nbsp; Os funcion&aacute;rios ter&atilde;o apenas uma taxa nos casos a seguir. <br>
      &#149;&nbsp; Na emiss&atilde;o (Produ&ccedil;&atilde;o) do cart&atilde;o R$ 15,00 (&uacute;nica) <br>
      &#149;&nbsp; Na re-emiss&atilde;o do cart&atilde;o R$ 15,00 (Em caso de perda ou extravio) <br>
    &#149;&nbsp; Percentual sobre as compras do funcion&aacute;rio 0,00% </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Fica eleito o f&oacute;rum desta cidade para dirimir quaisquer d&uacute;vidas sobre este, dispensando qualquer outro por mais privilegiado que seja. </td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"> E, por assim estarem de m&uacute;tuo e comum acordo as partes assinam o presente instrumento legal, em 02(duas) vias de igual teor, conte&uacute;do e para o mesmo efeito, na presen&ccedil;a de duas testemunhas. </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <p align="center">Franca – SP, <? echo date('d-m-Y'); ?></p>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>CONTRATANTE</strong></div></td>
  </tr>
  <tr>
    <td><p align="center">____________________</p>
      <div align="center">Assinatura </div></td>
    <td><div align="center">
      <p align="center"><? echo $proprietario; ?></p>
      <div align="center">Nome por extenso </div>
    </div></td>
    <td><div align="center">
      <p align="center"><? echo $cpf; ?></p>
      <div align="center">CPF</div>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong>CONTRATADA</strong></div></td>
  </tr>
  <tr>
    <td><p align="center">____________________</p>
        <div align="center">Assinatura </div></td>
    <td><div align="center">
        <p align="center"><? echo $nfantasia_dc; ?> (<? echo $nome_dc; ?>) </p>
        <div align="center">Nome por extenso </div>
    </div></td>
    <td><div align="center">
        <p align="center"><? echo $cpf_dc; ?></p>
        <div align="center">CPF</div>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?
mysql_close($conexao);
?>