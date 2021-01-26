<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:46:55
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\manage_quotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc37f442bf0_45309455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadd85098d4a29949775616ea2d30416644f1d94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\manage_quotas.tpl',
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
function content_600cc37f442bf0_45309455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Timepicker'=>true), 0, false);
?>
<div id="page-manage-quotas" class="admin-page">
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageQuotas'),$_smarty_tpl ) );?>
</h1>

	<form id="addQuotaForm" method="post" role="form" class="form-inline">

		<div class="panel panel-default" id="add-quota-panel">
			<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddQuota"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0], array( array(),$_smarty_tpl ) );?>
</div>
			<div class="panel-body" id="addQuota">
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "schedules", "schedules", null);?>
					<select class='form-control' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 title='Select Schedule'>
						<option selected='selected' value=''><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllSchedules'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
$_smarty_tpl->tpl_vars['schedule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->do_else = false;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['schedule']->value->GetName(),',',' ');?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "resources", "resources", null);?>
					<select class='form-control' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID'),$_smarty_tpl ) );?>
 title='Select Resource'>
						<option selected='selected' value=''><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllResources'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['resource']->value->GetName(),',',' ');?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "groups", "groups", null);?>
					<select class='form-control' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP'),$_smarty_tpl ) );?>
 title='Select Group'>
						<option selected='selected' value=''><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllGroups'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value->Name,',',' ');?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "amount", "amount", null);?>
					<input type='number' step='any' class='form-control mid-number' min='0' max='10000' value='0' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'LIMIT'),$_smarty_tpl ) );?>
 title='Quota number'/>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "unit", "unit", null);?>
					<select class='form-control' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'UNIT'),$_smarty_tpl ) );?>
 title='Quota unit'>
						<option value='<?php echo QuotaUnit::Hours;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'hours'),$_smarty_tpl ) );?>
</option>
						<option value='<?php echo QuotaUnit::Reservations;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'reservations'),$_smarty_tpl ) );?>
</option>
					</select>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "duration", "duration", null);?>
					<select class='form-control' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DURATION'),$_smarty_tpl ) );?>
 title='Quota frequency'>
						<option value='<?php echo QuotaDuration::Day;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'day'),$_smarty_tpl ) );?>
</option>
						<option value='<?php echo QuotaDuration::Week;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'week'),$_smarty_tpl ) );?>
</option>
						<option value='<?php echo QuotaDuration::Month;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'month'),$_smarty_tpl ) );?>
</option>
						<option value='<?php echo QuotaDuration::Year;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'year'),$_smarty_tpl ) );?>
</option>
					</select>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "enforceHours", "enforceHours", null);?>
					<div class='checkbox'>
						<input type='checkbox' id='enforce-all-day' checked='checked' value='1' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ENFORCE_ALL_DAY'),$_smarty_tpl ) );?>
/>
						<label for='enforce-all-day'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllDay'),$_smarty_tpl ) );?>
</label>
					</div>
					<div id='enforce-hours-times' class='inline no-show'>
						<div class='form-group form-group-sm'>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Between'),$_smarty_tpl ) );?>
</span>
                            <label for='enforce-time-start' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'StartTime'),$_smarty_tpl ) );?>
</label>
                            <label for='enforce-time-end' class='no-show'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndTime'),$_smarty_tpl ) );?>
</label>
                            <input type='text' class='form-control time' id='enforce-time-start' size='6' value='12:00am' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_TIME'),$_smarty_tpl ) );?>
/>
							-
							<input type='text' class='form-control time' id='enforce-time-end' size='6' value='12:00am' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'END_TIME'),$_smarty_tpl ) );?>
/>
						</div>
					</div>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "enforceDays", "enforceDays", null);?>
					<div class='checkbox'>
						<input type='checkbox' id='enforce-every-day' checked='checked' value='1' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ENFORCE_EVERY_DAY'),$_smarty_tpl ) );?>
/>
						<label for='enforce-every-day'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Everyday'),$_smarty_tpl ) );?>
</label>
					</div>
					<div id='enforce-days' class='inline no-show'>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-sun' value='0' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-sun'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DaySundayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-mon' value='1' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-mon'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayMondayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-tue' value='2' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-tue'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayTuesdayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-wed' value='3' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-wed'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayWednesdayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-thu'
								   value='4' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-thu'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayThursdayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox'
								   id='enforce-fri'
								   value='5' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-fri'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayFridayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox'
								   id='enforce-sat'
								   value='6' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DAY','multi'=>true),$_smarty_tpl ) );?>
/>
							<label for='enforce-sat'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DaySaturdayAbbr"),$_smarty_tpl ) );?>
</label>
						</div>
					</div>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "scope", "scope", null);?>
					<div class='form-group'>
                        <label for="quoteScope" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'IncludingCompletedReservations'),$_smarty_tpl ) );?>
</label>
						<select class='form-control' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'QUOTA_SCOPE'),$_smarty_tpl ) );?>
 id="quoteScope">
							<option value='<?php echo QuotaScope::IncludeCompleted;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'IncludingCompletedReservations'),$_smarty_tpl ) );?>
</option>
							<option value='<?php echo QuotaScope::ExcludeCompleted;?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NotCountingCompletedReservations'),$_smarty_tpl ) );?>
