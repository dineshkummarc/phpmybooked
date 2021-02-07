<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-30 08:33:16
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\manage_accessories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60150bbcefa9b1_83889229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18480515324a5e0f82e098f02023d5e45c79a4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\manage_accessories.tpl',
      1 => 1600868989,
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
function content_60150bbcefa9b1_83889229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-manage-accessories" class="admin-page">
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageAccessories'),$_smarty_tpl ) );?>
</h1>

	<form id="addForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-accessory-panel">
			<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddAccessory"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0], array( array(),$_smarty_tpl ) );?>
</div>
			<div class="panel-body add-contents">
				<div class="col-xs-5">
					<div class="form-group has-feedback">
						<label for="accessoryName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AccessoryName'),$_smarty_tpl ) );?>
</label>
						<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ACCESSORY_NAME'),$_smarty_tpl ) );?>
 type="text" autofocus id="accessoryName" required class="form-control required"/>
						<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="accessoryName"></i>
					</div>
				</div>
				<div class="col-xs-7">
					<div class="form-group">
						<label for="addQuantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuantityAvailable'),$_smarty_tpl ) );?>
</label>
						<input type="number" id="addQuantity" class="form-control" min="0" disabled="disabled" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ACCESSORY_QUANTITY_AVAILABLE'),$_smarty_tpl ) );?>
 />
					</div>
					<div class="checkbox checkbox-align">
						<input type="checkbox" id="chkUnlimitedAdd" class="unlimited" name="chkUnlimited" checked="checked"/>
						<label for="chkUnlimitedAdd"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unlimited'),$_smarty_tpl ) );?>
</label>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('class'=>"btn-sm"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0], array( array('class'=>"btn-sm"),$_smarty_tpl ) );?>

			</div>
		</div>
	</form>

	<table class="table" id="accessoriesTable">
		<thead>
		<tr>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'AccessoryName','field'=>ColumnNames::ACCESSORY_NAME),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'QuantityAvailable','field'=>ColumnNames::ACCESSORY_QUANTITY),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</th>
			<th class="action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Actions'),$_smarty_tpl ) );?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-accessory-id="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['accessory']->value->QuantityAvailable)===null||$tmp==='' ? '&infin;' : $tmp);?>
</td>
				<td>
					<a href="#"
					   class="update resources"><?php if ($_smarty_tpl->tpl_vars['accessory']->value->AssociatedResources == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'All'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['accessory']->value->AssociatedResources;
}?></a>
				</td>
				<td class="action">
					<a href="#" class="update edit"><span class="no-show"></span>
                        <span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Edit'),$_smarty_tpl ) );?>
</span>
                        <span class="fa fa-pencil-square-o icon"></a> |
					<a href="#" class="update delete">
                        <span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</span>
                        <span class="fa fa-trash icon remove"></span></a>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>

	<input type="hidden" id="activeId"/>

	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteAccessoryWarning'),$_smarty_tpl ) );?>
</div>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="editDialog" tabindex="-1" role="dialog" aria-labelledby="editDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="editForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Edit'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback col-xs-12">
							<label for="editName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AccessoryName'),$_smarty_tpl ) );?>
</label>
							<input id="editName" type="text" class="form-control required" autofocus maxlength="85" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ACCESSORY_NAME'),$_smarty_tpl ) );?>
 />
						</div>
						<div class="form-group col-xs-4">
							<label for="editQuantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuantityAvailable'),$_smarty_tpl ) );?>
</label>
							<input id="editQuantity" type="number" min="0" class="form-control"
								   disabled="disabled" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ACCESSORY_QUANTITY_AVAILABLE'),$_smarty_tpl ) );?>
 />
						</div>
						<div class="form-group col-xs-8">
							<div class="checkbox checkbox-align">
								<input type="checkbox" id="chkUnlimitedEdit" class="unlimited" name="chkUnlimited" checked="checked"/>
								<label for="chkUnlimitedEdit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unlimited'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="accessoryResourcesDialog" tabindex="-1" role="dialog" aria-labelledby="resourcesDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="accessoryResourcesForm" role="form" ajaxAction="<?php echo ManageAccessoriesActions::ChangeAccessoryResource;?>
" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="resourcesDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body scrollable-modal-content">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('resourceId', ((string)$_smarty_tpl->tpl_vars['resource']->value->GetId()));?>
							<div resource-id="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
">
								<div class="checkbox">
									<input id="accessoryResource<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" type="checkbox" data-type="resource-id" class="resourceCheckbox"
										   name="<?php echo FormKeys::ACCESSORY_RESOURCE;?>
[<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
]"
										   value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
">
									<label for="accessoryResource<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label>
								</div>
								<div class="quantities no-show form-group-sm">
									<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MinimumQuantity'),$_smarty_tpl ) );?>

										<input type="number" min="0" data-type="min-quantity" class="form-control" size="4" maxlength="4"
											   name="<?php echo FormKeys::ACCESSORY_MIN_QUANTITY;?>
[<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
]"></label>
									<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MaximumQuantity'),$_smarty_tpl ) );?>

										<input type="number" min="0" data-type="max-quantity" class="form-control" size="4" maxlength="4"
											   name="<?php echo FormKeys::ACCESSORY_MAX_QUANTITY;?>
[<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
]"></label>
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<div class="modal-footer">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/accessory.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {

			var actions = {
				add: '<?php echo ManageAccessoriesActions::Add;?>
',
				edit: '<?php echo ManageAccessoriesActions::Change;?>
',
				deleteAccessory: '<?php echo ManageAccessoriesActions::Delete;?>
'
			};

			var accessoryOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions
			};

			var accessoryManagement = new AccessoryManagement(accessoryOptions);
			accessoryManagement.init();

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
?>
			accessoryManagement.addAccessory('<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['accessory']->value->Name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityAvailable;?>
');
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			$('#add-accessory-panel').showHidePanel();
		});
	<?php echo '</script'; ?>
>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
