<?php /* Smarty version 3.1.27, created on 2015-08-11 16:42:15
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\showquotes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1298855c9eda768aa77_58752716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85630ccf8faac8254a1fd2fa09aafee27e64ce36' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\showquotes.tpl',
      1 => 1439296934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298855c9eda768aa77_58752716',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c9eda76c9274_35084905',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c9eda76c9274_35084905')) {
function content_55c9eda76c9274_35084905 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1298855c9eda768aa77_58752716';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/paginator3000.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/paginator3000.js"><?php echo '</script'; ?>
>
    <title>Цитаты Баша. </title>
</head>
<body>

<div id="body">
    <div class="index">
        #<?php echo $_smarty_tpl->tpl_vars['showIndex']->value;?>
</div>
    <div class="text">
        <?php echo $_smarty_tpl->tpl_vars['showQuote']->value;?>

    </div>
    <div class="paginator" id="body"></div>
    <?php echo '<script'; ?>
 type="text/javascript">
        paginator_example = new Paginator(
                "body", // id контейнера, куда ляжет пагинатор
                64, // общее число страниц
                10, // число страниц, видимых одновременно
                5, // номер текущей страницы
                "http://bash.local/pages/" // url страниц
        );
    <?php echo '</script'; ?>
>
</div>
</body>
</html>
<?php }
}
?>