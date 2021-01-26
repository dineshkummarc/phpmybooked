<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:47:05
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Resources\manage_resources.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc3899658e3_22343884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5644122633a54608185de004a1b82ccb9cfb490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Resources\\manage_resources.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Admin/Resources/manage_resources_duration.tpl' => 1,
    'file:Admin/Resources/manage_resources_credits.tpl' => 1,
    'file:Admin/Resources/manage_resources_capacity.tpl' => 1,
    'file:Admin/Resources/manage_resources_access.tpl' => 1,
    'file:Admin/Resources/manage_resources_groups.tpl' => 1,
    'file:Admin/Resources/manage_resources_public.tpl' => 1,
    'file:Admin/InlineAttributeEdit.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_600cc3899658e3_22343884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php $_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('InlineEdit'=>true,'Owl'=>true), 0, false);
?>

<div id="page-manage-resources" class="admin-page">
	<div>
		<div class="dropdown admin-header-more pull-right">
			<button class="btn btn-default" type="button" id="moreResourceActions" data-toggle="dropdown">
				<span class="no-show">More</span>
				<span class="glyphicon glyphicon-option-horizontal"></span>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="moreResourceActions">

				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_groups.php"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ManageResourceGroups"),$_smarty_tpl ) );?>
</a>
				</li>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_types.php"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ManageResourceTypes"),$_smarty_tpl ) );?>
</a>
				</li>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_status.php"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ManageResourceStatus"),$_smarty_tpl ) );?>
</a>
				</li>
				<li role="presentation" class="divider"></li>
				<li role="presentation">
					<a role="menuitem" href="#" class="import-resources" id="import-resources">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ImportResources"),$_smarty_tpl ) );?>

						<span class="glyphicon glyphicon-import"></span>
					</a>
				</li>
				<li role="presentation">
					<a role="menuitem" href="<?php echo $_smarty_tpl->tpl_vars['ExportUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ExportUrl']->value;?>
" class="export-resources" id="export-resources" target="_blank">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ExportResources"),$_smarty_tpl ) );?>

						<span class="glyphicon glyphicon-export"></span>
					</a>
				</li>
				<li role="presentation" class="divider"></li>
				<li role="presentation">
					<a role="menuitem" href="#" class="add-resource" id="add-resource"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddResource"),$_smarty_tpl ) );?>

						<span class="fa fa-plus-circle icon add"></span>
					</a>
				</li>
                <?php if (!empty($_smarty_tpl->tpl_vars['Resources']->value)) {?>
					<li role="presentation">
						<a role="menuitem" href="#" id="bulkUpdatePromptButton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BulkResourceUpdate'),$_smarty_tpl ) );?>
</a>
					</li>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['Resources']->value)) {?>
					<li role="presentation">
						<a role="menuitem" href="#" id="bulkDeletePromptButton"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BulkResourceDelete'),$_smarty_tpl ) );?>
</a>
					</li>
                <?php }?>
			</ul>
		</div>

		<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageResources'),$_smarty_tpl ) );?>
</h1>
	</div>

	<div class="panel panel-default filterTable" id="filter-resources-panel">
		<form id="filterForm" class="horizontal-list" role="form" method="get">
			<div class="panel-heading"><span
						class="glyphicon glyphicon-filter"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Filter"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0], array( array(),$_smarty_tpl ) );?>

			</div>
			<div class="panel-body">

                <?php $_smarty_tpl->_assignInScope('groupClass', "col-xs-12 col-sm-4 col-md-3");?>

				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterResourceName" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resource'),$_smarty_tpl ) );?>
</label>
					<input type="text" id="filterResourceName" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_NAME'),$_smarty_tpl ) );?>

						   value="<?php echo $_smarty_tpl->tpl_vars['ResourceNameFilter']->value;?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
"/>
					<span class="searchclear glyphicon glyphicon-remove-circle" ref="filterResourceName"></span>

				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterScheduleId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
</label>
					<select id="filterScheduleId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 class="form-control">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllSchedules'),$_smarty_tpl ) );?>
</option>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['AllSchedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleIdFilter']->value),$_smarty_tpl ) );?>

					</select>
				</div>

				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterResourceType" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceType'),$_smarty_tpl ) );?>
</label>
					<select id="filterResourceType" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl ) );?>
>
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResourceTypes'),$_smarty_tpl ) );?>
</option>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'key'=>'Id','label'=>"Name",'selected'=>$_smarty_tpl->tpl_vars['ResourceTypeFilter']->value),$_smarty_tpl ) );?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="resourceStatusIdFilter" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceStatus'),$_smarty_tpl ) );?>
</label>
					<select id="resourceStatusIdFilter" style="width:auto;" class="form-control inline" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl ) );?>
>
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResourceStatuses'),$_smarty_tpl ) );?>
</option>
						<option value="<?php echo ResourceStatus::AVAILABLE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Available'),$_smarty_tpl ) );?>
</option>
						<option value="<?php echo ResourceStatus::UNAVAILABLE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unavailable'),$_smarty_tpl ) );?>
</option>
						<option value="<?php echo ResourceStatus::HIDDEN;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Hidden'),$_smarty_tpl ) );?>
</option>
					</select>
					<label for="resourceReasonIdFilter" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reason'),$_smarty_tpl ) );?>
</label>
					<select id="resourceReasonIdFilter" style="width:auto;" class="form-control inline" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl ) );?>
>
						<option value="">-</option>
					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterCapacity" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MinimumCapacity'),$_smarty_tpl ) );?>
</label>
					<input type="number" min="0" id="filterCapacity" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl ) );?>

						   value="<?php echo $_smarty_tpl->tpl_vars['CapacityFilter']->value;?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MinimumCapacity'),$_smarty_tpl ) );?>
"/>
					<span class="searchclear glyphicon glyphicon-remove-circle" ref="filterCapacity"></span>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterRequiresApproval" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApproval'),$_smarty_tpl ) );?>
</label>
					<select id="filterRequiresApproval" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl ) );?>

							title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApproval'),$_smarty_tpl ) );?>
">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApproval'),$_smarty_tpl ) );?>
</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['RequiresApprovalFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterAutoAssign" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl ) );?>
</label>
					<select id="filterAutoAssign" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_ASSIGN'),$_smarty_tpl ) );?>
 title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl ) );?>
">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl ) );?>
</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['AutoPermissionFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label for="filterAllowMultiDay" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl ) );?>
</label>
					<select id="filterAllowMultiDay" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl ) );?>
 title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl ) );?>
