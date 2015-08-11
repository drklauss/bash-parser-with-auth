<?
include_once 'functions.php';
include_once 'display.php';
// Страница регситрации нового пользователя

regNewUser();
//если есть куки, то проходим авторизацию по кукм
if (checkCookies()) {
    //здесь нужно передать приветствие и стартовать сессию
    showGrubPageForm();
//иначе ищем что нам прилетело в $_GET
} else {
    switch ($_GET['auth']) {
        case 'login':
            showAuthForm('Введите ваш логин/пароль');
            break;
        case 'successReg':
            showAuthForm('Вы успешно зарегистрировались');
            break;
        case 'check':
            checkLogIn();
            break;
        case 'successAuth':
            showGrubPageForm();
            break;
        default:
            showRegForm();
    }
}
print_r($_COOKIE);
print_r($_GET);
print_r($_POST);