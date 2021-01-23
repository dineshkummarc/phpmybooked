<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:54:15
  from 'C:\xampp\htdocs\Test\booked\tpl\Controls\RecurrenceDiv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be43710ca57_11631696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c30c053305a5b98ec307df773faa674b48b98f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Controls\\RecurrenceDiv.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be43710ca57_11631696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDiv" class="repeat-div">
	<div class="form-group">
		<div class="col-xs-12">
			<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOptions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"RepeatPrompt"),$_smarty_tpl ) );?>
</label>
			<select id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOptions" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_options'),$_smarty_tpl ) );?>

					class="form-control input-sm repeat-drop inline-block">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RepeatOptions']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['v']->value['key']),$_smarty_tpl ) );?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>

		<div class="col-sm-4 col-xs-12">
			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatEveryDiv" class="recur-toggle no-show days weeks months years">
				<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatInterval"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"RepeatEveryPrompt"),$_smarty_tpl ) );?>
</label>
				<select id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatInterval" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_every'),$_smarty_tpl ) );?>

						class="form-control input-sm repeat-interval-drop inline-block">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value,'output'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value),$_smarty_tpl);?>

				</select>
				<span class="days"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['daily']['everyKey']),$_smarty_tpl ) );?>
</span>
				<span class="weeks"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['weekly']['everyKey']),$_smarty_tpl ) );?>
</span>
				<span class="months"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['monthly']['everyKey']),$_smarty_tpl ) );?>
</span>
				<span class="years"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['yearly']['everyKey']),$_smarty_tpl ) );?>
</span>
			</div>
		</div>

		<div class="col-sm-8 col-xs-12">
			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOnWeeklyDiv" class="recur-toggle weeks no-show">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay0" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_sunday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DaySundayAbbr"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay1" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_monday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayMondayAbbr"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay2" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_tuesday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayTuesdayAbbr"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay3" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_wednesday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayWednesdayAbbr"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay4" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_thursday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayThursdayAbbr"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay5" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_friday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DayFridayAbbr"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay6" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'repeat_saturday'),$_smarty_tpl ) );?>
 />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DaySaturdayAbbr"),$_smarty_tpl ) );?>

					</label>
				</div>
			</div>

			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOnMonthlyDiv" class="recur-toggle months no-show">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-sm active">
						<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl ) );?>

							   value="<?php echo RepeatMonthlyType::DayOfMonth;?>
"
							   id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatMonthDay" checked="checked"/>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"repeatDayOfMonth"),$_smarty_tpl ) );?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="radio" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl ) );?>

							   value="<?php echo RepeatMonthlyType::DayOfWeek;?>
"
							   id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatMonthWeek"/>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"repeatDayOfWeek"),$_smarty_tpl ) );?>

					</label>
				</div>
			</div>
		</div>

		<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatUntilDiv" class="col-xs-12 no-show recur-toggle">
			<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
EndRepeat"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"RepeatUntilPrompt"),$_smarty_tpl ) );?>
</label>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
EndRepeat" class="form-control input-sm inline-block dateinput"
				   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl ) );?>
"/>
			<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
formattedEndRepeat" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'end_repeat_date'),$_smarty_tpl ) );?>

				   value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
		</div>

        <div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
customDatesDiv" class="col-xs-12 no-show specific-dates">
            <label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
RepeatDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RepeatOn'),$_smarty_tpl ) );?>
</label>
            <input type="text" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
RepeatDate" class="form-control input-sm inline-block dateinput" value=""/>
            <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
formattedRepeatDate" key=system}"/>
            <a href="#" role="button" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
AddDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddDate'),$_smarty_tpl ) );?>
 <i class="fa fa-plus-square"></i></a>
            <div class="repeat-date-list">

            </div>
        </div>
	</div>
</div>
<?php }
}
