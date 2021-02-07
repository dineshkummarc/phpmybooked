<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:00:31
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Configuration\manage_email_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60201caf59a1d6_34356915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c06f087958c6e21f7d8c11c31ce7d074b51bd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Configuration\\manage_email_templates.tpl',
      1 => 1600868988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_60201caf59a1d6_34356915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-manage-email-templates" class="admin-page">

    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageEmailTemplates'),$_smarty_tpl ) );?>
</h1>

        <div class="form-group col-sm-8 col-xs-6">
            <select id="templateOpts" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EmailTemplate'),$_smarty_tpl ) );?>
" class="form-control">
                <option value="">--- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SelectEmailTemplate'),$_smarty_tpl ) );?>
 ---</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value->FileName();?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value->Name();?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

        </div>

        <div class="form-group col-sm-4 col-xs-6">
            <select id="languageOpts" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Language'),$_smarty_tpl ) );?>
" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->LanguageCode;?>
"
                            <?php if ($_smarty_tpl->tpl_vars['Language']->value == $_smarty_tpl->tpl_vars['language']->value->LanguageCode) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value->DisplayName;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div id="editEmailSection" class="no-show">
            <div>
                <form role="form" id="updateEmailForm" ajaxAction="<?php echo EmailTemplatesActions::Update;?>
" method="post">
                    <div class="form-group col-xs-12">
                    <textarea id="templateContents" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'EMAIL_CONTENTS'),$_smarty_tpl ) );?>
 title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EmailTemplate'),$_smarty_tpl ) );?>
"
                              class="form-control" rows="20" style="width:100%"></textarea>
                    </div>

                    <div class="form-group col-xs-12">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <input id="reloadEmailContents" type="button" class="btn btn-default"
                               value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReloadOriginalContents'),$_smarty_tpl ) );?>
"/>
                    </div>

                    <input type="hidden" id="templatePath" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'EMAIL_TEMPLATE_NAME'),$_smarty_tpl ) );?>
 />
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

                </form>
            </div>

            <div id="updateSuccess" class="alert alert-success col-xs-12" style="display:none;">
                <span class="glyphicon glyphicon-ok-sign"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UpdateEmailTemplateSuccess'),$_smarty_tpl ) );?>

            </div>

            <div id="updateFailed" class="alert alert-warning col-xs-12" style="display:none;">
                <span class="glyphicon glyphicon-alert"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UpdateEmailTemplateFailed'),$_smarty_tpl ) );?>

            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/email-templates.js"),$_smarty_tpl ) );?>

        <?php echo '<script'; ?>
 type="text/javascript">

            $(document).ready(function () {
                var opts = {
                    scriptUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
'
                };
                var emails = new EmailTemplateManagement(opts);
                emails.init();
            });

        <?php echo '</script'; ?>
>
        <div id="wait-box" class="wait-box">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>
</h3>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"reservation_submitting.gif"),$_smarty_tpl ) );?>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
