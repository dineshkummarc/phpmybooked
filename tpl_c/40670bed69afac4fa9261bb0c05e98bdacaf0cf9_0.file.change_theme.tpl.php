<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:00:39
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Configuration\change_theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60201cb785ef98_11604829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40670bed69afac4fa9261bb0c05e98bdacaf0cf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Configuration\\change_theme.tpl',
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
function content_60201cb785ef98_11604829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-change-theme" class="admin-page">
    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'LookAndFeel'),$_smarty_tpl ) );?>
</h1>

        <div id="successMessage" class="alert alert-success hidden">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ThemeUploadSuccess'),$_smarty_tpl ) );?>

        </div>

        <form id="elementForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" ajaxAction="update" method="post"
              enctype="multipart/form-data">
            <div class="validationSummary alert alert-danger no-show" id="validationErrors">
                <ul>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"logoFileExt"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"cssFileExt"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"faviconFileExt"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"logoFile"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"cssFile"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"faviconFile"),$_smarty_tpl ) );?>

                </ul>
            </div>

            <div>
                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Logo"),$_smarty_tpl ) );?>
 (*.png, *.gif, *.jpg - 50px height)</h4>

                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
</a>
                    <a href="#" id="removeLogo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Remove'),$_smarty_tpl ) );?>
</a>
                </div>
                <label for="logoFile" class="no-show">Logo File</label>
                <input type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'LOGO_FILE'),$_smarty_tpl ) );?>
 class="pull-left" id="logoFile"/>

                <a href="#" class="clearInput inline"><span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"cross-button.png"),$_smarty_tpl ) );?>
</a>
            </div>

            <div>
                <h4>Favicon (*.ico, *.png, *.gif, *.jpg - 32px x 32px or 16px x 16px)</h4>

                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FaviconUrl']->value;?>
</a>
                    <a href="#" id="removeFavicon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Remove'),$_smarty_tpl ) );?>
</a>
                </div>
                <label for="faviconFile" class="no-show">Favicon File</label>
                <input type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'FAVICON_FILE'),$_smarty_tpl ) );?>
 class="pull-left" id="faviconFile"/>

                <a href="#" class="clearInput inline"><span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"cross-button.png"),$_smarty_tpl ) );?>
</a>
            </div>

            <div>
                <div>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"CssFile"),$_smarty_tpl ) );?>
 (*.css)</h4>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
</a>
                </div>
                <label for="cssFile" class="no-show">CSS File</label>
                <input type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CSS_FILE'),$_smarty_tpl ) );?>
 class="pull-left" id="cssFile"/>
                <a href="#" class="clearInput"><span class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"cross-button.png"),$_smarty_tpl ) );?>
</a>
            </div>

            <div class="clearfix"></div>

            <button type="button" class="btn btn-success update margin-top-25" name="<?php echo Actions::SAVE;?>
" id="saveButton">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Update'),$_smarty_tpl ) );?>

            </button>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>


        </form>

    </div>

    <div id="wait-box" class="wait-box">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>
</h3>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"reservation_submitting.gif"),$_smarty_tpl ) );?>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/ajaxfileupload.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-form-submit.js"),$_smarty_tpl ) );?>


    <?php echo '<script'; ?>
 type="text/javascript">
        $('document').ready(function () {

            $('#elementForm').bindAjaxSubmit($('#saveButton'), $('#successMessage'), $('#wait-box'));

            $('.clearInput').click(function (e) {
                e.preventDefault();
                $(this).prev('input').val('');
            });

            $('#removeLogo').click(function (e) {
                e.preventDefault();

                PerformAsyncAction($(this), function () {
                    return '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=removeLogo';
                });
            });

            $('#removeFavicon').click(function (e) {
                e.preventDefault();

                PerformAsyncAction($(this), function () {
                    return '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=removeFavicon';
                });
            });
        });

    <?php echo '</script'; ?>
>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
