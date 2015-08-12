<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/plugin/paginator3000.css" />
    <script type="text/javascript" src="/plugin/paginator3000.js"></script>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">

    <div class="parser">
        <h3>Парсер получения цитат с bash.im</h3><span class="hello">Hello,{$loginName}!</span>
        <img class="img" src="/images/logo.png">
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
<div class="paginator" id="paginator1"></div>
<script type="text/javascript">
    paginator_example = new Paginator(
            "paginator1", // id контейнера, куда ляжет пагинатор
            {$pageTotal}, // общее число страниц
            15, // число страниц, видимых одновременно
            {$pageCurrent}, // номер текущей страницы
            "http://bash.local/index.php?page=" // url страниц
    );
</script>
</body>

</html>