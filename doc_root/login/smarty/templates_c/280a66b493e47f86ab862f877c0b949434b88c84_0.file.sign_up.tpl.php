<?php
/* Smarty version 3.1.33, created on 2019-03-06 05:20:49
  from '/Users/wayland/smartyproject/doc_root/login/smarty/templates/sign_up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7f4aa1eee694_11265840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '280a66b493e47f86ab862f877c0b949434b88c84' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/login/smarty/templates/sign_up.tpl',
      1 => 1551846017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7f4aa1eee694_11265840 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Sign Up</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=signup" method="post">

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

<input type="submit" value="sign in">

</form>
<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=Login">Sign Up</a>
<?php }
}
