<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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
      <td width="19%">&nbsp;</td>
      <td><strong><font color="#0000FF" size="4">O que deseja fazer com as marcas?</font></strong></td>
    </tr>
    <tr>
      <td><a href="../navegacao.php">Voltar</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form1" method="post" action="inserir_marca.php">
        <input type="submit" name="Submit" value="Inserir marca">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form2" method="post" action="editar_marca.php">
        <input type="submit" name="Submit2" value="Editar marca">
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="selecione_codigo_exclusao_marca.php">
        <input type="submit" name="Submit3" value="Excluir marca">
      </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
