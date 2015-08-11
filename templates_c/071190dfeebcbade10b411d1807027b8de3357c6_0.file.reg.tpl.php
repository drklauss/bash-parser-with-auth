<?php /* Smarty version 3.1.27, created on 2015-08-06 16:13:37
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1864655c34f719f95f3_37889738%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '071190dfeebcbade10b411d1807027b8de3357c6' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\reg.tpl',
      1 => 1438863215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864655c34f719f95f3_37889738',
  'variables' => 
  array (
    'errorReg' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c34f71a47815_93264901',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c34f71a47815_93264901')) {
function content_55c34f71a47815_93264901 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1864655c34f719f95f3_37889738';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title></title>
</head>
<body>

<div id="body">
    <div class="left-block">
        <h3>Форма регистрации</h3>

        <form name="regForm" method="post" action="/index.php">
            <label>Введите логин:</label><br>
            <input type="text" name="regLogin" placeholder="Ваш логин"><br>
            <label>Введите пароль:</label><br>
            <input type="password" name="regPassword" placeholder="Ваш Пароль"><br>
            <input type="submit" value="Зарегистрироваться"><br>
        </form>
        <ul class="errors"><?php
$_from = $_smarty_tpl->tpl_vars['errorReg']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
                       <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?></ul>
    </div>
</div>
</body>
</html>

<?php }
}
?>