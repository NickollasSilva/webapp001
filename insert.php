<?php
    require("connect.php");
    //insertNewOp($connection, "epic", "epic", 2, 2, 'h');
    
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require("header.php"); ?>
        <div class="container">
            <form>
              <div class="form-group">
                <label for="tipoMercadoria">Tipo da Mercadoria</label>
                <input type="input" class="form-control" id="tipoMercadoria">
              </div>
              <div class="form-group">
                <label for="nomeMercadoria">Nome da Mercadoria</label>
                <input type="input" class="form-control" id="nomeMercadoria">
              </div>
              <div class="form-group">
                <label for="quantidade">Tipo da Mercadoria</label>
                <input type="number" class="form-control" id="quantidade">
              </div>
              <div class="form-group">
                <label for="preco">Tipo da Mercadoria</label>
                <input type="number" class="form-control" id="preco">
              </div>
              <div class="form-group">
                <label for="tipoNegocio">Tipo do Negocio</label>
                <select class="form-control" id="tipoNegocio">
                  <option value="C">Compra</option>
                  <option value="V">Venda</option>
                </select>
              </div>
              
              <button type="submit" class="btn btn-primary">Inserir</button>
            </form>
        </div>
    </body>
</html>