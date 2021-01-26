<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:38:20
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Schedules\manage_schedules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc17ce91bd6_46132073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533a5ec727c4ee0b3323ab6afd3f1497c9ac2c24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Schedules\\manage_schedules.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Admin/Schedules/manage_availability.tpl' => 1,
    'file:Admin/Schedules/manage_peak_times.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_600cc17ce91bd6_46132073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'display_periods' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\533a5ec727c4ee0b3323ab6afd3f1497c9ac2c24_0.file.manage_schedules.tpl.php',
    'uid' => '533a5ec727c4ee0b3323ab6afd3f1497c9ac2c24',
    'call_name' => 'smarty_template_function_display_periods_71994343600cc17ca153c7_60575418',
  ),
  'display_slot_inputs' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\533a5ec727c4ee0b3323ab6afd3f1497c9ac2c24_0.file.manage_schedules.tpl.php',
    'uid' => '533a5ec727c4ee0b3323ab6afd3f1497c9ac2c24',
    'call_name' => 'smarty_template_function_display_slot_inputs_71994343600cc17ca153c7_60575418',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('InlineEdit'=>true,'Fullcalendar'=>true,'Timepicker'=>true), 0, false);
?>

<div id="page-manage-schedules" class="admin-page">

	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageSchedules'),$_smarty_tpl ) );?>
</h1>

	<div class="panel panel-default admin-panel" id="list-schedules-panel">
		<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AllSchedules"),$_smarty_tpl ) );?>

			<a href="#" class="add-link pull-right" id="add-schedule"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddSchedule"),$_smarty_tpl ) );?>

				<span class="fa fa-plus-circle icon add"></span>
			</a>
		</div>
		<div class="panel-body no-padding" id="scheduleList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
$_smarty_tpl->tpl_vars['schedule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['schedule']->value->GetId());?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'daysVisible', null, null);?><span class='propertyValue daysVisible inlineUpdate' data-type='number'
												data-pk='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'
												data-name='<?php echo FormKeys::SCHEDULE_DAYS_VISIBLE;?>
'
												data-min='0'><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetDaysVisible();?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_assignInScope('dayOfWeek', $_smarty_tpl->tpl_vars['schedule']->value->GetWeekdayStart());?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'dayName', null, null);?><span class='propertyValue dayName inlineUpdate' data-type='select'
											data-pk='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'
											data-name='<?php echo FormKeys::SCHEDULE_WEEKDAY_START;?>
'
											data-value='<?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value;?>
'><?php if ($_smarty_tpl->tpl_vars['dayOfWeek']->value == Schedule::Today) {
echo $_smarty_tpl->tpl_vars['Today']->value;
} else {
echo $_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['dayOfWeek']->value];
}?></span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<div class="scheduleDetails" data-schedule-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<div class="col-xs-12 col-sm-6">
						<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
						<input type="hidden" class="daysVisible" value="<?php echo $_smarty_tpl->tpl_vars['daysVisible']->value;?>
"/>
						<input type="hidden" class="dayOfWeek" value="<?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value;?>
"/>

						<div>
					<span class="title scheduleName" data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						  data-name="<?php echo FormKeys::SCHEDULE_NAME;?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</span>
							<a class="update renameButton" href="#"><span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Rename'),$_smarty_tpl ) );?>
</span><span
										class="fa fa-pencil-square-o"></span></a>
						</div>

						<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"LayoutDescription",'args'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'dayName')).", ".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'daysVisible'))),$_smarty_tpl ) );?>
</div>

						<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleAdministrator'),$_smarty_tpl ) );?>

							<span class="propertyValue scheduleAdmin"
								  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetAdminGroupId();?>
"
								  data-name="<?php echo FormKeys::SCHEDULE_ADMIN_GROUP_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['GroupLookup']->value[$_smarty_tpl->tpl_vars['schedule']->value->GetAdminGroupId()]->Name;?>
</span>
                            <?php if (count($_smarty_tpl->tpl_vars['AdminGroups']->value) > 0) {?>
								<a class="update changeScheduleAdmin" href="#">
									<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleAdministrator'),$_smarty_tpl ) );?>
</span>
									<span class="fa fa-pencil-square-o"></span>
								</a>
                            <?php }?>
						</div>

						<div>
							<div class="availabilityPlaceHolder inline-block">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Schedules/manage_availability.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('schedule'=>$_smarty_tpl->tpl_vars['schedule']->value,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value), 0, true);
