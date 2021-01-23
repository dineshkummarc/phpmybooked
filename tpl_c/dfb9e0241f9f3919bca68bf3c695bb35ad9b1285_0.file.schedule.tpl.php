<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:50:09
  from 'C:\xampp\htdocs\Test\booked\tpl\Schedule\schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be341d800d5_41795279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb9e0241f9f3919bca68bf3c695bb35ad9b1285' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Schedule\\schedule.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Schedule/schedule-reservations-grid.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_600be341d800d5_41795279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displayPastTime' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\dfb9e0241f9f3919bca68bf3c695bb35ad9b1285_0.file.schedule.tpl.php',
    'uid' => 'dfb9e0241f9f3919bca68bf3c695bb35ad9b1285',
    'call_name' => 'smarty_template_function_displayPastTime_1843656999600be3418e44c3_37721222',
  ),
  'displayReservable' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\dfb9e0241f9f3919bca68bf3c695bb35ad9b1285_0.file.schedule.tpl.php',
    'uid' => 'dfb9e0241f9f3919bca68bf3c695bb35ad9b1285',
    'call_name' => 'smarty_template_function_displayReservable_1843656999600be3418e44c3_37721222',
  ),
  'displayRestricted' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\dfb9e0241f9f3919bca68bf3c695bb35ad9b1285_0.file.schedule.tpl.php',
    'uid' => 'dfb9e0241f9f3919bca68bf3c695bb35ad9b1285',
    'call_name' => 'smarty_template_function_displayRestricted_1843656999600be3418e44c3_37721222',
  ),
  'displayUnreservable' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\dfb9e0241f9f3919bca68bf3c695bb35ad9b1285_0.file.schedule.tpl.php',
    'uid' => 'dfb9e0241f9f3919bca68bf3c695bb35ad9b1285',
    'call_name' => 'smarty_template_function_displayUnreservable_1843656999600be3418e44c3_37721222',
  ),
  'displaySlot' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\dfb9e0241f9f3919bca68bf3c695bb35ad9b1285_0.file.schedule.tpl.php',
    'uid' => 'dfb9e0241f9f3919bca68bf3c695bb35ad9b1285',
    'call_name' => 'smarty_template_function_displaySlot_1843656999600be3418e44c3_37721222',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>













<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_426308957600be341c76695_76289269', "header");
?>


