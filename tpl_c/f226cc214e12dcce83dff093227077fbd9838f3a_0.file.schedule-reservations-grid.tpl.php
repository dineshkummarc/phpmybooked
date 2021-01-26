<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 10:25:28
  from 'C:\xampp\htdocs\Tested\booked\tpl\Schedule\schedule-reservations-grid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600beb881d0796_43546949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f226cc214e12dcce83dff093227077fbd9838f3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tested\\booked\\tpl\\Schedule\\schedule-reservations-grid.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600beb881d0796_43546949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displaySlot' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Tested\\booked\\tpl_c\\f226cc214e12dcce83dff093227077fbd9838f3a_0.file.schedule-reservations-grid.tpl.php',
    'uid' => 'f226cc214e12dcce83dff093227077fbd9838f3a',
    'call_name' => 'smarty_template_function_displaySlot_1466139133600beb88042036_89102882',
  ),
));
?>

<?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
$_smarty_tpl->tpl_vars['date']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('ts', $_smarty_tpl->tpl_vars['date']->value->Timestamp());?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['periods']) ? $_smarty_tpl->tpl_vars['periods']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value,true);
$_smarty_tpl->_assignInScope('periods', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['slots']) ? $_smarty_tpl->tpl_vars['slots']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value,false);
$_smarty_tpl->_assignInScope('slots', $_tmp_array);?>
    <?php $_smarty_tpl->_assignInScope('count', count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]));?>
    <?php $_smarty_tpl->_assignInScope('slotCount', count($_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['ts']->value]));?>
    <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {
continue 1;
}?>
    <?php $_smarty_tpl->_assignInScope('min', $_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['ts']->value][0]->BeginDate()->TimeStamp());?>
    <?php $_smarty_tpl->_assignInScope('max', $_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['ts']->value][$_smarty_tpl->tpl_vars['slotCount']->value-1]->EndDate()->TimeStamp());?>
    <table class="reservations" data-min="<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
">
        <thead>
        <?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
        <tr class="today">
            <?php } else { ?>
        <tr>
            <?php }?>
            <td class="resdate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl ) );?>
</td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value], 'period');
$_smarty_tpl->tpl_vars['period']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->do_else = false;
?>
                <td class="reslabel"
                    colspan="<?php echo $_smarty_tpl->tpl_vars['period']->value->Span();?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_loop', array (
));
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('resourceId', $_smarty_tpl->tpl_vars['resource']->value->Id);?>
            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('href', ((string)$_smarty_tpl->tpl_vars['CreateReservationPage']->value)."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_prefixVariable3);?>
            <tr class="slots">
                <td class="resourcename"
                    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
 !important"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess && $_smarty_tpl->tpl_vars['DailyLayout']->value->IsDateReservable($_smarty_tpl->tpl_vars['date']->value)) {?>
                        <span resourceId="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>></span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                           class="resourceNameSelector"
                           <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>
                    <?php } else { ?>
                        <span resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                              class="resourceNameSelector"
                              <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
                    <?php }?>
                </td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['ts']->value], 'Slot');
$_smarty_tpl->tpl_vars['Slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Slot']->value) {
$_smarty_tpl->tpl_vars['Slot']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('slotRef', ((string)$_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value));?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>((string)$_smarty_tpl->tpl_vars['href']->value),'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['resourceId']->value), true);?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
/* smarty_template_function_displaySlot_1466139133600beb88042036_89102882 */
if (!function_exists('smarty_template_function_displaySlot_1466139133600beb88042036_89102882')) {
function smarty_template_function_displaySlot_1466139133600beb88042036_89102882(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, $_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value), array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displaySlot_1466139133600beb88042036_89102882 */
}