</option>
						</select>
					</div>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<div class="add-quota-line"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuotaConfiguration','args'=>((string)$_smarty_tpl->tpl_vars['schedules']->value).",".((string)$_smarty_tpl->tpl_vars['resources']->value).",".((string)$_smarty_tpl->tpl_vars['groups']->value).",".((string)$_smarty_tpl->tpl_vars['amount']->value).",".((string)$_smarty_tpl->tpl_vars['unit']->value).",".((string)$_smarty_tpl->tpl_vars['duration']->value)),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['scope']->value;?>
</div>
				<div class="add-quota-line"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuotaEnforcement','args'=>((string)$_smarty_tpl->tpl_vars['enforceHours']->value).",".((string)$_smarty_tpl->tpl_vars['enforceDays']->value)),$_smarty_tpl ) );?>
</div>

				<div class="note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuotaReminder'),$_smarty_tpl ) );?>
</div>
			</div>

			<div class="panel-footer">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('class'=>"btn-sm"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0], array( array('class'=>"btn-sm"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

			</div>
		</div>
	</form>

	<div class="panel panel-default" id="list-quotas-panel">
		<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AllQuotas"),$_smarty_tpl ) );?>
</div>
		<div class="panel-body no-padding" id="quotaList">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Quotas']->value, 'quota');
$_smarty_tpl->tpl_vars['quota']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quota']->value) {
$_smarty_tpl->tpl_vars['quota']->do_else = false;
?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "scheduleName", "scheduleName", null);?>
					<span class='bold'><?php if ($_smarty_tpl->tpl_vars['quota']->value->ScheduleName != '') {?>
							<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->ScheduleName,',',' ');?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AllSchedules"),$_smarty_tpl ) );?>

						<?php }?>
					</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "resourceName", "resourceName", null);?>
					<span class='bold'><?php if ($_smarty_tpl->tpl_vars['quota']->value->ResourceName != '') {?>
							<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->ResourceName,',',' ');?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AllResources"),$_smarty_tpl ) );?>

						<?php }?>
					</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "groupName", "groupName", null);?>
					<span class='bold'>
						<?php if ($_smarty_tpl->tpl_vars['quota']->value->GroupName != '') {?>
							<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->GroupName,',',' ');?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AllGroups"),$_smarty_tpl ) );?>

						<?php }?>
					</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "amount", "amount", null);?>
					<span class='bold'><?php echo $_smarty_tpl->tpl_vars['quota']->value->Limit;?>
</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "unit", "unit", null);?>
					<span class='bold'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['quota']->value->Unit),$_smarty_tpl ) );?>
</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "duration", "duration", null);?>
					<span class='bold'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['quota']->value->Duration),$_smarty_tpl ) );?>
</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "enforceHours", "enforceHours", null);?>
					<span class='bold'>
					<?php if ($_smarty_tpl->tpl_vars['quota']->value->AllDay) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllDay'),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Between'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['quota']->value->EnforcedStartTime,'key'=>'period_time'),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['quota']->value->EnforcedEndTime,'key'=>'period_time'),$_smarty_tpl ) );?>

					<?php }?>
					</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "enforceDays", "enforceDays", null);?>
					<span class='bold'>
					<?php if ($_smarty_tpl->tpl_vars['quota']->value->Everyday) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Everyday'),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quota']->value->EnforcedDays, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['day']->value]),$_smarty_tpl ) );?>

						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					</span>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "scope", "scope", null);?>
					<?php if ($_smarty_tpl->tpl_vars['quota']->value->Scope == QuotaScope::IncludeCompleted) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'IncludingCompletedReservations'),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NotCountingCompletedReservations'),$_smarty_tpl ) );?>

					<?php }?>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

				<div class="quotaItem <?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuotaConfiguration','args'=>((string)$_smarty_tpl->tpl_vars['scheduleName']->value).",".((string)$_smarty_tpl->tpl_vars['resourceName']->value).",".((string)$_smarty_tpl->tpl_vars['groupName']->value).",".((string)$_smarty_tpl->tpl_vars['amount']->value).",".((string)$_smarty_tpl->tpl_vars['unit']->value).",".((string)$_smarty_tpl->tpl_vars['duration']->value)),$_smarty_tpl ) );?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['scope']->value;?>
</span>.
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuotaEnforcement','args'=>((string)$_smarty_tpl->tpl_vars['enforceHours']->value).",".((string)$_smarty_tpl->tpl_vars['enforceDays']->value)),$_smarty_tpl ) );?>

					<a href="#" quotaId="<?php echo $_smarty_tpl->tpl_vars['quota']->value->Id;?>
" class="delete pull-right"><span class="fa fa-trash icon remove"></span></a>
				</div>
				<?php
}
if ($_smarty_tpl->tpl_vars['quota']->do_else) {
?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>

	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
					<form id="deleteQuotaForm" method="post">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</form>
				</div>
			</div>
		</div>
	</div>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Timepicker'=>true), 0, false);
?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/quota.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {

			var actions = {
				addQuota: '<?php echo ManageQuotasActions::AddQuota;?>
',
				deleteQuota: '<?php echo ManageQuotasActions::DeleteQuota;?>
'
			};

			var quotaOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions
			};

			$('#enforce-time-start').timepicker({
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			});
			$('#enforce-time-end').timepicker({
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			});

			var quotaManagement = new QuotaManagement(quotaOptions);
			quotaManagement.init();

			$('#add-quota-panel').showHidePanel();
		});
	<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
