<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>初次配置</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #666666;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            h1 {
                margin-top: 250px;
                font-size: 4em;
            }
            input[type="text"],
            input[type="password"] {
                padding: 8px;
            }
            input[type="submit"] {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>初次配置</h1>
    <p>初次见面首先让我们进行一下简单的配置吧</p>
    <form id="configForm" action="api/first.php" method="post">
        <p>设置登录信息（此信息务必认真保存）</p>
        <br>
        用户名: <input type="text" name="name" required><br>
        密码: <input type="password" name="password" required><br>

        <p>设置数据库配置（这些可以在从服务器提供商那里获得）</p>
        <p>这个程序仅支持MySQL数据库</p>
        <br>
        数据库地址（服务器IP）: <input type="text" name="msip" required><br>
        数据库登录用户名: <input type="text" name="msuser" required><br>
        数据库登录密码: <input type="text" name="mspw" required><br>
        数据库名称: <input type="text" name="msname" required><br>
        <input type="submit" value="提交">
    </form>
    <div id="errorMessages" class="error"></div>
</div>

<script>
    document.getElementById('configForm').addEventListener('submit', function(event) {
        const form = event.target;
        let isValid = true;
        const errorMessages = [];
        
        // 清除之前的错误信息
        document.getElementById('errorMessages').innerHTML = '';

        // 检查每个必填字段
        for (const element of form.elements) {
            if (element.required && !element.value.trim()) {
                isValid = false;
                errorMessages.push(`${element.name} 不能为空`);
            }
        }

        // 如果有错误信息，显示出来并阻止表单提交
        if (!isValid) {
            document.getElementById('errorMessages').innerHTML = errorMessages.join('<br>');
            event.preventDefault();
        }
    });
</script>
</body>
</html>