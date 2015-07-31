<?php
include_once 'simple_html_dom.php';
if (isset($_GET['putDate'])) {
    $dateIn = $_GET['putDate'];
    getCurl($dateIn);
    //showResultParser();
}


function getCurl($dateIn)
{
    $ch = curl_init();
    $fp = fopen('parserFile.txt', 'w');
    curl_setopt($ch, CURLOPT_URL, "http://katashi.ru/currency/?date=.$dateIn.");
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; rv:39.0) Gecko/20100101 Firefox/39.0 ');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $html = curl_exec($ch);
    curl_close($ch);
    $pattern='/<table(.*)\<\/table>/im';
    $table=array();
    preg_match_all($pattern,$html,$table);
    print_r($table);
    }
