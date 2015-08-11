<?php /* Smarty version 3.1.27, created on 2015-08-03 18:25:32
         compiled from "P:\home\test1.ru\www\test_bash\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2883355bf79dc46f171_73907747%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff08299b9efc80bcd3b69c50a6a2bae3d5c744e2' => 
    array (
      0 => 'P:\\home\\test1.ru\\www\\test_bash\\templates\\form.tpl',
      1 => 1438611544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883355bf79dc46f171_73907747',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55bf79dc4a4738_52278653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55bf79dc4a4738_52278653')) {
function content_55bf79dc4a4738_52278653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2883355bf79dc46f171_73907747';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<body>
<h2>Парсер получения цитат с bash.im</h2>
<form name="getDateFrom" method="get" action="/test_bash/index.php">
    <label>Начальная страница: <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
    <label>Конечная страница: <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
    <input type="submit" value="Запросить">
<div class="text"></div>
</body>
</form>
</html><?php }
}
?>