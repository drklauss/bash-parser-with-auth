<?php
include_once 'simple_html_dom.php';
connectDB();
if (isset($_GET['putDate'])) {
    $index = $_GET['putDate'];
    $gBi = getBashIndexes($index);
    getBashQuotes($index);
    checkIndexesInDb($gBi);
}
/**
 * @param $index
 * @return array
 */
function getBashIndexes($index)
{
    $data = file_get_html("http://bash.im/index/" . $index . "");
    $arrIndexes = array();
    foreach ($data->find('.id') as $quoteId) {
        $arrIndexes[] = $quoteId->plaintext;
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
        $arrQuotes[] = $quoteText->plaintext;
    }
    return $arrQuotes;
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

function checkIndexesInDb(array $arrIndexes)
{
  foreach ($arrIndexes as $checkIndex) {
        $query = mysql_query("SELECT indexQoutes FROM qoutes WHERE indexQoutes='{$checkIndex}'");
        $delIndex= mysql_result($query,0,0);// выдает ошибку, если такого в базе нет
        print_r($delIndex);
        unset($arrIndexes[array_search($delIndex, $arrIndexes)]);
    }
        foreach ($arrIndexes as $setIndexes) {
        mysql_query(
          "INSERT INTO qoutes (idQoutes,indexQoutes,textQoutes) VALUES (NULL ,'{$setIndexes}','0000000000')"
        );
    };
}