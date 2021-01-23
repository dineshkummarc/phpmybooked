<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:54:10
  from 'C:\xampp\htdocs\Test\booked\tpl\Calendar\calendar.subscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be432b50956_59051365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '651603bc58360d4771c016ec2ae9698d1266b24b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Calendar\\calendar.subscription.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be432b50956_59051365 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value && $_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a id="subscribeToCalendar"
           href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"calendar-share.png"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SubscribeToCalendar'),$_smarty_tpl ) );?>
</a>
        <br/>
        URL:
        <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
    <?php }?>
</div>

<?php }
}
