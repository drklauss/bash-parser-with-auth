<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'simple_html_dom.php';
$host = 'localhost';
$user = 'root';
$password = '';
connectDB($host, $user, $password);

if (isset($_GET['grubPage'])) {
    $index = $_GET['grubPage'];
    $gBi = getBashIndexes($index);
    $gBq = getBashQuotes($index);
    $mergedArray = mergeArrays($gBi, $gBq);
    putQuotesIntoDB($mergedArray);
    echo '<pre>';
    print_r($mergedArray);
    echo '</pre>';
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
        echo 'Соединение с БД  установлено...<br>';
        if (mysql_select_db('bash')) {
            echo 'База данных \'bash\' выбрана...<br>';
            if (mysql_query('CREATE TABLE IF NOT EXISTS quotes(idQuotes INT AUTO_INCREMENT, indexQuotes INT, textQuotes TEXT, PRIMARY KEY (idQuotes))')) {
                echo 'Создана не существовавщая в БД таблица quotes...<br>';
            }
        } else {
            if (mysql_query('CREATE DATABASE BASH')) {
                echo 'База данных успешно создана...<br>';
                if (mysql_select_db('bash')) {
                    echo 'База данных \'bash\' выбрана...<br>';
                    if (mysql_query('CREATE TABLE IF NOT EXISTS quotes(idQuotes INT AUTO_INCREMENT, indexQuotes INT, textQuotes TEXT, PRIMARY KEY (idQuotes))')) {
                        echo 'Таблица quotes успешно создана...<br>';
                    }
                }
            }
        }
    } else echo 'Соединения с базой данных нет...';
}

/**
 * @param array $merged - merged arrays
 */
function putQuotesIntoDB(array $merged)
{
    for ($i = 0; $i <= 49; $i++) {
        $query = mysql_query("SELECT idQuotes FROM quotes WHERE indexQuotes='{$merged[$i]['index']}'");
        $getSimilar = mysql_fetch_array($query, MYSQL_NUM);
        if (!$getSimilar) {
            mysql_query(
                "INSERT INTO quotes (idQuotes,indexQuotes, textQuotes) VALUES (NULL,'{$merged[$i]['index']}','{$merged[$i]['quote']}')"
            );
        }
    };
}
