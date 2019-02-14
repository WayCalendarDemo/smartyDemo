<?php
/* Smarty version 3.1.33, created on 2019-02-14 13:35:36
  from '/Users/wayland/smartyproject/doc_root/cache/tpl/cache.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c64f018d07120_28296674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa5f7b14c106a4956bbc7585b161218d8ee2875b' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/cache/tpl/cache.tpl',
      1 => 1550118935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64f018d07120_28296674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['path']->value)."/elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>

<?php echo $_smarty_tpl->tpl_vars['name']->value;?>


<p>Built-in caching helps to speed up teh page rendering.<br>
A copy of the template output is stored in a text file, then that is displayed upon
subsequent calls to the request instead of dynamically rendering the page each time.<br>
You can also leave parts of the page dynamic just by marking them as nocache.</p>



<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['path']->value)."/elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
