<html>
<head>
<title>CADASTRO DE REPRESENTANTES</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<form name="form1" method="post" action="grava_editar_representante.php">

<?

require '../../conect/conect.php';


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
<?


$codigo = $_POST['codigo'];

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM representantes where codigo = '$codigo'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
$reg++;
?>




  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>
      <td colspan="3"><strong><font color="#0000FF" size="4">Cadastro de Representantes!</font></strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td><a href="menu.php">Voltar</a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="10%">Nome:</td>
      <td width="35%"><input name="nome" type="text" id="nome" value="<? echo $linha[1]; ?>" size="50" maxlength="50"></td>
      <td width="13%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco" type="text" id="endereco" value="<? echo $linha[2]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>N&uacute;mero:</td>
      <td><input name="numero" type="text" id="numero2" value="<? echo $linha[3]; ?>" size="10" maxlength="10"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Bairro:</td>
      <td><input name="bairro" type="text" id="endereco22" value="<? echo $linha[4]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" value="<? echo $linha[5]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado" id="estado">
		        <option selected><? echo $linha[6]; ?></option>
		        <?


    $sql = "select * from estados_do_brasil order by estado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['estado']. ">".$x['estado']."</option>";
    }
?>

        </select>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cep:</td>
      <td><input name="cep" type="text" id="cep" value="<? echo $linha[7]; ?>" size="9" maxlength="9">
        Use o formato 00000-000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>CPF:</td>
      <td><input name="cpf" type="text" id="cpf" value="<? echo $linha[8]; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>RG:</td>
      <td><input name="rg" type="text" id="rg" value="<? echo $linha[9]; ?>"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><input name="fone" type="text" id="fone" value="<? echo $linha[10]; ?>" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fax:</td>
      <td><input name="fax" type="text" id="fax" value="<? echo $linha[11]; ?>" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><input name="celular" type="text" id="celular" value="<? echo $linha[12]; ?>" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email" type="text" id="email" value="<? echo $linha[13]; ?>" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario" value="<? echo $linha[14]; ?>" size="25" maxlength="25"></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Senha: </td>
      <td><input name="senha" type="text" id="senha3" value="<? echo $linha[15]; ?>" size="25" maxlength="25"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><textarea name="obs" cols="92" rows="3" wrap="PHYSICAL" id="obs"><? echo $linha[16]; ?></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><input type="submit" name="Submit" value="Gravar Altera&ccedil;&otilde;es de Representante"> 
        <input type="reset" name="Submit2" value="Limpar"> </td>
      <td><div align="right"> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="21" colspan="2"><a href="menu.php">Voltar</a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
    <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
  
<? } ?>
</form>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>
