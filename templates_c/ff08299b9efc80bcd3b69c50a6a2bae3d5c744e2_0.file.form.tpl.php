<?php /* Smarty version 3.1.27, created on 2015-08-03 11:15:13
         compiled from "P:\home\test1.ru\www\test_bash\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2237055bf15015c9d21_63631812%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff08299b9efc80bcd3b69c50a6a2bae3d5c744e2' => 
    array (
      0 => 'P:\\home\\test1.ru\\www\\test_bash\\templates\\form.tpl',
      1 => 1438583440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2237055bf15015c9d21_63631812',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55bf150163d050_20963370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bf150163d050_20963370')) {
function content_55bf150163d050_20963370 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2237055bf15015c9d21_63631812';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<h2>Парсер получения баша</h2>
<form name="getDateFrom" method="get" action="/test_bash/functions.php">
    <label>Старница: <input type="text" name="grubPage" placeholder="Номер страницы"></label>
    <input type="submit" value="Запросить">
</form>
</html><?php }
}
?>