?>
							</div>
							<a class="update changeAvailability inline-block" href="#">
								<span class="no-show">Change Availability</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>
						</div>

						<div class="maximumConcurrentContainer" data-concurrent="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetTotalConcurrentReservations();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['schedule']->value->EnforceConcurrentReservationMaximum()) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleConcurrentMaximum','args'=>$_smarty_tpl->tpl_vars['schedule']->value->GetTotalConcurrentReservations()),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleConcurrentMaximumNone'),$_smarty_tpl ) );?>

                            <?php }?>
							<a href="#" class="update changeScheduleConcurrentMaximum">
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleMaximumConcurrent'),$_smarty_tpl ) );?>
</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>
						</div>

						<div class="resourcesPerReservationContainer" data-maximum="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetMaxResourcesPerReservation();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['schedule']->value->EnforceMaxResourcesPerReservation()) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleResourcesPerReservationMaximum','args'=>$_smarty_tpl->tpl_vars['schedule']->value->GetMaxResourcesPerReservation()),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleResourcesPerReservationNone'),$_smarty_tpl ) );?>

                            <?php }?>
							<a href="#" class="update changeResourcesPerReservation">
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleResourcesPerReservation'),$_smarty_tpl ) );?>
</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>
						</div>

						<div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DefaultStyle'),$_smarty_tpl ) );?>

							<span class="propertyValue defaultScheduleStyle inlineUpdate" data-type="select"
								  data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								  data-name="<?php echo FormKeys::SCHEDULE_DEFAULT_STYLE;?>
"
								  data-value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetDefaultStyle();?>
"><?php echo $_smarty_tpl->tpl_vars['StyleNames']->value[$_smarty_tpl->tpl_vars['schedule']->value->GetDefaultStyle()];?>
</span>
						</div>

                        <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PeakTimes'),$_smarty_tpl ) );?>
</span>
							<a class="update changePeakTimes" href="#">
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PeakTimes'),$_smarty_tpl ) );?>
</span>
								<span class="fa fa-pencil-square-o"></span>
							</a>
							<div class="peakPlaceHolder">
                                <?php $_smarty_tpl->_subTemplateRender("file:Admin/Schedules/manage_peak_times.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Layout'=>$_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value],'Months'=>$_smarty_tpl->tpl_vars['Months']->value,'DayNames'=>$_smarty_tpl->tpl_vars['DayNames']->value), 0, true);
?>
							</div>
                        <?php }?>

						<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>

							<span class="propertyValue">
                            <?php if (array_key_exists($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['Resources']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value[$_smarty_tpl->tpl_vars['id']->value], 'r', false, NULL, 'resources_loop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_resources_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_resources_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_resources_loop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_resources_loop']->value['total'];
?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value->GetName(), ENT_QUOTES, 'UTF-8', true);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_resources_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_resources_loop']->value['last'] : null)) {?>, <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>

                            <?php }?>
                            </span>
						</div>

                        <?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsCalendarSubscriptionAllowed()) {?>
							<div>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PublicId'),$_smarty_tpl ) );?>
</span>
								<span class="propertyValue"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetPublicId();?>
</span>
							</div>
                        <?php }?>

					</div>

					<div class="layout col-xs-12 col-sm-6">
                        

						<div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleLayout','args'=>$_smarty_tpl->tpl_vars['schedule']->value->GetTimezone()),$_smarty_tpl ) );?>

							<a class="update changeLayoutButton" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangeLayout'),$_smarty_tpl ) );?>
">
                                <span class="fa fa-pencil-square-o"
									  data-layout-type="<?php echo $_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value]->GetType();?>
"></span>
								<span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangeLayout'),$_smarty_tpl ) );?>
</span>
							</a>
						</div>
						<input type="hidden" class="timezone" value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetTimezone();?>
"/>

                        <?php if ($_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value]->UsesDailyLayouts()) {?>
							<input type="hidden" class="usesDailyLayouts" value="true"/>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'LayoutVariesByDay'),$_smarty_tpl ) );?>
 -
							<a href="#" class="showAllDailyLayouts"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ShowHide'),$_smarty_tpl ) );?>
