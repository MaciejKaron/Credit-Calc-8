<?php
/* Smarty version 3.1.39, created on 2021-04-01 19:20:39
  from 'C:\xampp\htdocs\Credit-Calc-07a\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606600e713b4e9_61696195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b009341684c22a4e1d9e02443a4628f0bf1cc0cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-07a\\app\\views\\templates\\main.tpl',
      1 => 1617219516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606600e713b4e9_61696195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Credit-Calc-07a/css/layouts/marketing.css">
    <link rel="stylesheet" href="http://localhost/Credit-Calc-07a/css/main.css">
    
    
    <?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    
    <link rel="stylesheet" href="http://localhost/Credit-Calc-07a/css/style_hide_intro.css">
    <?php }?>
    
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<?php echo '<script'; ?>
 src="http://localhost/Credit-Calc-07a/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/Credit-Calc-07a/js/softscroll.js"><?php echo '</script'; ?>
>
</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">START</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">SCROLL UP</a></li>
            <li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">LOG OUT</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">CREDIT CALCULATOR</h1>
        <p class="splash-subhead">
             _____________
        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Let's go!</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1769556786606600e713add4_39682251', 'content');
?>





    </div>
    
    <div class="footer l-box is-center">
		<p>Hi :)</p>
	</div>

</div>


</body>
</html>
<?php }
/* {block 'content'} */
class Block_1769556786606600e713add4_39682251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1769556786606600e713add4_39682251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
