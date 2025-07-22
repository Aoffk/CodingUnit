<?php
$host = "localhost"; 
$user = "root";
$pass = ""; 
$dbname = "codingunit"; 

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
die("Conection failed: " . $conn->connect_error);
}
?>