">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl ) );?>
</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['AllowMultiDayFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="clearfix"></div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeFilters']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"AttributeControl",'idPrefix'=>"search",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true,'class'=>"customAttribute filter-customAttribute".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id())." ".((string)$_smarty_tpl->tpl_vars['groupClass']->value)),$_smarty_tpl ) );?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>
			<div class="panel-footer">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0], array( array('id'=>"filter",'class'=>"btn-sm"),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0], array( array('id'=>"clearFilter",'class'=>"btn-sm"),$_smarty_tpl ) );?>

			</div>
		</form>
	</div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0], array( array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value,'showCount'=>true),$_smarty_tpl ) );?>


	<div id="globalError" class="error no-show"></div>

	<div class="panel panel-default admin-panel" id="list-resources-panel">
		<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Resources"),$_smarty_tpl ) );?>

			<a href="#" class="add-link add-resource pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddResource"),$_smarty_tpl ) );?>

				<span class="fa fa-plus-circle icon add"></span>
			</a>
		</div>
		<div class="panel-body no-padding" id="resourceList">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['resource']->value->GetResourceId());?>
				<div class="resourceDetails" data-resourceId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<div class="col-xs-12 col-sm-5">
						<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>

						<div class="col-sm-3 col-xs-6 resourceImage">
							<div class="margin-bottom-25">
                                <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasImage()) {?>
									<div class="owl-carousel owl-theme">
										<div class="item">
											<img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0], array( array('image'=>$_smarty_tpl->tpl_vars['resource']->value->GetImage()),$_smarty_tpl ) );?>
" alt="Resource Image" class="image"/>
										</div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetImages(), 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
											<div class="item">
												<img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0], array( array('image'=>$_smarty_tpl->tpl_vars['image']->value),$_smarty_tpl ) );?>
" alt="Resource Image" class="image"/>
											</div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
									<br/>
									<a class="update imageButton" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Change'),$_smarty_tpl ) );?>
</a>
                                <?php } else { ?>
									<div class="noImage"><span class="fa fa-image"></span></div>
									<a class="update imageButton" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddImage'),$_smarty_tpl ) );?>
</a>
                                <?php }?>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceColor'),$_smarty_tpl ) );?>

								<input class="resourceColorPicker" type="color"
									   value='<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {
echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();
} else { ?>#ffffff<?php }?>'
									   alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceColor'),$_smarty_tpl ) );?>
"
									   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceColor'),$_smarty_tpl ) );?>
"/>
								<a href="#" class="update clearColor"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Remove'),$_smarty_tpl ) );?>
</a>
							</div>
						</div>
						<div class="col-sm-9 col-xs-6">
							<div>
							<span class="title resourceName" data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								  data-name="<?php echo FormKeys::RESOURCE_NAME;?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</span>
								<a class="update renameButton" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Rename'),$_smarty_tpl ) );?>
">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Rename'),$_smarty_tpl ) );?>
</span>
									<i
											class="fa fa-pencil-square-o"></i></a> |
								<a class="update copyButton" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Copy'),$_smarty_tpl ) );?>
">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Copy'),$_smarty_tpl ) );?>
</span>
									<i
											class="fa fa-copy"></i></a> |
								<a class="update deleteButton" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</span>
									<i class="fa fa-trash icon delete"></i>
								</a>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Status'),$_smarty_tpl ) );?>

                                <?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAvailable()) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"status.png"),$_smarty_tpl ) );?>

									<a class="update changeStatus"
									   href="#"
									   data-popover-content="#statusDialog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Available'),$_smarty_tpl ) );?>
</a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['resource']->value->IsUnavailable()) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"status-away.png"),$_smarty_tpl ) );?>

									<a class="update changeStatus"
									   href="#"
									   data-popover-content="#statusDialog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unavailable'),$_smarty_tpl ) );?>
</a>
                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"status-busy.png"),$_smarty_tpl ) );?>

									<a class="update changeStatus"
									   href="#"
									   data-popover-content="#statusDialog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Hidden'),$_smarty_tpl ) );?>
</a>
                                <?php }?>
                                <?php if (array_key_exists($_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId(),$_smarty_tpl->tpl_vars['StatusReasons']->value)) {?>
									<span class="statusReason"><?php echo $_smarty_tpl->tpl_vars['StatusReasons']->value[$_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId()]->Description();?>
</span>
                                <?php }?>
							</div>

							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>

								<span class="propertyValue scheduleName"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
"
									  data-name="<?php echo FormKeys::SCHEDULE_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['Schedules']->value[$_smarty_tpl->tpl_vars['resource']->value->GetScheduleId()];?>
</span>
								<a class="update changeScheduleButton" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Move'),$_smarty_tpl ) );?>
</a>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceType'),$_smarty_tpl ) );?>

								<span class="propertyValue resourceTypeName"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_TYPE_ID;?>
">
									<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasResourceType()) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['ResourceTypes']->value[$_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId()]->Name();?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoResourceTypeLabel'),$_smarty_tpl ) );?>

                                    <?php }?>
								</span>
								<a class="update changeResourceType" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceType'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span>
								</a>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SortOrder'),$_smarty_tpl ) );?>

								<span class="propertyValue sortOrderValue"
									  data-type="number" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-name="<?php echo FormKeys::RESOURCE_SORT_ORDER;?>
">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['resource']->value->GetSortOrder())===null||$tmp==='' ? "0" : $tmp);?>

							</span>
								<a class="update changeSortOrder" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SortOrder'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span>
								</a>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Location'),$_smarty_tpl ) );?>

								<span class="propertyValue locationValue"
									  data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_LOCATION;?>
">
							<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasLocation()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoLocationLabel'),$_smarty_tpl ) );?>

                            <?php }?>
							</span>
								<a class="update changeLocation" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Location'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span>
								</a>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Contact'),$_smarty_tpl ) );?>

								<span class="propertyValue contactValue"
									  data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_CONTACT;?>
">
							<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasContact()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoContactLabel'),$_smarty_tpl ) );?>

                            <?php }?>
							</span>
								<a class="update changeContact" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Contact'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span></a>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Description'),$_smarty_tpl ) );?>
 <a class="update changeDescription" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Description'),$_smarty_tpl ) );?>
</span>
									<span
											class="fa fa-pencil-square-o"></span></a>
                                <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()) {?>
                                    <?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['resource']->value->GetDescription());?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('description', '');?>
                                <?php }?>
                                <div class="descriptionValue" data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo FormKeys::RESOURCE_DESCRIPTION;?>
"><?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()) {
echo $_smarty_tpl->tpl_vars['description']->value;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoDescriptionLabel'),$_smarty_tpl ) );
}?></div>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Notes'),$_smarty_tpl ) );?>
 <a class="update changeNotes" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Notes'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span>
								</a>
                                <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()) {?>
                                    <?php $_smarty_tpl->_assignInScope('notes', $_smarty_tpl->tpl_vars['resource']->value->GetNotes());?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('notes', '');?>
                                <?php }?>
                                <div class="notesValue" data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notes']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo FormKeys::RESOURCE_NOTES;?>
"><?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()) {
echo $_smarty_tpl->tpl_vars['notes']->value;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoNotesLabel'),$_smarty_tpl ) );
}?></div>
							</div>
							<div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAdministrator'),$_smarty_tpl ) );?>

								<span class="propertyValue resourceAdminValue"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_ADMIN_GROUP_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['GroupLookup']->value[$_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId()]->Name;?>
</span>
                                <?php if (count($_smarty_tpl->tpl_vars['AdminGroups']->value) > 0) {?>
									<a class="update changeResourceAdmin" href="#">
										<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAdministrator'),$_smarty_tpl ) );?>
</span>
										<span class="fa fa-pencil-square-o"></span></a>
                                <?php }?>
							</div>
							<div>
								<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageResourcesActions::ActionPrintQR;?>
