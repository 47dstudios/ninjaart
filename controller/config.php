<?php
$currency = '₱';
$db_username = 'root';
$db_password = 'root';
$db_name = 'capstone2v7';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);


if ($mysqli->connect_error) {
	die('Connection failed:' . $mysqli->connect_error);
}

/*echo 'Connected successfully';*/


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

?>
