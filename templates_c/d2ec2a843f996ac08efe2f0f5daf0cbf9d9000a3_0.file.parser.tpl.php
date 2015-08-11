<?php /* Smarty version 3.1.27, created on 2015-08-11 10:53:53
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\auth.local\public_html\templates\parser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1708555c99c0154d3d2_11213846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ec2a843f996ac08efe2f0f5daf0cbf9d9000a3' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\auth.local\\public_html\\templates\\parser.tpl',
      1 => 1438870753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1708555c99c0154d3d2_11213846',
  'variables' => 
  array (
    'loginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c99c015baa05_52018712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c99c015baa05_52018712')) {
function content_55c99c015baa05_52018712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1708555c99c0154d3d2_11213846';
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