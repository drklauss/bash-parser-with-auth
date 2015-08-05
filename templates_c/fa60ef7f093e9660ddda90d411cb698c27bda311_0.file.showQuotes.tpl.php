<?php /* Smarty version 3.1.27, created on 2015-08-05 13:04:13
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\showQuotes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2827255c1d18d7e96a1_62565546%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60ef7f093e9660ddda90d411cb698c27bda311' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\showQuotes.tpl',
      1 => 1438765446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2827255c1d18d7e96a1_62565546',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c1d18d7f90a6_15249291',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c1d18d7f90a6_15249291')) {
function content_55c1d18d7f90a6_15249291 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2827255c1d18d7e96a1_62565546';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
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
</div>
</body>
</html>
<?php }
}
?>