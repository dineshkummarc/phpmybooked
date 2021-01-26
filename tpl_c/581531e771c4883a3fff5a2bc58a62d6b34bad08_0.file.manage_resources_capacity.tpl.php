<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:47:05
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Resources\manage_resources_capacity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc389a6b4a5_05607148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581531e771c4883a3fff5a2bc58a62d6b34bad08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Resources\\manage_resources_capacity.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cc389a6b4a5_05607148 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceCapacityNone'),$_smarty_tpl ) );?>

	<?php }?>
</div><?php }
}
