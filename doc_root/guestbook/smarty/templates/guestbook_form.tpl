{include file= "{$smarty.server.DOCUMENT_ROOT}/elements/head.tpl"}
<main>
  <div class="main-visual">
    <h1 class="heading">Make an entry</h1>
    <h5 class="subheading">What's your favorite quote?</h5>
  </div>
  <hr class="site-line">
  <div class="entry-gateway">
    <ul class="link-list">
      <li class="link"><a href="{$SCRIPT_NAME}?action=view">View Entries</a></li>
    </ul>
  </div>
  <section class="content-wrap entry-form-wrap">
    <div class="item-container entry-container">
      <div class="image-section">
        <div class="image-container"></div>
      </div>
      <form class="entry-form-container" action="{$SCRIPT_NAME}?action=submit" method="post">
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
        {if $error ne ""}
        <div class="entry-row">
          <p>
            {if in_array("name_empty", $error)} You must supply a name.{/if}<br>
            {if in_array("title_empty", $error)} You must supply a title.{/if}
            {if in_array("comment_empty", $error)} You must supply a comment.{/if}
          </p>
        </div>
        {/if}
      </form>
    </div>


  </section>
</main>


<!--

guestbook_form.tpl is the template for adding an entry to the guestbook.
If the form is being redisplayed due to a validation error, the form values are
HTML-escaped so there are no HTML tag or quote character clashes (very important!)

-->
{include file= "{$smarty.server.DOCUMENT_ROOT}/elements/footer.tpl"}
