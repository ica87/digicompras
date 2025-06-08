<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

.style1 {color: #0019AE}

.style2 {font-size: 28px}

.style3 {color: #FFFF00}

-->

</style>

</head>

<?



require 'conect/conect.php';
include 'css/botoes.css';




//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>

<p align="center" class="style1">&nbsp;</p>

<p align="center" class="style2 style1"><strong>ATEN&Ccedil;&Atilde;O PARA POSSIVEIS INCONSISTENCIAS!!</strong></p>

<p align="center" class="style1 style2"><strong>* USUARIO E/OU SENHA INCORRETOS</strong>!</p>
<p align="center" class="style1 style2"><strong>* CPF DEVE SER DIGITADO SOMENTE OS NUMEROS</strong></p>
<p align="center" class="style1 style2"><strong>*VOC&Ecirc; AINDA N&Atilde;O POSSUI O CADASTRO ATIVO DO SEU CARTAO DIGITAL FIDELIDADE, NESSE CASO SOLICITE EM QUALQUER LOJA/EMPRESA QUE VOC&Ecirc; COSTUMA COMPRAR PARA QUE A MESMA SE CADASTRE E POSSA GERAR O SEU CARTAO PARA PONTUA&Ccedil;&Atilde;O!</strong></p>

<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="35%">&nbsp;</td>
      <td width="31%" align="center"><form name="form1" method="post" action="login_usuario.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input class='class01' type="submit" name="Submit2" value="Voltar">
      </form></td>
      <td width="34%">&nbsp;</td>
    </tr>
  </tbody>
</table>
<p align="center" class="style3 style1 style2">&nbsp;</p>

<p align="center" class="style3"><strong></strong></p>





</body>

</html>

