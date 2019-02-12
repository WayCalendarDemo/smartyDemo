<?php
/* Smarty version 3.1.33, created on 2019-02-12 13:04:25
  from '/Users/wayland/smartyproject/doc_root/for-each-and-cycle/tpl/for-each-and-cycle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6245c9892e61_23860899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf62de5436911cbe97463f79e86f3fc26ed13c3d' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/for-each-and-cycle/tpl/for-each-and-cycle.tpl',
      1 => 1549944264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../elements/head.tpl' => 1,
    'file:../../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c6245c9892e61_23860899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>




<?php $_smarty_tpl->_subTemplateRender("file:../../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
