<?php
include_once 'smarty/Smarty.class.php';
/**
 * Отображение формы регистрации
 */
function showRegForm()
{
    $smarty = new Smarty();
    $smarty->display('reg.tpl');
}

/**
 * @param $message
 * Отображение формы авторизации с сообщениями
 */
function showAuthForm($message)
{
    $smarty = new Smarty();
    $smarty->assign('info', $message);
    $smarty->display('auth.tpl');
}

/**
 * Отображение парсера страниц с логином авторизовавшегося юзера
 */
function showGrubPageForm()
{
    if (is_numeric($_GET['page'])) {
        $pageCurrent = $_GET['page'];
    } else $pageCurrent = 1;
    connectDB();
    $query = mysql_query('SELECT count(idQuotes) FROM quotes');
    $quotesString = mysql_result($query, 0);
    $pageTotal = ceil($quotesString / 50);
    $getPageForm = new Smarty();
    $getPageForm->assign('loginName', $_SESSION['login']);
    $getPageForm->assign('pageCurrent', $pageCurrent);
    $getPageForm->assign('pageTotal', $pageTotal);
    $getPageForm->display('parser.tpl');
}

/**
 * Отображает цитаты в рандомном порядке
 */
function showRandomQuotes()
{
    connectDB();
    $query1 = mysql_query('SELECT min(idQuotes),max(idQuotes) FROM quotes');
    $count = mysql_fetch_row($query1);
    $randArray = array();
    for ($i = 1; $i <= 50; $i++) {
        $randArray[$i] = rand($count[0], $count[1]);
    }
    $randArrayStr = implode(',', $randArray);
    $query2 = mysql_query("SELECT indexQuotes,textQuotes FROM quotes WHERE idQuotes IN ({$randArrayStr})");
    while ($showQuotes = mysql_fetch_array($query2, MYSQL_NUM)) {
        $smarty = new Smarty();
        $smarty->assign('showIndex', $showQuotes[0]);
        $smarty->assign('showQuote', nl2br($showQuotes[1]));
        $smarty->display('showQuotes.tpl');
    }
}

/**
 * Отображает заданную страницу цитат исходя из того,что прилетает в $_GET
 */
function showQuotes()
{
    if (is_numeric($_GET['page'])) {
        $pageCurrent = $_GET['page'];
    } else $pageCurrent = 1;
    connectDB();
    if (is_numeric($pageCurrent)) {
        $limit = 50 * ($pageCurrent - 1);
    } else $limit = 0;
    $query = mysql_query("SELECT indexQuotes,textQuotes FROM quotes ORDER BY indexQuotes DESC LIMIT {$limit},50");
    while ($showQuotes = mysql_fetch_array($query, MYSQL_NUM)) {
        $smarty = new Smarty();
        $smarty->assign('showIndex', $showQuotes[0]);
        $smarty->assign('showQuote', nl2br($showQuotes[1]));
        $smarty->display('showQuotes.tpl');


    }

}

/**
 * Рисует примитивный футер, а над ним пагинатор3000
 */
function get_footer()
{
    if (is_numeric($_GET['page'])) {
        $pageCurrent = $_GET['page'];
    } else $pageCurrent = 1;
    $query = mysql_query('SELECT count(idQuotes) FROM quotes');
    $quotesString = mysql_result($query, 0);
    $pageTotal = ceil($quotesString / 50);
    $footer = new Smarty();
    $footer->assign('pageCurrent', $pageCurrent);
    $footer->assign('pageTotal', $pageTotal);
    $footer->display('footer.tpl');
}