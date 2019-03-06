<?php
/* Smarty version 3.1.33, created on 2019-03-06 05:20:48
  from '/Users/wayland/smartyproject/doc_root/login/smarty/templates/log_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7f4aa0351540_29769469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e406ddb06561b437e1196f2bc2a8258e6da95a7' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/login/smarty/templates/log_in.tpl',
      1 => 1551846035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7f4aa0351540_29769469 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Log In</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=signin" method="post">

<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
<div class="error-alert">
  <span><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
</div>
<?php }?>

<label for="userName">User Name</label>
<input id="userName" type="text" name="userName" size="50">

<label for="password">Password</label>
<input id="password" type="text" name="password" size="50">

<input type="submit" value="Log in">

</form>
<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=signup">Sign Up</a>
<?php }
}
