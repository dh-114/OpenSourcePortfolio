<?php
$ip = "127.0.0.1";
$user_name = "root";
$password = "";
$dbname = "osp";
// 创建连接
$conn = new mysqli($ip, $user_name, $password, $dbname);
// 检查连接
if ($conn->connect_error)
{
    //    die("数据库连接失败: " . $conn->connect_error);
}
//echo "数据库连接成功";
?>