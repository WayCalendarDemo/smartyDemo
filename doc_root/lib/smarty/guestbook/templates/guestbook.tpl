<table border="0" width="300">
  <tr>
    <th colspan="2" bgcolor="#d1d1d1">
      Guestbook Entries (<a href="{$SCRIPT_NAME}?action=add">add</a>)</th>
  </tr>
  {foreach from=$data item="entry"}
    <tr bgcolor="{cycle values="#dedede,#eeeeee" advance=false}">
      <td>{$entry.Name|escape}</td>
    <td align="right">
      {$entry.EntryDate|date_format:"%e %b, %Y %H:%M:%S"}</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="{cycle values="#dedede,#eeeeee"}">
        {$entry.Comment|escape}</td>
    </tr>
    {foreachelse}
      <tr>
        <td colspan="2">No records</td>
      </tr>
  {/foreach}
</table>

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
