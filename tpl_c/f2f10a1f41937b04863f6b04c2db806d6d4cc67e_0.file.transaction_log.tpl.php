<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:05:17
  from 'C:\xampp\htdocs\Test\booked\tpl\Credits\transaction_log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60201dcd3a77c7_36085251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f10a1f41937b04863f6b04c2db806d6d4cc67e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Credits\\transaction_log.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60201dcd3a77c7_36085251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div style="overflow-x:auto;">
    <table class="table" id="transaction-log-list">
        <thead>
        <tr>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Date'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Status'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Total'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TransactionFee'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AmountRefunded'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'InvoiceNumber'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TransactionId'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Gateway'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TransactionLog']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
            <?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

            <tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['log']->value->TransactionDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'general_datetime'),$_smarty_tpl ) );?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['log']->value->Status;?>
</td>
                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatcurrency'][0], array( array('amount'=>$_smarty_tpl->tpl_vars['log']->value->Total,'currency'=>$_smarty_tpl->tpl_vars['log']->value->Currency),$_smarty_tpl ) );?>
</td>
                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatcurrency'][0], array( array('amount'=>$_smarty_tpl->tpl_vars['log']->value->Fee,'currency'=>$_smarty_tpl->tpl_vars['log']->value->Currency),$_smarty_tpl ) );?>
</td>
                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatcurrency'][0], array( array('amount'=>$_smarty_tpl->tpl_vars['log']->value->AmountRefunded,'currency'=>$_smarty_tpl->tpl_vars['log']->value->Currency),$_smarty_tpl ) );?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['log']->value->InvoiceNumber;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['log']->value->TransactionId;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['log']->value->GatewayName;?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0], array( array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl ) );
}
}
