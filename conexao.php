<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "db_ciclovittal";

$mysqli = new mysqli($host, $user, $password, $db);

if($mysqli->connect_errno)
	echo "Falha na conexão com o banco de dados: (".$mysqli->connect_errno.") ".$mysqli->connect_error;


 ?>