</a>
							<div class="allDailyLayouts">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, DayOfWeek::Days(), 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                                    <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['day']->value];?>

									<div class="reservableSlots" id="reservableSlots_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"
										 ref="reservableEdit_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_periods', array('showReservable'=>true,'day'=>$_smarty_tpl->tpl_vars['day']->value), true);?>

									</div>
									<div class="blockedSlots" id="blockedSlots_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" ref="blockedEdit_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_periods', array('showReservable'=>false,'day'=>$_smarty_tpl->tpl_vars['day']->value), true);?>

									</div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							<div class="margin-top-25"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ThisScheduleUsesAStandardLayout'),$_smarty_tpl ) );?>
</strong>
							</div>
							<div><a href="#" class="update switchLayout"
									data-switch-to="<?php echo ScheduleLayout::Custom;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SwitchToACustomLayout'),$_smarty_tpl ) );?>
</a>
							</div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value]->UsesCustomLayout()) {?>
							<div><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ThisScheduleUsesACustomLayout'),$_smarty_tpl ) );?>
</strong></div>
							<div><a href="#" class="update switchLayout"
									data-switch-to="<?php echo ScheduleLayout::Standard;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SwitchToAStandardLayout'),$_smarty_tpl ) );?>
</a>
							</div>
                        <?php } else { ?>
							<input type="hidden" class="usesDailyLayouts" value="false"/>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservableTimeSlots'),$_smarty_tpl ) );?>

							<div class="reservableSlots" id="reservableSlots" ref="reservableEdit">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_periods', array('showReservable'=>true,'day'=>null), true);?>

							</div>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BlockedTimeSlots'),$_smarty_tpl ) );?>

							<div class="blockedSlots" id="blockedSlots" ref="blockedEdit">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_periods', array('showReservable'=>false,'day'=>null), true);?>

							</div>
							<div class="margin-top-25"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ThisScheduleUsesAStandardLayout'),$_smarty_tpl ) );?>
</strong>
							</div>
							<div><a href="#" class="update switchLayout"
									data-switch-to="<?php echo ScheduleLayout::Custom;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SwitchToACustomLayout'),$_smarty_tpl ) );?>
</a>
							</div>
                        <?php }?>
					</div>
					<div class="actions col-xs-12">
                        <?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsDefault()) {?>
							<span class="note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ThisIsTheDefaultSchedule'),$_smarty_tpl ) );?>
</span>
							|
							<span class="note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DefaultScheduleCannotBeDeleted'),$_smarty_tpl ) );?>
</span>
							|
                        <?php } else { ?>
							<a class="update makeDefaultButton" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MakeDefault'),$_smarty_tpl ) );?>
</a>
							|
							<a class="update deleteScheduleButton" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</a>
							|
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsCalendarSubscriptionAllowed()) {?>
							<a class="update disableSubscription"
							   href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TurnOffSubscription'),$_smarty_tpl ) );?>
</a>
							|
                        <?php } else { ?>
							<a class="update enableSubscription" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TurnOnSubscription'),$_smarty_tpl ) );?>
</a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsCalendarSubscriptionAllowed()) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"feed.png"),$_smarty_tpl ) );?>

							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetSubscriptionUrl()->GetAtomUrl();?>
">Atom</a>
							|
							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetSubscriptionUrl()->GetWebcalUrl();?>
">iCalendar</a>
                        <?php }?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array('id'=>"action-indicator"),$_smarty_tpl ) );?>

						<div class="clear"></div>
					</div>
				</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0], array( array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl ) );?>


	<div id="addDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addScheduleDialogLabel"
		 aria-hidden="true">
		<form id="addScheduleForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addScheduleDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddSchedule'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="addName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
</label>
							<input type="text" id="addName"
								   class="form-control required" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_NAME'),$_smarty_tpl ) );?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="addName"></i>
						</div>
						<div class="form-group">
							<label for="addStartsOn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'StartsOn'),$_smarty_tpl ) );?>
</label>
							<select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_WEEKDAY_START'),$_smarty_tpl ) );?>
 class="form-control" id="addStartsOn">
								<option value="<?php echo Schedule::Today;?>
