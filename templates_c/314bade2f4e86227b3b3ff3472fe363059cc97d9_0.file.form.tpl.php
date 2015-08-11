<?php /* Smarty version 3.1.27, created on 2015-08-04 16:50:47
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:838655c0b5272819a2_97158326%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '314bade2f4e86227b3b3ff3472fe363059cc97d9' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\form.tpl',
      1 => 1438692647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838655c0b5272819a2_97158326',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c0b5272a8a92_47254385',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c0b5272a8a92_47254385')) {
function content_55c0b5272a8a92_47254385 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '838655c0b5272819a2_97158326';
?>
<html>
<head>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">
    <h3>Парсер получения цитат с bash.im</h3>

    <form name="getDateFrom" method="get" action="/index.php">
        <label>Начальная <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
        <label>Конечная <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
        <input type="submit" value="Залить в mySQL">
    </form>
    <form method="get" action="">
        <input type="submit" name="putRandom" title="Запросить рандомыне 50 цитат" value="Рандом" formaction="/functions?=random" >
    </form>
</div>
</body>

</html><?php }
}
?>