{include file="{$path}/elements/head.tpl"}

<h1>{$pagetitle}</h1>


<p>Use 'variable modifiers' to alter the output of assigned variables from within the template.
You can use modifiers from Smarty or you can make your own using the plugin architecture.
Drop your new modifers into the plugin directory</p>

<p>Hello, {$name|capitalize}!<br>The date is {$smarty.now|date_Format: "%b %e, %Y"}</p>


{include file="{$path}/elements/footer.tpl"}
