<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">
    <div class="parser">
        <h3>Парсер получения цитат с bash.im</h3><span class="hello">Hello,{$loginName}!</span>
        <img class="img" src="/images/logo.gif"><br><img class="img" src="/images/logo.gif">

        <form class="parserForm" name="getDateFrom" method="get" action="/index.php">
            <label>Начальная <input type="text" name="grubPageStart" placeholder="Номер страницы"></label><br>
            <label>Конечная <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
            <input type="submit" value="Залить в БД">

        </form>
    </div>
    <form class="right-corner" method="get" action="/index.php">
        <input type="submit" name="exit" value="Выйти">
    </form>
</div>
</body>

</html>