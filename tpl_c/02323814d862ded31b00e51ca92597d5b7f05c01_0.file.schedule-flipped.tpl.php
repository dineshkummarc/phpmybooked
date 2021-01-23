<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:55:53
  from 'C:\xampp\htdocs\Test\booked\tpl\Schedule\schedule-flipped.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be4995f1149_92041442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02323814d862ded31b00e51ca92597d5b7f05c01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Schedule\\schedule-flipped.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be4995f1149_92041442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displaySlotTall' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Test\\booked\\tpl_c\\02323814d862ded31b00e51ca92597d5b7f05c01_0.file.schedule-flipped.tpl.php',
    'uid' => '02323814d862ded31b00e51ca92597d5b7f05c01',
    'call_name' => 'smarty_template_function_displaySlotTall_1458650797600be4993d9e59_42501043',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>






<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183175018600be49958f6b1_37768433', "reservations");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_865623144600be4995ed2c9_55563210', "scripts-before");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Schedule/schedule.tpl");
}
/* smarty_template_function_displaySlotTall_1458650797600be4993d9e59_42501043 */
if (!function_exists('smarty_template_function_displaySlotTall_1458650797600be4993d9e59_42501043')) {
function smarty_template_function_displaySlotTall_1458650797600be4993d9e59_42501043(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, $_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value), array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value), true);?>

<?php
}}
/*/ smarty_template_function_displaySlotTall_1458650797600be4993d9e59_42501043 */
/* {block "reservations"} */
class Block_183175018600be49958f6b1_37768433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'reservations' => 
  array (
    0 => 'Block_183175018600be49958f6b1_37768433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_assignInScope('TodaysDate', Date::Now());?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "resources", null, null);?>
		<tr>
			<td class="resourcename">&nbsp;</td>
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
				<td class="resourcename" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
 !important"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess) {?>
						<span resourceId="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
						                              <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>></span>
						<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
"
						   class="resourceNameSelector"
                           <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>

                    <?php } else { ?>
						<span resourceId="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" class="resourceNameSelector"
                              <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
 !important"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
                    <?php }?>
				</td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tr>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php
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
$_tmp_array[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value,false);
$_smarty_tpl->_assignInScope('periods', $_tmp_array);?>
        <?php $_smarty_tpl->_assignInScope('count', count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]));?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {
continue 1;
}?>
        <?php $_smarty_tpl->_assignInScope('min', $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value][0]->BeginDate()->TimeStamp());?>
        <?php $_smarty_tpl->_assignInScope('max', $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value][$_smarty_tpl->tpl_vars['count']->value-1]->EndDate()->TimeStamp());?>
		<table class="reservations reservations-tall" border="1" cellpadding="0" width="100%" data-min="<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
">
			<thead>
            <?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
				<tr class="today">
                    <?php } else { ?>
			<tr>
                <?php }?>
				<td class="resdate" colspan="<?php echo count($_smarty_tpl->tpl_vars['Resources']->value)+1;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl ) );?>
</td>
			</tr>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'resources');?>

			</thead>
			<tbody>
			<!-- tall -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value], 'period', false, NULL, 'period_loop', array (
));
$_smarty_tpl->tpl_vars['period']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->do_else = false;
?>
				<tr class="slots" id="<?php echo $_smarty_tpl->tpl_vars['period']->value->Id();?>
">
					<td class="reslabel"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource', false, NULL, 'resource_loop', array (
));
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('resourceId', $_smarty_tpl->tpl_vars['resource']->value->Id);?>
                        <?php $_smarty_tpl->_assignInScope('slotRef', ((string)$_smarty_tpl->tpl_vars['period']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value));?>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('slotHref', ((string)$_smarty_tpl->tpl_vars['CreateReservationPage']->value)."?rid=".((string)$_smarty_tpl->tpl_vars['resourceId']->value)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_prefixVariable2);?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displaySlotTall', array('Slot'=>$_smarty_tpl->tpl_vars['period']->value,'Href'=>$_smarty_tpl->tpl_vars['slotHref']->value,'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['resourceId']->value), true);?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'resources');?>

		</table>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block "reservations"} */
/* {block "scripts-before"} */
class Block_865623144600be4995ed2c9_55563210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts-before' => 
  array (
    0 => 'Block_865623144600be4995ed2c9_55563210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scripts-before"} */
}
