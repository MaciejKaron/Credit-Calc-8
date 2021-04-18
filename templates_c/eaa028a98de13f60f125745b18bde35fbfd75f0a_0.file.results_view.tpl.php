<?php
/* Smarty version 3.1.39, created on 2021-04-18 12:16:47
  from 'C:\xampp\htdocs\Credit-Calc-8\app\views\results_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c070f03b907_93515083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa028a98de13f60f125745b18bde35fbfd75f0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-8\\app\\views\\results_view.tpl',
      1 => 1618740962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607c070f03b907_93515083 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/Credit-Calc-8/css/results.css">
</head>
<body>

<div class = "back">
<a class="pure-button pure-button-primary" href="http://localhost/Credit-Calc-8">BACK</a>
</div>

<div class = "table">	
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>amount</th>
		<th>years</th>
		<th>percentages</th>
		<th>result</th>
        <th>data</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'rec');
$_smarty_tpl->tpl_vars['rec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->do_else = false;
?>
<tr><td> <?php echo $_smarty_tpl->tpl_vars['rec']->value["amount"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['rec']->value["years"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['rec']->value["percentages"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['rec']->value["result"];?>
 </td><td> <?php echo $_smarty_tpl->tpl_vars['rec']->value["data"];?>
 </td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
