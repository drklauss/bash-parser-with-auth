<?php /* Smarty version 3.1.27, created on 2015-08-04 16:52:32
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\form2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3203755c0b5903be9f1_95686621%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9262b478bbcd579e3243ebf3f380e1f22491e05e' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\form2.tpl',
      1 => 1438692750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3203755c0b5903be9f1_95686621',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c0b590420470_08745647',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c0b590420470_08745647')) {
function content_55c0b590420470_08745647 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3203755c0b5903be9f1_95686621';
?>
<html>
<head>
    <title>Цитаты Баша. </title>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
</head>
<body>
<div id="body">
    <div class="index">
        #<?php echo $_smarty_tpl->tpl_vars['showIndex']->value;?>
</div>
    <div class="text">
        <?php echo $_smarty_tpl->tpl_vars['showQuote']->value;?>

    </div>
</div>
</body>
</html>
<?php }
}
?>