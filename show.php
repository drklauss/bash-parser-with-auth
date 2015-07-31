<?php
include_once ('smarty/Smarty.class.php');
$getForm=new Smarty();
$getForm->setTemplateDir('templates');
$getForm->setCompileDir('templates_c');
$getForm->setConfigDir('configs');
$getForm->setCacheDir('cache');

function showDateForm(){
    $getYearForm = new Smarty();
    $getYearForm->display('form.tpl');
}