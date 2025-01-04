<?php
$servername = "192.168.1.21";
$username = "root";
$password = "114514"; // 替换为实际的密码
$dbname = "OSP";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("数据库连接失败: " . $conn->connect_error);
}
echo "数据库连接成功";
?>