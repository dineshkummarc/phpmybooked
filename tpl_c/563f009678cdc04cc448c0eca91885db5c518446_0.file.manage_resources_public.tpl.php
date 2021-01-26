<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:47:05
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Resources\manage_resources_public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc389bcadf2_02729821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '563f009678cdc04cc448c0eca91885db5c518446' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Resources\\manage_resources_public.tpl',
      1 => 1600868989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600cc389bcadf2_02729821 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['resource']->value->GetIsCalendarSubscriptionAllowed()) {?>
    <div><a class="update disableSubscription subscriptionButton"
            href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TurnOffSubscription'),$_smarty_tpl ) );?>
</a>
    </div>
    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"feed.png"),$_smarty_tpl ) );?>

        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSubscriptionUrl()->GetAtomUrl();?>
">Atom</a>
        |
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSubscriptionUrl()->GetWebcalUrl();?>
">iCalendar</a>
    </div>
    <div>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PublicId'),$_smarty_tpl ) );?>
</span>
        <span class="propertyValue"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetPublicId();?>
</span>
    </div>
    <div>
        <span>Resource Display</span>
        <span class="propertyValue"><?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo Pages::DISPLAY_RESOURCE;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetPublicId();?>
</span>
    </div>
<?php } else { ?>
    <div>
        <a class="update enableSubscription subscriptionButton"
           href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TurnOnSubscription'),$_smarty_tpl ) );?>
</a>
    </div>
<?php }
}
}
