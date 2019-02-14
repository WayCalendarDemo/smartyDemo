<?php
/* Smarty version 3.1.33, created on 2019-02-14 13:39:10
  from '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c64f0eedab525_23456613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf8e31a0711b956b9112a52274510d91e47c3a2' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance.tpl',
      1 => 1550119143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64f0eedab525_23456613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['path']->value)."/elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10757474185c64f0eed1fb19_16493040', 'title');
?>
</h1>

<p>This is the <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11041058455c64f0eeda4ce1_74338539', 'explanation');
?>
</p>

<p>A template can inherit another, and specific blocks of content within that template</p>

<p>Think about changing the language using this method</p>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['path']->value)."/elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
/* {block 'title'} */
class Block_10757474185c64f0eed1fb19_16493040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10757474185c64f0eed1fb19_16493040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inheritance<?php
}
}
/* {/block 'title'} */
/* {block 'explanation'} */
class Block_11041058455c64f0eeda4ce1_74338539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'explanation' => 
  array (
    0 => 'Block_11041058455c64f0eeda4ce1_74338539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
parent<?php
}
}
/* {/block 'explanation'} */
}
