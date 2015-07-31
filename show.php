<?php
include_once ('smarty/Smarty.class.php');
function showDateForm()
{
    $getDateForm = new Smarty();
    $getDateForm->display('form.tpl');
}