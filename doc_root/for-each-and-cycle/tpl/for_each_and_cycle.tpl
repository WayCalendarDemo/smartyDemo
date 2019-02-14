{include file="{$path}/elements/head.tpl"}

<h1>{$pagetitle}</h1>

<p>You can use the foreach function to loop over arrays of data.<br>
You can also use the cycle function to alternate between different values such as row colours<br>
You can use the strip function to remove extra white space. - Doesn't seem to be working.</p>

<table>
  {foreach $names as $name}
  {strip}
  <tr bgcolor="{cycle values='#fff,#888'}">
    <td>{$name}</td>
  </tr>
  {/strip}
  {/foreach}
</table>

<table>
  {foreach $users as $user}
  {strip}
    <tr bgcolor="{cycle values='#fff,#888'}">
      <td>{$user.name}</td>
      <td>{$user.number}</td>
    </tr>
  {/strip}
  {/foreach}
</table>

{include file="{$path}/elements/footer.tpl"}
