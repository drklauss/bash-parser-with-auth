<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'simple_html_dom.php';
include_once('config.php');


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
 *
 */
function connectDB()
{
    if (mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)) {
        if (mysql_select_db('bash')) {
        }
    }
}

function register()
{
    $err = array();
    if (!empty($_POST['regLogin']) & !empty($_POST['regPassword'])) {
        if (preg_match("/^[a-zA-Z0-9]+$/", $_POST['regLogin'])) {
            connectDB();
            mysql_query("INSERT INTO users (login,passw,salt) VALUES
('{$_POST['regLogin']}',md5('{$_POST['regPassword']}'),md5('{$_SERVER['REMOTE_ADDR']}{SALT}'))");
            header('Location: /');
        }
        $err[] = 'Login may consist of numbers and alphabets only';
    }
    $smartyShowRegErrors = new Smarty();
    $smartyShowRegErrors->assign('errorReg', $err);
    $smartyShowRegErrors->display('reg.tpl');
}


function authCheck()
{
    if ($_GET['exit'] == 'Выйти') {
        foreach ($_COOKIE as $key => $value) {
            setcookie('hash', md5($_SERVER['REMOTE_ADDR'] . SALT), time() - 3600);
            header('Location: /');
        }

    }
    foreach ($_COOKIE as $filed => $hash) {
        connectDB();
        $queryArrayByHash = mysql_query("SELECT login,salt FROM users WHERE salt='{$hash}'");
        $getArrayByHash = mysql_fetch_array($queryArrayByHash, MYSQL_ASSOC);
        if ($hash == $getArrayByHash['salt']) {
            showGrubPageForm();
            showRandomQuotes();
            exit;
        }
    }
    $errorAuth = array();
    if (!empty($_POST['authLogin']) & !empty($_POST['authPassword'])) {
        connectDB();

        $queryArrayByLogin = mysql_query("SELECT login,passw FROM users WHERE login='{$_POST['authLogin']}'");
        $getArrayByLogin = mysql_fetch_array($queryArrayByLogin, MYSQL_ASSOC);
        if ($_POST['authLogin'] == $getArrayByLogin['login'] & md5($_POST['authPassword']) == $getArrayByLogin['passw']) {
            $const = SALT;
            mysql_query("UPDATE users SET salt=md5('{$_SERVER['REMOTE_ADDR']}{$const}') WHERE login='{$_POST['authLogin']}'");
            setcookie('login', ($_POST['authLogin']), time() + 800);
            setcookie('hash', md5($_SERVER['REMOTE_ADDR'] . SALT), time() + 800);
            showGrubPageForm();
            showRandomQuotes();
        }
        $errorAuth[] = 'Incorrect login/password';
    }
    $smartyShowAuthErrors = new Smarty();
    $smartyShowAuthErrors->assign('errorAuth', $errorAuth);
    $smartyShowAuthErrors->display('auth.tpl');
}


function paginator()
{
    $nums = 10;
    connectDB();
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