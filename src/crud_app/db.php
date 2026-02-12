<?php
$servername="localhost";
$username="amk1005739";
$password="KdGTXS55";
$dbname ="wp_amk1005739";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>
