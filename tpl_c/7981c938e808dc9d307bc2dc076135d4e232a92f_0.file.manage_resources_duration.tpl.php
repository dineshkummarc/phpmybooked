<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:47:05
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Resources\manage_resources_duration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc389a4ff18_03774562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7981c938e808dc9d307bc2dc076135d4e232a92f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Resources\\manage_resources_duration.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cc389a4ff18_03774562 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="minDuration"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinLength()) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinLength()),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinLengthNone'),$_smarty_tpl ) );?>

	<?php }?>
</div>

<div class="maxDuration"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxLength()) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl ) );?>

	<?php }?>
</div>

<div class="bufferTime"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Minutes();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasBufferTime()) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl ) );?>

	<?php }?>
</div>

<div class="allowMultiDay"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday()) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceNotAllowMultiDay'),$_smarty_tpl ) );?>

	<?php }?>
</div><?php }
}
