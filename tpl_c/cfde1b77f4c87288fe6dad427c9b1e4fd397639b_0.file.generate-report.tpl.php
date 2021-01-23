<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:53:26
  from 'C:\xampp\htdocs\Test\booked\tpl\Reports\generate-report.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be406beebb4_30956511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfde1b77f4c87288fe6dad427c9b1e4fd397639b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Reports\\generate-report.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Reports/chart.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_600be406beebb4_30956511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>"scripts/js/jqplot/jquery.jqplot.min.css",'Select2'=>true), 0, false);
?>

<div id="page-generate-report">
	<div id="customReportInput-container">
		<form role="form" id="customReportInput">
			<div class="panel panel-default" id="report-filter-panel">
				<div class="panel-heading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GenerateReport'),$_smarty_tpl ) );?>
 <a href="#"><span class="no-show">Collapse</span><span class="icon black show-hide glyphicon"></span></a>
				</div>
				<div class="panel-body no-padding">
					<div id="custom-report-input">
						<div class="row input-set" id="selectDiv">
							<div class="col-md-1"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Select'),$_smarty_tpl ) );?>
</span></div>
							<div class="col-md-11 radio">
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RESULTS'),$_smarty_tpl ) );?>

										   value="<?php echo Report_ResultSelection::FULL_LIST;?>
"
										   id="results_list" checked="checked"/>
									<label for="results_list"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'List'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RESULTS'),$_smarty_tpl ) );?>

										   value="<?php echo Report_ResultSelection::TIME;?>
"
										   id="results_time"/>
									<label for="results_time"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TotalTime'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RESULTS'),$_smarty_tpl ) );?>

										   value="<?php echo Report_ResultSelection::COUNT;?>
"
										   id="results_count"/>
									<label for="results_count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Count'),$_smarty_tpl ) );?>
</label>
								</div>
                                <div class="col-md-9">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RESULTS'),$_smarty_tpl ) );?>

										   value="<?php echo Report_ResultSelection::UTILIZATION;?>
"
										   id="results_utilization"/>
									<label for="results_utilization"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Utilization'),$_smarty_tpl ) );?>
</label>
								</div>
							</div>
						</div>

						<div class="row input-set select-toggle" id="listOfDiv">
							<div class="col-md-1"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Usage'),$_smarty_tpl ) );?>
</span></div>
							<div class="col-md-11 radio">
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_USAGE'),$_smarty_tpl ) );?>
 value="<?php echo Report_Usage::RESOURCES;?>
"
										   id="usage_resources"
										   checked="checked">
									<label for="usage_resources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-11">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_USAGE'),$_smarty_tpl ) );?>
 value="<?php echo Report_Usage::ACCESSORIES;?>
"
										   id="usage_accessories">
									<label for="usage_accessories"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Accessories'),$_smarty_tpl ) );?>
</label>
								</div>
							</div>
						</div>

						<div class="row input-set select-toggle" id="aggregateDiv" style="display:none;">
							<div class="col-md-1"><span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AggregateBy'),$_smarty_tpl ) );?>
</span></div>
							<div class="col-md-11 radio">
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_GROUPBY'),$_smarty_tpl ) );?>
 value="<?php echo Report_GroupBy::NONE;?>
"
										   id="groupby_none" checked="checked"/>
									<label for="groupby_none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_GROUPBY'),$_smarty_tpl ) );?>
 value="<?php echo Report_GroupBy::RESOURCE;?>
"
										   id="groupby_resource" class="utilization-eligible"/>
									<label for="groupby_resource"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resource'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_GROUPBY'),$_smarty_tpl ) );?>
 value="<?php echo Report_GroupBy::SCHEDULE;?>
"
										   id="groupby_schedule" class="utilization-eligible"/>
									<label for="groupby_schedule"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_GROUPBY'),$_smarty_tpl ) );?>
 value="<?php echo Report_GroupBy::USER;?>
"
										   id="groupby_user"/>
									<label for="groupby_user"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'User'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-8">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_GROUPBY'),$_smarty_tpl ) );?>
 value="<?php echo Report_GroupBy::GROUP;?>
