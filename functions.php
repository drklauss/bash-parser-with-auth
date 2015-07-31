<?php
include_once ('smarty/Smarty.class.php');
$getForm=new Smarty();
$getForm->setTemplateDir('templates');
$getForm->setCompileDir('templates_c');
$getForm->setConfigDir('configs');
$getForm->setCacheDir('cache');

function getDate(){
    $formTask = new Smarty();
    $formTask->assign('dataTake', $taskNo);
    $formTask->display('index.tpl');
}
function getCurl($dateIn){
    $ch=curl_init("http://www.cbr.ru/currency_base/daily.aspx?date_req=.$dateIn.");
    $fp=fopen('parserFile.txt','w');

    curl_setopt($ch,CURLOPT_FILE,$fp);
    curl_setopt($ch,CURLOPT_HEADER,0);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
}