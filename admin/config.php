<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "personal_site";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>