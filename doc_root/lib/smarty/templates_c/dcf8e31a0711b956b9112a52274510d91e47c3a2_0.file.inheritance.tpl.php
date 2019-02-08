<?php
/* Smarty version 3.1.33, created on 2019-02-08 13:27:35
  from '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5d0537d4bae4_29320263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf8e31a0711b956b9112a52274510d91e47c3a2' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance.tpl',
      1 => 1549600042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../elements/head.tpl' => 1,
    'file:../../elements/footer.tpl' => 1,
  ),
),false)) {
function content_5c5d0537d4bae4_29320263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:../../elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217524255c5d0537d45d73_21813124', 'title');
?>
</h1>

<?php $_smarty_tpl->_subTemplateRender("file:../../elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'title'} */
class Block_217524255c5d0537d45d73_21813124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_217524255c5d0537d45d73_21813124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inheritance<?php
}
}
/* {/block 'title'} */
}
