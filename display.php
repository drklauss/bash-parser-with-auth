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
    $getPageForm = new Smarty();
    $getPageForm->assign('loginName', $_SESSION['login']);
    $getPageForm->display('parser.tpl');
}

function showQuotes()
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
    while ($showQuotes = mysql_fetch_array($query2,MYSQL_NUM)) {
        $smarty = new Smarty();
        $smarty->assign('showIndex', $showQuotes[0]);
        $smarty->assign('showQuote', nl2br($showQuotes[1]));
        $smarty->display('showQuotes.tpl');
    }
}
