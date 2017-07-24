
<html>
<body>
<?php
require("connect.php");
insertNewOp($connection, $_POST["tipoMercadoria"], $_POST["nomeMercadoria"], $_POST["quantidade"], $_POST["preco"], $_POST["tipoNegocio"]);
header("Location: https://webtest001-nickollas.c9users.io/index.php");
die();
?>
</body>
</html> 