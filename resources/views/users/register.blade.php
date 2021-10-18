<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>注册</h1>
    <form action="/users" method="post">
        @csrf
        <label>
            <p>姓名</p>
            <input type="text" name="name">
        </label>
        <label>
            <p>密码</p>
            <input type="password" name="password">
        </label>
        <label>
            <p>电子邮箱</p>
            <input type="text" name="email">
        </label>
        <label>
            <br>
            <input type="submit" value="提交">
        </label>
    </form>
</body>
</html>
