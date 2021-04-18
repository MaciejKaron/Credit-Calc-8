<?php
/* Smarty version 3.1.39, created on 2021-04-02 18:33:27
  from 'C:\xampp\htdocs\Credit-Calc-07b\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606747576dd2b1_45295990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5adb3f86a033b9351a1d7a8a5d86d2c37a34e31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-07b\\app\\views\\login_view.tpl',
      1 => 1617381084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_606747576dd2b1_45295990 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sing Up</title>
	<link rel="stylesheet" href="http://localhost/Credit-Calc-07b/css/login.css">
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