<div id="page-schedule">
    <?php $_smarty_tpl->_assignInScope('startTime', microtime(true));?>

    <?php if ($_smarty_tpl->tpl_vars['ShowResourceWarning']->value) {?>
        <div class="alert alert-warning no-resource-warning"><span
                    class="fa fa-warning"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoResources'),$_smarty_tpl ) );?>
 <a
                    href="admin/manage_resources.php"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddResource'),$_smarty_tpl ) );?>
</a></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
        <div id="slow-schedule-warning" class="alert alert-warning no-show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            We noticed this page is taking a long time to load. To speed ths page up, try
            reducing the number of <a class="alert-link" href="admin/manage_resources.php">resources</a> on this
            schedule or
            reducing the number of <a class="alert-link" href="admin/manage_schedules.php">days</a> being shown.
            <br/><br/>
            This page is taking <span id="warning-time"></span> seconds to load
            <span id="warning-resources"></span> resources for <span id="warning-days"></span> days.

            <button type="button" class="close close-forever" aria-label="Do not show again">
                <span aria-hidden="true">Do not show again</span>
            </button>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['IsAccessible']->value) {?>
        <div id="defaultSetMessage" class="alert alert-success hidden">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DefaultScheduleSet'),$_smarty_tpl ) );?>

        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1761375757600be341c9d7a1_95831722', "schedule_control");
?>


        <?php if ($_smarty_tpl->tpl_vars['ScheduleAvailabilityEarly']->value) {?>
            <div class="alert alert-warning center">
                <strong>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleAvailabilityEarly'),$_smarty_tpl ) );?>

                    <a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value->Year();?>
"
                       data-month="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value->Month();?>
"
                       data-day="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value->Day();?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('date'=>$_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value,'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value),$_smarty_tpl ) );?>

                    </a> -
                    <a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value->Year();?>
"
                       data-month="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value->Month();?>
"
                       data-day="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value->Day();?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('date'=>$_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value,'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value),$_smarty_tpl ) );?>

                    </a>
                </strong>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['ScheduleAvailabilityLate']->value) {?>
            <div class="alert alert-warning center">
                <strong>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ScheduleAvailabilityLate'),$_smarty_tpl ) );?>

                    <a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value->Year();?>
"
                       data-month="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value->Month();?>
"
                       data-day="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value->Day();?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('date'=>$_smarty_tpl->tpl_vars['ScheduleAvailabilityStart']->value,'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value),$_smarty_tpl ) );?>

                    </a> -
                    <a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value->Year();?>
"
                       data-month="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value->Month();?>
"
                       data-day="<?php echo $_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value->Day();?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('date'=>$_smarty_tpl->tpl_vars['ScheduleAvailabilityEnd']->value,'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value),$_smarty_tpl ) );?>

                    </a>
                </strong>
            </div>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['HideSchedule']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1180186458600be341d0adb9_22503758', "legend");
?>

            <div class="row">
                <div id="reservations-left" class="col-md-2 col-sm-12 default-box">
                    <div class="reservations-left-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Filter'),$_smarty_tpl ) );?>

                        <a href="#" class="pull-right toggle-sidebar" title="Hide Reservation Filter"><i
                                    class="glyphicon glyphicon-remove"></i>
                            <span class="no-show">Hide Reservation Filter</span>
                        </a>
                    </div>

                    <div class="reservations-left-content">
                        <form method="get" role="form" id="advancedFilter">

                            <?php if (count($_smarty_tpl->tpl_vars['ResourceAttributes']->value)+count($_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value) > 5) {?>
                                <div>
                                    <input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Filter'),$_smarty_tpl ) );?>
"
                                           class="btn btn-success btn-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SUBMIT'),$_smarty_tpl ) );?>
/>
                                </div>
                            <?php }?>

                            <div>
                                                                <div id="resourceGroups"></div>
                            </div>

                            <div id="resettable">
                                <?php if ($_smarty_tpl->tpl_vars['CanViewUsers']->value) {?>
                                    <div class="form-group col-xs-12">
                                        <label for="ownerFilter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Owner'),$_smarty_tpl ) );?>
</label>
                                        <input type='search' id='ownerFilter'
                                               class="form-control input-sm search" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'OWNER_TEXT'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['OwnerText']->value;?>
" />
                                        <input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
 id="ownerId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['OwnerId']->value;?>
"/>
                                        <span class="searchclear searchclear-label glyphicon glyphicon-remove-circle" ref="ownerFilter,ownerId"></span>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['AllowParticipation']->value) {?>
                                        <div class="form-group col-xs-12">
                                            <label for="participantFilter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Participant'),$_smarty_tpl ) );?>
</label>
                                            <input type='search' id='participantFilter'
                                                   class="form-control input-sm search" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PARTICIPANT_TEXT'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['ParticipantText']->value;?>
" />
                                            <input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PARTICIPANT_ID'),$_smarty_tpl ) );?>
 id="participantId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ParticipantId']->value;?>
"/>
                                            <span class="searchclear searchclear-label glyphicon glyphicon-remove-circle" ref="participantFilter,participantId"></span>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <div class="form-group col-xs-12">
                                    <label for="maxCapactiy"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MinimumCapacity'),$_smarty_tpl ) );?>
</label>
                                    <input type='number' min='0' id='maxCapactiy' size='5' maxlength='5'
                                           class="form-control input-sm" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl ) );?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['MaxParticipantsFilter']->value;?>
"/>
                                </div>

                                <div class="form-group col-xs-12">
                                    <label for="resourceType"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceType'),$_smarty_tpl ) );?>
</label>
                                    <select id="resourceType" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl ) );?>

                                            class="form-control input-sm">
                                        <option value="">- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'All'),$_smarty_tpl ) );?>
 -</option>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0], array( array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'label'=>'Name','key'=>'Id','selected'=>$_smarty_tpl->tpl_vars['ResourceTypeIdFilter']->value),$_smarty_tpl ) );?>

                                    </select>
                                </div>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceAttributes']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'r','inputClass'=>"input-sm",'class'=>"customAttribute col-xs-12"),$_smarty_tpl ) );?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'rt','inputClass'=>"input-sm",'class'=>"customAttribute col-xs-12"),$_smarty_tpl ) );?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <div class="btn-submit">
                                    <button type="submit" class="btn btn-success btn-sm"
                                            value="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Filter'),$_smarty_tpl ) );?>
