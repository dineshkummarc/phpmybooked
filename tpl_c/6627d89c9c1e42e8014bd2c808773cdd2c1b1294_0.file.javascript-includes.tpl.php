<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:44:21
  from 'C:\xampp\htdocs\Test\booked\tpl\javascript-includes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be1e5844819_51867629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6627d89c9c1e42e8014bd2c808773cdd2c1b1294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\javascript-includes.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be1e5844819_51867629 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/lodash.4.6.13.min.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/moment.min.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.blockUI-2.66.0.min.js"),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['Qtip']->value) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.qtip.min.js"),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/bootstrapvalidator/bootstrapValidator.min.js"),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/x-editable/js/bootstrap-editable.min.js"),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/x-editable/wysihtml5/wysihtml5.js"),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/wysihtml5/bootstrap3-wysihtml5.all.min.js"),$_smarty_tpl ) );?>

    <?php }
} else { ?>
                                                    <?php echo '<script'; ?>
 type="text/javascript"
            src="https://cdn.jsdelivr.net/lodash/4.16.3/lodash.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['Qtip']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"><?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/inputs-ext/wysihtml5/wysihtml5.js"><?php echo '</script'; ?>
>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/wysihtml5/bootstrap3-wysihtml5.all.min.js"),$_smarty_tpl ) );?>

    <?php }
}
if ($_smarty_tpl->tpl_vars['Select2']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/select2-4.0.5.min.js"),$_smarty_tpl ) );?>

<?php }
if ($_smarty_tpl->tpl_vars['Timepicker']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.timePicker.min.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery-ui-timepicker-addon.js"),$_smarty_tpl ) );?>

<?php }
if ($_smarty_tpl->tpl_vars['FloatThead']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.floatThead.min.js"),$_smarty_tpl ) );?>

<?php }
if ($_smarty_tpl->tpl_vars['Fullcalendar']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/fullcalendar.js"),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['HtmlLang']->value != 'en') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/fullcalendarLang/".((string)$_smarty_tpl->tpl_vars['HtmlLang']->value).".js"),$_smarty_tpl ) );?>

    <?php }
}
if ($_smarty_tpl->tpl_vars['Owl']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/owl-2.2.1/owl.carousel.min.js"),$_smarty_tpl ) );?>

<?php }
if ($_smarty_tpl->tpl_vars['Clear']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"search-clear.js"),$_smarty_tpl ) );?>

<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"phpscheduleit.js"),$_smarty_tpl ) );
}
}
