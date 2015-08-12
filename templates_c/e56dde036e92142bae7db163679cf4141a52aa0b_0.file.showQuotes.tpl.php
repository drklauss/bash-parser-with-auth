<?php /* Smarty version 3.1.27, created on 2015-08-12 15:03:38
         compiled from "C:\DATA\Winginx\home\bash.local\public_html\templates\showQuotes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2819855cb280a8494b1_61196210%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e56dde036e92142bae7db163679cf4141a52aa0b' => 
    array (
      0 => 'C:\\DATA\\Winginx\\home\\bash.local\\public_html\\templates\\showQuotes.tpl',
      1 => 1439377416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2819855cb280a8494b1_61196210',
  'variables' => 
  array (
    'showIndex' => 0,
    'showQuote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cb280a84d335_99535767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cb280a84d335_99535767')) {
function content_55cb280a84d335_99535767 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2819855cb280a8494b1_61196210';
?>
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


<?php }
}
?>