</button>
                                </div>
                                <div class="btn-clear">
                                    <button id="show_all_resources" type="button"
                                            class="btn btn-default btn-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ClearFilter'),$_smarty_tpl ) );?>
</button>
                                </div>

                            </div>

                            <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"/>
                            <input type="hidden" name="sds"
                                   value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SpecificDates']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
echo $_smarty_tpl->tpl_vars['d']->value->Format('Y-m-d');?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"/>
                            <input type="hidden" name="sd" value="<?php echo $_smarty_tpl->tpl_vars['DisplayDates']->value->GetBegin()->Format('Y-m-d');?>
"/>
                            <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SUBMIT'),$_smarty_tpl ) );?>
 value="true"/>
                            <input type="hidden" name="clearFilter" id="clearFilter" value="0"/>
                        </form>
                    </div>
                </div>

                <div id="reservations" class="col-md-10 col-sm-12">
                    <div>
                        <a href="#" id="restore-sidebar" title="Show Reservation Filter"
                           class="hidden toggle-sidebar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceFilter'),$_smarty_tpl ) );?>
 <i
                                    class="glyphicon glyphicon-filter"></i> <i
                                    class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1023478280600be341d35d45_02026014', "reservations");
?>

                </div>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoResourcePermission'),$_smarty_tpl ) );?>
</div>
    <?php }?>
    <div class="clearfix">&nbsp;</div>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
" id="scheduleId"/>

    <div class="row no-margin">
        <div class="col-sm-9 visible-md visible-lg">&nbsp;</div>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'date_navigation');?>

    </div>
    <?php $_smarty_tpl->_assignInScope('endTime', microtime(true));?>

</div>

<form id="moveReservationForm">
    <input id="moveReferenceNumber" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl ) );?>
 />
    <input id="moveStartDate" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 />
    <input id="moveResourceId" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID'),$_smarty_tpl ) );?>
 />
    <input id="moveSourceResourceId" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ORIGINAL_RESOURCE_ID'),$_smarty_tpl ) );?>
 />
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

</form>


<form id="fetchReservationsForm">
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['FirstDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'END_DATE'),$_smarty_tpl ) );?>
 value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['LastDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SpecificDates']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
        <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SPECIFIC_DATES','multi'=>true),$_smarty_tpl ) );?>
 value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['d']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'MIN_CAPACITY'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['MinCapacityFilter']->value;?>
"/>
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResourceTypeIdFilter']->value;?>
"/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceAttributes']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
        <input type="hidden" name="RESOURCE_ATTRIBUTE_ID[<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
"/>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
        <input type="hidden" name="RESOURCE_TYPE_ATTRIBUTE_ID[<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
"/>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ResourceIds']->value, 'id');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
?>
        <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['UserIdFilter']->value;?>
"/>
    <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PARTICIPANT_ID'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['ParticipantIdFilter']->value;?>
"/>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

</form>

<div id="loading-schedule" class="no-show">Loading reservations...</div>

<button id="reservationsToTop" title="Go to top"><i class="fa fa-2x fa-arrow-circle-o-up"></i></button>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'Select2'=>true,'Owl'=>true,'Clear'=>true), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2121813944600be341d58fc7_41427029', "scripts-before");
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/html2canvas.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/moment.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"schedule.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"resourcePopup.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/tree.jquery.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.cookie.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"autocomplete.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

<?php echo '<script'; ?>
 type="text/javascript">

    const scheduleOpts = {
        reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[referenceNumber]",
        summaryPopupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
        setDefaultScheduleUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::PROFILE;?>
?action=changeDefaultSchedule&<?php echo QueryStringKeys::SCHEDULE_ID;?>
=[scheduleId]",
        cookieName: "<?php echo $_smarty_tpl->tpl_vars['CookieName']->value;?>
",
        scheduleId: "<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
        scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
',
        selectedResources: [<?php echo implode(',',$_smarty_tpl->tpl_vars['ResourceIds']->value);?>
],
        specificDates: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SpecificDates']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>'<?php echo $_smarty_tpl->tpl_vars['d']->value->Format('Y-m-d');?>
',<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
        updateReservationUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_move.php",
        lockTableHead: "<?php echo $_smarty_tpl->tpl_vars['LockTableHead']->value;?>
",
        disableSelectable: "<?php echo $_smarty_tpl->tpl_vars['IsMobile']->value;?>
",
        reservationLoadUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::SCHEDULE;?>
?<?php echo QueryStringKeys::DATA_REQUEST;?>
=reservations",
        scheduleStyle: "<?php echo $_smarty_tpl->tpl_vars['ScheduleStyle']->value;?>
",
        midnightLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>Date::Now()->GetDate(),'key'=>'period_time'),$_smarty_tpl ) );?>
