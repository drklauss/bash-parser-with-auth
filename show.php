<?php
include_once 'smarty/Smarty.class.php';
function showGrubPageForm()
{

    $getPageForm = new Smarty();
    $getPageForm ->assign('loginName',$_COOKIE['login']);
    $getPageForm->display('parser.tpl');
}

function showRandomQuotes()
{
    connectDB();
    $selectRange = mysql_query('SELECT min(idQuotes),max(idQuotes) FROM quotes');
    $count = mysql_fetch_row($selectRange);
    $randArray = array();
    for ($i = 1; $i <= 50; $i++) {
        $randArray [$i] = rand($count[0], $count[1]);
    }
    $randArrayStr = implode(',', $randArray);
    $getArrayQuotes = mysql_query("SELECT indexQuotes,textQuotes FROM quotes WHERE idQuotes IN ({$randArrayStr})");
    while ($showQuotes = mysql_fetch_array($getArrayQuotes, MYSQL_NUM)) {
        $smarty = new Smarty();
        $smarty->assign('showIndex', $showQuotes[0]);
        $smarty->assign('showQuote', nl2br($showQuotes[1]));
        $smarty->display('showQuotes.tpl');
    }

}

function showLogInForm()
{
    $showLogIn = new Smarty();
    $showLogIn->display('login.tpl');
}