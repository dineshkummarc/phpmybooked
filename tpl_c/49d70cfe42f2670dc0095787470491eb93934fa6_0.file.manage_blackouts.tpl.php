<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:52:20
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Blackouts\manage_blackouts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be3c4cbea71_54876989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d70cfe42f2670dc0095787470491eb93934fa6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Blackouts\\manage_blackouts.tpl',
      1 => 1600868988,
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
function content_600be3c4cbea71_54876989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Timepicker'=>true), 0, false);
?>
<div id="page-manage-blackouts" class="admin-page">
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageBlackouts'),$_smarty_tpl ) );?>
</h1>

	<form id="addBlackoutForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-blackout-panel">
			<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddBlackout"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0], array( array(),$_smarty_tpl ) );?>
</div>
			<div class="panel-body add-contents">

				<div class="form-group col-xs-6">
					<label for="addStartDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BeginDate'),$_smarty_tpl ) );?>
</label>
					<input type="text" id="addStartDate" class="form-control dateinput inline-block "
						   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value),$_smarty_tpl ) );?>
"/>
					<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 id="formattedAddStartDate" type="hidden"
													 value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
					<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_TIME'),$_smarty_tpl ) );?>
 type="text" id="addStartTime"
													 class="form-control dateinput inline-block timepicker"
													 value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('format'=>'h:00 A','date'=>'now'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'StartTime'),$_smarty_tpl ) );?>
"/>
                    <label for="addStartTime" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'StartTime'),$_smarty_tpl ) );?>
</label>
				</div>
				<div class="form-group col-xs-6">
					<label for="addEndDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</label>
					<input type="text" id="addEndDate" class="form-control dateinput inline-block " size="10"
						   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value),$_smarty_tpl ) );?>
"/>
					<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'END_DATE'),$_smarty_tpl ) );?>
 type="hidden" id="formattedAddEndDate"
												   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
					<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'END_TIME'),$_smarty_tpl ) );?>
 type="text" id="addEndTime"
												   class="form-control dateinput inline-block timepicker"
												   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('format'=>'h:00 A','date'=>Date::Now()->AddHours(1)),$_smarty_tpl ) );?>
"
												   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndTime'),$_smarty_tpl ) );?>
"/>
                    <label for="addEndTime" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndTime'),$_smarty_tpl ) );?>
</label>
                </div>
				<div class="form-group col-xs-12">
					<label for="addResourceId"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resource'),$_smarty_tpl ) );?>
</label>
					<select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID'),$_smarty_tpl ) );?>
 class="form-control" id="addResourceId">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl ) );?>

					</select>
					<?php if (count($_smarty_tpl->tpl_vars['Schedules']->value) > 0) {?>
						|
						<div class="checkbox">
							<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BLACKOUT_APPLY_TO_SCHEDULE'),$_smarty_tpl ) );?>
 type="checkbox" id="allResources"/>
							<label for="allResources" style=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResourcesOn'),$_smarty_tpl ) );?>
 </label>
						</div>
                        <label for="addScheduleId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
 </label>
                        <select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 id="addScheduleId" class="form-control" disabled="disabled"
														   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl ) );?>

						</select>
					<?php }?>
				</div>
				<div class="col-xs-12">
					<div class="form-group has-feedback">
						<label for="blackoutReason"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reason'),$_smarty_tpl ) );?>
</label>
						<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SUMMARY'),$_smarty_tpl ) );?>
 type="text" id="blackoutReason" required
													  class="form-control required"/>
						<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="blackoutReason"></i>
					</div>
				</div>
				<div class="form-group col-xs-12">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl ) );?>

				</div>
				<div class="form-group col-xs-12">
					<div class="radio">
						<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CONFLICT_ACTION'),$_smarty_tpl ) );?>
 type="radio" id="bookAround"
															  name="existingReservations"
															  checked="checked"
															  value="<?php echo ReservationConflictResolution::BookAround;?>
"/>
						<label for="bookAround"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BlackoutAroundConflicts'),$_smarty_tpl ) );?>
</label>
					</div>
					<div class="radio">
						<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CONFLICT_ACTION'),$_smarty_tpl ) );?>
 type="radio" id="notifyExisting"
															  name="existingReservations"
															  value="<?php echo ReservationConflictResolution::Notify;?>
