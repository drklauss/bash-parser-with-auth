<?php /* Smarty version 3.1.27, created on 2015-07-31 13:49:31
         compiled from "P:\home\test1.ru\www\test_cURL\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2592455bb44ab9c92a2_67554595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb8ac0fa09d65a5ccfd4927d43905045489cb64' => 
    array (
      0 => 'P:\\home\\test1.ru\\www\\test_cURL\\templates\\form.tpl',
      1 => 1438336167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592455bb44ab9c92a2_67554595',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55bb44aba01fe7_29628145',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bb44aba01fe7_29628145')) {
function content_55bb44aba01fe7_29628145 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2592455bb44ab9c92a2_67554595';
?>
<html>
<head>
    <title>Курс валют. </title>
</head>
<h2>Парсер получения курса валют</h2>
<form name="getDateFrom" method="get" action="/test_curl/functions.php">
    <label>Введите год(дд/мм.гггг):<input type="text" name="putDate" placeholder="Введите день"></label>
    <input type="submit" value="Запросить">
</form>
</html><?php }
}
?>