&rid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								   target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PrintQRCode'),$_smarty_tpl ) );?>
 <i class="fa fa-qrcode"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-7">
						<div class="col-sm-6 col-xs-12">
							<h5 class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Duration'),$_smarty_tpl ) );?>
</h5>
							<a href="#" class="inline update changeDuration">
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Duration'),$_smarty_tpl ) );?>
</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="durationPlaceHolder">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_duration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>
							</div>

                            <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
								<div>
									<h5 class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Credits'),$_smarty_tpl ) );?>
</h5>
									<a href="#" class="inline update changeCredits">
										<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Credits'),$_smarty_tpl ) );?>
</span>
										<span class="fa fa-pencil-square-o"></span>
									</a>
									<div class="creditsPlaceHolder">
                                        <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_credits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>
									</div>
								</div>
                            <?php }?>

							<div>
								<h5 class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Capacity'),$_smarty_tpl ) );?>
</h5>
								<a href="#" class="inline update changeCapacity">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Capacity'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span>
								</a>

								<div class="capacityPlaceHolder">
                                    <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_capacity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-xs-12">
							<h5 class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Access'),$_smarty_tpl ) );?>
</h5>
							<a href="#" class="inline update changeAccess">
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Access'),$_smarty_tpl ) );?>
</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="accessPlaceHolder">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_access.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>
							</div>
						</div>

						<div class="col-sm-6 col-xs-12">
							<h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Permissions'),$_smarty_tpl ) );?>
</h5>
							<a href="#" class="update changeUserPermission"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Users'),$_smarty_tpl ) );?>
</a> |
							<a href="#" class="update changeGroupPermissions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Groups'),$_smarty_tpl ) );?>
</a>
						</div>

						<div class="col-sm-6 col-xs-12">
							<h5 class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceGroups'),$_smarty_tpl ) );?>
</h5>
							<a href="#" class="inline update changeResourceGroups">
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceGroups'),$_smarty_tpl ) );?>
</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="resourceGroupsPlaceHolder">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_groups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>
							</div>
							<div class="clearfix">&nbsp;</div>
						</div>

						<div class="col-xs-12">
							<h5 class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Public'),$_smarty_tpl ) );?>
</h5>
							<div class="publicSettingsPlaceHolder">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Resources/manage_resources_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0, true);
?>
							</div>
						</div>

						<div class="col-sm-6 col-xs-12">&nbsp;</div>

					</div>

					<div class="clearfix"></div>
					<div class="customAttributes">
                        <?php if (count($_smarty_tpl->tpl_vars['AttributeList']->value) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeList']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:Admin/InlineAttributeEdit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'value'=>$_smarty_tpl->tpl_vars['resource']->value->GetAttributeValue($_smarty_tpl->tpl_vars['attribute']->value->Id())), 0, true);
?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
					</div>
					<div class="clearfix"></div>
				</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0], array( array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl ) );?>


	<div id="add-resource-dialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="addResourceModalLabel"
		 aria-hidden="true">
		<form id="addResourceForm" class="form" role="form" method="post"
			  ajaxAction="<?php echo ManageResourcesActions::ActionAdd;?>
" enctype="multipart/form-data">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addResourceModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddNewResource'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div id="addResourceResults" class="alert alert-danger no-show"></div>

						<div class="form-group has-feedback">
							<label for="resourceName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
</label>
							<input type="text" class="form-control required" maxlength="85" id="resourceName"
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_NAME'),$_smarty_tpl ) );?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="resourceName"></i>

						</div>
						<div class="form-group">
							<label for="scheduleId"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
</label>
							<select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 id="scheduleId">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'scheduleName', false, 'scheduleId');
$_smarty_tpl->tpl_vars['scheduleName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['scheduleName']->value) {
$_smarty_tpl->tpl_vars['scheduleName']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="form-group">
							<label for="permissions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissions'),$_smarty_tpl ) );?>
</label>
							<select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_ASSIGN'),$_smarty_tpl ) );?>
 id="permissions">
								<option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ResourcePermissionAutoGranted"),$_smarty_tpl ) );?>
</option>
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ResourcePermissionNotAutoGranted"),$_smarty_tpl ) );?>
</option>
							</select>
						</div>
						<div class="form-group">
							<label for="resourceAdminGroupId"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAdministrator'),$_smarty_tpl ) );?>
</label>
							<select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl ) );?>

									id="resourceAdminGroupId">
                                <?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
									<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</option><?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'adminGroup');
$_smarty_tpl->tpl_vars['adminGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->value) {
$_smarty_tpl->tpl_vars['adminGroup']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<label for="resourceImageAdd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Image'),$_smarty_tpl ) );?>
</label>
						<div class="dropzone" id="addResourceImage">
							<div>
								<span class="fa fa-image fa-3x"></span><br/>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChooseOrDropFile'),$_smarty_tpl ) );?>

							</div>
							<input id="resourceImageAdd" type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl ) );?>

								   accept="image/*;capture=camera"/>
						</div>
						<div class="note">.gif, .jpg, or .png</div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<input type="hidden" id="activeId" value=""/>

	<div id="imageDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
		 aria-hidden="true">
		<form id="imageForm" method="post" enctype="multipart/form-data" ajaxAction="<?php echo ManageResourcesActions::ActionChangeImage;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="imageModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceImages'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">

						<div id="resource-images">

						</div>
						<div class="clearfix">&nbsp;</div>

						<label for="resourceImage" class="off-screen no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Image'),$_smarty_tpl ) );?>
</label>
						<div class="dropzone" id="changeResourceImage">
							<div class="dropzone-empty">
								<span class="fa fa-image fa-3x"></span><br/>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChooseOrDropFile'),$_smarty_tpl ) );?>

							</div>
							<div class="dropzone-preview"></div>
							<input id="resourceImage" type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl ) );?>

								   accept="image/*;capture=camera"/>
						</div>

						<div class="note">.gif, .jpg, .png</div>
					</div>

					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array('key'=>'Done'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<form id="removeImageForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionRemoveImage;?>
">
		<input type="hidden" id="removeImageName" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl ) );?>
 />
	</form>

	<form id="defaultImageForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionDefaultImage;?>
">
		<input type="hidden" id="defaultImageName" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl ) );?>
 />
	</form>

	<div id="copyDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="copyModalLabel"
		 aria-hidden="true">
		<form id="copyForm" method="post" enctype="multipart/form-data"
			  ajaxAction="<?php echo ManageResourcesActions::ActionCopyResource;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="copyModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Copy'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="copyResourceName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
</label>
							<input type="text" class="form-control required" maxlength="85" id="copyResourceName"
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_NAME'),$_smarty_tpl ) );?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="copyResourceName"></i>

						</div>
					</div>

					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="durationDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="durationModalLabel"
		 aria-hidden="true">
		<form id="durationForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeDuration;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="durationModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Duration'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editMinDuration">
							<div class="checkbox">
								<input type="checkbox" id="noMinimumDuration" class="noMinimumDuration"
									   data-related-inputs="#minDurationInputs"/>
								<label for="noMinimumDuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinLengthNone'),$_smarty_tpl ) );?>
