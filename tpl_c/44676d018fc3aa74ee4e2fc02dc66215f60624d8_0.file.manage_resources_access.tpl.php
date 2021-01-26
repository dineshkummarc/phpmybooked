<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:47:05
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Resources\manage_resources_access.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc389abd531_59888406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44676d018fc3aa74ee4e2fc02dc66215f60624d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Resources\\manage_resources_access.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cc389abd531_59888406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="startNoticeAdd"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()->Minutes();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeAdd()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeAdd()),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="startNoticeUpdate"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()->Minutes();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeUpdate()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeUpdate','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeUpdate()),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNoneUpdate'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="startNoticeDelete"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()->Minutes();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNoticeDelete()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeDelete','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMinNoticeDelete()),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMinNoticeNoneDelete'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="endNotice"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice();?>
"
	 data-days="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Days();?>
"
	 data-hours="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Hours();?>
"
	 data-minutes="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Minutes();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="requiresApproval"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApproval'),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceRequiresApprovalNone'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="autoAssign"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourcePermissionNotAutoGranted'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="enableCheckin"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RequiresCheckInNotification'),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoCheckInRequiredNotification'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="autoRelease"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAutoReleased()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes()),$_smarty_tpl ) );?>

    <?php }?>
</div>
<div class="allowConcurrent"
	 data-allow-concurrent="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowConcurrentReservations();?>
"
	 data-max-concurrent="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxConcurrentReservations();?>
">
    <?php if ($_smarty_tpl->tpl_vars['resource']->value->GetAllowConcurrentReservations()) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceConcurrentReservations','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxConcurrentReservations()),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceConcurrentReservationsNone'),$_smarty_tpl ) );?>

    <?php }?>
</div>
<?php }
}
