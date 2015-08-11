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
        <span class="success">{$info}</span>
        <ul class="errors">{foreach from=$errorAuth key=k item=item }
                <li>{$item}</li>
            {/foreach}</ul>
    </div>

</div>
</body>
</html>