</label>
							</div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMinDuration", "txtMinDuration", null);?>
								<input type='number' size='3' id='minDurationDays' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' size='2' id='minDurationHours' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' size='2' id='minDurationMinutes'
									   class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='minDuration'
									   class='interval minDuration' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_DURATION'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='minDurationInputs'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editMaxDuration">
							<div class="checkbox">
								<input type="checkbox" id="noMaximumDuration" data-related-inputs="#maxDurationInputs"/>
								<label for="noMaximumDuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl ) );?>
</label>
							</div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMaxDuration", "txtMaxDuration", null);?>
								<input type='number' id='maxDurationDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='maxDurationHours' size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='maxDurationMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='maxDuration' class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_DURATION'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='maxDurationInputs'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editBuffer">
							<div class="checkbox">
								<input type="checkbox" id="noBufferTime" data-related-inputs="#bufferInputs"/>
								<label for="noBufferTime"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl ) );?>
</label>
							</div>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtBufferTime", "txtBufferTime", null);?>
								<input type='number' id='bufferTimeDays'
									   size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='bufferTimeHours'
									   size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='bufferTimeMinutes'
									   size='2' class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='bufferTime'
									   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BUFFER_TIME'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='bufferInputs'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['txtBufferTime']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editMultiDay">
							<div class="checkbox">
								<input type="checkbox" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl ) );?>
 id="allowMultiDay"/>
								<label for="allowMultiDay"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>

					</div>

					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="capacityDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="capacityModalLabel"
		 aria-hidden="true">
		<form id="capacityForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeCapacity;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="capacityModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Capacity'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editCapacity">
							<div class="checkbox">
								<input type="checkbox" id="unlimitedCapacity" class="unlimitedCapacity"
									   data-related-inputs="#maxCapacityInputs"/>
								<label for="unlimitedCapacity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceCapacityNone'),$_smarty_tpl ) );?>
</label>
							</div>
							<div id='maxCapacityInputs'>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMaxCapacity", "txtMaxCapacity", null);?>
									<label for='maxCapacity' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Capacity'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='maxCapacity' class='form-control inline mid-number' min='0'
										   max='9999' size='5' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['txtMaxCapacity']->value),$_smarty_tpl ) );?>

							</div>
						</div>
					</div>

					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="accessDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="accessModalLabel"
		 aria-hidden="true">
		<form id="accessForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeAccess;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="accessModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Access'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editStartNoticeAdd">
							<div class="checkbox">
								<input type="checkbox" id="noStartNoticeAdd" class="noStartNoticeAdd"
									   data-related-inputs="#startNoticeInputsAdd"/>
								<label for="noStartNoticeAdd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl ) );?>
</label>
							</div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeAdd", "txtStartNoticeAdd", null);?>
								<input type='number' id='startNoticeAddDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='startNoticeAddHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='startNoticeAddMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='startNoticeAdd' class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_ADD'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='startNoticeInputsAdd'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeAdd']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editStartNoticeUpdate">
							<div class="checkbox">
								<input type="checkbox" id="noStartNoticeUpdate" class="noStartNoticeUpdate"
									   data-related-inputs="#startNoticeInputsUpdate"/>
								<label for="noStartNoticeUpdate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl ) );?>
</label>
							</div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeUpdate", "txtStartNoticeUpdate", null);?>
								<input type='number' id='startNoticeUpdateDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='startNoticeUpdateHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='startNoticeUpdateMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='startNoticeUpdate' class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_UPDATE'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='startNoticeInputsUpdate'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeUpdate']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editStartNoticeDelete">
							<div class="checkbox">
								<input type="checkbox" id="noStartNoticeDelete" class="noStartNoticeDelete"
									   data-related-inputs="#startNoticeInputsDelete"/>
								<label for="noStartNoticeDelete"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl ) );?>
</label>
							</div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeDelete", "txtStartNoticeDelete", null);?>
								<input type='number' id='startNoticeDeleteDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='startNoticeDeleteHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='startNoticeDeleteMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='startNoticeDelete' class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_DELETE'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='startNoticeInputsDelete'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeDelete']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editEndNotice">
							<div class="checkbox">
								<input type="checkbox" id="noEndNotice" data-related-inputs="#endNoticeInputs"/>
								<label for="noEndNotice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl ) );?>
</label>
							</div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtEndNotice", "txtEndNotice", null);?>
								<input type='number' id='endNoticeDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='endNoticeHours' size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
								<input type='number' id='endNoticeMinutes' size='2' class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
								<input type='hidden' id='endNotice' class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_NOTICE'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<div id='endNoticeInputs'>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editRequiresApproval">
							<div class="checkbox">
								<input type="checkbox" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl ) );?>
 id="requiresApproval"/>
								<label for="requiresApproval"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApproval'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>

						<div class="editAutoAssign">
							<div class="checkbox">
								<input type="checkbox" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_ASSIGN'),$_smarty_tpl ) );?>
 id="autoAssign" value="1"/>
								<label for="autoAssign"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>

						<div class="no-show" id="autoAssignRemoveAllPermissions">
							<div class="checkbox">
								<input type="checkbox" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_ASSIGN_CLEAR'),$_smarty_tpl ) );?>

									   id="autoAssignRemoveAllPermissionsChk" value="1"/>
								<label for="autoAssignRemoveAllPermissionsChk"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RemoveExistingPermissions'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>

						<div class="editCheckin">
							<div class="checkbox">
								<input type="checkbox" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ENABLE_CHECK_IN'),$_smarty_tpl ) );?>
 id="enableCheckIn"/>
								<label for="enableCheckIn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RequiresCheckInNotification'),$_smarty_tpl ) );?>
</label>
							</div>
							<div class="no-show" id="autoReleaseMinutesDiv">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtAutoRelease", "txtAutoRelease", null);?>
									<label for='autoReleaseMinutes' class='no-show'>Auto Release Minutes</label>
									<input type='number' max='99' min='0' id='autoReleaseMinutes'
										   class='minutes form-control inline' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_RELEASE_MINUTES'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['txtAutoRelease']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="editConcurrent">
							<div class="checkbox">
								<input type="checkbox" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ALLOW_CONCURRENT_RESERVATIONS'),$_smarty_tpl ) );?>

									   id="allowConcurrentChk" value="1"/>
								<label for="allowConcurrentChk"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllowConcurrentReservations'),$_smarty_tpl ) );?>
</label>
							</div>

							<div class="no-show" id="allowConcurrentDiv">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtConcurrentReservations", "txtConcurrentReservations", null);?>
									<label for='maxConcurrentReservations' class='no-show'>Maximum Concurrent Reservations</label>
									<input type='number' max='99' min='2' id='maxConcurrentReservations'
										   class='form-control inline minutes' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_CONCURRENT_RESERVATIONS'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceConcurrentReservations','args'=>$_smarty_tpl->tpl_vars['txtConcurrentReservations']->value),$_smarty_tpl ) );?>

							</div>
						</div>
					</div>

					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="statusDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel"
		 aria-hidden="true">
		<form id="statusForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeStatus;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="statusModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangeResourceStatus'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="control-group form-group">
							<div class="form-group">
								<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Status'),$_smarty_tpl ) );?>

									<select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl ) );?>
 class="statusId form-control">
										<option value="<?php echo ResourceStatus::AVAILABLE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Available'),$_smarty_tpl ) );?>
