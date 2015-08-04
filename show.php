<?php
include_once('smarty/Smarty.class.php');
function showGrubPageForm()
{
    $getPageForm = new Smarty();
    $getPageForm->display('form.tpl');
}

function showQuotes()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    connectDB($host, $user, $password);
    $query1 = mysql_query('SELECT min(idQuotes),max(idQuotes) FROM quotes');
    $count = mysql_fetch_row($query1);
    for ($i = 1; $i <= 50; $i++) {
        mysql_select_db('bash');
        $rand = rand($count[0], $count[1]);
        $query2 = mysql_query("SELECT indexQuotes,textQuotes FROM quotes WHERE idQuotes='{$rand}'");
        $showQuotes = mysql_fetch_row($query2);
        $smarty = new Smarty();
        $smarty->assign('showIndex', $showQuotes[0]);
        $smarty->assign('showQuote', nl2br($showQuotes[1]));
        $smarty->display('form2.tpl');
    }
}