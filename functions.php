<?php
if (isset($_GET['putDate'])) {
    $dateIn = $_GET['putDate'];
    getCurl($dateIn);
    //showResultParser();
}


function getCurl($dateIn)
{
    $ch = curl_init();
    $fp = fopen('parserFil2e.txt', 'w');
    curl_setopt($ch, CURLOPT_URL, "http://www.cbr.ru/currency_base/daily.aspx?date_req=.$dateIn.");
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:39.0) Gecko/20100101 Firefox/39.0 ');
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    //return $content;
    //preg_match_all("|<[^>]+>(.*)</[^>]+>|U",);
}

function contentParser($content)
{

}