<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'simple_html_dom.php';

function parsingPages()
{
    set_time_limit(300);
    if (isset($_GET['grubPageStart']) & isset($_GET['grubPageFinish'])) {
        $startPage = $_GET['grubPageStart'];
        $finishPage = $_GET['grubPageFinish'];
        while ($startPage <= $finishPage) {
            ob_flush();
            flush();
            echo "Парсим {$startPage} страницу...<br>";
            $gBi = getBashIndexes($startPage);
            $gBq = getBashQuotes($startPage);
            $mergedArray = mergeArrays($gBi, $gBq);
            putQuotesIntoDB($mergedArray);
            $startPage++;
        }
    }
}

/**
 *
 * @param $index
 * @return array
 */
function getBashIndexes($index)
{
    $data = file_get_html("http://bash.im/index/" . $index . "");
    $arrIndexes = array();
    foreach ($data->find('.id') as $quoteId) {
        $arrIndexes[] = str_replace("#", "", $quoteId->plaintext);
    }
    return $arrIndexes;
}

/**
 * @param $index
 * @return array
 */
function getBashQuotes($index)
{
    $data = file_get_html("http://bash.im/index/" . $index . "");
    $arrQuotes = array();
    foreach ($data->find('.text') as $quoteText) {
        $arrQuotes[] = iconv('windows-1251', 'utf-8', $quoteText->plaintext);
    }
    return $arrQuotes;
}

/**
 * @param array $arrayIndexes
 * @param array $arrayQuotes
 * @return array
 */
function mergeArrays(array $arrayIndexes, array $arrayQuotes)
{
    $mergedArray = array();
    foreach ($arrayIndexes as $key => $index) {
        $mergedArray[$key]['index'] = $index;
        $mergedArray[$key]['quote'] = $arrayQuotes[$key];
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
//        echo 'Соединение с БД  установлено...<br>';
        if (mysql_select_db('bash')) {
//            echo 'База данных \'bash\' выбрана...<br>';
            mysql_query('CREATE TABLE IF NOT EXISTS quotes (idQuotes INT AUTO_INCREMENT, indexQuotes INT, textQuotes TEXT, PRIMARY KEY (idQuotes))');
        } else {
            if (mysql_query('CREATE DATABASE BASH')) {
                echo 'База данных успешно создана...<br>';
                if (mysql_select_db('bash')) {
                    echo 'База данных \'bash\' выбрана...<br>';
                    if (mysql_query('CREATE TABLE IF NOT EXISTS quotes (idQuotes INT AUTO_INCREMENT, indexQuotes INT, textQuotes TEXT, PRIMARY KEY (idQuotes))')) {
                        echo 'Таблица quotes успешно создана...<br>';
                    }
                }
            }
        }
    } else echo 'Соединения с базой данных нет...';
}

/**
 * @param array $merged
 */

function putQuotesIntoDB(array $merged)
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    connectDB($host, $user, $password);
    for ($i = 0; $i <= 49; $i++) {
        $query = mysql_query("SELECT idQuotes FROM quotes WHERE indexQuotes='{$merged[$i]['index']}'");
        $getSimilar = mysql_fetch_array($query, MYSQL_NUM);
        if (!$getSimilar) {
            mysql_query(
                "INSERT INTO quotes (idQuotes,indexQuotes, textQuotes) VALUES (NULL,'{$merged[$i]['index']}','{$merged[$i]['quote']}')"
            );

        }
    };
   // echo 'Данные успешно занесены в таблицу...<br>';
}