"><?php echo $_smarty_tpl->tpl_vars['Today']->value;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DayNames']->value, 'dayName', false, 'dayIndex');
$_smarty_tpl->tpl_vars['dayName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dayIndex']->value => $_smarty_tpl->tpl_vars['dayName']->value) {
$_smarty_tpl->tpl_vars['dayName']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dayIndex']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['dayName']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="form-group">
							<label for="addNumDaysVisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NumberOfDaysVisible'),$_smarty_tpl ) );?>
</label>
							<input type="number" min="1" max="100" class="form-control required" id="addNumDaysVisible"
								   value="7" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_DAYS_VISIBLE'),$_smarty_tpl ) );?>
 />
						</div>
						<div class="form-group">
							<label for="addSameLayoutAs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UseSameLayoutAs'),$_smarty_tpl ) );?>
</label>
							<select class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 id="addSameLayoutAs">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SourceSchedules']->value, 'schedule');
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
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<input type="hidden" id="activeId" value=""/>

	<div id="deleteDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteScheduleDialogLabel"
		 aria-hidden="true">
		<form id="deleteForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteScheduleDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="targetScheduleId"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MoveResourcesAndReservations'),$_smarty_tpl ) );?>
</label>
							<select id="targetScheduleId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 class="form-control required">
								<option value="">-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedule'),$_smarty_tpl ) );?>
 --</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SourceSchedules']->value, 'schedule');
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

	<div id="changeLayoutDialog" class="modal fade" tabindex="-1" role="dialog"
		 aria-labelledby="changeLayoutDialogLabel" aria-hidden="true">
		<form id="changeLayoutForm" method="post" role="form" class="form-inline">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="changeLayoutDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangeLayout'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="validationSummary alert alert-danger no-show">
							<ul><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"layoutValidator",'key'=>"ValidLayoutRequired"),$_smarty_tpl ) );?>
</ul>
						</div>

						<div class="col-xs-12">
							<div class="checkbox">
								<input type="checkbox" id="usesSingleLayout" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USING_SINGLE_LAYOUT'),$_smarty_tpl ) );?>
>
								<label for="usesSingleLayout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UseSameLayoutForAllDays'),$_smarty_tpl ) );?>
</label>
							</div>
						</div>

                        

						<div class="col-xs-12" id="dailySlots">
							<div role="tabpanel" id="tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#tabs-0" aria-controls="tabs-0"
																			  role="tab"
																			  data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[0];?>
</a></li>
									<li role="presentation"><a href="#tabs-1" aria-controls="tabs-1" role="tab"
															   data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[1];?>
</a></li>
									<li role="presentation"><a href="#tabs-2" aria-controls="tabs-2" role="tab"
															   data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[2];?>
</a></li>
									<li role="presentation"><a href="#tabs-3" aria-controls="tabs-3" role="tab"
															   data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[3];?>
</a></li>
									<li role="presentation"><a href="#tabs-4" aria-controls="tabs-4" role="tab"
															   data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[4];?>
</a></li>
									<li role="presentation"><a href="#tabs-5" aria-controls="tabs-5" role="tab"
															   data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[5];?>
</a></li>
									<li role="presentation"><a href="#tabs-6" aria-controls="tabs-6" role="tab"
															   data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[6];?>
</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="tabs-0">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'0'), true);?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-1">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'1'), true);?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-2">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'2'), true);?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-3">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'3'), true);?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-4">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'4'), true);?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-5">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'5'), true);?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-6">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('day'=>'6'), true);?>

									</div>
								</div>
							</div>
						</div>

                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'display_slot_inputs', array('id'=>"staticSlots",'day'=>null), true);?>


						<div class="slotTimezone col-xs-12">
							<label for="layoutTimezone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Timezone'),$_smarty_tpl ) );?>
