<?php /* Smarty version 3.1.24, created on 2015-08-01 16:13:01
         compiled from "./templates/form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1128055bcb7cd8b0188_78141498%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eccf3f832afd6b2fc8c75b58e4cdb3e2363ae4bc' => 
    array (
      0 => './templates/form.tpl',
      1 => 1438426247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1128055bcb7cd8b0188_78141498',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bcb7cd92a150_89547061',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bcb7cd92a150_89547061')) {
function content_55bcb7cd92a150_89547061 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1128055bcb7cd8b0188_78141498';
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