<form action="{$SCRIPT_NAME}?action=submit" method="post">
  <table border="1">
    {if $error ne ""}
      <tr>
      <td bgcolor="yellow" colspan="2">
      {if in_array("name_empty", $error)} You must supply a name.{/if}
      {if in_array("comment_empty", $error)} You must supply a comment.{/if}
      </td>
      </tr>
    {/if}
    <tr>
      <td>Name:</td>
      <td>
        <!-- <input type="text" name="Name" value="{$post.Name|escape}" size="40"> -->
        <input type="text" name="Name" value="" size="40">
      </td>
    </tr>
    <tr>
      <td valign="top">Comment:</td>
      <td>
        <!-- <textarea name="Comment" cols="40" rows="10">{$post.Comment|escape}</textarea> -->
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
