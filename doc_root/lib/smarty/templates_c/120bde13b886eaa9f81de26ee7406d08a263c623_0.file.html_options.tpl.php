<?php
/* Smarty version 3.1.33, created on 2019-02-12 12:58:43
  from '/Users/wayland/smartyproject/doc_root/html-options/tpl/html_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c624473e8cfe9_77213267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '120bde13b886eaa9f81de26ee7406d08a263c623' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/html-options/tpl/html_options.tpl',
      1 => 1549943894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../elements/head.tpl' => 1,
    'file:../../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c624473e8cfe9_77213267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/wayland/smartyproject/doc_root/lib/smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:../../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>

<p>Assign the arrays of data to the template, then this function does all the work to
generate the HTML output for it.</p>

<select name=user>
  <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"1"),$_smarty_tpl);?>

</select>

<?php $_smarty_tpl->_subTemplateRender("file:../../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
