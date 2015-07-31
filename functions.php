<?php
if (isset($_GET['putDate'])) {
    $dateIn = $_GET['putDate'];
    echo $dateIn;
    function getCurl()
    {
        $ch = curl_init("http://www.cbr.ru/currency_base/daily.aspx?date_req=");
        $fp = fopen('parserFile.txt', 'w');

        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
    }
}
