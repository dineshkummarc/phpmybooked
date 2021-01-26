<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:46:22
  from 'C:\xampp\htdocs\Test\booked\tpl\Search\search-reservations-results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc35ed6b119_72988551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80377264884bd93ee06a23e523bf2547ebd8e847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Search\\search-reservations-results.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cc35ed6b119_72988551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>

<table class="table" id="reservationTable">
	<thead>
		<tr>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'User'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resource'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Title'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Description'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BeginDate'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Duration'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReferenceNumber'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Created'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'LastModified'),$_smarty_tpl ) );?>
</th>
		</tr>
	</thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Reservations']->value, 'reservation');
$_smarty_tpl->tpl_vars['reservation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->do_else = false;
?>
		<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['reservation']->value->RequiresApproval) {?>
			<?php $_smarty_tpl->_assignInScope('rowCss', 'pending');?>
		<?php }?>
		<?php $_smarty_tpl->_assignInScope('reservationId', $_smarty_tpl->tpl_vars['reservation']->value->ReservationId);?>
		<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable" data-seriesId="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->SeriesId;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
			<td class="user"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0], array( array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName,'ignorePrivacy'=>($_smarty_tpl->tpl_vars['reservation']->value->OwnerId == $_smarty_tpl->tpl_vars['UserId']->value)),$_smarty_tpl ) );?>
</td>
			<td class="resource"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>
</td>
			<td class="title"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Title;?>
</td>
			<td class="description"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Description;?>
</td>
			<td class="date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_reservation_date'),$_smarty_tpl ) );?>
</td>
			<td class="date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_reservation_date'),$_smarty_tpl ) );?>
</td>
			<td class="duration"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->GetDuration()->__toString();?>
</td>
			<td class="referenceNumber"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
</td>
			<td class="created"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CreatedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl ) );?>
</td>
			<td class="created"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->ModifiedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl ) );?>
</td>
		</tr>

														

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table><?php }
}