</option>
										<option value="<?php echo ResourceStatus::UNAVAILABLE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unavailable'),$_smarty_tpl ) );?>
</option>
										<option value="<?php echo ResourceStatus::HIDDEN;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Hidden'),$_smarty_tpl ) );?>
</option>
									</select>
								</label>
							</div>

							<div class="form-group no-show newStatusReason">
								<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReasonText'),$_smarty_tpl ) );?>

									<a href="#" class="pull-right addStatusReason">
										<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReasonText'),$_smarty_tpl ) );?>
</span>
										<span class="addStatusIcon fa fa-list-alt icon add"></span>
									</a>
									<input type="text"
										   class="form-control resourceStatusReason" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_REASON'),$_smarty_tpl ) );?>
 />
								</label>
							</div>
							<div class="form-group existingStatusReason">
								<label>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reason'),$_smarty_tpl ) );?>

									<a href="#" class="pull-right addStatusReason">
										<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reason'),$_smarty_tpl ) );?>
</span>
										<span class="addStatusIcon fa fa-plus icon add"></span>
									</a>
									<select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl ) );?>
 class="form-control reasonId"></select>
								</label>
							</div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="toggleStatusChangeMessage" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SEND_AS_EMAIL'),$_smarty_tpl ) );?>
/>
									<label for="toggleStatusChangeMessage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NotifyUsers'),$_smarty_tpl ) );?>
</label>
								</div>
							</div>

							<div id="sendStatusChangeMessageContent" class="no-show">
								<div class="form-group">
									<label for="statusMessageSendDays"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllUsersWhoHaveAReservationInTheNext'),$_smarty_tpl ) );?>
</label>
									<div class="input-group">
										<input type="number" min="1" max="365" step="1" value="30" id="statusMessageSendDays" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY'),$_smarty_tpl ) );?>
/>
										<div class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</div>
									</div>
								</div>

								<div class="form-group">
									<label for="statusMessageContent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Message'),$_smarty_tpl ) );?>
</label>
									<textarea id="statusMessageContent" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'EMAIL_CONTENTS'),$_smarty_tpl ) );?>
></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="deletePrompt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteResourceDialogLabel"
		 aria-hidden="true">
		<form id="deleteForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionDelete;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteResourceDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarning'),$_smarty_tpl ) );?>
:
							<ul>
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarningReservations'),$_smarty_tpl ) );?>
</li>
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarningPermissions'),$_smarty_tpl ) );?>
</li>
							</ul>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarningReassign'),$_smarty_tpl ) );?>

						</div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="bulkUpdateDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bulkUpdateLabel"
		 aria-hidden="true">
		<form id="bulkUpdateForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionBulkUpdate;?>
"
			  class="form-vertical"
			  role="form">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="bulkUpdateLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BulkResourceUpdate'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div id="bulkUpdateErrors" class="error no-show">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"bulkAttributeValidator",'key'=>''),$_smarty_tpl ) );?>

						</div>
						<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Select'),$_smarty_tpl ) );?>

							<a href="#" id="checkAllResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'All'),$_smarty_tpl ) );?>
</a> |
							<a href="#" id="checkNoResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</a>
						</div>
						<div id="bulkUpdateList"></div>
						<div>
							<div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Common'),$_smarty_tpl ) );?>
</div>
							<div class="form-group">
								<label for="bulkEditSchedule" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MoveToSchedule'),$_smarty_tpl ) );?>

									:</label>
								<select id="bulkEditSchedule" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
>
									<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unchanged'),$_smarty_tpl ) );?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'scheduleName', false, 'scheduleId');
$_smarty_tpl->tpl_vars['scheduleName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['scheduleName']->value) {
$_smarty_tpl->tpl_vars['scheduleName']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditResourceType" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceType'),$_smarty_tpl ) );?>

									:</label>
								<select id="bulkEditResourceType" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl ) );?>
>
									<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unchanged'),$_smarty_tpl ) );?>
</option>
									<option value="">-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
 --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypes']->value, 'resourceType', false, 'id');
$_smarty_tpl->tpl_vars['resourceType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['resourceType']->value) {
$_smarty_tpl->tpl_vars['resourceType']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['resourceType']->value->Name();?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditLocation" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Location'),$_smarty_tpl ) );?>
:</label>
								<input id="bulkEditLocation" type="text" class="form-control"
									   maxlength="85" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_LOCATION'),$_smarty_tpl ) );?>
 />
							</div>
							<div class="form-group">
								<label for="bulkEditContact" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Contact'),$_smarty_tpl ) );?>
:</label>
								<input id="bulkEditContact" type="text" class="form-control"
									   maxlength="85" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_CONTACT'),$_smarty_tpl ) );?>
 />
							</div>
							<div class="form-group">
								<label for="bulkEditAdminGroupId"
									   class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAdministrator'),$_smarty_tpl ) );?>
:</label>
								<select id="bulkEditAdminGroupId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl ) );?>

										class="form-control">
									<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unchanged'),$_smarty_tpl ) );?>
</option>
									<option value="">-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
 --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'adminGroup');
$_smarty_tpl->tpl_vars['adminGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->value) {
$_smarty_tpl->tpl_vars['adminGroup']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditStatusId" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Status'),$_smarty_tpl ) );?>
:</label>
								<select id="bulkEditStatusId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl ) );?>
 class="form-control">
									<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unchanged'),$_smarty_tpl ) );?>
</option>
									<option value="<?php echo ResourceStatus::AVAILABLE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Available'),$_smarty_tpl ) );?>
</option>
									<option value="<?php echo ResourceStatus::UNAVAILABLE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unavailable'),$_smarty_tpl ) );?>
</option>
									<option value="<?php echo ResourceStatus::HIDDEN;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Hidden'),$_smarty_tpl ) );?>
</option>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditStatusReasonId" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reason'),$_smarty_tpl ) );?>

									:</label>
								<select id="bulkEditStatusReasonId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl ) );?>

										class="form-control">
								</select>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="bulkEditDescription" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Description'),$_smarty_tpl ) );?>

									:</label>
								<textarea id="bulkEditDescription"
										  class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_DESCRIPTION'),$_smarty_tpl ) );?>
></textarea>
							</div>
							<div class="form-group">
								<label for="bulkEditNotes" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Notes'),$_smarty_tpl ) );?>
:</label>
								<textarea id="bulkEditNotes"
										  class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_NOTES'),$_smarty_tpl ) );?>
></textarea>
							</div>
						</div>

						<div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Capacity'),$_smarty_tpl ) );?>
</div>
						<div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditUnlimitedCapacity" class="unlimitedCapacity"
										   data-related-inputs="#bulkEditMaxCapacityInputs" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_PARTICIPANTS_UNLIMITED'),$_smarty_tpl ) );?>
/>
									<label for="bulkEditUnlimitedCapacity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceCapacityNone'),$_smarty_tpl ) );?>
</label>
								</div>
								<div id='bulkEditMaxCapacityInputs'>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtBulkEditMaxCapacity", "txtBulkEditMaxCapacity", null);?>
										<label for='bulkEditMaxCapacity' class='no-show'>Capacity</label>
										<input type='number' id='bulkEditMaxCapacity' class='form-control inline mid-number' min='0'
											   max='9999' size='5' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl ) );?>
 />
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['txtBulkEditMaxCapacity']->value),$_smarty_tpl ) );?>

								</div>
							</div>
						</div>

						<div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Duration'),$_smarty_tpl ) );?>
