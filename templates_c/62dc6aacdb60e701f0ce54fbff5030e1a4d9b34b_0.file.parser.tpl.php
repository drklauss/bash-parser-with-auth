<?php /* Smarty version 3.1.27, created on 2015-08-11 12:25:37
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\parser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30655c9b181bdd2d9_80076771%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62dc6aacdb60e701f0ce54fbff5030e1a4d9b34b' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\parser.tpl',
      1 => 1439281478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30655c9b181bdd2d9_80076771',
  'variables' => 
  array (
    'loginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c9b181c331f1_27015738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c9b181c331f1_27015738')) {
function content_55c9b181c331f1_27015738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30655c9b181bdd2d9_80076771';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">

    <h3>Парсер получения цитат с bash.im</h3><span class="hello">Hello,<?php echo $_smarty_tpl->tpl_vars['loginName']->value;?>
!</span>

    <form name="getDateFrom" method="get" action="/index.php">
        <label>Начальная <input type="text" name="grubPageStart" placeholder="Номер страницы"></label>
        <label>Конечная <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
        <input type="submit" value="Залить в БД">

    </form>
    <form class="right-float" method="get" action="/index.php">
        <input type="submit" name="exit" value="Выйти">
    </form>
</div>
</body>

</html><?php }
}
?>