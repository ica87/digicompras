<?



require 'conect/conect.php';
include 'css/botoes.css';


?>





<html>

<head>

<title>Registre seu curriculo gratuitamente</title>

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

<script language="javascript">

function foco(usuario)

{

document.getElementById(usuario).focus();

}

</script>



			<?

			

			

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body onLoad="javascript:foco('usuario');" bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<div align="center">
  <? } ?>
  <input type="image" name="imageField" id="imageField" src="logo/cabecalho_anuncio.jpg">
</div>
<form action="index.php" method="post" name="form1" target="_top">
  <input type="submit" class='class01' name="Submit2" value="Voltar">
</form>
<form action="envia_curriculo.php" method="post" name="form1" target="_top">
  <table width="80%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="4"><div align="center"><strong>Trabalhe Conosco - Envie uma pr&eacute;via de seu curriculo para aprecia&ccedil;&atilde;o de nosso RH</strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nome</td>
      <td>&nbsp;</td>
      <td>Telefone /Cel</td>
    </tr>
    <tr>
      <td width="9%">&nbsp;</td>
      <td width="36%"><input name="nome" class='class02' type="text" id="nome" size="40"></td>
      <td width="11%">&nbsp;</td>
      <td width="44%"><input type="text" class='class02' name="telefones" id="telefones"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>CPF*</td>
      <td>&nbsp;</td>
      <td>RG</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" class='class02' name="cpf" id="cpf"></td>
      <td>&nbsp;</td>
      <td><input type="text" class='class02' name="rg" id="rg"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>E-Mail</td>
      <td>&nbsp;</td>
      <td>Dta Nasc</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="email" class='class02' type="text" id="email" size="40"></td>
      <td>&nbsp;</td>
      <td><input type="text" class='class02' name="data_nasc" id="data_nasc"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Endere&ccedil;o</td>
      <td>&nbsp;</td>
      <td>N&uacute;mero</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="endereco" class='class02' type="text" id="endereco" size="40"></td>
      <td>&nbsp;</td>
      <td><input name="numero" class='class02' type="text" id="numero" size="5"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Bairro</td>
      <td>&nbsp;</td>
      <td>Cidade</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" class='class02' name="bairro" id="bairro"></td>
      <td>&nbsp;</td>
      <td><input type="text" class='class02' name="cidade" id="cidade"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Escolaridade</td>
      <td>&nbsp;</td>
      <td>Cursos</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><select name="escolaridade" class='class02' id="escolaridade">
        <option>1&ordm; Grau incompleto</option>
        <option>1&ordm; Grau completo</option>
        <option>2&ordm; Grau incompleto</option>
        <option>2&ordm; Grau completo</option>
        <option>T&eacute;cnico incompleto</option>
        <option>T&eacute;cnico completo</option>
        <option>Superior incompleto</option>
        <option>Superior completo</option>
        <option>P&oacute;s Gradua&ccedil;&atilde;o incompleto</option>
        <option>P&oacute;s Gradua&ccedil;&atilde;o completo</option>
        <option>MBA Incompleto</option>
        <option>MBA Completo</option>
        <option>Mestrado</option>
        <option>Doutorado</option>
      </select>      </td>
      <td>&nbsp;</td>
      <td><input type="text" name="curso" class='class02' id="curso"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&Aacute;rea de Interesse</td>
      <td>&nbsp;</td>
      <td>Fun&ccedil;&otilde;es desejadas</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><select name="area_interesse" class='class02'id="area_interesse">
        <option selected>Selecione</option>
        <?


    $sql = "select * from area_de_interesse order by area asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['area']."</option>";
    }
?>
      </select></td>
      <td>&nbsp;</td>
      <td><input name="funcoes" class='class02' type="text" id="funcoes" size="40"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong>Fale um pouco de suas experiencias profissionais</strong></div></td>
      <td colspan="2"><div align="center"><strong>Empresas onde trabalhou e quais as atividades  desenvolvidas</strong></div></td>
    </tr>
    <tr>
      <td colspan="2">
        
        <div align="center">
            <textarea name="experiencias" class='class02' id="experiencias" cols="60" rows="7"></textarea>
        </div></td>
      <td colspan="2">
        
        <div align="center">
            <textarea name="empresas_trabalhou" class='class02' id="empresas_trabalhou" cols="60" rows="7"></textarea>
          </div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>Por que deseja trabalhar?</strong></div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <textarea name="motivo_trabalhar" class='class02' id="motivo_trabalhar" cols="100" rows="7"></textarea>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" class='class01' name="button" id="button" value="Enviar"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>

</html>

<?

mysql_close($conexao);

?>