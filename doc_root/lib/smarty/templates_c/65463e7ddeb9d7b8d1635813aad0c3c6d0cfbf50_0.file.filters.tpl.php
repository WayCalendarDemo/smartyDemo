<?php
/* Smarty version 3.1.33, created on 2019-02-12 12:50:32
  from '/Users/wayland/smartyproject/doc_root/filters/tpl/filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c62428823ec53_11415573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65463e7ddeb9d7b8d1635813aad0c3c6d0cfbf50' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/filters/tpl/filters.tpl',
      1 => 1549943430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../elements/head.tpl' => 1,
    'file:../../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c62428823ec53_11415573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/wayland/smartyproject/doc_root/lib/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/Users/wayland/smartyproject/doc_root/lib/smarty/plugins/modifier.date_Format.php','function'=>'smarty_modifier_date_Format',),));
$_smarty_tpl->_subTemplateRender("file:../../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>


<p>Use 'variable modifiers' to alter the output of assigned variables from within the template.
You can use modifiers from Smarty or you can make your own using the plugin architecture.
Drop your new modifers into the plugin directory</p>

<p>Hello, <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
!<br>The date is <?php echo smarty_modifier_date_Format(time(),"%b %e, %Y");?>
</p>
<?php $_smarty_tpl->_subTemplateRender("file:../../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
