<?php /* Smarty version 3.1.27, created on 2015-08-11 12:25:18
         compiled from "C:\DATA\MEGA\DEVELOPING\Winginx\home\bash.local\public_html\templates\auth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:440555c9b16ea4f177_94819766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a2bd2e253e7f6f94600de6cd6c72b88d35edc5' => 
    array (
      0 => 'C:\\DATA\\MEGA\\DEVELOPING\\Winginx\\home\\bash.local\\public_html\\templates\\auth.tpl',
      1 => 1439281478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440555c9b16ea4f177_94819766',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c9b16ea9d390_88298719',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c9b16ea9d390_88298719')) {
function content_55c9b16ea9d390_88298719 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '440555c9b16ea4f177_94819766';
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
    </div>

</div>
</body>
</html>

<?php }
}
?>