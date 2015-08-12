<?php /* Smarty version 3.1.27, created on 2015-08-11 18:20:19
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\showQuotes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2212755ca04a345b726_81573351%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa60ef7f093e9660ddda90d411cb698c27bda311' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\showQuotes.tpl',
      1 => 1439302789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2212755ca04a345b726_81573351',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ca04a345f5a8_82826203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ca04a345f5a8_82826203')) {
function content_55ca04a345f5a8_82826203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2212755ca04a345b726_81573351';
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