"/>
						<label for="notifyExisting"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BlackoutShowMe'),$_smarty_tpl ) );?>
</label>
					</div>
					<div class="radio">
						<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CONFLICT_ACTION'),$_smarty_tpl ) );?>
 type="radio" id="deleteExisting"
															  name="existingReservations"
															  value="<?php echo ReservationConflictResolution::Delete;?>
"/>
						<label for="deleteExisting"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BlackoutDeleteConflicts'),$_smarty_tpl ) );?>
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

	<form class="form" role="form">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="glyphicon glyphicon-filter"></span>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Filter"),$_smarty_tpl ) );?>

			</div>
			<div class="panel-body">
				<div class="form-group col-xs-4">
					<input id="startDate" type="text" class="form-control dateinput inline-block"
						   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl ) );?>
"
						   title="Between start date" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BeginDate'),$_smarty_tpl ) );?>
"/>
					<input id="formattedStartDate" type="hidden" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
					-
					<input id="endDate" type="text" class="form-control dateinput inline-block"
						   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl ) );?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
"/>
					<input id="formattedEndDate" type="hidden" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
                    <label for="startDate" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'StartDate'),$_smarty_tpl ) );?>
</label>
                    <label for="endDate" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</label>

                </div>
				<div class="form-group col-xs-4">
                    <label for="scheduleId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
 </label>

                    <select id="scheduleId" class="form-control col-xs-12">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllSchedules'),$_smarty_tpl ) );?>
</option>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl ) );?>

					</select>
				</div>
				<div class="form-group col-xs-4">
                    <label for="resourceId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resource'),$_smarty_tpl ) );?>
 </label>

                    <select id="resourceId" class="form-control col-xs-12">
						<option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResources'),$_smarty_tpl ) );?>
</option>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl ) );?>

					</select>
				</div>
			</div>
			<div class="panel-footer">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0], array( array('class'=>"btn-sm",'id'=>"filter"),$_smarty_tpl ) );?>

				<button id="showAll" class="btn btn-link btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ViewAll'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</form>

	<table class="table" id="blackoutTable">
		<thead>
		<tr>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'Resource','field'=>ColumnNames::RESOURCE_NAME),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'BeginDate','field'=>ColumnNames::BLACKOUT_START),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'EndDate','field'=>ColumnNames::BLACKOUT_END),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'Reason','field'=>ColumnNames::BLACKOUT_TITLE),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CreatedBy'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Update'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</th>
			<th class="action-delete">
				<div class="checkbox checkbox-single">
					<input type="checkbox" id="delete-all" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'All'),$_smarty_tpl ) );?>
"/>
					<label for="delete-all" class="no-show">All</label>
				</div>
			</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blackouts']->value, 'blackout');
$_smarty_tpl->tpl_vars['blackout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blackout']->value) {
$_smarty_tpl->tpl_vars['blackout']->do_else = false;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['blackout']->value->InstanceId);?>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable" data-blackout-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->ResourceName;?>
</td>
				<td class="date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl ) );?>
</td>
				<td class="date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl ) );?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->Title;?>
</td>
				<td style="max-width:150px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0], array( array('first'=>$_smarty_tpl->tpl_vars['blackout']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['blackout']->value->LastName),$_smarty_tpl ) );?>
</td>
				<td class="update edit"><a href="#"><span class="fa fa-edit"></span></a></td>
				<?php if ($_smarty_tpl->tpl_vars['blackout']->value->IsRecurring) {?>
					<td class="update">
						<a href="#" class="update delete-recurring"><span class="fa fa-trash icon remove"></span></a>
					</td>
				<?php } else { ?>
					<td class="update">
						<a href="#" class="update delete"><span class="fa fa-trash icon remove"></span></a>
					</td>
				<?php }?>
				<td class="action-delete">
					<div class="checkbox checkbox-single">
						<input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BLACKOUT_INSTANCE_ID','multi'=>true),$_smarty_tpl ) );?>
 class="delete-multiple" type="checkbox" id="delete<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
"/>
						<label for="delete<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="no-show">Delete</label>
					</div>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
		<tfoot>
		<tr>
			<td colspan="7"></td>
			<td class="action-delete"><a href="#" id="delete-selected" class="no-show" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
