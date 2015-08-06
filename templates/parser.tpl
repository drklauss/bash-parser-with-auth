<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">

    <h3>Парсер получения цитат с bash.im</h3><span class="hello">Hello,{$loginName}!</span>

    <form name="getDateFrom" method="get" action="/index.php">
        <label>Начальная <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
        <label>Конечная <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
        <input type="submit" value="Залить в mySQL">
        <input type="submit" name="exit" value="Выйти" formaction="/index.php?exit=1">
    </form>
</div>
</body>

</html>