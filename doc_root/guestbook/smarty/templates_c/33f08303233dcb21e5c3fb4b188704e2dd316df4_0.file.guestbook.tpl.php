<?php
/* Smarty version 3.1.33, created on 2019-02-26 05:24:33
  from '/Users/wayland/smartyproject/doc_root/lib/smarty/guestbook/templates/guestbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c74bf818a1332_12491120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33f08303233dcb21e5c3fb4b188704e2dd316df4' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/lib/smarty/guestbook/templates/guestbook.tpl',
      1 => 1550719204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c74bf818a1332_12491120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/wayland/smartyproject/doc_root/lib/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/Users/wayland/smartyproject/doc_root/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<table border="0" width="300">
  <tr>
    <th colspan="2" bgcolor="#d1d1d1">
      Guestbook Entries (<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=add">add</a>)</th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#dedede,#eeeeee",'advance'=>false),$_smarty_tpl);?>
">
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
    <td align="right">
      <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value['EntryDate'],"%e %b, %Y %H:%M:%S");?>
</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="<?php echo smarty_function_cycle(array('values'=>"#dedede,#eeeeee"),$_smarty_tpl);?>
">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
    </tr>
    <?php
}
} else {
?>
      <tr>
        <td colspan="2">No records</td>
      </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<!--

guestbook.tpl is the template for viewing the guestbook.
It loops over the guestbook data (which was assigned from displayBook()) in a
foreach loop and displays the name, data, and comment from each entry.
The data is formatted with the date_format modifier.
The Name and Comment are HTML-escaped using the escape modifier to avoid any
HTML tag clashes or scripting attacks.
The <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
 function is used to cycle through background colours every two table
rows.

 -->
<?php }
}
