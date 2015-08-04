<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * Created by PhpStorm.
 * User: sysadmin
 * Date: 31.07.2015
 * Time: 9:58
 */
include_once 'functions.php';
include_once 'show.php';

/*if (logOut()) {
    showLoginForm();
    echo 'Вы деавторизовались. Вам снова необходимо ввести логин и пароль';
} elseif (isLogged()) {
    echo 'Вы идентифицированы';
    showMainForm();
} elseif (logIn() == 'ok') {
    echo 'Авторизация успешна';
    showMainForm();
} elseif (LogIn() == 'badAuth') {
    showLoginForm();
    echo 'Вы ввели неверный логин и пароль';
} else {
    showLoginForm();
    echo 'Не заполнены поля Логин и Пароль';
}*/

showGrubPageForm();
parsingPages();
showQuotes();
