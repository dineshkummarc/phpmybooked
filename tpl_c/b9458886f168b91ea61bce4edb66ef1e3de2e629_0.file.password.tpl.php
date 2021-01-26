<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:43:31
  from 'C:\xampp\htdocs\Test\booked\tpl\MyAccount\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc2b34d0ad1_48794213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9458886f168b91ea61bce4edb66ef1e3de2e629' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\MyAccount\\password.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_600cc2b34d0ad1_48794213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page-change-password">

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'ValidationGroup'))) {
throw new SmartyException('block tag \'validation_group\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('validation_group', array('class'=>"alert alert-danger"));
$_block_repeat=true;
echo $_block_plugin1->ValidationGroup(array('class'=>"alert alert-danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0], array( array('id'=>"currentpassword",'key'=>"InvalidPassword"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0], array( array('id'=>"passwordmatch",'key'=>"PwMustMatch"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0], array( array('id'=>"passwordcomplexity",'key'=>''),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->ValidationGroup(array('class'=>"alert alert-danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


	<?php if (!$_smarty_tpl->tpl_vars['AllowPasswordChange']->value) {?>
		<div class="alert alert-danger">
			<i class="fa fa-warning fa-2x"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PasswordControlledExternallyError'),$_smarty_tpl ) );?>

		</div>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['ResetPasswordSuccess']->value) {?>
			<div class="success alert alert-success col-xs-12 col-sm-8 col-sm-offset-2">
				<span class="glyphicon glyphicon-ok-sign"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PasswordChangedSuccessfully'),$_smarty_tpl ) );?>

			</div>
		<?php }?>
		<div id="password-reset-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
			<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ChangePassword"),$_smarty_tpl ) );?>
</h1>

			<form id="password-reset-form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">

				<div class="form-group">
					<label for="<?php echo FormKeys::CURRENT_PASSWORD;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"CurrentPassword"),$_smarty_tpl ) );?>
</label>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('type'=>"password",'name'=>"CURRENT_PASSWORD"),$_smarty_tpl ) );?>

				</div>

				<div class="form-group">
					<label for="<?php echo FormKeys::PASSWORD;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"NewPassword"),$_smarty_tpl ) );?>
</label>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('type'=>"password",'name'=>"PASSWORD"),$_smarty_tpl ) );?>

				</div>

				<div class="form-group">
					<label for="<?php echo FormKeys::PASSWORD_CONFIRM;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"PasswordConfirmation"),$_smarty_tpl ) );?>
</label>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('type'=>"password",'name'=>"PASSWORD_CONFIRM",'value'=>''),$_smarty_tpl ) );?>


				</div>

				<div class="form-group">
					<button type="submit" name="<?php echo Actions::CHANGE_PASSWORD;?>
" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangePassword'),$_smarty_tpl ) );?>
"
							class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangePassword'),$_smarty_tpl ) );?>
</button>
				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

			</form>
		</div>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0], array( array('key'=>'CURRENT_PASSWORD'),$_smarty_tpl ) );?>

	<?php }?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