</div>
						<div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoMinimumDuration"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_DURATION_NONE'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkMinDuration"/>
									<label for="bulkEditNoMinimumDuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinLengthNone'),$_smarty_tpl ) );?>
</label>
								</div>

                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMinDuration", "txtMinDuration", null);?>
									<label for='bulkEditMinDurationDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditMinDurationHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditMinDurationMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='bulkEditMinDurationDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditMinDurationHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditMinDurationMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditMinDuration'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_DURATION'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id="bulkMinDuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl ) );?>
</div>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoMaximumDuration"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_DURATION_NONE'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkMaxDuration"/>
									<label for="bulkEditNoMaximumDuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl ) );?>
</label>
								</div>

                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtMaxDuration", "txtMaxDuration", null);?>
									<label for='bulkEditMaxDurationDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditMaxDurationHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditMaxDurationMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='bulkEditMaxDurationDays' size='3'
										   class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditMaxDurationHours' size='2'
										   class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditMaxDurationMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditMaxDuration'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_DURATION'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id="bulkMaxDuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl ) );?>
</div>

							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoBufferTime"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BUFFER_TIME_NONE'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkBufferTime"/>
									<label for="bulkEditNoBufferTime"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl ) );?>
</label>
								</div>

                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtBufferTime", "txtBufferTime", null);?>
									<label for='bulkEditBufferTimeDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditBufferTimeHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditBufferTimeMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='bulkEditBufferTimeDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditBufferTimeHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditBufferTimeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditBufferTime'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BUFFER_TIME'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id="bulkBufferTime">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['txtBufferTime']->value),$_smarty_tpl ) );?>

								</div>

							</div>
						</div>

						<div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Access'),$_smarty_tpl ) );?>
</div>
						<div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNoticeAdd"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_NONE_ADD'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkStartNoticeInputsAdd"/>
									<label for="bulkEditNoStartNoticeAdd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl ) );?>
</label>
								</div>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeAdd", "txtStartNoticeAdd", null);?>
									<label for='bulkEditStartNoticeAddDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditStartNoticeAddHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditStartNoticeAddMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='bulkEditStartNoticeAddDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditStartNoticeAddHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditStartNoticeAddMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditStartNoticeAdd'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_ADD'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id='bulkStartNoticeInputsAdd'>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeAdd']->value),$_smarty_tpl ) );?>

								</div>
							</div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNoticeUpdate"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_NONE_UPDATE'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkStartNoticeInputsUpdate"/>
									<label for="bulkEditNoStartNoticeUpdate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl ) );?>
</label>
								</div>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeUpdate", "txtStartNoticeUpdate", null);?>
									<label for='bulkEditStartNoticeUpdateDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditStartNoticeUpdateHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditStartNoticeUpdateMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='bulkEditStartNoticeUpdateDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditStartNoticeUpdateHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditStartNoticeUpdateMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditStartNoticeUpdate'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_UPDATE'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id='bulkStartNoticeInputsUpdate'>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeUpdate']->value),$_smarty_tpl ) );?>

								</div>
							</div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNoticeDelete"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_NONE_DELETE'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkStartNoticeInputsDelete"/>
									<label for="bulkEditNoStartNoticeDelete"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl ) );?>
</label>
								</div>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtStartNoticeDelete", "txtStartNoticeDelete", null);?>
									<label for='bulkEditStartNoticeDeleteDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditStartNoticeDeleteHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditStartNoticeDeleteMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='number' id='bulkEditStartNoticeDeleteDays' size='3' class='days form-control inline'
										   maxlength='3' min='0' max='999' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditStartNoticeDeleteHours' size='2' class='hours form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='number' id='bulkEditStartNoticeDeleteMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' min='0' max='99' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditStartNoticeDelete'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_NOTICE_DELETE'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id='bulkStartNoticeInputsDelete'>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['txtStartNoticeDelete']->value),$_smarty_tpl ) );?>

								</div>
							</div>

							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoEndNotice"
										   value="1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_NOTICE_NONE'),$_smarty_tpl ) );?>

										   data-related-inputs="#bulkEndNotice"/>
									<label for="bulkEditNoEndNotice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl ) );?>
</label>
								</div>


                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtEndNotice", "txtEndNotice", null);?>
									<label for='bulkEditEndNoticeDays' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditEndNoticeHours' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</label>
									<label for='bulkEditEndNoticeMinutes' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
</label>
									<input type='text' id='bulkEditEndNoticeDays' size='3' class='days form-control inline'
										   maxlength='3' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'days'),$_smarty_tpl ) );?>
'/>
									<input type='text' id='bulkEditEndNoticeHours' size='2' class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
'/>
									<input type='text' id='bulkEditEndNoticeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'minutes'),$_smarty_tpl ) );?>
'/>
									<input type='hidden' id='bulkEditEndNotice'
										   class='interval' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_NOTICE'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<div id="bulkEndNotice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl ) );?>
</div>
							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditAllowMultiday"
								   class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl ) );?>
</label>
							<select id="bulkEditAllowMultiday" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl ) );?>
>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditRequiresApproval"
								   class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApproval'),$_smarty_tpl ) );?>
</label>
							<select id="bulkEditRequiresApproval"
									class="form-control input-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl ) );?>
>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditAutoAssign"
								   class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl ) );?>
</label>
							<select id="bulkEditAutoAssign" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_ASSIGN'),$_smarty_tpl ) );?>
>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditEnableCheckIn" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RequiresCheckInNotification'),$_smarty_tpl ) );?>
</label>
							<select id="bulkEditEnableCheckIn" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ENABLE_CHECK_IN'),$_smarty_tpl ) );?>
>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
							<div class="no-show" id="bulkUpdateAutoReleaseMinutesDiv">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "bulkEditTxtAutoRelease", "bulkEditTxtAutoRelease", null);?>
									<label for='bulkEditAutoReleaseMinutes' class='no-show'>Auto Release minutes</label>
									<input type='number' max='99' min='0' id='bulkEditAutoReleaseMinutes'
										   class='minutes form-control inline' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AUTO_RELEASE_MINUTES'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['bulkEditTxtAutoRelease']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditConcurrent" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllowConcurrentReservations'),$_smarty_tpl ) );?>
</label>
							<select id="bulkEditConcurrent" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ALLOW_CONCURRENT_RESERVATIONS'),$_smarty_tpl ) );?>
>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
							<div class="no-show" id="bulkEditAllowConcurrentDiv">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "txtConcurrentReservations", "txtConcurrentReservations", null);?>
									<label for='bulkEditMaxConcurrentReservations' class='no-show'>Maximum Concurrent Reservations</label>
									<input type='number' max='99' min='2' id='bulkEditMaxConcurrentReservations'
										   class='form-control inline minutes' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_CONCURRENT_RESERVATIONS'),$_smarty_tpl ) );?>
 value='2'/>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceConcurrentReservations','args'=>$_smarty_tpl->tpl_vars['txtConcurrentReservations']->value),$_smarty_tpl ) );?>

							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditAllowSubscriptions"
								   class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TurnOnSubscription'),$_smarty_tpl ) );?>
