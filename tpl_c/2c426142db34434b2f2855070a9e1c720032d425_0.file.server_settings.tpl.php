<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:01:21
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Configuration\server_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60201ce1a7ba31_26107320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c426142db34434b2f2855070a9e1c720032d425' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Configuration\\server_settings.tpl',
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
function content_60201ce1a7ba31_26107320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="server-settings-page" class="admin-page">
    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ServerSettings'),$_smarty_tpl ) );?>
</h1>

        <ul class="indented">
            <li>Current Time: <?php echo $_smarty_tpl->tpl_vars['currentTime']->value;?>
</li>
            <li>Image Upload Physical Directory: <?php echo $_smarty_tpl->tpl_vars['imageUploadDirectory']->value;?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Permissions'),$_smarty_tpl ) );?>

                : <?php echo $_smarty_tpl->tpl_vars['imageUploadDirPermissions']->value;?>
) <a
                        href="<?php echo $_SERVER['SCRIPT_URL'];?>
?<?php echo QueryStringKeys::ACTION;?>
=changePermissions">Try to apply
                    correct permissions</a></li>
            <li>Template Cache Directory: <?php echo $_smarty_tpl->tpl_vars['tempalteCacheDirectory']->value;?>
 <a
                        href="<?php echo $_SERVER['SCRIPT_URL'];?>
?<?php echo QueryStringKeys::ACTION;?>
=flush">Try to flush cached files</a>
            </li>
        </ul>

        <h3 style="margin-top: 20px;">Plugins</h3>
        <ul class="indented">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'items', false, 'category');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['category']->value;?>

                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'pluginName');
$_smarty_tpl->tpl_vars['pluginName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pluginName']->value) {
$_smarty_tpl->tpl_vars['pluginName']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['pluginName']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
