{include file= "{$smarty.server.DOCUMENT_ROOT}/elements/head.tpl"}
<main>
  <div class="main-visual">
    <h1 class="heading">Wisdom</h1>
    <h5 class="subheading">A wise man once said...</h5>
  </div>
  <hr class="site-line">
  <div class="entry-gateway">
    <ul class="link-list">
      <li class="link"><a href="{$SCRIPT_NAME}?action=add">New Entry</a></li>
    </ul>
  </div>
  <section class="content-wrap">
    {foreach from=$data item="entry"}
    <article class="item-container">
      <h2 class="item-heading">{$entry.Title|escape}</h2>
      <hr class="item-heading-divider">
      <p class="item-content">{$entry.Comment|escape}</p>
      <ul class="item-author">
        <li class="author-name">{$entry.Name|escape} /</li>
        <li class="item-date">{$entry.EntryDate|date_format:"%b %e, %Y"}</li>
      </ul>
    </article>
    {foreachelse}
    <article class="item-container">
      <h2 class="item-heading">No Records</h2>
      <hr class="item-heading-divider">
      <p class="item-content">No Records</p>
      <ul class="item-author">
        <li class="author-name">No Records /</li>
        <li class="item-date">No Records</li>
      </ul>
    </article>
    {/foreach}
  </section>
</main>

<!--

guestbook.tpl is the template for viewing the guestbook.
It loops over the guestbook data (which was assigned from displayBook()) in a
foreach loop and displays the name, data, and comment from each entry.
The data is formatted with the date_format modifier.
The Name and Comment are HTML-escaped using the escape modifier to avoid any
HTML tag clashes or scripting attacks.
The {cycle} function is used to cycle through background colours every two table
rows.

 -->
{include file= "{$smarty.server.DOCUMENT_ROOT}/elements/footer.tpl"}
