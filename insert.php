<?php
    require("connect.php");
    //insertNewOp($connection, "epic", "epic", 2, 2, 'h');
    
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script
			  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
			  crossorigin="anonymous"></script>
			  
			  <script type="text/javascript">
			    $(document).ready(function(){
  			    var tsizError = true;
  			    var nsizError = true;
  			    var qsizError = true;
  			    
  			    $("#erroTipoM").hide();
  			    $("#erroNomeM").hide();
  			    $("#erroQuan").hide();
  			    
  			    $("input").blur(function(){
              var tval = $("#tipoM").val();
              var nval = $("#nomeM").val();
              var qval = $("#quan").val();
              
              if(tval.length > 100){
                tsizError = true;
              } else {
                tsizError = false;
              }
              
              if(nval.length > 100){
                nsizError = true;
              } else {
                nsizError = false;
              }
              
              if(qval > 2000000000){
                qsizError = true;
              } else {
                qsizError = false;
              }
              
              if(tsizError){
                $("#erroTipoM").show(1000);
              } else {
                $("#erroTipoM").hide(1000);
              }
              
              if(nsizError){
                $("#erroNomeM").show(1000);
              } else {
                $("#erroNomeM").hide(1000);
              }
              
              if(qsizError){
                $("#erroQuan").show(1000);
              } else {
                $("#erroQuan").hide(1000);
              }
              
              if(tsizError || nsizError || qsizError){
                $(':input[type="submit"]').prop('disabled', true);
              } else {
                $(':input[type="submit"]').prop('disabled', false);
              }
            });
  			    
  			    
			    });
			    
		    </script>
    </head>
    <body>
        <?php require("header.php"); ?>
        <div class="container">
            <br>
            <div class="alert alert-danger" role="alert" id="erroTipoM">
              <strong>Erro:</strong> "Tipo da Mercadoria" nao pode conter mais de 100 caracteres.
            </div>
            
            <div class="alert alert-danger" role="alert" id="erroNomeM">
              <strong>Erro:</strong> "Nome da Mercadoria" nao pode conter mais de 100 caracteres.
            </div>
            
            <div class="alert alert-danger" role="alert" id="erroQuan">
              <strong>Erro:</strong> Insira uma quantidade menor que 2000000000 (dois bilhoes).
            </div>
            
            <form action="insertHandling.php" method="post">
              <div class="form-group">
                <label for="tipoMercadoria">Tipo da Mercadoria</label>
                <input type="input" class="form-control" name="tipoMercadoria" id="tipoM" required>
              </div>
              <div class="form-group">
                <label for="nomeMercadoria">Nome da Mercadoria</label>
                <input type="input" class="form-control" name="nomeMercadoria" id="nomeM" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" min="1" class="form-control" name="quantidade" id="quan" required>
              </div>
              <div class="form-group">
                <label for="preco">Preco</label>
                <input type="number" min="0" step="0.01" class="form-control" name="preco" required>
              </div>
              <div class="form-group">
                <label for="tipoNegocio">Tipo do Negocio</label>
                <select class="form-control" name="tipoNegocio">
                  <option value="C">Compra</option>
                  <option value="V">Venda</option>
                </select>
              </div>
              
              <button type="submit" class="btn btn-primary">Inserir</button>
            </form>
        </div>
    </body>
</html>