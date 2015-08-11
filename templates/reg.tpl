<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title></title>
</head>
<body>

<div id="body">
    <div class="form">
        <h3>Форма регистрации</h3>

        <form name="regForm" method="post">
            <label>Введите логин:</label><br>
            <input type="text" name="login" placeholder="Ваш логин"><br>
            <label>Введите пароль:</label><br>
            <input type="password" name="password" placeholder="Ваш Пароль"><br>
            <input type="submit" name="submit" value="Зарегистрироваться">
            <input type="submit" name="goToLogin" value="У меня есть логин" formaction="index.php?auth=login">
            <br>
        </form>
        <ul class="errors">{foreach from=$errorReg key=k item=item }
                <li>{$item}</li>
            {/foreach}</ul>
    </div>
</div>
</body>
</html>

