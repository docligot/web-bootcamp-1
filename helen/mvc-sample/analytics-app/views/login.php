<?

$var = '
<p>'.$_SESSION["login_message"].'</p>
<form action="./" method="post">
<p>Enter access code</p>
<input type="password" name="user_pass" /><br/>
<input type="submit" value="Login"/>
</form>';
return $var;
