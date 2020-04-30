<?
$var = '
<a href="./">Home</a><br/>';
if (isset($_SESSION["user_name"])) {
	$var .= '
	<a href="./?page=title">Title</a><br/>
	<a href="./?page=author">Author</a><br/>
	<a href="./?page=cricket">See Cricket</a><br/>
	<a href="./?page=logout">Logout</a><hr/>
	Welcome, '.$_SESSION["user_name"];
}
$var .= '<hr/>';
return $var;