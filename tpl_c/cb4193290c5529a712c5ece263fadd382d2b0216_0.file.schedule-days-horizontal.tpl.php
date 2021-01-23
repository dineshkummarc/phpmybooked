<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:55:48
  from 'C:\xampp\htdocs\Test\booked\tpl\Schedule\schedule-days-horizontal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be494f1bc13_18805122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4193290c5529a712c5ece263fadd382d2b0216' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Schedule\\schedule-days-horizontal.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be494f1bc13_18805122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displaySlot' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\cb4193290c5529a712c5ece263fadd382d2b0216_0.file.schedule-days-horizontal.tpl.php',
    'uid' => 'cb4193290c5529a712c5ece263fadd382d2b0216',
    'call_name' => 'smarty_template_function_displaySlot_1884918736600be494d857b9_40229555',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_501666447600be494eaa772_26324259', "reservations");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271056324600be494f1bc13_17185135', "scripts-before");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Schedule/schedule.tpl");
}
/* smarty_template_function_displaySlot_1884918736600be494d857b9_40229555 */
if (!function_exists('smarty_template_function_displaySlot_1884918736600be494d857b9_40229555')) {
function smarty_template_function_displaySlot_1884918736600be494d857b9_40229555(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, $_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value), array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displaySlot_1884918736600be494d857b9_40229555 */
/* {block "reservations"} */
class Block_501666447600be494eaa772_26324259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'reservations' => 
  array (
    0 => 'Block_501666447600be494eaa772_26324259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());?>
    <?php $_smarty_tpl->_assignInScope('min', $_smarty_tpl->tpl_vars['BoundDates']->value[0]->TimeStamp());?>
    <?php $_smarty_tpl->_assignInScope('firstPeriods', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['BoundDates']->value[0]));?>
    <?php $_smarty_tpl->_assignInScope('lastPeriods', $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['BoundDates']->value[count($_smarty_tpl->tpl_vars['BoundDates']->value)-1]));?>
    <?php $_smarty_tpl->_assignInScope('min', $_smarty_tpl->tpl_vars['firstPeriods']->value[0]->BeginDate()->TimeStamp());?>
    <?php $_smarty_tpl->_assignInScope('max', $_smarty_tpl->tpl_vars['lastPeriods']->value[count($_smarty_tpl->tpl_vars['lastPeriods']->value)-1]->EndDate()->TimeStamp());?>
    <table class="reservations" border="1" cellpadding="0" style="width:auto;" data-min="<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
">
        <thead>
        <tr>
            <td rowspan="2">&nbsp;</td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
$_smarty_tpl->tpl_vars['date']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('class', '');?>
                <?php $_smarty_tpl->_assignInScope('ts', $_smarty_tpl->tpl_vars['date']->value->Timestamp());?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['periods']) ? $_smarty_tpl->tpl_vars['periods']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value,false);
$_smarty_tpl->_assignInScope('periods', $_tmp_array);?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['slots']) ? $_smarty_tpl->tpl_vars['slots']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value,false);
$_smarty_tpl->_assignInScope('slots', $_tmp_array);?>
                <?php if (count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]) == 0) {
continue 1;
}?>
                <?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
                    <?php $_smarty_tpl->_assignInScope('class', "today");?>
                <?php }?>
                <td class="resdate <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
                    colspan="<?php echo count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl ) );?>
</td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
        <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
$_smarty_tpl->tpl_vars['date']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('ts', $_smarty_tpl->tpl_vars['date']->value->Timestamp());?>
                <?php $_smarty_tpl->_assignInScope('datePeriods', $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datePeriods']->value, 'period');
$_smarty_tpl->tpl_vars['period']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->do_else = false;
?>
                    <td class="reslabel" colspan="<?php echo $_smarty_tpl->tpl_vars['period']->value->Span();?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
echo Pages::RESERVATION;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('href', $_prefixVariable1."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value));?>
            <tr class="slots">
                <td class="resourcename"
                    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
 !important"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                           class="resourceNameSelector"
                           <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>
                    <?php } else { ?>
                        <span resourceId="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" class="resourceNameSelector"
                              <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
                    <?php }?>
                </td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BoundDates']->value, 'date');
$_smarty_tpl->tpl_vars['date']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('ts', $_smarty_tpl->tpl_vars['date']->value->Timestamp());?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slots']->value[$_smarty_tpl->tpl_vars['ts']->value], 'Slot');
$_smarty_tpl->tpl_vars['Slot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Slot']->value) {
$_smarty_tpl->tpl_vars['Slot']->do_else = false;
?>
                        <?php ob_start();
echo Pages::RESERVATION;
$_prefixVariable2=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('href', $_prefixVariable2."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_prefixVariable3);?>
                        <?php $_smarty_tpl->_assignInScope('slotRef', ((string)$_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value));?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlot', array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>((string)$_smarty_tpl->tpl_vars['href']->value),'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['resourceId']->value), true);?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
}
/* {/block "reservations"} */
/* {block "scripts-before"} */
class Block_271056324600be494f1bc13_17185135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts-before' => 
  array (
    0 => 'Block_271056324600be494f1bc13_17185135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "scripts-before"} */
}
