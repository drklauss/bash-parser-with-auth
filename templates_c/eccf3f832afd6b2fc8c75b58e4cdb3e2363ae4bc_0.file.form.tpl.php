<?php /* Smarty version 3.1.24, created on 2015-07-31 23:29:20
         compiled from "./templates/form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1614555bbcc90c69949_27188763%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eccf3f832afd6b2fc8c75b58e4cdb3e2363ae4bc' => 
    array (
      0 => './templates/form.tpl',
      1 => 1438367188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1614555bbcc90c69949_27188763',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55bbcc90cc2b29_04694173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bbcc90cc2b29_04694173')) {
function content_55bbcc90cc2b29_04694173 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1614555bbcc90c69949_27188763';
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