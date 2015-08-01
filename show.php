<?php
include_once ('smarty/Smarty.class.php');
function showGrubPageForm()
{
    $getPageForm = new Smarty();
    $getPageForm->display('form.tpl');
}