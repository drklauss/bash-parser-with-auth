<?php /* Smarty version 3.1.27, created on 2015-08-11 18:22:54
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\parser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2644455ca053e58a347_53438068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62dc6aacdb60e701f0ce54fbff5030e1a4d9b34b' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\parser.tpl',
      1 => 1439302972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2644455ca053e58a347_53438068',
  'variables' => 
  array (
    'loginName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ca053e5d8569_35763866',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ca053e5d8569_35763866')) {
function content_55ca053e5d8569_35763866 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2644455ca053e58a347_53438068';
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">

    <div class="parser">
        <h3>Парсер получения цитат с bash.im</h3><span class="hello">Hello,<?php echo $_smarty_tpl->tpl_vars['loginName']->value;?>
!</span>
        <img class="img" src="/images/logo.gif"><br><img class="img" src="/images/logo.gif">
        <form class="parserForm" name="getDateFrom" method="get" action="/index.php">
            <label>Начальная <input type="text" name="grubPageStart" placeholder="Номер страницы"></label><br>
            <label>Конечная <input type="text" name="grubPageFinish" placeholder="Номер страницы"></label>
            <input type="submit" value="Залить в БД">

        </form>

          </div>

    <form class="right-corner" method="get" action="/index.php">
        <input type="submit" name="exit" value="Выйти">
    </form>
</div>
</body>

</html><?php }
}
?>