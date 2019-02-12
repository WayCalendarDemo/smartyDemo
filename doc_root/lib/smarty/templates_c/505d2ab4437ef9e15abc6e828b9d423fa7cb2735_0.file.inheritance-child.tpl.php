<?php
/* Smarty version 3.1.33, created on 2019-02-12 12:55:10
  from '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance-child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c62439e038ec1_24666862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505d2ab4437ef9e15abc6e828b9d423fa7cb2735' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance-child.tpl',
      1 => 1549943707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62439e038ec1_24666862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6941272535c62439e031a13_19827264', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12169555585c62439e036546_27328501', 'explanation');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "inheritance.tpl");
}
/* {block 'title'} */
class Block_6941272535c62439e031a13_19827264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6941272535c62439e031a13_19827264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inheritance - Child<?php
}
}
/* {/block 'title'} */
/* {block 'explanation'} */
class Block_12169555585c62439e036546_27328501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'explanation' => 
  array (
    0 => 'Block_12169555585c62439e036546_27328501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
child<?php
}
}
/* {/block 'explanation'} */
}
