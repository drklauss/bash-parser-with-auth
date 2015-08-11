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
 * Отображение формы авторизации с сообщени
 */
function showAuthForm($message)
{
    $smarty = new Smarty();
    $smarty->assign('info', $message);
    $smarty->display('auth.tpl');
}

function showTestForm()
{
    for ($i = 1; $i < 20; $i++) {
        echo 'Все прошло успешно!<br>';
    }
}

function showGrubPageForm()
{
    connectDB();
    $query = mysql_query("SELECT login FROM users WHERE id='{$_COOKIE['id']}' LIMIT 1");
    $data = mysql_fetch_assoc($query);
    $loginHi = $data['login'];
    $getPageForm = new Smarty();
    $getPageForm->assign('loginName', $loginHi);
    $getPageForm->display('parser.tpl');
}