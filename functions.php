<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'simple_html_dom.php';
include_once('config.php');
/**
 * @param $host
 * @param $user
 * @param $password
 */

function parsingPages($host, $user, $password)
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
                connectDB($host, $user, $password);
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
 * @param $host
 * @param $user
 * @param $password
 */
function connectDB($host, $user, $password)
{
    if (mysql_connect($host, $user, $password)) {
        if (mysql_select_db('bash')) {
        }
    }
}

/*function checkPassw($host, $userDB, $passwordDB)
{
    if (!empty($_POST['login']) & !empty($_POST['password'])) {
        connectDB($host, $userDB, $passwordDB);
        $queryArray = mysql_query("SELECT login,passw FROM users WHERE login='{$_POST['login']}'");
        $getArray = mysql_fetch_array($queryArray, MYSQL_ASSOC);
        if ($_POST['login'] == $getArray['login'] & md5($_POST['password']) == $getArray['passw']) {
            // echo 'пароль совпал';

            setcookie(($_POST['login']), md5($_SERVER['REMOTE_ADDR']) . md5($_SERVER['HTTP_USER_AGENT']), time() + 300);//надо поставить куку
            showGrubPageForm();
            showRandomQuotes($host, $userDB, $passwordDB);
            print_r($_COOKIE);
        }

    } else showLogInForm();
}*/


function checkCookie($host, $userDB, $passwordDB)
{
    connectDB($host, $userDB, $passwordDB);
    foreach ($_COOKIE as $login => $hash) {
        $queryLoginForCookies = mysql_query("SELECT login FROM users WHERE login='{$login}'");
        $getArrayCookies = mysql_fetch_array($queryLoginForCookies, MYSQL_ASSOC);
    }
    if (!empty($getArrayCookies)) {
        showGrubPageForm();
        showRandomQuotes($host, $userDB, $passwordDB);
    } elseif (!empty($_POST['login']) & !empty($_POST['password'])) {
        $queryArray = mysql_query("SELECT login,passw FROM users WHERE login='{$_POST['login']}'");
        $getArray = mysql_fetch_array($queryArray, MYSQL_ASSOC);
        if ($_POST['login'] == $getArray['login'] & md5($_POST['password']) == $getArray['passw']) {
            setcookie(($_POST['login']), md5($_SERVER['REMOTE_ADDR']) . md5($_SERVER['HTTP_USER_AGENT']), time() + 3600);
            showGrubPageForm();
            showRandomQuotes($host, $userDB, $passwordDB);
            print_r($_COOKIE);
        }
    } else showLogInForm();
}


function paginator($host, $userDB, $passwordDB)
{
    $nums = 10;
    connectDB($host, $userDB, $passwordDB);
    if (isset($_GET['page'])) {
        $page = intval($_GET['page']);
    } else {
        $page = 1;
    }

    $query = "SELECT COUNT(*) AS `counter` FROM `quotes`";
    $sql = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_assoc($sql);

    $elements = $row['counter'];

    $pages = ceil($elements / $nums);

    if ($page < 1) {
        $page = 1;
    } elseif ($page > $pages) {
        $page = $pages;
    }

    $start = ($page - 1) * $nums;

// когда у нас в таблице нет записей
    if ($start < 0) $start = 0;

    $query = "SELECT * FROM `quotes` LIMIT {$start}, {$nums}";
    $sql = mysql_query($query) or die(mysql_error());

    while ($row = mysql_fetch_assoc($sql)) {
        // здесь выводим записи из базы
    }

// далее нам надо прицепить переключение страниц

    $neighbours = 4;
    $left_neighbour = $page - $neighbours;
    if ($left_neighbour < 1) $left_neighbour = 1;

    $right_neighbour = $page + $neighbours;
    if ($right_neighbour > $pages) $right_neighbour = $pages;

    if ($page > 1) {
        print ' <a href="?page=1">начало</a> ... <a href="?page=' . ($page - 1) . '">←сюда</a> ';
    }

    for ($i = $left_neighbour; $i <= $right_neighbour; $i++) {
        if ($i != $page) {
            print ' <a href="?page=' . $i . '">' . $i . '</a> ';
        } else {
            // выбранная страница
            print ' <b>' . $i . '</b> ';
        }
    }

    if ($page < $pages) {
        print ' <a href="?page=' . ($page + 1) . '">туда→</a> ... <a href="?page=' . $pages . '">конец</a> ';
    }
}