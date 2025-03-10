<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$filename = '../config.php';

if(file_exists($filename)){
    die ("配置文件已存在");
} 
$user_name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
$user_password = trim($_POST["password"]);
$sql_ip = filter_var($_POST["sqlip"], FILTER_VALIDATE_IP);
$sql_user = htmlspecialchars(trim($_POST["sqluser"]), ENT_QUOTES, 'UTF-8');
$sql_password = trim($_POST["sqlpw"]);
$sql_name = htmlspecialchars(trim($_POST["sqlname"]), ENT_QUOTES, 'UTF-8');

//初始化数据库

if (!$sql_ip) {
    die("报错：数据库ip访问失败，请检查链接并返回重新填写。");
}

$mysqli = new mysqli($sql_ip, $sql_user, $sql_password);

if ($mysqli->connect_error) {
    die("MySQL数据库链接失败: " . $mysqli->connect_error);
}


$mysqli->set_charset("utf8");


$sql = "CREATE DATABASE IF NOT EXISTS $sql_name";
if ($mysqli->query($sql) === TRUE) {
    echo "创建数据库 $sql_name 成功<br>";
} else {
    echo "数据库创建错误: " . $mysqli->error . "<br>";
}


$mysqli->select_db($sql_name);


$sql = "CREATE TABLE IF NOT EXISTS information (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name TEXT,
    data TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

if ($mysqli->query($sql) === TRUE) {
    echo "information 表 创建成功<br>";
} else {
    echo "information 表 创建失败，报错：" . $mysqli->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS link (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name TEXT NOT NULL,
    url TEXT NOT NULL,
    ok INT NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

if ($mysqli->query($sql) === TRUE) {
    echo "link 表 创建成功 <br>";
} else {
    echo "link 表创建失败: " . $mysqli->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

if ($mysqli->query($sql) === TRUE) {
    echo "uaer 表 创建成功  <br>";
} else {
    echo "user 表，创建失败: " . $mysqli->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS web (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name TEXT NOT NULL,
    url TEXT NOT NULL,
    traffic INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

if ($mysqli->query($sql) === TRUE) {
    echo "web 表 创建成功<br>";
} else {
    echo "web 表 创建失败: " . $mysqli->error . "<br>";
}

//初始化数据库数据

$ip = "$sql_ip";
$user_name = "$sql_user";
$password = "$sql_password";
$dbname = "$sql_name";
// 创建连接
$conn = new mysqli($ip, $user_name, $password, $dbname);
// 检查连接
if ($conn->connect_error)
{
      die("数据库连接失败: " . $conn->connect_error);
}
echo "数据库连接成功"."<br>";

$sql = "INSERT INTO user (name, password) VALUES ('$user_name', '$user_password')";
if ($conn->query($sql) === TRUE) {
    echo "用户名与密码成功插入到 user 表"."<br>";
} else {
    echo "用户名与密码插入到 user 表 错误: " . $conn->error . "<br>";
}
echo "开始初始化网站默认数据"."<br>";
$web_title="$user_name".'的个人引导页';
$sql = "INSERT INTO information (name, data) VALUES ('web_title', '$web_title');";
$sql .= "INSERT INTO information (name, data) VALUES ('web_bg', '../../img/bgo.jpg');";
$sql .= "INSERT INTO information (name, data) VALUES ('user_head', 'https://q1.qlogo.cn/g?b=qq&nk=721257030&s=640');";
$sql .= "INSERT INTO information (name, data) VALUES ('user_head_txt', '这是头像点击后的文字，你可以在后台更改。');";
$sql .= "INSERT INTO information (name, data) VALUES ('user_name', '$user_name');";
$sql .= "INSERT INTO information (name, data) VALUES ('user_sign', '你的个性签名');";
$sql .= "INSERT INTO information (name, data) VALUES ('web_index_url', '网站的URL');";

if ($conn->multi_query($sql) === TRUE) {
    echo "网站数据插入成功"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();

$myfile = fopen("../config.php", "w") or die("Unable to open file!");
$txt = <<<str
<?php
\$ip = "$sql_ip";
\$user_name = "$sql_user";
\$password = "$sql_password";
\$dbname = "$sql_name";
// 创建连接
\$conn = new mysqli(\$ip, \$user_name, \$password, \$dbname);
// 检查连接
if (\$conn->connect_error)
{
    //    die("数据库连接失败: " . \$conn->connect_error);
}
//echo "数据库连接成功";
?>
str;
if (fwrite($myfile, $txt)===false){
    echo "配置文件生成失败，请检查文件权限并清空数据库后重新填写表单。"."<br>";
}else{
   echo "配置文件生成成功"."<br>"; 
}

fclose($myfile);
//   echo "$UserName"."$UserPassword";
// 关闭连接
$mysqli->close();
?>
</body>
</html>