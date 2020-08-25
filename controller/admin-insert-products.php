<?php

include 'config.php';

$product_code = $_POST["product_code"];
$product_name = $_POST["product_name"];
$product_desc = $_POST["product_desc"];
$product_img_name = $_POST["product_img_name"];
$qty = $_POST["qty"];
$price = $_POST["price"];

if($mysqli->query("INSERT INTO users (product_code, product_name, product_desc, product_img_name, qty, price) VALUES('$product_code', '$product_name', '$product_desc', '$product_img_name', $qty, '$price')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:../views/products.php");

?>
