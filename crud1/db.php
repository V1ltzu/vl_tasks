<?php
$servername = "db";
$username = "capp1";
$password = "Rammstein69";
$dbname = "user1";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error)
die("connection failed:" .$conn->connect_error)
?>