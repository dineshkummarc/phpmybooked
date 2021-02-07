<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:42:30
  from 'C:\xampp\htdocs\Test\booked\tpl\Dashboard\announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60202686056b02_02060895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd167f117d4d96e5f499f8b318ae0074a451e7593' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Dashboard\\announcements.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60202686056b02_02060895 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dashboard" id="announcementsDashboard">
	<div class="dashboardHeader">
		<div class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Announcements"),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['Announcements']->value);?>
</span></div>
		<div class="pull-right">
			<a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ShowHide'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Announcements"),$_smarty_tpl ) );?>
">
				<i class="glyphicon"></i>
                <span class="no-show">Expand/Collapse</span>
            </a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="dashboardContents">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Announcements']->value, 'each');
$_smarty_tpl->tpl_vars['each']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->do_else = false;
?>
				<li><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'url2link' ][ 0 ], array( html_entity_decode($_smarty_tpl->tpl_vars['each']->value->Text()) )));?>
</li>
				<?php
}
if ($_smarty_tpl->tpl_vars['each']->do_else) {
?>
				<div class="noresults"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"NoAnnouncements"),$_smarty_tpl ) );?>
</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>
<?php }
}
