<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:47:05
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Resources\manage_resources_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc389b80a68_38765375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9682bfaaad94dd6e911be522c676f14aaa8efbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Resources\\manage_resources_groups.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cc389b80a68_38765375 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds()) == 0) {?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>

<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(), 'resourceGroupId', false, NULL, 'eachGroup', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['resourceGroupId']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resourceGroupId']->value) {
$_smarty_tpl->tpl_vars['resourceGroupId']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['total'];
?>
	<span class="resourceGroupId" data-value="<?php echo $_smarty_tpl->tpl_vars['resourceGroupId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ResourceGroupList']->value[$_smarty_tpl->tpl_vars['resourceGroupId']->value]->name;?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
