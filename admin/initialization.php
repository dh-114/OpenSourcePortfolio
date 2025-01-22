 
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
    <h1>欢迎配置</h1>
    <p>为了更好地使用本系统，请先完成以下配置。</p>
    <form id="configForm" action="api/first.php" method="post">
        <p><strong>登录信息</strong>（请妥善保存）</p>
        <br>
        用户名: <input type="text" name="name" required><br>
        密码: <input type="password" name="password" required><br>

        <p><strong>数据库配置</strong>（可以从服务器提供商获取）</p>
        <p>当前仅支持MySQL数据库。</p>
        <br>
        数据库地址: <input type="text" name="sqlip" required><br>
        数据库用户名: <input type="text" name="sqluser" required><br>
        数据库密码: <input type="text" name="sqlpw" ><br>
        数据库名称: <input type="text" name="sqlname" required><br>
        <input type="submit" value="确认提交">
    </form>
    <div id="errorMessages" class="error"></div>
</div>

<script>

//js代码由同义ai生成

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

            // 自定义验证逻辑
            const password = form.password.value.trim();
            if (password.length < 8) {
                isValid = false;
                errorMessages.push('密码长度至少为8个字符');
            }
        
// 检查密码复杂度
const hasUppercase = /[A-Z]/.test(password);
const hasLowercase = /[a-z]/.test(password);
const hasNumber = /\d/.test(password);
const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
if (!hasUppercase || !hasLowercase || !hasNumber || !hasSpecialChar) {
    isValid = false;
    errorMessages.push('密码必须包含大写字母、小写字母、数字和特殊字符');
}
           

            // 检查XSS攻击
            const fieldsToCheck = ['name', 'password', 'sqlip', 'sqluser', 'sqlpw', 'sqlname'];
            for (const fieldName of fieldsToCheck) {
                const fieldValue = form[fieldName].value.trim();
                if (/[\x00-\x20\x7F-\xFF"'><&]/.test(fieldValue)) {
                    isValid = false;
                    errorMessages.push(`字段 ${fieldName} 包含非法字符`);
                }
            }

            // 如果有错误信息，显示出来并阻止表单提交
            if (!isValid) {
                document.getElementById('errorMessages').innerHTML = errorMessages.join('<br>');
                event.preventDefault();
            }
        });

        // 转义输出函数
        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }
    
</script>
</body>
</html>
 