<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo "Seja bem vindo! Você é um usuário autorizado!!<br>"; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo "Fique tranquilo para realizar seu pedido, pois ele chegará até nós em segurança!"; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");

?>


<html>
<head>
<title>CADASTRO DE PEDIDOS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?

require '../conect/conect.php';

?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="form1" method="post" action="calcula_pedido.php">
<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
//recebe os dados do cliente para efetuar o pedido
$dataentrega = $_POST['dataentrega'];
$codigo = $_POST['codigo'];
$razaosocial = $_POST['razaosocial'];
$cnpj = $_POST['cnpj'];
$nfantasia = $_POST['nfantasia'];
$inscr_est = $_POST['inscr_est'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$fax = $_POST['dataentrega'];
$celular = $_POST['celular'];
$representante = $_POST['representante'];
$condpagto = $_POST['condpagto'];
$modopagto = $_POST['modopagto'];
$transportadora = $_POST['transportadora'];
$redespacho = $_POST['redespacho'];


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM clientes where usuario = '$usuario' and senha = '$senha'";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;



?>



  <table width="100%" border="0" cellspacing="4">
    <tr> 
      <td colspan="5"><p><strong><font color="#0000FF" size="4">Efetuando Pedido nesta data e hora
              </font><font color="#0000FF"><? echo date('d-m-Y H:i:s'); ?></font><font color="#0000FF" size="4">
              ,
              <input name="datapedido" type="hidden" id="datapedido" value="<? echo date('d-m-Y H:i:s'); ?>">
              
   Data pretendida para entrega 
   <input name="dataentrega" type="text" id="dataentrega">
(Sujeito a an&aacute;lise)              </font></strong></p>        </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF">Seu c&oacute;digo &eacute; </font><font color="#0000FF">: <? echo $codigo; ?>
            <input name="codigo" type="hidden" value="<? echo $codigo; ?>"></font></strong></td>
      <td>N&ordm; Pedido </td>
      <td>Ap&oacute;s finalizado segue o n&uacute;mero </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td width="15%">Nome/Raz&atilde;o Social:</td>
      <td width="37%"><strong><font color="#0000FF"><? echo $linha[1]; ?></font></strong>
        <input name="razaosocial" type="hidden" id="razaosocial" value="<? echo $linha[1]; ?>"> 
      </td><td width="11%">Cnpj / CPF:</td>
      <td width="36%"><strong></strong>
        <strong><font color="#0000FF"><? echo $linha[2]; ?></font></strong>
      <input name="cnpj" type="hidden" id="cnpj" value="<? echo $linha[2]; ?>">      </td><td width="1%">&nbsp;</td>
    </tr>
    <tr> 
      <td>Apelido/N. Fantasia:</td>
      <td><strong></strong>
        <strong><font color="#0000FF"><? echo $linha[3]; ?></font></strong>
      <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $linha[3]; ?>">      </td><td>Inscr. Est: / RG:</td>
      <td><strong><font color="#0000FF"><? echo $linha[4]; ?></font></strong>
      <input name="inscr_est" type="hidden" id="inscr_est" value="<? echo $linha[4]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Endere&ccedil;o:</td>
      <td><strong><font color="#0000FF"><? echo $linha[5]; ?></font></strong>
      <input name="endereco" type="hidden" id="endereco" value="<? echo $linha[5]; ?>">      </td><td>N&uacute;mero:</td>
      <td><strong><font color="#0000FF"><? echo $linha[6]; ?></font></strong>
      <input name="numero" type="hidden" id="numero2" value="<? echo $linha[6]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td><p>Bairro:</p></td>
      <td><strong><font color="#0000FF"><? echo $linha[7]; ?></font></strong>
      <input name="bairro" type="hidden" id="bairro" value="<? echo $linha[7]; ?>">      </td><td>Cidade:</td>
      <td><strong><font color="#0000FF"><? echo $linha[8]; ?></font></strong>
      <input name="cidade" type="hidden" id="cidade3" value="<? echo $linha[8]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Estado:</td>
      <td><strong><font color="#0000FF"><? echo $linha[9]; ?></font></strong>
      <input name="estado" type="hidden" id="estado" value="<? echo $linha[9]; ?>"> </td>
      <td>Cep:</td>
      <td><strong><font color="#0000FF"><? echo $linha[10]; ?></font></strong>
      <input name="cep" type="hidden" id="cep2" value="<? echo $linha[10]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>E-Mail:</td>
      <td><strong><font color="#0000FF"><? echo $linha[11]; ?></font></strong>
      <input name="email" type="hidden" id="email3" value="<? echo $linha[11]; ?>">      </td><td>Comprador:</td>
      <td><strong><font color="#0000FF"><? echo $linha[12]; ?></font></strong>
      <input name="comprador" type="hidden" id="comprador2" value="<? echo $linha[12]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fone:</td>
      <td><strong><font color="#0000FF"><? echo $linha[13]; ?></font></strong>
      <input name="fone" type="hidden" id="fone2" value="<? echo $linha[13]; ?>">      </td><td>Fax:</td>
      <td><strong><font color="#0000FF"><? echo $linha[14]; ?></font></strong>
      <input name="fax" type="hidden" id="fax3" value="<? echo $linha[14]; ?>">      </td><td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Celular:</td>
      <td><strong><font color="#0000FF"><? echo $linha[15]; ?></font></strong>
        <input name="celular" type="hidden" id="celular3" value="<? echo $linha[15]; ?>">
      </td>
      <td>Representante:</td>
      <td><strong><font color="#0000FF"><? echo $linha[16]; ?></font></strong>        <input name="representante" type="hidden" id="representante" value="<? echo $linha[16]; ?>"> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Cond Pagto:</td>
      <td><select name="condpagto" id="select4">
        <option><? echo $linha[17]; ?></option>
        <?


    $sql = "select * from cond_pagto order by condpagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['condpagto']. ">".$x['condpagto']."</option>";
    }