"
										   id="groupby_group"/>
									<label for="groupby_group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Group'),$_smarty_tpl ) );?>
</label>
								</div>
							</div>
						</div>
						<div class="row input-set form-group-sm" id="rangeDiv">
							<div class="col-md-1"><span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Range'),$_smarty_tpl ) );?>
</span></div>
							<div class="col-md-11 radio">
								<div class="col-md-2">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RANGE'),$_smarty_tpl ) );?>

										   value="<?php echo Report_Range::CURRENT_MONTH;?>
" id="current_month"
                                           checked="checked"/>
									<label for="current_month"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CurrentMonth'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-2">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RANGE'),$_smarty_tpl ) );?>
 value="<?php echo Report_Range::CURRENT_WEEK;?>
"
										   id="current_week"/>
									<label for="current_week"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CurrentWeek'),$_smarty_tpl ) );?>
</label>
								</div>
								<div class="col-md-1">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RANGE'),$_smarty_tpl ) );?>
 value="<?php echo Report_Range::TODAY;?>
"
										   id="today"/>
									<label for="today" style="width:auto;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Today'),$_smarty_tpl ) );?>
</label>
								</div>
                                <div class="col-md-1">
                                    <input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RANGE'),$_smarty_tpl ) );?>
 value="<?php echo Report_Range::ALL_TIME;?>
"
                                           id="range_all"/>
                                    <label for="range_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllTime'),$_smarty_tpl ) );?>
</label>
                                </div>
								<div class="col-md-6">
									<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_RANGE'),$_smarty_tpl ) );?>
 value="<?php echo Report_Range::DATE_RANGE;?>
"
										   id="range_within"/>
									<label for="range_within" style="width:auto;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Between'),$_smarty_tpl ) );?>
</label>
                                    <label for="startDate" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'StartDate'),$_smarty_tpl ) );?>
</label>
									<input type="input" class="form-control dateinput inline" id="startDate"/> -
									<input type="hidden" id="formattedBeginDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_START'),$_smarty_tpl ) );?>
/>
                                    <label for="endDate" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</label>
                                    <input type="input" class="form-control dateinput inline" id="endDate"/>
									<input type="hidden" id="formattedEndDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_END'),$_smarty_tpl ) );?>
 />
								</div>
							</div>
						</div>
						<div class="row input-set form-group-sm">
							<div class="col-md-1"><span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'FilterBy'),$_smarty_tpl ) );?>
</span></div>
							<div class="col-md-11">
								<div class="form-group no-margin no-padding col-md-2">
                                    <label for="resourceId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resource'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl ) );?>
 multiple="multiple" id="resourceId">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="form-group no-margin no-padding col-md-2">
                                    <label for="resourceTypeId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceType'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_TYPE_ID','multi'=>true),$_smarty_tpl ) );?>
 multiple="multiple" id="resourceTypeId">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypes']->value, 'resourceType');
