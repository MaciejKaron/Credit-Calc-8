<?php
/* Smarty version 3.1.39, created on 2021-04-17 16:17:20
  from 'C:\xampp\htdocs\Credit-Calc-8\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607aedf0d49da3_18802061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dac385762a2f454d4ee6160953ab450ce8ef54e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-8\\app\\views\\login_view.tpl',
      1 => 1618668991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607aedf0d49da3_18802061 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-stacked">
    <input type="text" placeholder="Username" id="id_login" name="login"  >  
  <input type="password" placeholder="Password" id="id_pass" name="pass"  >  
  <input type="submit" value="Sign In">
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
