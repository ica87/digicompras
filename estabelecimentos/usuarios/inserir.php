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

<title>CADASTRO DE USU&Aacute;RIOS DO CART&Atilde;O DIGICOMPRAS</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../conect/conect.php';

include '../../css/botoes.css';







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









<form name="form1" method="post" action="../index.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" class='class01' name="Submit3" value="Voltar">

</form>
	
<?

$sql = "SELECT * FROM estabelecimentos where cnpj = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];
$telefone = $linha[12];
	$cidade = $linha[10];
	$email = $linha[14];

}
?>

<?
$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

while($linha=mysql_fetch_row($res)) {



$codigo_op = $linha[0];

$nome_op = $linha[1];

$sexo_op = $linha[2];

$estadocivil_op = $linha[3];

$cpf_op = $linha[4];

$rg_op = $linha[5];

$orgao_op = $linha[6];

$emissao_op = $linha[7];

$data_nasc_op = $linha[8];

$pai_op = $linha[9];

$mae_op = $linha[10];

$endereco_op = $linha[11];

$numero_op = $linha[12];

$bairro_op = $linha[13];

$complemento_op = $linha[14];

$cidade_op = $linha[15];

$estado_op = $linha[16];

$cep_op = $linha[17];

$telefone_op = $linha[18];

$celular_op = $linha[19];

$email_op = $linha[20];

$operador_op = $linha[21];

$cel_operador_op = $linha[22];

$email_operador_op = $linha[23];

$estabelecimento_op = $linha[24];

$cidade_estabelecimento_op = $linha[25];

$tel_estabelecimento_op = $linha[26];

$email_estabelecimento_op = $linha[27];

$obs_op = $linha[28];

$estab_pertence_op = $linha[44];

$cidade_estab_pertence_op = $linha[45];

$tel_estab_pertence_op = $linha[46];

$email_estab_pertence_op = $linha[47];


}
?>








<form name="form1" method="post" action="grava.php">



<table width="100%" border="0" cellspacing="4">

    <tr> 

      <td>Status do Cart&atilde;o </td>

      <td><p><strong><font color="#0000FF">Ativo

        <input name="status" type="hidden" id="status" value="<? echo Ativo; ?>">

      </font></strong></p>      </td>

      <td>Data Cadastro </td>

      <td><strong><font color="#0000FF"><? echo date('d-m-Y'); ?></font></strong>

        <input name="datacadastro" type="hidden" id="datacadastro2" value="<? echo date('d-m-Y'); ?>">

        <input name="horacadastro" type="hidden" id="horacadastro2" value="<? echo date('H:i:s'); ?>"></td>

    </tr>

    <tr>

      <td>Empresa Conv. </td>

      <td><strong><font color="#0000FF"><? echo $nfantasia; ?>

        <input name="estab_pertence" type="hidden" id="estab_pertence" value="<? echo $nfantasia; ?>">

      </font></strong></td>

      <td>Cidade</td>

      <td><strong><font color="#0000FF"><? echo $cidade; ?>

            <input name="cidade_estab_pertence" type="hidden" id="estab_pertence" value="<? echo $cidade; ?>">

      </font></strong></td>

    </tr>

    <tr>

      <td>Telefone</td>

      <td><strong><font color="#0000FF"><? echo $telefone; ?>

            <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo $telefone; ?>">

      </font></strong></td>

      <td>E_Mail</td>

      <td><strong><font color="#0000FF"><? echo $email; ?>

            <input name="email_estab_pertence" type="hidden" id="estab_pertence3" value="<? echo $email; ?>">

      </font></strong></td>

    </tr>

    <tr> 

      <td>Nome</td>

      <td><input name="nome" class='class02' type="text" id="nome2" size="50" maxlength="50"></td>

      <td>Fun&ccedil;&atilde;o</td>

      <td><input name="funcao" class='class02' type="text" id="funcao"></td>

    </tr>

    <tr> 

      <td width="15%">Data Nasc </td>

      <td width="37%"><input name="data_nasc" class='class02' type="text" id="data_nasc" size="15" maxlength="10"></td>

      <td width="11%">Sexo</td>

      <td width="36%"><select name="sexo" class='class02' id="sexo">

        <option>Masculino</option>

        <option>Feminino</option>

      </select>        

        <font color="#0000FF">&nbsp; </font></td>

    </tr>

    <tr> 

      <td>Estado Civil </td>

      <td><select name="estadocivil" class='class02'id="estadocivil">

        <option selected>Selecione</option>

        <?





    $sql = "select * from estado_civil order by estadocivil asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option value=" .$x['estadocivil']. ">".$x['estadocivil']."</option>";

    }

