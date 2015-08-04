<html>
<head>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">
    <h3>Парсер получения цитат с bash.im</h3>

    <form name="getDateFrom" method="get" action="/index.php">
        <label>Начальная <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
        <label>Конечная <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
        <input type="submit" value="Залить в mySQL">
    </form>
    <form method="get" action="">
        <input type="submit" name="putRandom" title="Запросить рандомыне 50 цитат" value="Рандом" formaction="/functions?=random" >
    </form>
</div>
</body>

</html>