</label>
							<select id="bulkEditAllowSubscriptions"
									class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ALLOW_CALENDAR_SUBSCRIPTIONS'),$_smarty_tpl ) );?>
>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

                        <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
							<div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Credits'),$_smarty_tpl ) );?>
</div>
							<div class="form-group">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "bulkEditCreditsPerSLot", "bulkEditCreditsPerSLot", null);?>
									<label for='bulkEditCreditsPerSlot' class='no-show'>Credits Per Slot</label>
									<input type='number' min='0' step='1' id='bulkEditCreditsPerSlot'
										   class='credits form-control inline' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CREDITS'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['bulkEditCreditsPerSLot']->value),$_smarty_tpl ) );?>

							</div>
							<div class="form-group">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "bulkEditPeakCreditsPerSlot", "bulkEditPeakCreditsPerSlot", null);?>
									<label for='bulkEditPeakCreditsPerSlot' class='no-show'>Peak Credits Per Slot</label>
									<input type='number' min='0' step='1' id='bulkEditPeakCreditsPerSlot'
										   class='credits form-control inline' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_CREDITS'),$_smarty_tpl ) );?>
 />
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['bulkEditPeakCreditsPerSlot']->value),$_smarty_tpl ) );?>

							</div>
                        <?php }?>

						<div class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AdditionalAttributes'),$_smarty_tpl ) );?>
</div>
						<div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AttributeFilters']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                                <?php if (!$_smarty_tpl->tpl_vars['attribute']->value->UniquePerEntity()) {?>
									<div class="customAttribute">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true),$_smarty_tpl ) );?>

									</div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

		</form>
	</div>

	<div id="bulkDeleteDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bulkDeleteLabel"
		 aria-hidden="true">
		<form id="bulkDeleteForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionBulkDelete;?>
"
			  class="form-vertical"
			  role="form">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="bulkDeleteLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BulkResourceDelete'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarning'),$_smarty_tpl ) );?>
:
							<ul>
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarningReservations'),$_smarty_tpl ) );?>
</li>
								<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarningPermissions'),$_smarty_tpl ) );?>
</li>
							</ul>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteResourceWarningReassign'),$_smarty_tpl ) );?>

						</div>

						<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Select'),$_smarty_tpl ) );?>

							<a href="#" id="checkAllDeleteResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'All'),$_smarty_tpl ) );?>
</a> |
							<a href="#" id="checkNoDeleteResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</a>
						</div>
						<div id="bulkDeleteList"></div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

		</form>
	</div>

	<div id="userDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="userPermissionDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="userPermissionDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Users'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div class="form-group">
						<label for="userSearch"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddUser'),$_smarty_tpl ) );?>
</label>
						<a href="#" id="browseUsers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Browse'),$_smarty_tpl ) );?>
</a>
						<input type="text" id="userSearch" class="form-control" size="60"/>
					</div>
					<div id="resourceUserList"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="allUsers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseUsersDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="browseUsersDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllUsers'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div id="allUsersList"></div>
				</div>
			</div>
		</div>
	</div>

	<form id="changeUserForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeUserPermission;?>
">
		<input type="hidden" id="changeUserId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
 />
		<input type="hidden" id="changeUserType" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PERMISSION_TYPE'),$_smarty_tpl ) );?>
 />
	</form>

	<div id="groupDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseGroupsDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="browseGroupsDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllGroups'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div class="form-group">
						<label for="groupSearch"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddGroup'),$_smarty_tpl ) );?>
</label>
						<a href="#" id="browseGroups"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllGroups'),$_smarty_tpl ) );?>
</a>
						<input type="text" id="groupSearch" class="form-control" size="60"/>
					</div>

					<div id="resourceGroupList"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="allGroups" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="groupPermissionDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="groupPermissionDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Groups'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body scrollable-modal-content">
					<div id="allGroupsList"></div>
				</div>
			</div>
		</div>
	</div>

	<form id="changeGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeGroupPermission;?>
">
		<input type="hidden" id="changeGroupId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_ID'),$_smarty_tpl ) );?>
 />
		<input type="hidden" id="changeGroupType" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PERMISSION_TYPE'),$_smarty_tpl ) );?>
 />
	</form>

	<div class="modal fade" id="resourceGroupDialog" tabindex="-1" role="dialog"
		 aria-labelledby="resourceGroupsModalLabel"
		 aria-hidden="true">
		<form id="resourceGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeResourceGroups;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="resourceGroupsModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceGroups'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body scrollable-modal-content">
						<div id="resourceGroups"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<form id="colorForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeColor;?>
">
		<input type="hidden" id="reservationColor" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESERVATION_COLOR'),$_smarty_tpl ) );?>
 />
	</form>

	<div id="creditsDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="creditsModalLabel"
		 aria-hidden="true">
		<form id="creditsForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeCredits;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="creditsModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Credits'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "creditsPerSLot", "creditsPerSLot", null);?>
								<label for='creditsPerSlot' class='no-show'>Credits Per Slot</label>
								<input type='number' min='0' step='1' id='creditsPerSlot'
									   class='credits form-control inline' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CREDITS'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['creditsPerSLot']->value),$_smarty_tpl ) );?>

						</div>

						<div>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "peakCreditsPerSlot", "peakCreditsPerSlot", null);?>
								<label for='peakCreditsPerSlot' class='no-show'>Peak Credits Per Slot</label>
								<input type='number' min='0' step='1' id='peakCreditsPerSlot'
									   class='credits form-control inline' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_CREDITS'),$_smarty_tpl ) );?>
 />
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['peakCreditsPerSlot']->value),$_smarty_tpl ) );?>

						</div>
					</div>

					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="importDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel"
		 aria-hidden="true">
		<form id="importForm" class="form" role="form" method="post" enctype="multipart/form-data"
			  ajaxAction="<?php echo ManageResourcesActions::ImportResources;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="importModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Import'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div id="importResults" class="validationSummary alert alert-danger no-show">
							<ul>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"fileExtensionValidator",'key'=>''),$_smarty_tpl ) );?>

							</ul>
						</div>
						<div id="importErrors" class="alert alert-danger no-show"></div>
						<div id="importResult" class="alert alert-success no-show">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RowsImported'),$_smarty_tpl ) );?>
</span>

							<div id="importCount" class="inline bold">0</div>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RowsSkipped'),$_smarty_tpl ) );?>
</span>

							<div id="importSkipped" class="inline bold">0</div>
							<a class="" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Done'),$_smarty_tpl ) );?>
</a>
						</div>
						<div class="margin-bottom-25">
							<label for="resourceImportFile" class="no-show">Resource Import File</label>
							<input type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_IMPORT_FILE'),$_smarty_tpl ) );?>
 id="resourceImportFile"/>
							<div class="checkbox">
								<input type="checkbox" id="updateOnImport" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'UPDATE_ON_IMPORT'),$_smarty_tpl ) );?>
/>
								<label for="updateOnImport"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UpdateResourcesOnImport'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>
						<div id="importInstructions" class="alert alert-info">
							<div class="note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceImportInstructions'),$_smarty_tpl ) );?>
