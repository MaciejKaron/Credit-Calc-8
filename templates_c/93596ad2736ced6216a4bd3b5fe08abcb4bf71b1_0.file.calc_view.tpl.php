<?php
/* Smarty version 3.1.39, created on 2021-04-01 19:20:38
  from 'C:\xampp\htdocs\Credit-Calc-07a\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606600e6f3c715_29047561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93596ad2736ced6216a4bd3b5fe08abcb4bf71b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-07a\\app\\views\\calc_view.tpl',
      1 => 1617216907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_606600e6f3c715_29047561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_847050212606600e6ef39d9_74201590', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_847050212606600e6ef39d9_74201590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_847050212606600e6ef39d9_74201590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<h2 class="content-head is-center">Credit Calculator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
CalcCompute" method="post">
			<label for="id_amount">Amount:</label>
			<input id="id_amount" type="text" placeholder="AMOUNT" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" >		
			<label for="id_years">Years</label>
			<input id="id_years" type="text" placeholder="YEARS" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" >
			<label for="id_percentages">Percentages:</label>
			<input id="id_percentages" type="text" placeholder="PERCENTAGES" name="percentages" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percentages;?>
" >
			<button class="pure-button" type="submit">Calculate</button>
		</form>
		</div>

<div class="l-box-lrg pure-u-1-2">

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
