<?php /* Smarty version 3.1.27, created on 2015-08-06 15:41:48
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3164955c347fc44c913_76139566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099a216e71d8766147f055e8b9b26bbd57dca510' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\login.tpl',
      1 => 1438861306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3164955c347fc44c913_76139566',
  'variables' => 
  array (
    'errorReg' => 0,
    'item' => 0,
    'errorAuth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c347fc4aa541_57539046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c347fc4aa541_57539046')) {
function content_55c347fc4aa541_57539046 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3164955c347fc44c913_76139566';
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
    <div class="right-block">
        <h3>Форма авторизации</h3>

        <form name="authForm" method="post" action="/index.php">
            <label>Введите логин:</label><br>
            <input type="text" name="authLogin" placeholder="Ваш логин"><br>
            <label>Введите пароль:</label><br>
            <input type="password" name="authPassword" placeholder="Ваш Пароль"><br>
            <input type="submit" value="Войти"><br>
        </form>
        <ul class="errors"><?php
$_from = $_smarty_tpl->tpl_vars['errorAuth']->value;
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