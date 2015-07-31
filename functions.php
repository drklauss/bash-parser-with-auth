<?php
header('Content-Type: text/html; charset=utf-8');
include_once 'simple_html_dom.php';
if (isset($_GET['putDate'])) {
    $dateIn = $_GET['putDate'];
    getCurl($dateIn);
    //showResultParser();
}


function getCurl($dateIn)
{
    $data = file_get_html("http://katashi.ru/currency/?date=.$dateIn.");
    foreach ($data->find('table#ratetable') as $element) {
        echo "$element<br>";
    }
}
