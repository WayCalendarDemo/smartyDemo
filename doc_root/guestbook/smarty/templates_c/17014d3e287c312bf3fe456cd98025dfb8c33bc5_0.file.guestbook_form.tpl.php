<?php
/* Smarty version 3.1.33, created on 2019-04-07 20:09:07
  from '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/guestbook/smarty/templates/guestbook_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caa58e3299c33_63451800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17014d3e287c312bf3fe456cd98025dfb8c33bc5' => 
    array (
      0 => '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/guestbook/smarty/templates/guestbook_form.tpl',
      1 => 1554667738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caa58e3299c33_63451800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_SERVER['DOCUMENT_ROOT'])."/elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<main>
  <div class="main-visual">
    <h1 class="heading">Make an entry</h1>
    <h5 class="subheading">What's your favorite quote?</h5>
  </div>
  <hr class="site-line">
  <div class="entry-gateway">
    <ul class="link-list">
      <li class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=view">View Entries</a></li>
    </ul>
  </div>
  <section class="content-wrap entry-form-wrap">
    <div class="item-container entry-container">
      <div class="image-section">
        <div class="image-container"></div>
      </div>
      <form class="entry-form-container" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=submit" method="post">
        <div class="entry-row">
          <label for="name">Name:</label>
          <input id="name" type="text" name="Name" value="" size="100">
        </div>
        <div class="entry-row">
          <label for="title">Title:</label>
          <input id="title" type="text" name="Title" value="" size="100">
        </div>
        <div class="entry-row">
          <label for="comment">Comment:</label>
          <textarea id="comment" name="Comment" cols="100" rows="10"></textarea>
        </div>
        <div class="entry-row">
          <a class="cancel-btn" href="/guestbook/index.php?action=view"/>Cancel</a>
          <input type="submit" value="Submit">
        </div>
        <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
        <div class="entry-row">
          <p>
            <?php if (in_array("name_empty",$_smarty_tpl->tpl_vars['error']->value)) {?> You must supply a name.<?php }?><br>
            <?php if (in_array("title_empty",$_smarty_tpl->tpl_vars['error']->value)) {?> You must supply a title.<?php }?>
            <?php if (in_array("comment_empty",$_smarty_tpl->tpl_vars['error']->value)) {?> You must supply a comment.<?php }?>
          </p>
        </div>
        <?php }?>
      </form>
    </div>


  </section>
</main>


<!--

guestbook_form.tpl is the template for adding an entry to the guestbook.
If the form is being redisplayed due to a validation error, the form values are
HTML-escaped so there are no HTML tag or quote character clashes (very important!)

-->
<?php $_smarty_tpl->_subTemplateRender(((string)$_SERVER['DOCUMENT_ROOT'])."/elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
