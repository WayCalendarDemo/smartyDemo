{include file="../../elements/head.tpl"}

<h1>{$pagetitle}</h1>

<select name=user>
  {html_options values=$id output=$names selected="1"}
</select>

{include file="../../elements/footer.tpl"}
