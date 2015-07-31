<?php /* Smarty version 3.1.27, created on 2015-07-31 18:10:10
         compiled from "P:\home\test1.ru\www\test_bash\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:531155bb81c23980d3_65024701%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff08299b9efc80bcd3b69c50a6a2bae3d5c744e2' => 
    array (
      0 => 'P:\\home\\test1.ru\\www\\test_bash\\templates\\form.tpl',
      1 => 1438350865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '531155bb81c23980d3_65024701',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55bb81c23d9f78_71037229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bb81c23d9f78_71037229')) {
function content_55bb81c23d9f78_71037229 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '531155bb81c23980d3_65024701';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<h2>Парсер получения баша</h2>
<form name="getDateFrom" method="get" action="/test_bash/functions.php">
    <label>Старница:<input type="text" name="putDate" placeholder="номер страницы"></label>
    <input type="submit" value="Запросить">
</form>
</html><?php }
}
?>