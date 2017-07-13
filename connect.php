<?php
$server = "https://webtest001-nickollas.c9users.io";
$username = "nickollas";
$password = '';


// Create connection
$connection = mysqli_connect($servername, $username, $password);

// Check connection
if ($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
}
mysqli_select_db($connection, 'c9');

function insertNewOp($conn, $type, $name, $quantity, $price, $tradeType){
    $query = "INSERT INTO tb_operations (ds_productType, nm_product, quantity, price, cd_tradeType)
    VALUES ('$type', '$name', $quantity, $price, '$tradeType')";
    mysqli_query($conn, $query);
}

function getOp($conn){
    $query = "SELECT * FROM tb_operations";
    $result = mysqli_query($conn, $query);
    return $result;
}

?>
