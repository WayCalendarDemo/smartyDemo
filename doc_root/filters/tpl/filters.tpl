{include file="../../elements/head.tpl"}

<h1>{$pagetitle}</h1>

    Hello, {$name|capitalize}!
    The date is {$smarty.now|date_Format: "%b %e, %Y"}

{include file="../../elements/footer.tpl"}
