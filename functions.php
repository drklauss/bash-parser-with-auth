<?php
include_once 'display.php';
include_once 'config.php';
include_once 'simple_html_dom.php';

function connectDB()
{
    mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    mysql_select_db('bash');
}

/**
 * @return mixed
 * Преобразует IP адрес в строку вида 127001
 */
function ipToString()
{
    $test = explode('.', $_SERVER['REMOTE_ADDR']);
    $ip = '';
    foreach ($test as $value) {
        $ip .= $value;
    }
    return $ip;
}

/**
 * @param int $length
 * @return string
 * Генерирует случайную строку для передачи в $hash
 */
function generateCode($length = 6)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
}

/**
 * Проверяет правильность ввода пары логин-пароль
 */
function checkLogIn()
{
    connectDB();
    if (isset($_POST['login'])) {
        //Вытаскиваем из БД запись, у которой логин равняется введенному
        $query = mysql_query("SELECT id, passw FROM users WHERE login='{$_POST['login']}' LIMIT 1");
        $data = mysql_fetch_assoc($query);
        // Сравниваем пароли
        if ($data['passw'] == md5(trim($_POST['password']))) {
            # Генерируем случайное число и шифруем его
            $hash = md5(generateCode(10));
            mysql_query("UPDATE users SET hash='{$hash}' WHERE id='{$data['id']}'");
            # Ставим куки
            setcookie("id", $data['id'], time() + 60 * 60 * 24 * 30);
            setcookie("hash", $hash, time() + 60 * 60 * 24 * 30);
            # Переадресовываем браузер на страницу проверки нашего скрипта
            header("Location: index.php?auth=successAuth");
            exit();
        } else {
            showAuthForm('Пароль введен неверно');
        }
    }
}

function checkCookies()
{
    connectDB();
    $query = mysql_query("SELECT * FROM `users` WHERE id = '" . intval($_COOKIE['id']) . "' LIMIT 1");
    $userData = mysql_fetch_assoc($query);
    if (!empty($_COOKIE['hash']) and !empty($_COOKIE['id'])) {
        if (($userData['hash'] !== $_COOKIE['hash']) or ($userData['id'] !== $_COOKIE['id'])) {
            setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
            setcookie("hash", "", time() - 3600 * 24 * 30 * 12, "/");
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

/**
 * Регистрация нового пользователя с проверкой на длину пароля и символы пароля
 */
function regNewUser()
{
    connectDB();
    if (isset($_POST['submit'])) {
        $err = array();
        # проверям логин
        if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
            $err[] = "Логин может состоять только из букв английского алфавита и цифр";
        }
        if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
        }
        // проверяем, не сущестует ли пользователя с таким именем
        $query = mysql_query("SELECT COUNT(id) FROM users WHERE login='{$_POST['login']}'");
        if (mysql_result($query, 0) > 0) {
            $err[] = "Пользователь с таким логином уже существует в базе данных";
        }
        # Если нет ошибок, то добавляем в БД нового пользователя
        if (count($err) == 0) {
            $login = $_POST['login'];
            # Убираем лишние пробелы и делаем двойное шифрование
            $password = md5(trim($_POST['password']));
            mysql_query("INSERT INTO `users` SET login='$login', passw='$password'");
            header("Location: index.php?auth=successReg");
            exit();
        } else {
            $smarty = new Smarty();
            $smarty->assign('errorReg', $err);
            $smarty->display('reg.tpl');
            exit();

        }
    }
}

/**
 * Проверяет была ли нажата кнопка выхода, если да, то форма авторизации,если нет-то проверяется кука.
 * Если кука не найдена, то идет проверять что прилетело в запросе GET
 */
function checkUser()
{
    if (getExit()) {
        showAuthForm('Введите ваш логин/пароль');
    } elseif (checkCookies()) {
        //здесь нужно передать приветствие и стартовать сессию
        tetherLoginToSession();
        showGrubPageForm();
        showQuotes();
    } else {
        switch ($_GET['auth']) {
            case 'Выйти':
                showAuthForm('Введите ваш логин/пароль');
                break;
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
                if (checkCookies()) {
                    showGrubPageForm();
                    showQuotes();
                }
                showAuthForm('Включите куки');
                break;
            default:
                showRegForm();
        }
    }
}

/**
 * Парсер страниц Баш.im
 * Првоеряет наличие записи в БД и если таковой по id quotes нет, то заливает в БД
 */
function parsingPages()
{
    set_time_limit(300);
    if (isset($_GET['grubPageStart']) & isset($_GET['grubPageFinish'])) {
        if (is_numeric($_GET['grubPageStart']) & is_numeric($_GET['grubPageFinish'])) {
            $startPage = $_GET['grubPageStart'];
            $finishPage = $_GET['grubPageFinish'];
            while ($startPage <= $finishPage) {
                echo "Парсим {$startPage} страницу...<br>";
                flush();
                $mergedArray = getBashArray($startPage);
                connectDB();
                for ($i = 0; $i < count($mergedArray); $i++) {
                    $query = mysql_query("SELECT idQuotes FROM quotes WHERE indexQuotes='{$mergedArray[$i]['index']}'");
                    $getSimilar = mysql_fetch_array($query, MYSQL_NUM);
                    if (!$getSimilar) {
                        mysql_query(
                            "INSERT INTO quotes (idQuotes,indexQuotes, textQuotes) VALUES (NULL,'{$mergedArray[$i]['index']}','{$mergedArray[$i]['quote']}')"
                        );

                    }
                };
                $startPage++;
            }
            exit;
        }
        echo 'Введите цифры!';
        exit;
    }
}

/**
 * @param $index
 * @return array
 * Вспомогательная функция, которая выпарсивает нужную информацию с сайта при помощи либы simpleHtmlDom
 * На выходе получаем готовый массив с индексами цитат и цитатами
 */
function getBashArray($index)
{
    $data = file_get_html("http://bash.im/index/" . $index . "");
    $arrIndexes = array();
    foreach ($data->find('.id') as $quoteId) {
        $arrIndexes[] = str_replace("#", "", $quoteId->plaintext);
    }
    $arrQuotes = array();
    foreach ($data->find('.text') as $quoteText) {
        $arrQuotes[] = iconv('windows-1251', 'utf-8', $quoteText->plaintext);
    }
    $mergedArray = array();
    foreach ($arrIndexes as $key => $index) {
        $mergedArray[$key]['index'] = $index;
        $mergedArray[$key]['quote'] = $arrQuotes[$key];
    }
    return $mergedArray;
}

/**
 * Функция, которая запускает сессию при наличии куков, а также записывает в SESSION логин пользователя
 * для дальнейшего отображения в течение сессии *
 */
function tetherLoginToSession()
{
    session_start();
    connectDB();
    $query = mysql_query("SELECT login FROM users WHERE id='{$_COOKIE['id']}' LIMIT 1");
    $data = mysql_fetch_assoc($query);
    $_SESSION['login'] = $data['login'];

}

/**
 * @return bool
 * Определяет нажал ли пользователь кнопку выхода. Если да, то кука "состаривается"
 */
function getExit()
{
    if (!empty($_GET['exit'])) {
        setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
        setcookie("hash", "", time() - 3600 * 24 * 30 * 12, "/");
        return true;
    } else {
        return false;
    }
}