<?php
/* Smarty version 3.1.33, created on 2019-04-07 10:12:39
  from '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/guestbook/smarty/templates/guestbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca9cd17a61b29_46989088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a84e0e8c9ab230da9571e2141754afb63f02bcd7' => 
    array (
      0 => '/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/guestbook/smarty/templates/guestbook.tpl',
      1 => 1554631958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca9cd17a61b29_46989088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/lib/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/Users/waylandharwood/work/smartyDemo/smartyDemo/doc_root/lib/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender(((string)$_SERVER['DOCUMENT_ROOT'])."/elements/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<main>
  <div class="main-visual">
    <h1 class="heading">Wisdom</h1>
    <h5 class="subheading">A wise man once said...</h5>
  </div>
  <hr class="site-line">
  <div class="entry-gateway">
    <ul class="link-list">
      <li class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=add">New Entry</a></li>
    </ul>
  </div>
  <section class="content-wrap">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    <article class="item-container">
      <h2 class="item-heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
      <hr class="item-heading-divider">
      <p class="item-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Comment'], ENT_QUOTES, 'UTF-8', true);?>
</p>
      <ul class="item-author">
        <li class="author-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Name'], ENT_QUOTES, 'UTF-8', true);?>
 /</li>
        <li class="item-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entry']->value['EntryDate'],"%b %e, %Y");?>
</li>
      </ul>
    </article>
    <?php
}
} else {
?>
    <article class="item-container">
      <h2 class="item-heading">No Records</h2>
      <hr class="item-heading-divider">
      <p class="item-content">No Records</p>
      <ul class="item-author">
        <li class="author-name">No Records /</li>
        <li class="item-date">No Records</li>
      </ul>
    </article>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </section>
</main>

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
<?php $_smarty_tpl->_subTemplateRender(((string)$_SERVER['DOCUMENT_ROOT'])."/elements/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
