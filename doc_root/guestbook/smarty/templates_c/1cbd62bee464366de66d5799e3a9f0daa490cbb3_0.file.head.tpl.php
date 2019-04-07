<?php
/* Smarty version 3.1.33, created on 2019-04-07 10:10:09
  from '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/elements/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca9cc81ef5af4_41328950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cbd62bee464366de66d5799e3a9f0daa490cbb3' => 
    array (
      0 => '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/elements/head.tpl',
      1 => 1554631774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca9cc81ef5af4_41328950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/lib/smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<html>
  <head>
    <title>Smarty | <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['pagetitle']->value);?>
!</title>
    <link rel="stylesheet" href="/shared/css/smartydemo.css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
  </head>
  <body>
<?php }
}
