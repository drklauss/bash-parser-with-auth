<?php /* Smarty version 3.1.27, created on 2015-08-03 18:03:01
         compiled from "P:\home\test1.ru\www\test_bash\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3110255bf74955e3fa3_06938153%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff08299b9efc80bcd3b69c50a6a2bae3d5c744e2' => 
    array (
      0 => 'P:\\home\\test1.ru\\www\\test_bash\\templates\\form.tpl',
      1 => 1438606461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3110255bf74955e3fa3_06938153',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55bf749562cea5_43162812',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bf749562cea5_43162812')) {
function content_55bf749562cea5_43162812 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3110255bf74955e3fa3_06938153';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<h2>Парсер получения цитат с bash.im</h2>
<form name="getDateFrom" method="get" action="/test_bash/index.php">
    <label>Начальная страница: <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
    <label>Конечная страница: <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
    <input type="submit" value="Запросить">
</form>
</html><?php }
}
?>