",
        isMobileView: "<?php echo $_smarty_tpl->tpl_vars['IsMobile']->value && !$_smarty_tpl->tpl_vars['IsTablet']->value;?>
",
        newLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'New'),$_smarty_tpl ) );?>
",
        updatedLabel: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Updated'),$_smarty_tpl ) );?>
",
        isReservable: 1,
        autocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
    };

    const resourceOrder = [];
    let resourceIndex = 0;
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
    resourceOrder[<?php echo $_smarty_tpl->tpl_vars['r']->value->GetId();?>
] = resourceIndex++;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    scheduleOpts.resourceOrder = resourceOrder;

    <?php if ($_smarty_tpl->tpl_vars['LoadViewOnly']->value) {?>
    scheduleOpts.reservationUrlTemplate = "view-reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[referenceNumber]";
    scheduleOpts.reservationLoadUrl = "<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::VIEW_SCHEDULE;?>
?<?php echo QueryStringKeys::DATA_REQUEST;?>
=reservations";
    scheduleOpts.isReservable = <?php if ($_smarty_tpl->tpl_vars['AllowGuestBooking']->value) {?>1<?php } else { ?>0<?php }?>;
    <?php }?>

    $(document).ready(function () {
        const schedule = new Schedule(scheduleOpts, <?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
);
        schedule.init();
    });

    $('#schedules').select2({
        width: 'resolve'
    });
