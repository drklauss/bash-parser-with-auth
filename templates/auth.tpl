<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title></title>
</head>
<body>
<div id="body">
    <div class="form">
        <h3>Форма авторизации</h3>

        <form name="authForm" method="post" action="/index.php?auth=check">
            <label>Введите логин:</label><br>
            <input type="text" name="login" placeholder="Ваш логин"><br>
            <label>Введите пароль:</label><br>
            <input type="password" name="password" placeholder="Ваш Пароль"><br>
            <input type="submit" value="Войти"><br>
        </form>
        <ul type="circle" class="message">
            <li>{$info}</li>
        </ul>
    </div>

</div>
</body>
</html>

