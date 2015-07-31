<?php /* Smarty version 3.1.24, created on 2015-07-31 22:21:10
         compiled from "./templates/form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3226755bbbc965d52c1_24274711%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eccf3f832afd6b2fc8c75b58e4cdb3e2363ae4bc' => 
    array (
      0 => './templates/form.tpl',
      1 => 1438366869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3226755bbbc965d52c1_24274711',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bbbc96632d50_31318654',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bbbc96632d50_31318654')) {
function content_55bbbc96632d50_31318654 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3226755bbbc965d52c1_24274711';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<h2>Парсер получения баша</h2>
<form name="getDateFrom" method="get" action="/test_bash/functions.php">
    <label>Старница: <input type="text" name="putDate" placeholder="Номер страницы"></label>
    <input type="submit" value="Запросить">
</form>
</html><?php }
}
?>