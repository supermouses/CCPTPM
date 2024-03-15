<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="login-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "admin" && $password == "admin") {
            echo '<div style="color: red; font-family: Tahoma;
            ">Đăng nhập thành công</div>';
        } else {
            echo '<div style="color: red; font-family: Tahoma;
            ">Tên đăng nhập/mật khẩu sai. Vui lòng nhập lại.</div>';
        }
    }
    ?>
</div>

</body>
</html>
