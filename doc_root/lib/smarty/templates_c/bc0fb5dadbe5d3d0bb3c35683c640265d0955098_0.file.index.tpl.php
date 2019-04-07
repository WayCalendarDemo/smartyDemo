<?php
/* Smarty version 3.1.33, created on 2019-04-06 21:37:06
  from '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/tpl/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca91c02176af2_46749428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc0fb5dadbe5d3d0bb3c35683c640265d0955098' => 
    array (
      0 => '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/tpl/index.tpl',
      1 => 1554586257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca91c02176af2_46749428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['path']->value)."/elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
<p>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</p>
<p>Next line</p>



<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['path']->value)."/elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
