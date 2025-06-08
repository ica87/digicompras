<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="grava_produtos.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">        
<?

include '../../conect/logo_digicompras.php';


require '../../conect/conect.php';

?>
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">Tela de Edi&ccedil;&atilde;o de categoria!</font></strong></td>
    </tr>
    <tr>
      <td><a href="menu.php">Voltar</a></td>
      <td><strong><font color="#FF0000">Aten&ccedil;&atilde;o!</font></strong></td>
    </tr>
    <tr> 
      <td><font color="#0000FF"><strong></strong></font></td>
      <td><strong><font color="#FF0000">A mudan&ccedil;a de nome de Sub categoria afetar&aacute; todos os produtos que estiverem relacionados a ela, devendo ser atualizado todos os produtos para o novo nome da sub categoria! </font></strong></td>
    </tr>
    <tr> 
      <td width="11%"><font color="#0000FF"><strong></strong></font></td>
      <td width="89%"><a href="marca.php"><font color="#0000FF"><strong>Alterar nome de Marca </strong></font></a></td>
    </tr>
    <tr> 
      <td><font color="#0000FF">&nbsp;</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><strong><font color="#FF0000">Aten&ccedil;&atilde;o!</font></strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><strong><font color="#FF0000">A mudan&ccedil;a de rela&ccedil;&atilde;o &agrave; categoria for alterada, isso afetar&aacute; todos os produtos relacionados a ela.</font></strong></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><a href="marca_alterar_tipo_veiculo.php"><strong>Alterar  relacionamento da Marca </strong></a></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>
