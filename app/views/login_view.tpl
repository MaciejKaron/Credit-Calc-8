<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sing Up</title>
	<link rel="stylesheet" href="http://localhost/Credit-Calc-8/css/login.css">
</head>
<body>
	
<div class="login">
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-stacked">
    <input type="text" placeholder="Username" id="id_login" name="login"  >  
  <input type="password" placeholder="Password" id="id_pass" name="pass"  >  
  <input type="submit" value="Sign In">
</form>
</div>
{include file='messages.tpl'}

</body>
</html>