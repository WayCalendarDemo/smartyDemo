<h1>Sign Up</h1>

<form action="{$SCRIPT_NAME}?action=signup" method="post">

{if $error ne ""}
<div class="error-alert">
  <span>{$error}</span>
</div>
{/if}

<label for="userName">User Name</label>
<input id="userName" type="text" name="userName" size="50">

<label for="password">Password</label>
<input id="password" type="text" name="password" size="50">

<input type="submit" value="sign in">

</form>
<a href="{$SCRIPT_NAME}?action=Login">Sign Up</a>
