<?php
/* Smarty version 3.1.33, created on 2019-02-12 12:55:59
  from '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6243cf81d645_73993081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf8e31a0711b956b9112a52274510d91e47c3a2' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance.tpl',
      1 => 1549943756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../elements/head.tpl' => 1,
    'file:../../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c6243cf81d645_73993081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6076799415c6243cf8149b2_09766613', 'title');
?>
</h1>

<p>This is the <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9955115515c6243cf818484_90660185', 'explanation');
?>
</p>

<p>Think about changing the language using this method</p>

<?php $_smarty_tpl->_subTemplateRender("file:../../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'title'} */
class Block_6076799415c6243cf8149b2_09766613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6076799415c6243cf8149b2_09766613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inheritance<?php
}
}
/* {/block 'title'} */
/* {block 'explanation'} */
class Block_9955115515c6243cf818484_90660185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'explanation' => 
  array (
    0 => 'Block_9955115515c6243cf818484_90660185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
parent<?php
}
}
/* {/block 'explanation'} */
}
