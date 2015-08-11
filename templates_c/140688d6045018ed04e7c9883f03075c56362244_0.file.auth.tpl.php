<?php /* Smarty version 3.1.27, created on 2015-08-10 17:21:09
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\auth.local\public_html\templates\auth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:685355c8a54506acc3_85024234%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140688d6045018ed04e7c9883f03075c56362244' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\auth.local\\public_html\\templates\\auth.tpl',
      1 => 1439212863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685355c8a54506acc3_85024234',
  'variables' => 
  array (
    'info' => 0,
    'errorAuth' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c8a5450a5661_65493693',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c8a5450a5661_65493693')) {
function content_55c8a5450a5661_65493693 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '685355c8a54506acc3_85024234';
?>
<html>
<head>
    <link rel="stylesheet" href="/style.css" type="text/css" media="screen"/>
    <title></title>
</head>
<body>

<div id="body">
    <div class="form">

        <h3>Форма авторизации</h3>

        <form name="authForm" method="post" action="/index.php?auth=check">
            <label>Введите логин:</label><br>
            <input type="text" name="login" placeholder="Ваш логин"><br>
            <label>Введите пароль:</label><br>
            <input type="password" name="password" placeholder="Ваш Пароль"><br>
            <input type="submit" value="Войти"><br>
        </form>
        <span class="success"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</span>
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