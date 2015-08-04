<?php /* Smarty version 3.1.27, created on 2015-08-04 17:39:22
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\parser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:962255c0c08a5d2118_69915819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62dc6aacdb60e701f0ce54fbff5030e1a4d9b34b' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\parser.tpl',
      1 => 1438692647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962255c0c08a5d2118_69915819',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c0c08a6435f6_94436266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c0c08a6435f6_94436266')) {
function content_55c0c08a6435f6_94436266 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '962255c0c08a5d2118_69915819';
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