{include file="{$path}/elements/head.tpl"}

<h1>{$pagetitle}</h1>

{$name}

<p>Built-in caching helps to speed up teh page rendering.<br>
A copy of the template output is stored in a text file, then that is displayed upon
subsequent calls to the request instead of dynamically rendering the page each time.<br>
You can also leave parts of the page dynamic just by marking them as nocache.</p>



{include file="{$path}/elements/footer.tpl"}