</label>
							<select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'TIMEZONE'),$_smarty_tpl ) );?>
 id="layoutTimezone" class="form-control">
                                <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TimezoneValues']->value,'output'=>$_smarty_tpl->tpl_vars['TimezoneOutput']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="slotWizard col-xs-12">
							<h5>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "layoutConfig", "layoutConfig", null);?>
									<input type='number' min='0' step='15' value='30' id='quickLayoutConfig' size=5'
										   title='Minutes' class='form-control'/>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "layoutStart", "layoutStart", null);?>
									<input type='text' value='08:00' id='quickLayoutStart' size='10' title='From time'
										   class='form-control' maxlength='5'/>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "layoutEnd", "layoutEnd", null);?>
									<input type='text' value='18:00' id='quickLayoutEnd' size='10' title='End time'
										   class='form-control' maxlength='5'/>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'QuickSlotCreation','args'=>((string)$_smarty_tpl->tpl_vars['layoutConfig']->value).",".((string)$_smarty_tpl->tpl_vars['layoutStart']->value).",".((string)$_smarty_tpl->tpl_vars['layoutEnd']->value)),$_smarty_tpl ) );?>

								<a href="#" id="createQuickLayout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Create'),$_smarty_tpl ) );?>
</a>
							</h5>
						</div>
						<div class="slotHelpText col-xs-12">
							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Format'),$_smarty_tpl ) );?>
: <span>HH:MM - HH:MM <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'OptionalLabel'),$_smarty_tpl ) );?>
</span></p>

							<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'LayoutInstructions'),$_smarty_tpl ) );?>
</p>
						</div>

						<div class="clearfix"></div>
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

	<div id="peakTimesDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="peakTimesDialogLabel"
		 aria-hidden="true">
		<form id="peakTimesForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="peakTimesDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PeakTimes'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="peakAllDay" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_ALL_DAY'),$_smarty_tpl ) );?>
 />
								<label for="peakAllDay"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllDay'),$_smarty_tpl ) );?>
</label>
							</div>
							<div id="peakTimes">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Between'),$_smarty_tpl ) );?>

								<label for="peakStartTime" class="no-show">Peak Begin Time</label>
								<label for="peakEndTime" class="no-show">Peak End Time</label>
								<input type="text" id="peakStartTime"
									   class="form-control input-sm inline-block timeinput timepicker"
									   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DefaultDate']->value,'format'=>'h:i A'),$_smarty_tpl ) );?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_BEGIN_TIME'),$_smarty_tpl ) );?>
/>
								-
								<input type="text" id="peakEndTime"
									   class="form-control input-sm inline-block timeinput timepicker"
									   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DefaultDate']->value->AddHours(9),'format'=>'h:i A'),$_smarty_tpl ) );?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_END_TIME'),$_smarty_tpl ) );?>
/>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="peakEveryDay"
									   checked="checked" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_EVERY_DAY'),$_smarty_tpl ) );?>
 />
								<label for="peakEveryDay"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Everyday'),$_smarty_tpl ) );?>
</label>
							</div>
							<div id="peakDayList" class="no-show">
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay0" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_sunday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[0];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_monday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[1];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay2" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_tuesday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[2];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay3" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_wednesday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[3];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay4" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_thursday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[4];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay5" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_friday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[5];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay6" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_saturday'),$_smarty_tpl ) );?>
 />
                                        <?php echo $_smarty_tpl->tpl_vars['DayNames']->value[6];?>

									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="peakAllYear"
									   checked="checked" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_ALL_YEAR'),$_smarty_tpl ) );?>
 />
								<label for="peakAllYear"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllYear'),$_smarty_tpl ) );?>
</label>
							</div>
							<div id="peakDateRange" class="no-show">
								<label for="peakBeginMonth" class="col-xs-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BeginDate'),$_smarty_tpl ) );?>
</label>
								<div class="col-xs-5">
									<select id="peakBeginMonth"
											class="form-control input-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_BEGIN_MONTH'),$_smarty_tpl ) );?>
>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Months']->value, 'month', false, NULL, 'startMonths', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_startMonths']->value['iteration']++;
?>
											<option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_startMonths']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_startMonths']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-xs-2">
									<label for="peakBeginDay" class="no-show">Peak Begin Day</label>
									<select id="peakBeginDay"
											class="form-control input-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_BEGIN_DAY'),$_smarty_tpl ) );?>
>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DayList']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-xs-3">&nbsp;</div>
								<div class="clearfix"></div>
								<label for="peakEndMonth" class="col-xs-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</label>
								<div class="col-xs-5">
									<select id="peakEndMonth"
											class="form-control input-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_END_MONTH'),$_smarty_tpl ) );?>
