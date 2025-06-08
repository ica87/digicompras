<?



require 'conect/conect.php';
include 'css/botoes.css';


?>





<html>

<head>

<title>Registre a vaga de emprego gratuitamente</title>

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
<form action="grava_vaga.php" method="post" name="form1" target="_top">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="4"><div align="center"><strong>Sua vaga ficar&aacute; dispon&iacute;vel no site por 15 dias!
        <input name="datecadastro" type="hidden" id="datecadastro" value="<? echo "$datecadastro"; ?>">
      </strong>
          <input name="status" type="hidden" id="status" value="ativo">
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Empresa</strong></td>
      <td>&nbsp;</td>
      <td><strong>Telefone /Cel</strong></td>
    </tr>
    <tr>
      <td width="9%">&nbsp;</td>
      <td width="36%"><strong>
        <input name="empresa" class='class02' type="text" id="empresa" size="40">
      </strong></td>
      <td width="11%">&nbsp;</td>
      <td width="44%"><strong>
        <input type="text" class='class02' name="telefones" id="telefones">
      </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Endere&ccedil;o</strong></td>
      <td>&nbsp;</td>
      <td><strong>N&uacute;mero</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>
        <input name="endereco" class='class02' type="text" id="endereco" size="40">
      </strong></td>
      <td>&nbsp;</td>
      <td><strong>
        <input name="numero" class='class02' type="text" id="numero" size="5">
      </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Bairro</strong></td>
      <td>&nbsp;</td>
      <td><strong>Cidade</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>
        <input type="text" class='class02' name="bairro" id="bairro">
      </strong></td>
      <td>&nbsp;</td>
      <td><strong>
        <input type="text" class='class02' name="cidade" id="cidade">
      </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>E-Mail</strong></td>
      <td>&nbsp;</td>
      <td><strong>Titulo da vaga</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>
        <input name="email" class='class02' type="text" id="email" size="40">
      </strong></td>
      <td>&nbsp;</td>
      <td><strong>
        <input name="titulo" class='class02' type="text" id="titulo" size="40">
      </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Escolaridade exigida</strong></td>
      <td>&nbsp;</td>
      <td><strong>&Aacute;rea de Atua&ccedil;&atilde;o</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>
        <select name="escolaridade" class='class02' id="escolaridade">
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
        </select>
      </strong></td>
      <td>&nbsp;</td>
      <td><strong>
        <select name="area_atuacao" class='class02'id="area_atuacao">
          <option selected>Selecione</option>
          <?


    $sql = "select * from area_de_interesse order by area asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['area']."</option>";
    }
?>
        </select>
      </strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong>Fun&ccedil;&otilde;es a desempenhar</strong></td>
      <td>&nbsp;</td>
      <td><strong>Sal&aacute;rio</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="funcoes" class='class02' type="text" id="funcoes" size="40"></td>
      <td>&nbsp;</td>
      <td><input type="text" class='class02' name="salario" id="salario"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong>Fale um pouco dos requisitos profissionais exigidos</strong></div></td>
      <td colspan="2"><div align="center"><strong>Qualidades/Desenvolturas/Diferenciais que ser&atilde;o apreciados</strong></div></td>
    </tr>
    <tr>
      <td colspan="2">
        
        <div align="center">
            <textarea name="requisitos" class='class02' id="requisitos" cols="60" rows="7"></textarea>
        </div></td>
      <td colspan="2">
        
        <div align="center">
            <textarea name="qualidades" class='class02' id="qualidades" cols="60" rows="7"></textarea>
          </div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><strong>Fa&ccedil;a uma pergunta aos candidatos</strong></div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <textarea name="pergunta" class='class02' id="pergunta" cols="100" rows="7"></textarea>
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