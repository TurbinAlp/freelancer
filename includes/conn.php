<?php
session_start();

$servername = "localhost"; 
$usernamedb = "root"; 
$passworddb = ""; 
$database = "freelancer";

$conn = new mysqli($servername, $usernamedb, $passworddb, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>