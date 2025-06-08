<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit3" value="Voltar">
</form>
<form action="envia.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%"  border="0">
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>Data e hora da newsletter - <? echo date('d-m-Y - H:i:s'); ?>
          <input name="data_hora" type="hidden" id="data_hora" value="<? echo date('d-m-Y - H:i:s'); ?>">
      </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>Digite o assunto para sua Newsletter</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input name="assunto" type="text" id="assunto" size="50" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td colspan="2"><div align="center"><strong>Digite o texto que deseja para ser enviado para<br> 
        </strong>
            <strong>seus clientes que desejam receber os informativos</strong></div></td>
      <td width="16%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" rowspan="3" valign="top"><textarea name="informativo" cols="80" rows="15" id="informativo"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><strong>Insira a imagem que pretende enviar </strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><input name="foto" type="file" id="foto"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="14%"><input type="submit" name="Submit" value="Enviar"></td>
      <td width="47%"><input type="reset" name="Submit2" value="Limpar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