?>
		
        </select> 
        <font color="#0000FF">* (sujeito a an&aacute;lise)</font></td>
      <td>Modo Pagto:</td>
      <td><select name="modopagto" id="select5">
        <option><? echo $linha[18]; ?></option>
        <?


    $sql = "select * from modo_pagto order by modopagto asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['modopagto']. ">".$x['modopagto']."</option>";
    }
?>
		
        </select> 
      <font color="#0000FF">* (sujeito a an&aacute;lise) </font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Transportadora:</td>
      <td><input name="transportadora" type="text" id="transportadora3" value="<? echo $linha[19]; ?>" size="50" maxlength="50"> 
        <font color="#0000FF"><strong>(Fob)</strong></font> </td>
      <td>Resdespacho:</td>
      <td><input name="redespacho" type="text" id="redespacho3" value="<? echo $linha[20]; ?>" size="50" maxlength="50"> 
        <strong><font color="#0000FF">(Fob)</font></strong> </td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td colspan="3"><div align="left"><strong><font color="#0000FF" size="4">Escolha a refer&ecirc;ncia do produto e monte a grade que deseja </font></strong></div></td>
      <td>&nbsp;</td>
    </tr>
	
	          <?
if($reg==3){
echo "</tr><tr>";
$reg=0;
}
?>

          <? } ?>
  </table>
  <table width="100%"  border="0">
    <tr>
      <td width="9%"><div align="center">Refer&ecirc;ncia</div></td>
      <td width="6%"><div align="center">Material</div></td>
      <td width="3%"><div align="center">Cor</div></td>
      <td width="5%"><div align="center">Solado</div></td>
      <td width="3%">A</td>
      <td width="3%"><div align="center">22</div></td>
      <td width="3%"><div align="center">23</div></td>
      <td width="3%"><div align="center">24</div></td>
      <td width="3%"><div align="center">25</div></td>
      <td width="3%"><div align="center">26</div></td>
      <td width="3%"><div align="center">27</div></td>
      <td width="3%"><div align="center">28</div></td>
      <td width="3%"><div align="center">29</div></td>
      <td width="3%"><div align="center">30</div></td>
      <td width="3%"><div align="center">31</div></td>
      <td width="3%"><div align="center">32</div></td>
      <td width="3%"><div align="center">33</div></td>
      <td width="3%"><div align="center">34</div></td>
      <td width="3%"><div align="center">35</div></td>
      <td width="3%"><div align="center">36</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>B</td>
      <td><div align="center">37</div></td>
      <td><div align="center">38</div></td>
      <td><div align="center">39</div></td>
      <td><div align="center">40</div></td>
      <td><div align="center">41</div></td>
      <td><div align="center">42</div></td>
      <td><div align="center">43</div></td>
      <td><div align="center">44</div></td>
      <td><div align="center">45</div></td>
      <td><div align="center">46</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">
        <select name="referencia_1" id="select">
            <option><? echo $referencia_1; ?></option>
            <?


    $sql = "select * from produtos order by referencia asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['referencia']. ">".$x['referencia']."</option>";
    }
?>
        </select>
      </div></td>
      <td><div align="center">
        <select name="material_1" id="select">
            <option selected><? echo $material_1; ?> </option>
            <?


    $sql = "select * from materiais order by material asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['material']. ">".$x['material']."</option>";
    }
?>
        </select>
      </div></td>
      <td><div align="center">
        <select name="cor_1" id="select">
            <option  selected><? echo $cor_1; ?></option>
            <?


    $sql = "select * from cor_prod order by cor asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['cor']. ">".$x['cor']."</option>";
    }
?>
        </select>
      </div></td>
      <td><div align="center">
        <select name="solado_1" id="select">
            <option  selected><? echo $solado_1; ?></option>
            <?


    $sql = "select * from solados order by solado asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option value=" .$x['solado']. ">".$x['solado']."</option>";
    }
?>
        </select>
      </div></td>
      <td><select name="select">
        <option> </option>
		<option>A</option>
        <option>B</option>
      </select></td>
      <td><div align="center">
          <input name="n22_1" type="text" id="n22_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n23_1" type="text" id="n23_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n24_1" type="text" id="n24_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n25_1" type="text" id="n25_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n26_1" type="text" id="n26_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n27_1" type="text" id="n27_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n28_1" type="text" id="n28_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n29_1" type="text" id="n29_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n30_1" type="text" id="n30_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n31_1" type="text" id="n31_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n32_1" type="text" id="n32_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n33_1" type="text" id="n33_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n34_1" type="text" id="n34_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n35_1" type="text" id="n35_1" size="2" maxlength="2">
      </div></td>
      <td><div align="center">
          <input name="n36_1" type="text" id="n36_1" size="2" maxlength="2">
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="100%"  border="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="9%">Observa&ccedil;&otilde;es</td>
      <td colspan="5" rowspan="2" valign="top"><textarea name="obs" cols="50" rows="4" id="textarea2"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
  <p>
  <?
  	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	?>
  <input type="submit" name="Submit" value="Calcular pedido">
  <input type="reset" name="Submit2" value="Limpar">
</p>
</form>
</body>
</html>
<? 
mysql_free_result($res);
mysql_close($conexao);
?>