>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Months']->value, 'month', false, NULL, 'endMonths', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_endMonths']->value['iteration']++;
?>
											<option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_endMonths']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_endMonths']->value['iteration'] : null);?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-xs-2">
									<label for="peakEndDay" class="no-show">Peak End Day</label>
									<select id="peakEndDay" class="form-control input-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_END_DAY'),$_smarty_tpl ) );?>
>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DayList']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-xs-3">&nbsp;</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PEAK_DELETE'),$_smarty_tpl ) );?>
 id="deletePeakTimes" value=""/>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('class'=>'pull-left','id'=>"deletePeakBtn"),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="availabilityDialog" class="modal fade" tabindex="-1" role="dialog"
		 aria-labelledby="availabilityDialogLabel"
		 aria-hidden="true">
		<form id="availabilityForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="availabilityDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Availability'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="availableAllYear" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AVAILABLE_ALL_YEAR'),$_smarty_tpl ) );?>
 />
								<label for="availableAllYear"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AvailableAllYear'),$_smarty_tpl ) );?>
</label>
							</div>
							<div id="availableDates">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AvailableBetween'),$_smarty_tpl ) );?>

								<label for="availabilityStartDate" class="no-show">Available Start Date</label>
								<label for="availabilityEndDate" class="no-show">Available End Date</label>
								<input type="text" id="availabilityStartDate"
									   class="form-control input-sm inline-block dateinput"/>
								<input type="hidden" id="formattedBeginDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AVAILABLE_BEGIN_DATE'),$_smarty_tpl ) );?>
 />
								-
								<input type="text" id="availabilityEndDate"
									   class="form-control input-sm inline-block dateinput"/>
								<input type="hidden" id="formattedEndDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'AVAILABLE_END_DATE'),$_smarty_tpl ) );?>
 />
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
			</div>
		</form>
	</div>

	<div id="switchLayoutDialog" class="modal fade" tabindex="-1" role="dialog"
		 aria-labelledby="switchLayoutDialogLabel"
		 aria-hidden="true">
		<form id="switchLayoutForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="switchLayoutDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangeLayout'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SwitchLayoutWarning'),$_smarty_tpl ) );?>

						</div>
						<input type="hidden" id="switchLayoutTypeId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'LAYOUT_TYPE'),$_smarty_tpl ) );?>
 />
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="customLayoutDialog" class="modal fade" tabindex="-1" role="dialog"
		 aria-labelledby="customLayoutDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="customLayoutDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ChangeLayout'),$_smarty_tpl ) );?>
</h4>
				</div>
				<div class="modal-body">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>

	<form id="layoutSlotForm" method="post">
		<input type="hidden" id="slotStartDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 />
		<input type="hidden" id="slotEndDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'END_DATE'),$_smarty_tpl ) );?>
 />
		<input type="hidden" id="slotId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'LAYOUT_PERIOD_ID'),$_smarty_tpl ) );?>
 />
	</form>

	<div id="deleteCustomLayoutDialog" style="z-index:10000;" class="default-box-shadow">
		<form id="deleteCustomTimeSlotForm" method="post">
			<input type="hidden" id="deleteSlotStartDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 />
			<input type="hidden" id="deleteSlotEndDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'END_DATE'),$_smarty_tpl ) );?>
 />
			<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteThisTimeSlot'),$_smarty_tpl ) );?>
</div>
			<div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array('id'=>'cancelDeleteSlot'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('id'=>'deleteSlot'),$_smarty_tpl ) );?>

			</div>
		</form>
	</div>

	<div id="confirmCreateSlotDialog" class="default-box-shadow" style="z-index:10000;">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array('id'=>"cancelCreateSlot"),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('id'=>"confirmCreateOK"),$_smarty_tpl ) );?>

	</div>

	<div id="concurrentMaximumDialog" class="modal fade" tabindex="-1" role="dialog"
		 aria-labelledby="concurrentMaximumDialogLabel"
		 aria-hidden="true">
		<form id="concurrentMaximumForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="concurrentMaximumDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleMaximumConcurrent'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-info">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleMaximumConcurrentNote'),$_smarty_tpl ) );?>

						</div>
						<div class="checkbox">
							<input type="checkbox" id="maximumConcurrentUnlimited" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAXIMUM_CONCURRENT_UNLIMITED'),$_smarty_tpl ) );?>
