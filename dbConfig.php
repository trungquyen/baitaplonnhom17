<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "vkcom";

// B1:kết nối database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) { //truy cập thuộc tính/phương thức của 1 đối tượng trong php
    die("Connection failed: " . $conn->connect_error);
}
?>