<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106374936600be341d783d5_06265368', "scripts-after");
?>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>'datepicker','DefaultDate'=>$_smarty_tpl->tpl_vars['FirstDate']->value,'NumberOfMonths'=>$_smarty_tpl->tpl_vars['PopupMonths']->value,'ShowButtonPanel'=>'true','OnSelect'=>'dpDateChanged','FirstDay'=>$_smarty_tpl->tpl_vars['FirstWeekday']->value),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* smarty_template_function_displayPastTime_1843656999600be3418e44c3_37721222 */
if (!function_exists('smarty_template_function_displayPastTime_1843656999600be3418e44c3_37721222')) {
function smarty_template_function_displayPastTime_1843656999600be3418e44c3_37721222(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <td ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
        class="pasttime slot"
        data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
"
        data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
"
        data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
"
        data-min="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Timestamp();?>
"
        data-max="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Timestamp();?>
"
        data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayPastTime_1843656999600be3418e44c3_37721222 */
/* smarty_template_function_displayReservable_1843656999600be3418e44c3_37721222 */
if (!function_exists('smarty_template_function_displayReservable_1843656999600be3418e44c3_37721222')) {
function smarty_template_function_displayReservable_1843656999600be3418e44c3_37721222(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <td class="reservable clickres slot"
        ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
        data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
"
        data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
"
        data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
"
        data-min="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Timestamp();?>
"
        data-max="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Timestamp();?>
"
        data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayReservable_1843656999600be3418e44c3_37721222 */
/* smarty_template_function_displayRestricted_1843656999600be3418e44c3_37721222 */
if (!function_exists('smarty_template_function_displayRestricted_1843656999600be3418e44c3_37721222')) {
function smarty_template_function_displayRestricted_1843656999600be3418e44c3_37721222(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <td ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
        class="restricted slot"
        data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
"
        data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
"
        data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
"
        data-min="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Timestamp();?>
"
        data-max="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Timestamp();?>
"
        data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayRestricted_1843656999600be3418e44c3_37721222 */
/* smarty_template_function_displayUnreservable_1843656999600be3418e44c3_37721222 */
if (!function_exists('smarty_template_function_displayUnreservable_1843656999600be3418e44c3_37721222')) {
function smarty_template_function_displayUnreservable_1843656999600be3418e44c3_37721222(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <td ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
        class="unreservable slot"
        data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
"
        data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
"
        data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
"
        data-min="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Timestamp();?>
"
        data-max="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Timestamp();?>
"
        data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
">&nbsp;
    </td>
<?php
}}
/*/ smarty_template_function_displayUnreservable_1843656999600be3418e44c3_37721222 */
/* smarty_template_function_displaySlot_1843656999600be3418e44c3_37721222 */
if (!function_exists('smarty_template_function_displaySlot_1843656999600be3418e44c3_37721222')) {
function smarty_template_function_displaySlot_1843656999600be3418e44c3_37721222(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, $_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value), array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displaySlot_1843656999600be3418e44c3_37721222 */
/* {block "header"} */
class Block_426308957600be341c76695_76289269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_426308957600be341c76695_76289269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Qtip'=>true,'Select2'=>true,'Owl'=>true,'cssFiles'=>'scripts/css/jqtree.css','printCssFiles'=>'css/schedule.print.css'), 0, false);
}
}
/* {/block "header"} */
/* {block "actions"} */
class Block_671751768600be341ca1628_65936498 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <a href="#" id="print_schedule" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Print'),$_smarty_tpl ) );?>
"><span
                                        class="fa fa-print"></span></a>
                            <a href="#" id="make_default"
                               style="display:none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"star_boxed_full.png",'altKey'=>"MakeDefaultSchedule"),$_smarty_tpl ) );?>
</a>
                            <a href="#" class="schedule-style" id="schedule_standard"
                               schedule-display="<?php echo ScheduleStyle::Standard;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"table.png",'altKey'=>"StandardScheduleDisplay"),$_smarty_tpl ) );?>
</a>
                            <a href="#" class="schedule-style" id="schedule_tall"
                               schedule-display="<?php echo ScheduleStyle::Tall;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"table-tall.png",'altKey'=>"TallScheduleDisplay"),$_smarty_tpl ) );?>
</a>
                            <a href="#" class="schedule-style hidden-sm hidden-xs" id="schedule_wide"
                               schedule-display="<?php echo ScheduleStyle::Wide;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"table-wide.png",'altKey'=>"WideScheduleDisplay"),$_smarty_tpl ) );?>
</a>
                            <a href="#" class="schedule-style hidden-sm hidden-xs" id="schedule_week"
                               schedule-display="<?php echo ScheduleStyle::CondensedWeek;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"table-week.png",'altKey'=>"CondensedWeekScheduleDisplay"),$_smarty_tpl ) );?>
</a>
                            <div>
                                <?php if ($_smarty_tpl->tpl_vars['SubscriptionUrl']->value != null && $_smarty_tpl->tpl_vars['ShowSubscription']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"feed.png"),$_smarty_tpl ) );?>

                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value->GetAtomUrl();?>
">Atom</a>
                                    |
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value->GetWebcalUrl();?>
">iCalendar</a>
                                <?php }?>
                            </div>
                        <?php
}
}
/* {/block "actions"} */
/* {block "schedule_control"} */
class Block_1761375757600be341c9d7a1_95831722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'schedule_control' => 
  array (
    0 => 'Block_1761375757600be341c9d7a1_95831722',
  ),
  'actions' => 
  array (
    0 => 'Block_671751768600be341ca1628_65936498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="row">
                <?php $_smarty_tpl->_assignInScope('titleWidth', "col-sm-12 col-xs-12");?>
                <?php if (!$_smarty_tpl->tpl_vars['HideSchedule']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('titleWidth', "col-sm-6 col-xs-12");?>
                    <div id="schedule-actions" class="col-sm-3 col-xs-12">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_671751768600be341ca1628_65936498', "actions", $this->tplIndex);
?>

                    </div>
                <?php }?>

                <div id="schedule-title" class="schedule_title <?php echo $_smarty_tpl->tpl_vars['titleWidth']->value;?>
 col-xs-12">
                    <label for="schedules" class="no-show">Schedule</label>
                    <select id="schedules" class="form-control" style="width:auto;">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
$_smarty_tpl->tpl_vars['schedule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetId() == $_smarty_tpl->tpl_vars['ScheduleId']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <a href="#" id="calendar_toggle" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ShowHideNavigation'),$_smarty_tpl ) );?>
">
                        <span class="glyphicon glyphicon-calendar"></span>
                        <span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ShowHideNavigation'),$_smarty_tpl ) );?>
</span>
                    </a>
                    <div id="individualDates">
                        <div class="checkbox inline">
                            <input type='checkbox' id='multidateselect'/>
                            <label for='multidateselect'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SpecificDates'),$_smarty_tpl ) );?>
</label>
                        </div>
                        <a class="btn btn-default btn-sm" href="#" id="individualDatesGo"><i
                                    class="fa fa-angle-double-right"></i>
                            <span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SpecificDates'),$_smarty_tpl ) );?>
