<?

require 'conect/conect.php';


$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$telefone = $linha[12];
$email_empresa = $linha[14];
$site = $linha[15];
}
?>

<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title><? echo "$nfantasia  -  $telefone"; ?></title>
</head>

<frameset rows="100,6%,*" cols="*" framespacing="0" frameborder="0" border="1">
  <frame name="topo" scrolling="no" noresize target="meio" src="topo.php">
  <frame name="meio" target="parte inferior" src="vazio.php" scrolling="no" noresize>
  <frame name="navegacao" src="navegacao.php" scrolling="auto" noresize>
  <noframes>
  <body>

  <p>Esta página usa quadros mas seu navegador não aceita quadros.</p>

  </body>
  </noframes>
</frameset>

</html>