/>
							<label for="maximumConcurrentUnlimited"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unlimited'),$_smarty_tpl ) );?>
</label>
						</div>
						<div class="form-group">
							<label for="maximumConcurrent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</label>
							<input type="number" class="form-control required" min="0" id="maximumConcurrent" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAXIMUM_CONCURRENT_RESERVATIONS'),$_smarty_tpl ) );?>
/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="resourcesPerReservationDialog" class="modal fade" tabindex="-1" role="dialog"
		 aria-labelledby="resourcesPerReservationDialogLabel"
		 aria-hidden="true">
		<form id="resourcesPerReservationForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="resourcesPerReservationDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleResourcesPerReservation'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="checkbox">
							<input type="checkbox" id="resourcesPerReservationUnlimited" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAXIMUM_RESOURCES_PER_RESERVATION_UNLIMITED'),$_smarty_tpl ) );?>
/>
							<label for="resourcesPerReservationUnlimited"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unlimited'),$_smarty_tpl ) );?>
</label>
						</div>
						<div class="form-group">
							<label for="resourcesPerReservationResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</label>
							<input type="number" class="form-control required" min="0" id="resourcesPerReservationResources" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAXIMUM_RESOURCES_PER_RESERVATION'),$_smarty_tpl ) );?>
/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
		</form>
	</div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"availabilityStartDate",'AltId'=>"formattedBeginDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"availabilityEndDate",'AltId'=>"formattedEndDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl ) );?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('InlineEdit'=>true,'Fullcalendar'=>true,'Timepicker'=>true), 0, false);
?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/schedule.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">

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

			$('.scheduleName').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionRename;?>
', validate: function (value) {
					if ($.trim(value) == '')
					{
						return '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>strtr('RequiredValue', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl ) );?>
';
					}
				}
			});

			$('.daysVisible').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionChangeDaysVisible;?>
'
			});

			$('.dayName').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionChangeStartDay;?>
', source: [{
					value: '<?php echo Schedule::Today;?>
', text: '<?php echo strtr($_smarty_tpl->tpl_vars['Today']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
				},
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DayNames']->value, 'dayName', false, 'dayIndex');
$_smarty_tpl->tpl_vars['dayName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dayIndex']->value => $_smarty_tpl->tpl_vars['dayName']->value) {
$_smarty_tpl->tpl_vars['dayName']->do_else = false;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['dayIndex']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['dayName']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			});

			$('.defaultScheduleStyle').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionChangeDefaultStyle;?>
