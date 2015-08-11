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