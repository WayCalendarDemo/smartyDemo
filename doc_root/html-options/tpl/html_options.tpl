{include file="../../elements/head.tpl"}

<h1>{$pagetitle}</h1>

<p>Assign the arrays of data to the template, then this function does all the work to
generate the HTML output for it.</p>

<select name=user>
  {html_options values=$id output=$names selected="1"}
</select>

{include file="../../elements/footer.tpl"}
