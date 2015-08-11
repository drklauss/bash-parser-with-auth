<?php /* Smarty version 3.1.27, created on 2015-08-06 18:19:15
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\parser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:91155c36ce3a02b12_09030631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62dc6aacdb60e701f0ce54fbff5030e1a4d9b34b' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\parser.tpl',
      1 => 1438870753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91155c36ce3a02b12_09030631',
  'variables' => 
  array (
    'loginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c36ce3a50d31_53985739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c36ce3a50d31_53985739')) {
function content_55c36ce3a50d31_53985739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '91155c36ce3a02b12_09030631';
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
        <input type="submit" name="exit" value="Выйти" formaction="/index.php?exit=1">
    </form>
</div>
</body>

</html><?php }
}
?>