<span class="fa fa-trash icon remove"></span></a></td>
		</tr>
		</tfoot>
	</table>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0], array( array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl ) );?>


	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="deleteModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>

					</div>
				</div>
				<div class="modal-footer">
					<form id="deleteForm" method="post">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('class'=>"btnUpdateAllInstances"),$_smarty_tpl ) );?>

					</form>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="deleteRecurringDialog" tabindex="-1" role="dialog" aria-labelledby="deleteRecurringModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="deleteRecurringModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>

					</div>
				</div>
				<div class="modal-footer">
					<form id="deleteRecurringForm" method="post">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Cancel'),$_smarty_tpl ) );?>
</button>

						<button type="button" class="btn btn-danger save btnUpdateThisInstance">
							<span class="fa fa-remove"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ThisInstance'),$_smarty_tpl ) );?>
</button>

						<button type="button" class="btn btn-danger save btnUpdateAllInstances">
							<span class="fa fa-remove"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllInstances'),$_smarty_tpl ) );?>
</button>

						<input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl ) );?>
 class="hdnSeriesUpdateScope"
							   value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="deleteMultipleDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteMultipleModalLabel"
		 aria-hidden="true">
		<form id="deleteMultipleForm" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::DELETE_MULTIPLE;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteMultipleModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
 (<span id="deleteMultipleCount"></span>)</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
						</div>

					</div>
					<div class="modal-footer">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
					<div id="deleteMultiplePlaceHolder" class="no-show"></div>
				</div>
			</div>
		</form>
	</div>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Timepicker'=>true), 0, false);
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reservationPopup.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/blackouts.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"date-helper.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"recurrence.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function () {
			var updateScope = {};
			updateScope.instance = '<?php echo SeriesUpdateScope::ThisInstance;?>
';
			updateScope.full = '<?php echo SeriesUpdateScope::FullSeries;?>
';
			updateScope.future = '<?php echo SeriesUpdateScope::FutureInstances;?>
';

			var actions = {};

			var blackoutOpts = {
				scopeOpts: updateScope,
				actions: actions,
				deleteUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::DELETE;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
				addUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::ADD;?>
',
				editUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::LOAD;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
				updateUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::UPDATE;?>
',
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
				popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			};

			var recurOpts = {
				repeatType: '<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
				repeatInterval: '<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
				repeatMonthlyType: '<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
				repeatWeekdays: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatWeekdays']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
echo $_smarty_tpl->tpl_vars['day']->value;?>
, <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
			};

			var recurElements = {
				beginDate: $('#formattedAddStartDate'), endDate: $('#formattedAddEndDate'), beginTime: $('#addStartTime'), endTime: $('#addEndTime')
			};

			var recurrence = new Recurrence(recurOpts, recurElements);
			recurrence.init();

			var blackoutManagement = new BlackoutManagement(blackoutOpts);
			blackoutManagement.init();

			$('#add-blackout-panel').showHidePanel();
		});

		$.blockUI.defaults.css.width = '60%';
		$.blockUI.defaults.css.left = '20%';
	<?php echo '</script'; ?>
>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedStartDate"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"addStartDate",'AltId'=>"formattedAddStartDate"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"addEndDate",'AltId'=>"formattedAddEndDate"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"RepeatDate",'AltId'=>"formattedRepeatDate"),$_smarty_tpl ) );?>



    <div id="wait-box" class="wait-box">
		<div id="creatingNotification">
			<h3>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1649120837600be3c4cb6d78_49948548', "ajaxMessage");
?>

			</h3>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"reservation_submitting.gif"),$_smarty_tpl ) );?>

		</div>
		<div id="result"></div>
	</div>

	<div id="update-box" class="no-show">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array('id'=>"update-spinner"),$_smarty_tpl ) );?>

		<div id="update-contents"></div>
	</div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "ajaxMessage"} */
class Block_1649120837600be3c4cb6d78_49948548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ajaxMessage' => 
  array (
    0 => 'Block_1649120837600be3c4cb6d78_49948548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>
...
				<?php
}
}
/* {/block "ajaxMessage"} */
}