</div>
							<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template" download="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template"
							   target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GetTemplate'),$_smarty_tpl ) );?>
 <span class="fa fa-download"></span></a>
						</div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('key'=>'Import'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('InlineEdit'=>true,'Owl'=>true,'Clear'=>true), 0, false);
?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"autocomplete.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/tree.jquery.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/resource.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"dropzone.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">

		function hidePopoversWhenClickAway() {
			$('body').on('click', function (e) {
				$('[rel="popover"]').each(function () {
					if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0)
					{
						$(this).popover('hide');
					}
				});
			});
		}

		function setUpPopovers() {
			$('[rel="popover"]').popover({
				container: 'body', html: true, placement: 'top', content: function () {
					var popoverId = $(this).data('popover-content');
					return $(popoverId).html();
				}
			}).click(function (e) {
				e.preventDefault();
			}).on('show.bs.popover', function () {

			}).on('shown.bs.popover', function () {
				var trigger = $(this);
				var popover = trigger.data('bs.popover').tip();
				popover.find('.editable-cancel').click(function () {
					trigger.popover('hide');
				});
			});
		}

		function setUpEditables() {
			$.fn.editable.defaults.mode = 'popup';
			$.fn.editable.defaults.toggle = 'manual';
			$.fn.editable.defaults.emptyclass = '';
			$.fn.editable.defaults.params = function (params) {
				params.CSRF_TOKEN = $('#csrf_token').val();
				return params;
			};

			var updateUrl = '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=';

			$('.resourceName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionRename;?>
', validate: function (value) {
					if ($.trim(value) == '')
					{
						return '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RequiredValue'),$_smarty_tpl ) );?>
';
					}
				}
			});

			$('.scheduleName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeSchedule;?>
', source: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'scheduleName', false, 'scheduleId');
$_smarty_tpl->tpl_vars['scheduleName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['scheduleName']->value) {
$_smarty_tpl->tpl_vars['scheduleName']->do_else = false;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['scheduleName']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			});

			$('.resourceTypeName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeResourceType;?>
',
				emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoResourceTypeLabel'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo strtr($_prefixVariable1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
				source: [{
					value: '0', text: '' //'-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
 --'
				},
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypes']->value, 'resourceType', false, 'id');
$_smarty_tpl->tpl_vars['resourceType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['resourceType']->value) {
$_smarty_tpl->tpl_vars['resourceType']->do_else = false;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['resourceType']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			});

			$('.sortOrderValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeSort;?>
', emptytext: '0', min: 0, max: 999
			});

			$('.locationValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeLocation;?>
', emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoLocationLabel'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
echo strtr($_prefixVariable2, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.contactValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeContact;?>
', emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoContactLabel'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
echo strtr($_prefixVariable3, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
}'
			});

			$('.descriptionValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeDescription;?>
', emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoDescriptionLabel'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
echo strtr($_prefixVariable4, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.notesValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeNotes;?>
', emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoDescriptionLabel'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
echo strtr($_prefixVariable5, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.resourceAdminValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeAdmin;?>
', emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
echo strtr($_prefixVariable6, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', source: [{
					value: '0', text: ''
				},
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'group', false, 'scheduleId');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scheduleId']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['group']->value->Id();?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['group']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			});

			$('.inlineAttribute').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeAttribute;?>
', emptytext: '-'
			});

		}

		$(document).ready(function () {
			setUpPopovers();
			hidePopoversWhenClickAway();
			setUpEditables();

			dropzone($("#addResourceImage"));
			dropzone($("#changeResourceImage"), {
				autoSubmit: true
			});

			var actions = {
				enableSubscription: '<?php echo ManageResourcesActions::ActionEnableSubscription;?>
',
				disableSubscription: '<?php echo ManageResourcesActions::ActionDisableSubscription;?>
'
			};

			var opts = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions,
				userAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
				groupAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
				permissionsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				copyText: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Copy'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
echo strtr($_prefixVariable7, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			};

			var resourceManagement = new ResourceManagement(opts);

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
			var resource = {
				id: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
',
				name: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetName(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				location: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetLocation(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				contact: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetContact(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				description: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetDescription(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				notes: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetNotes(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				autoAssign: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign();?>
',
				requiresApproval: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval();?>
',
				allowMultiday: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday();?>
',
				maxParticipants: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
',
				scheduleId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
',
				minLength: {},
				maxLength: {},
				startNoticeAdd: {},
				startNoticeUpdate: {},
				startNoticeDelete: {},
				endNotice: {},
				bufferTime: {},
				adminGroupId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId();?>
',
				sortOrder: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSortOrder();?>
',
				resourceTypeId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId();?>
',
				statusId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetStatusId();?>
',
				reasonId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId();?>
',
				allowSubscription: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetIsCalendarSubscriptionAllowed();?>
',
				enableCheckin: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled();?>
',
				autoReleaseMinutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
',
				credits: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetCreditsPerSlot();?>
',
				peakCredits: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetPeakCreditsPerSlot();?>
',
				allowConcurrent: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowConcurrentReservations();?>
',
				maxConcurrent: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxConcurrentReservations();?>
'
			};

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinLength()) {?>
			resource.minLength = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Minutes();?>
'
			};
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxLength()) {?>
			resource.maxLength = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Minutes();?>
'
			};
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeAdd()) {?>
			resource.startNoticeAdd = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Minutes();?>
'
			};
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeUpdate()) {?>
			resource.startNoticeUpdate = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Minutes();?>
'
			};
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeDelete()) {?>
			resource.startNoticeDelete = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Minutes();?>
'
			};
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()) {?>
			resource.endNotice = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Minutes();?>
'
			};
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasBufferTime()) {?>
			resource.bufferTime = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Minutes();?>
'
			};
            <?php }?>

			resource.image = null;
            <?php if (($_smarty_tpl->tpl_vars['resource']->value->HasImage())) {?>
			resource.image = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0], array( array('image'=>$_smarty_tpl->tpl_vars['resource']->value->GetImage()),$_smarty_tpl ) );?>
';
            <?php }?>

			resource.images = [];
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetImages(), 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			resource.images.push('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0], array( array('image'=>$_smarty_tpl->tpl_vars['image']->value),$_smarty_tpl ) );?>
');
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			resource.resourceGroupIds = [<?php echo join(',',$_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds());?>
];

			resourceManagement.add(resource);
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StatusReasons']->value, 'reason');
$_smarty_tpl->tpl_vars['reason']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reason']->value) {
$_smarty_tpl->tpl_vars['reason']->do_else = false;
?>
			resourceManagement.addStatusReason('<?php echo $_smarty_tpl->tpl_vars['reason']->value->Id();?>
', '<?php echo $_smarty_tpl->tpl_vars['reason']->value->StatusId();?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['reason']->value->Description(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			resourceManagement.init();
			resourceManagement.initializeStatusFilter('<?php echo $_smarty_tpl->tpl_vars['ResourceStatusFilterId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['ResourceStatusReasonFilterId']->value;?>
');
			resourceManagement.addResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroups']->value;?>
);

			$('#filter-resources-panel').showHidePanel();

			$(".owl-carousel").owlCarousel({
				items: 1
			});
		});

	<?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
