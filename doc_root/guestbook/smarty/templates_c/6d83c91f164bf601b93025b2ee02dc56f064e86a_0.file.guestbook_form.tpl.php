<?php
/* Smarty version 3.1.33, created on 2019-02-28 05:43:46
  from '/Users/wayland/smartyproject/doc_root/guestbook/smarty/templates/guestbook_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c776702274fa2_88929128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d83c91f164bf601b93025b2ee02dc56f064e86a' => 
    array (
      0 => '/Users/wayland/smartyproject/doc_root/guestbook/smarty/templates/guestbook_form.tpl',
      1 => 1551329020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c776702274fa2_88929128 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=submit" method="post">
  <table border="1">
    <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
      <tr>
      <td bgcolor="yellow" colspan="2">
      <?php if (in_array("name_empty",$_smarty_tpl->tpl_vars['error']->value)) {?> You must supply a name.<?php }?>
      <?php if (in_array("comment_empty",$_smarty_tpl->tpl_vars['error']->value)) {?> You must supply a comment.<?php }?>
      </td>
      </tr>
    <?php }?>
    <tr>
      <td>Name:</td>
      <td>
        <!-- <input type="text" name="Name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['Name'], ENT_QUOTES, 'UTF-8', true);?>
" size="40"> -->
        <input type="text" name="Name" value="" size="40">
      </td>
    </tr>
    <tr>
      <td valign="top">Comment:</td>
      <td>
        <!-- <textarea name="Comment" cols="40" rows="10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</textarea> -->
        <textarea name="Comment" cols="40" rows="10"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" value="Submit">
      </td>
    </tr>
  </table>
</form>

<!--

guestbook_form.tpl is the template for adding an entry to the guestbook.
If the form is being redisplayed due to a validation error, the form values are
HTML-escaped so there are no HTML tag or quote character clashes (very important!)



-->
<?php }
}
