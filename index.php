<?php
/**
 * Created by PhpStorm.
 * User: sysadmin
 * Date: 31.07.2015
 * Time: 9:58
 */

$ch=curl_init('http://www.cbr.ru/currency_base/daily.aspx?date_req=31.07.2015');
$fp=fopen('parserFile.txt','w');

curl_setopt($ch,CURLOPT_FILE,$fp);
curl_setopt($ch,CURLOPT_HEADER,0);

curl_exec($ch);
curl_close($ch);
fclose($fp);