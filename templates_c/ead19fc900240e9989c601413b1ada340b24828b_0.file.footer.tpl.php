<?php /* Smarty version 3.1.27, created on 2015-08-12 15:10:44
         compiled from "C:\DATA\Winginx\home\bash.local\public_html\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29655cb29b449e1f2_89303530%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ead19fc900240e9989c601413b1ada340b24828b' => 
    array (
      0 => 'C:\\DATA\\Winginx\\home\\bash.local\\public_html\\templates\\footer.tpl',
      1 => 1439377843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29655cb29b449e1f2_89303530',
  'variables' => 
  array (
    'pageTotal' => 0,
    'pageCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cb29b44c9184_57630178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cb29b44c9184_57630178')) {
function content_55cb29b44c9184_57630178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29655cb29b449e1f2_89303530';
?>
<div class="paginator" id="paginator2"></div>
<?php echo '<script'; ?>
 type="text/javascript">
    paginator_example = new Paginator(
            "paginator2", // id контейнера, куда ляжет пагинатор
            <?php echo $_smarty_tpl->tpl_vars['pageTotal']->value;?>
, // общее число страниц
            15, // число страниц, видимых одновременно
            <?php echo $_smarty_tpl->tpl_vars['pageCurrent']->value;?>
, // номер текущей страницы
            "http://bash.local/index.php?page=" // url страниц
    );
<?php echo '</script'; ?>
>
<div id="body" >
    <div class="footer">Копирайта никакого нет, да и какой он может быть, если я сам все это стащил с вполне себе
        рабочего Баша?В общем,что есть, то есть-вот такой вот получился футер...</div></div><?php }
}
?>