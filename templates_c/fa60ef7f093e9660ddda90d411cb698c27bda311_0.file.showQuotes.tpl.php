<?php /* Smarty version 3.1.27, created on 2015-08-04 17:44:50
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\showQuotes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:614755c0c1d272baa0_65767256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60ef7f093e9660ddda90d411cb698c27bda311' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\showQuotes.tpl',
      1 => 1438692750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614755c0c1d272baa0_65767256',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c0c1d27625c2_59617447',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c0c1d27625c2_59617447')) {
function content_55c0c1d27625c2_59617447 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '614755c0c1d272baa0_65767256';
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