</span>
                        </a>
                    </div>
                    <div id="individualDatesList"></div>
                </div>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "date_navigation", null, null);?>
                    <?php if (!$_smarty_tpl->tpl_vars['HideSchedule']->value) {?>
                        <div class="schedule-dates col-sm-3 col-xs-12">
                            <?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());?>
                            <a href="#" class="change-date btn-link btn-success" data-year="<?php echo $_smarty_tpl->tpl_vars['TodaysDate']->value->Year();?>
"
                               data-month="<?php echo $_smarty_tpl->tpl_vars['TodaysDate']->value->Month();?>
" data-day="<?php echo $_smarty_tpl->tpl_vars['TodaysDate']->value->Day();?>
"
                               alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Today'),$_smarty_tpl ) );?>
"><i class="fa fa-home"></i>
                                <span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Today'),$_smarty_tpl ) );?>
</span>
                            </a>
                            <?php $_smarty_tpl->_assignInScope('FirstDate', $_smarty_tpl->tpl_vars['DisplayDates']->value->GetBegin());?>
                            <?php $_smarty_tpl->_assignInScope('LastDate', $_smarty_tpl->tpl_vars['DisplayDates']->value->GetEnd()->AddDays(-1));?>
                            <a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['PreviousDate']->value->Year();?>
"
                               data-month="<?php echo $_smarty_tpl->tpl_vars['PreviousDate']->value->Month();?>
"
                               data-day="<?php echo $_smarty_tpl->tpl_vars['PreviousDate']->value->Day();?>
"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Back'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"arrow_large_left.png",'alt'=>$_prefixVariable1),$_smarty_tpl ) );?>
</a>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['FirstDate']->value),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['LastDate']->value),$_smarty_tpl ) );?>

                            <a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['NextDate']->value->Year();?>
"
                               data-month="<?php echo $_smarty_tpl->tpl_vars['NextDate']->value->Month();?>
"
                               data-day="<?php echo $_smarty_tpl->tpl_vars['NextDate']->value->Day();?>
"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Forward'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"arrow_large_right.png",'alt'=>$_prefixVariable2),$_smarty_tpl ) );?>
</a>

                            <?php if ($_smarty_tpl->tpl_vars['ShowFullWeekLink']->value) {?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_querystring'][0], array( array('key'=>'SHOW_FULL_WEEK','value'=>1),$_smarty_tpl ) );?>
"
                                   id="showFullWeek">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ShowFullWeek'),$_smarty_tpl ) );?>
)</a>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'date_navigation');?>

            </div>
            <div type="text" id="datepicker" style="display:none;"></div>
        <?php
}
}
/* {/block "schedule_control"} */
/* {block "legend"} */
class Block_1180186458600be341d0adb9_22503758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_1180186458600be341d0adb9_22503758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="hidden-xs row col-sm-12 schedule-legend">
                    <div class="center">
                        <div class="legend reservable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reservable'),$_smarty_tpl ) );?>
</div>
                        <div class="legend unreservable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Unreservable'),$_smarty_tpl ) );?>
</div>
                        <div class="legend reserved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reserved'),$_smarty_tpl ) );?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
                            <div class="legend reserved mine"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MyReservation'),$_smarty_tpl ) );?>
</div>
                            <div class="legend reserved participating"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Participant'),$_smarty_tpl ) );?>
</div>
                        <?php }?>
                        <div class="legend reserved pending"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Pending'),$_smarty_tpl ) );?>
</div>
                        <div class="legend pasttime"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Past'),$_smarty_tpl ) );?>
</div>
                        <div class="legend restricted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Restricted'),$_smarty_tpl ) );?>
</div>
                    </div>
                </div>
            <?php
}
}
/* {/block "legend"} */
/* {block "reservations"} */
class Block_1023478280600be341d35d45_02026014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'reservations' => 
  array (
    0 => 'Block_1023478280600be341d35d45_02026014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender("file:Schedule/schedule-reservations-grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block "reservations"} */
/* {block "scripts-before"} */
class Block_2121813944600be341d58fc7_41427029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts-before' => 
  array (
    0 => 'Block_2121813944600be341d58fc7_41427029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "scripts-before"} */
/* {block "scripts-after"} */
class Block_1106374936600be341d783d5_06265368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts-after' => 
  array (
    0 => 'Block_1106374936600be341d783d5_06265368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "scripts-after"} */
}