$_smarty_tpl->tpl_vars['resourceType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resourceType']->value) {
$_smarty_tpl->tpl_vars['resourceType']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['resourceType']->value->Id();?>
"><?php echo $_smarty_tpl->tpl_vars['resourceType']->value->Name();?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="form-group no-margin no-padding col-md-2">
                                    <label for="accessoryId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Accessory'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ACCESSORY_ID','multi'=>true),$_smarty_tpl ) );?>
 multiple="multiple" id="accessoryId">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Accessories']->value, 'accessory');
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="form-group no-margin no-padding col-md-2">
                                    <label for="scheduleId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID','multi'=>true),$_smarty_tpl ) );?>
 multiple="multiple" id="scheduleId">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
$_smarty_tpl->tpl_vars['schedule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="form-group no-margin no-padding col-md-2">
                                    <label for="groupId" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Group'),$_smarty_tpl ) );?>
</label>
                                    <select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_ID','multi'=>true),$_smarty_tpl ) );?>
 multiple="multiple" id="groupId">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="col-md-11 col-md-offset-1">
								<div class="form-group no-margin no-padding col-md-2">
									<div id="user-filter-div">
										<div class="">
											<label class="control-label sr-only"
												   for="user-filter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllUsers'),$_smarty_tpl ) );?>
</label>
											<input id="user-filter" type="text" class="form-control"
												   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllUsers'),$_smarty_tpl ) );?>
"/>
											<input id="user_id" class="filter-id" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
/>
										</div>
									</div>
								</div>
								<div class="form-group no-margin no-padding col-md-2">
									<div id="participant-filter-div">
										<div class="form-group">
											<label class="control-label sr-only"
												   for="participant-filter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllParticipants'),$_smarty_tpl ) );?>
</label>
											<input id="participant-filter" type="text" class="form-control"
												   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllParticipants'),$_smarty_tpl ) );?>
"/>
											<input id="participant_id" class="filter-id"
												   type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PARTICIPANT_ID'),$_smarty_tpl ) );?>
/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="panel-footer">
                    <input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GetReport'),$_smarty_tpl ) );?>
" class="btn btn-primary btn-sm"
                           id="btnCustomReport" asyncAction=""/>
                    <div class="checkbox inline-block">
                        <input type="checkbox" id="chkIncludeDeleted" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'INCLUDE_DELETED'),$_smarty_tpl ) );?>
/>
                        <label for="chkIncludeDeleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'IncludeDeleted'),$_smarty_tpl ) );?>
</label>
                    </div>
                </div>
			</div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

        </form>
	</div>
</div>

<div id="saveMessage" class="alert alert-success" style="display:none;">
	<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReportSaved'),$_smarty_tpl ) );?>
</strong> <a
			href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_SAVED;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MySavedReports'),$_smarty_tpl ) );?>
</a>
</div>

<div id="resultsDiv">
</div>

<div id="indicator" style="display:none; text-align: center;"><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>

	</h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl ) );?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Reports/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="modal fade" id="saveDialog" tabindex="-1" role="dialog" aria-labelledby="saveDialogLabel"
	 aria-hidden="true">
	<div class="modal-dialog">
		<form id="saveReportForm" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="saveDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SaveThisReport'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="saveReportName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
</label>
						<input type="text" id="saveReportName" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPORT_NAME'),$_smarty_tpl ) );?>
 class="form-control"
							   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoTitleLabel'),$_smarty_tpl ) );?>
"/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default cancel"
							data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Cancel'),$_smarty_tpl ) );?>
</button>
					<button type="button" id="btnSaveReport" class="btn btn-success"><span
								class="glyphicon glyphicon-ok-circle"></span>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SaveThisReport'),$_smarty_tpl ) );?>

					</button>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

				</div>
			</div>
		</form>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true), 0, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"autocomplete.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reports/generate-reports.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reports/common.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reports/chart.js"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var reportOptions = {
			userAutocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
			groupAutocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
			customReportUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Generate;?>
",
			printUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::PrintReport;?>
&",
			csvUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Csv;?>
&",
			saveUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Save;?>
"
		};

		var reports = new GenerateReports(reportOptions);
		reports.init();

		var common = new ReportsCommon({
			scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
',
            chartOpts: {
                dateAxisFormat: '<?php echo $_smarty_tpl->tpl_vars['DateAxisFormat']->value;?>
'
            }
		});
		common.init();

        $('#resourceId').select2({
            placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResources'),$_smarty_tpl ) );?>
'
        });
        $('#resourceTypeId').select2({
            placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResourceTypes'),$_smarty_tpl ) );?>
'
        });
        $('#accessoryId').select2({
            placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllAccessories'),$_smarty_tpl ) );?>
'
        });
        $('#scheduleId').select2({
            placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllSchedules'),$_smarty_tpl ) );?>
'
        });
        $('#groupId').select2({
            placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllGroups'),$_smarty_tpl ) );?>
'
        });
	});

	$('#report-filter-panel').showHidePanel();


	$('#user-filter, #participant-filter').clearable();
<?php echo '</script'; ?>
>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedBeginDate"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl ) );?>


</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
