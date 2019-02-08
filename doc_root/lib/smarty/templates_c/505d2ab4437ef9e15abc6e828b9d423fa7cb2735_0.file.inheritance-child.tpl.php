<?php
/* Smarty version 3.1.33, created on 2019-02-08 13:22:19
  from '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance-child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5d03fb0e13e3_21138757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505d2ab4437ef9e15abc6e828b9d423fa7cb2735' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/inheritance/tpl/inheritance-child.tpl',
      1 => 1549598860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5d03fb0e13e3_21138757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1900686765c5d03fb0deb76_56751808', 'title');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "inheritance.tpl");
}
/* {block 'title'} */
class Block_1900686765c5d03fb0deb76_56751808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1900686765c5d03fb0deb76_56751808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inheritance - Child<?php
}
}
/* {/block 'title'} */
}