', source: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StyleNames']->value, 'styleName', false, 'styleIndex');
$_smarty_tpl->tpl_vars['styleName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['styleIndex']->value => $_smarty_tpl->tpl_vars['styleName']->value) {
$_smarty_tpl->tpl_vars['styleName']->do_else = false;
?>
					{
						value: '<?php echo $_smarty_tpl->tpl_vars['styleIndex']->value;?>
', text: '<?php echo strtr($_smarty_tpl->tpl_vars['styleName']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				]
			});

			$('.scheduleAdmin').editable({
				url: updateUrl + '<?php echo ManageSchedules::ChangeAdminGroup;?>
', emptytext: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo strtr($_prefixVariable1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', source: [{
					value: '0', text: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
echo strtr($_prefixVariable2, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
				},
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
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
		}

		$(document).ready(function () {
			setUpEditables();

			var opts = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				changeLayoutAction: '<?php echo ManageSchedules::ActionChangeLayout;?>
',
				addAction: '<?php echo ManageSchedules::ActionAdd;?>
',
				peakTimesAction: '<?php echo ManageSchedules::ActionChangePeakTimes;?>
',
				makeDefaultAction: '<?php echo ManageSchedules::ActionMakeDefault;?>
',
				deleteAction: '<?php echo ManageSchedules::ActionDelete;?>
',
				availabilityAction: '<?php echo ManageSchedules::ActionChangeAvailability;?>
',
				enableSubscriptionAction: '<?php echo ManageSchedules::ActionEnableSubscription;?>
',
				disableSubscriptionAction: '<?php echo ManageSchedules::ActionDisableSubscription;?>
',
				switchLayout: '<?php echo ManageSchedules::ActionSwitchLayoutType;?>
',
				addLayoutSlot: '<?php echo ManageSchedules::ActionAddLayoutSlot;?>
',
				updateLayoutSlot: '<?php echo ManageSchedules::ActionUpdateLayoutSlot;?>
',
				deleteLayoutSlot: '<?php echo ManageSchedules::ActionDeleteLayoutSlot;?>
',
				maximumConcurrentAction: '<?php echo ManageSchedules::ActionChangeMaximumConcurrent;?>
',
				maximumResourcesAction: '<?php echo ManageSchedules::ActionChangeResourcesPerReservation;?>
',
				calendarOptions: {
					buttonText: {
						today: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Today'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
echo strtr($_prefixVariable3, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
						month: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Month'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
echo strtr($_prefixVariable4, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
						week: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Week'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
echo strtr($_prefixVariable5, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
						day: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Day'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
echo strtr($_prefixVariable6, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					}, defaultDate: moment('<?php ob_start();
echo $_smarty_tpl->tpl_vars['Timezone']->value;
$_prefixVariable7 = ob_get_clean();
echo Date::Now()->ToTimezone($_prefixVariable7)->Format('Y-m-d');?>
', 'YYYY-MM-DD'), eventsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
'
				}
			};

			var scheduleManagement = new ScheduleManagement(opts);
			scheduleManagement.init();

			$('.timepicker').timepicker({
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			});


		});

	<?php echo '</script'; ?>
>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* smarty_template_function_display_periods_71994343600cc17ca153c7_60575418 */
if (!function_exists('smarty_template_function_display_periods_71994343600cc17ca153c7_60575418')) {
function smarty_template_function_display_periods_71994343600cc17ca153c7_60575418(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value]->GetSlots($_smarty_tpl->tpl_vars['day']->value), 'period', false, NULL, 'layouts', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['period']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_layouts']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_layouts']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_layouts']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_layouts']->value['total'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['period']->value->IsReservable() == $_smarty_tpl->tpl_vars['showReservable']->value) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['period']->value->Start->Format("H:i");?>
 - <?php echo $_smarty_tpl->tpl_vars['period']->value->End->Format("H:i");?>

                                    <?php if ($_smarty_tpl->tpl_vars['period']->value->IsLabelled()) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['period']->value->Label;?>

                                    <?php }?>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_layouts']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_layouts']->value['last'] : null)) {?>, <?php }?>
                                <?php }?>
                                <?php
}
if ($_smarty_tpl->tpl_vars['period']->do_else) {
?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}}
/*/ smarty_template_function_display_periods_71994343600cc17ca153c7_60575418 */
/* smarty_template_function_display_slot_inputs_71994343600cc17ca153c7_60575418 */
if (!function_exists('smarty_template_function_display_slot_inputs_71994343600cc17ca153c7_60575418')) {
function smarty_template_function_display_slot_inputs_71994343600cc17ca153c7_60575418(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

							<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="col-xs-12">
                                <?php $_smarty_tpl->_assignInScope('suffix', '');?>
                                <?php if ($_smarty_tpl->tpl_vars['day']->value != null) {?>
                                    <?php $_smarty_tpl->_assignInScope('suffix', "_".((string)$_smarty_tpl->tpl_vars['day']->value));?>
                                <?php }?>
								<div class="col-xs-6">
									<label for="reservableEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservableTimeSlots'),$_smarty_tpl ) );?>
</label>
									<textarea class="reservableEdit form-control" id="reservableEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"
											  name="<?php echo FormKeys::SLOTS_RESERVABLE;
echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"></textarea>
								</div>
								<div class="col-xs-6">
									<label for="blockedEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BlockedTimeSlots'),$_smarty_tpl ) );?>
</label> <a
											href="#" class="autofillBlocked" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Autofill'),$_smarty_tpl ) );?>
"><i
												class="fa fa-magic"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Autofill'),$_smarty_tpl ) );?>
</a>
									<textarea class="blockedEdit form-control" id="blockedEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"
											  name="<?php echo FormKeys::SLOTS_BLOCKED;
echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"></textarea>
								</div>
							</div>
                        <?php
}}
/*/ smarty_template_function_display_slot_inputs_71994343600cc17ca153c7_60575418 */
}
