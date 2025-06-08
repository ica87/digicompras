<html>
<head>
<title>CADASTRO DE REPRESENTANTES CLACLE CAL&Ccedil;ADOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">



<form name="form1" method="post" action="grava_representante.php">

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

  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td>&nbsp;</td>
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
      <td width="35%"><input name="nome" type="text" id="nome" size="50" maxlength="50"></td>
      <td width="13%">&nbsp;</td>
      <td width="37%">&nbsp;</td>
      <td width="0%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><input name="endereco" type="text" id="endereco" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>N&uacute;mero:</td>
      <td><input name="numero" type="text" id="numero2" size="10" maxlength="10"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Bairro:</td>
      <td><input name="bairro" type="text" id="endereco22" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><select name="estado" id="estado">
          <option selected>Selecione o estado</option>
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
      <td><input name="cep" type="text" id="cep" size="9" maxlength="9">
        Use o formato 00000-000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>CPF:</td>
      <td><input name="cpf" type="text" id="cpf"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>RG:</td>
      <td><input name="rg" type="text" id="rg"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><input name="fone" type="text" id="fone" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fax:</td>
      <td><input name="fax" type="text" id="fax" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><input name="celular" type="text" id="celular" size="12" maxlength="12">
        Use o formato 00-0000-0000</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><input name="email" type="text" id="email" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Usu&aacute;rio:</td>
      <td><input name="usuario" type="text" id="usuario" size="25" maxlength="25"></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Senha: </td>
      <td><input name="senha" type="text" id="senha3" size="25" maxlength="25"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Observa&ccedil;&otilde;es</td>
      <td colspan="3"><textarea name="obs" cols="92" rows="3" wrap="PHYSICAL" id="obs"></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><input type="submit" name="Submit" value="Gravar Representante"> 
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
</form>
</body>
</html>
