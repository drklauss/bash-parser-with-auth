<?php /* Smarty version 3.1.27, created on 2015-08-12 15:05:07
         compiled from "C:\DATA\Winginx\home\bash.local\public_html\templates\parser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119755cb2863908530_01742736%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded391086de5c38dcf342940a49ce195cd370efd' => 
    array (
      0 => 'C:\\DATA\\Winginx\\home\\bash.local\\public_html\\templates\\parser.tpl',
      1 => 1439377505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119755cb2863908530_01742736',
  'variables' => 
  array (
    'loginName' => 0,
    'pageTotal' => 0,
    'pageCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cb286395e450_89380544',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cb286395e450_89380544')) {
function content_55cb286395e450_89380544 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119755cb2863908530_01742736';
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/paginator3000.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/paginator3000.js"><?php echo '</script'; ?>
>
    <title>Парсер для Баша</title>
</head>
<body>
<div id="body">

    <div class="parser">
        <h3>Парсер получения цитат с bash.im</h3><span class="hello">Hello,<?php echo $_smarty_tpl->tpl_vars['loginName']->value;?>
!</span>
        <img class="img" src="/images/logo.png">
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
<div class="paginator" id="paginator1"></div>
<?php echo '<script'; ?>
 type="text/javascript">
    paginator_example = new Paginator(
            "paginator1", // id контейнера, куда ляжет пагинатор
            <?php echo $_smarty_tpl->tpl_vars['pageTotal']->value;?>
, // общее число страниц
            15, // число страниц, видимых одновременно
            <?php echo $_smarty_tpl->tpl_vars['pageCurrent']->value;?>
, // номер текущей страницы
            "http://bash.local/index.php?page=" // url страниц
    );
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
?>