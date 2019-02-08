<?php
/* Smarty version 3.1.33, created on 2019-02-08 13:19:11
  from '/Users/wayland/smartyproject/doc_root/tpl/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5d033fc590e0_16477734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c3270199ba9398df883a99b5ca5819f00eae00' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/tpl/index.tpl',
      1 => 1549598450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../elements/head.tpl' => 1,
    'file:../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c5d033fc590e0_16477734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>

    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!

<?php $_smarty_tpl->_subTemplateRender("file:../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
