<?php

include 'config.php';

$product_code = $_POST["fname"];
$prodname = $_POST["lname"];
$proddesc = $_POST["address"];
$prodprice = $_POST["city"];
$produnits = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$pwd')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
