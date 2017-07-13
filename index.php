<?php
    require("connect.php");
    //insertNewOp($connection, "epic", "epic", 2, 2, 'h');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require("header.php"); ?>
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Codigo da Mercadoria</th>
                        <th>Tipo da Mercadoria</th>
                        <th>Nome da Mercadoria</th>
                        <th>Quantidade</th>
                        <th>Preco</th>
                        <th>Tipo do Negocio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $result = getOp($connection);
                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["cd_product"] . "</td>";
                                echo "<td>" . $row["ds_productType"] . "</td>";
                                echo "<td>" . $row["nm_product"] . "</td>";
                                echo "<td>" . $row["quantity"] . "</td>";
                                echo "<td>" . $row["price"] . "</td>";
                                echo "<td>" . $row["cd_tradeType"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                </tbody>
            </table>
            
        </div>
    </body>
</html>
