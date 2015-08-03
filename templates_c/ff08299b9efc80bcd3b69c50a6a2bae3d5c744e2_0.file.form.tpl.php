<?php /* Smarty version 3.1.27, created on 2015-08-03 14:46:04
         compiled from "P:\home\test1.ru\www\test_bash\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2393955bf466c272186_15309305%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff08299b9efc80bcd3b69c50a6a2bae3d5c744e2' => 
    array (
      0 => 'P:\\home\\test1.ru\\www\\test_bash\\templates\\form.tpl',
      1 => 1438598626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2393955bf466c272186_15309305',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55bf466c2b7c02_30211063',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bf466c2b7c02_30211063')) {
function content_55bf466c2b7c02_30211063 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2393955bf466c272186_15309305';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<h2>Парсер получения баша</h2>
<form name="getDateFrom" method="get" action="/test_bash/index.php">
    <label>Начальная страница: <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
    <label>Конечная страница: <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
    <input type="submit" value="Запросить">
</form>
</html><?php }
}
?>