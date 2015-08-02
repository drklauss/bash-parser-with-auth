<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'simple_html_dom.php';
connectDB();
if (isset($_GET['grubPage'])) {
    $index = $_GET['grubPage'];
    $gBi = getBashIndexes($index);
    $gBq = getBashQuotes($index);
    $mergedArray = mergeArrays($gBi, $gBq);
//    testValue($mergedArray);
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


function connectDB()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    if (!mysql_connect($host, $user, $password)) {
        echo 'нет подключения';
        exit;
    }
    mysql_select_db('bash');
}

function putQuotesIntoDB(array $merged)
{
    for ($i = 0; $i <= 49; $i++) {
        $count = mysql_query("SELECT COUNT(*) FROM qoutes WHERE indexQoutes='{$merged[$i]['index']}'");
        echo $count;
        if (!$count) {
            mysql_query(
                "INSERT INTO quotes (idQuotes,indexQuotes,textQuotes) VALUES (NULL,'{$merged[$i]['index']}','{$merged[$i]['quote']}')"
            );
        }
    };
}

function testValue(array $merged)
{
    for ($i = 0; $i <= 49; $i++) {
        $count = mysql_query("SELECT COUNT(*) AS 'count' FROM quotes WHERE indexQuotes='{$merged[$i]['index']}'
");
        echo $count;
    }

}