?>

      </select>        </td>

      <td>CPF</td>

      <td><input name="cpf" class='class02' type="text" id="cpf" size="18" maxlength="14"> 

      </td>

    </tr>

    <tr>

      <td>RG</td>

      <td><input name="rg" class='class02' type="text" id="rg" size="25" maxlength="25"> 

        &Oacute;rg&atilde;o 

        <input name="orgao" class='class02' type="text" id="orgao" size="15" maxlength="14"></td>

      <td>Emiss&atilde;o</td>

      <td><input name="emissao" class='class02' type="text" id="cpf4" size="15" maxlength="10"> 

        dd/mm/aaaa </td>

    </tr>

    <tr>

      <td>Pai</td>

      <td><input name="pai" class='class02' type="text" id="pai" size="50" maxlength="50"></td>

      <td>M&atilde;e</td>

      <td><input name="mae" class='class02' type="text" id="endereco3" size="50" maxlength="50"></td>

    </tr>

    <tr> 

      <td>Endere&ccedil;o</td>

      <td><input name="endereco" class='class02' type="text" id="endereco" size="50" maxlength="50"> 

      </td>

      <td>N&uacute;mero</td>

      <td><input name="numero" class='class02' type="text" id="numero2" size="10" maxlength="10"> 

      </td>

    </tr>

    <tr> 

      <td><p>Bairro</p></td>

      <td><input name="bairro" class='class02' type="text" id="bairro" size="50" maxlength="50"> 

      </td>

      <td>Complemento</td>

      <td><input name="complemento" class='class02' type="text" id="endereco4" size="50" maxlength="50"></td>

    </tr>

    <tr>

      <td>Cidade</td>

      <td><input name="cidade" class='class02' type="text" id="cidade" size="50" maxlength="50"></td>

      <td>Estado</td>

      <td><select name="estado" class='class02' id="select7">

        <option selected>Selecione</option>

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

      <td><input name="cep" class='class02' type="text" id="cep" size="9" maxlength="9">

Use o formato 00000-000</td>

      <td>Telefone</td>

      <td><input name="telefone" class='class02' type="text" id="endereco5" size="15" maxlength="14"> </td>

    </tr>

    <tr> 

      <td>Celular</td>

      <td><input name="celular" class='class02' type="text" id="telefone" size="15" maxlength="14"></td>

      <td>E-Mail</td>

      <td><input name="email" class='class02' type="text" id="email" size="50" maxlength="50"></td>

    </tr>

    <tr>

      <td>Obs</td>

      <td colspan="2"><textarea name="obs" class='class02' cols="50" rows="7" id="obs"></textarea></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>Sal&aacute;rio R$ </td>

      <td><input name="salario" class='class02' type="text" id="salario">

        formato 0000.00 </td>

      <td><div align="center"></div></td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td><input name="senha" type="hidden" id="senha" value=""></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td colspan="2"><strong><font color="#0000FF">

        <input name="operador" type="hidden" id="operador3" value="<? echo $nome_op; ?>">

        <input name="cel_operador" type="hidden" id="cel_operador" value="<? echo $celular_op; ?>">

        <input name="email_operador" type="hidden" id="email_operador" value="<? echo $email_op; ?>">

        <input name="estab_pertence" type="hidden" id="estab_pertence" value="<? echo $estab_pertence_op; ?>">

        <input name="cidade_estab_pertence" type="hidden" id="cidade_estab_pertence" value="<? echo $cidade_estab_pertence_op; ?>">

        <input name="tel_estab_pertence" type="hidden" id="tel_estab_pertence" value="<? echo $tel_estab_pertence_op; ?>">

        <input name="email_estab_pertence" type="hidden" id="email_estab_pertence" value="<? echo $email_estab_pertence_op; ?>">

        <input name="operador_atende" type="hidden" id="operador_atende" value="<? echo $operador_atende_empresa; ?>">

        <input name="status_de_envio" type="hidden" id="status_de_envio" value="<? echo "Em Produção"; ?>">

</font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td colspan="2"><?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" class='class01' name="Submit" value="Cadastrar Usu&aacute;rio"></td><td><div align="right"> </div></td>

      <td>&nbsp;</td>

    </tr>

    <tr> 

      <td colspan="2">&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>

<form name="form1" method="post" action="calcula_pedido.php">

  <table width="100%" border="0" cellspacing="4">

    <tr>

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br>

        </strong><strong><font color="#0000FF"><? echo $nome_op; ?>

        

      </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="35%"><strong><font color="#0000FF"> </font></strong><strong><font color="#000000">E-Mail do operador: </font><font color="#0000FF"><br>

              <? echo $email_op; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="20%"><strong>Celular:<font color="#0000FF"><br>

              <? echo $celular_op; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong><font color="#0000FF"> </font>Estabelecimento:</strong> <br>

          <strong><font color="#0000FF"><? echo $estab_pertence_op; ?>        </font></strong><strong><font color="#0000FF"> </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $tel_estab_pertence_op; ?>

      </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

              <? echo $email_estab_pertence_op; ?>

      </font><font color="#0000FF"> </font></strong></td>

      <td><strong>Cidade: <br>

            <font color="#0000FF"><? echo $cidade_estab_pertence_op; ?>          </font></strong></td>

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

  

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

</form>

</body>

</html>

