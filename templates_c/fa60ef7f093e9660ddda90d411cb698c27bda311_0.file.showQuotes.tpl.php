<?php /* Smarty version 3.1.27, created on 2015-08-11 17:31:11
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\showQuotes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1287555c9f91fb32713_71706873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60ef7f093e9660ddda90d411cb698c27bda311' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\showQuotes.tpl',
      1 => 1439299870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287555c9f91fb32713_71706873',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c9f91fb78c31_14692138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c9f91fb78c31_14692138')) {
function content_55c9f91fb78c31_14692138 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1287555c9f91fb32713_71706873';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title>Цитаты Баша. </title>
</head>
<body>

<div id="body">
    <div class="quotes">
        <div class="index">
            #<?php echo $_smarty_tpl->tpl_vars['showIndex']->value;?>
</div>
        <div class="text">
            <?php echo $_smarty_tpl->tpl_vars['showQuote']->value;?>

        </div>
    </div>
</div>
</body>
</html>
<?php }
}
?>