<?php
/* Smarty version 3.1.33, created on 2019-02-12 13:19:46
  from '/Users/wayland/smartyproject/doc_root/for-each-and-cycle/tpl/for_each_and_cycle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c624962996ba8_76945243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ece0bf44068fef6a04aa19c85041502c4d48dc3' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/for-each-and-cycle/tpl/for_each_and_cycle.tpl',
      1 => 1549945184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../elements/head.tpl' => 1,
    'file:../../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c624962996ba8_76945243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/wayland/smartyproject/doc_root/lib/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender("file:../../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>

<p>You can use the foreach function to loop over arrays of data.<br>
You can also use the cycle function to alternate between different values such as row colours<br>
You can use the strip functio to remove extra white space.</p>

<table>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
?>
  <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>'#fff,#888'),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td></tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<table>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
  <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>'#fff,#888'),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['number'];?>
</td></tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:../../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
