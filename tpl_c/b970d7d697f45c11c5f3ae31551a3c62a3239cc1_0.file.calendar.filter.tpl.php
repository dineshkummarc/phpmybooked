<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:50:23
  from 'C:\xampp\htdocs\Test\booked\tpl\Calendar\calendar.filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be34f8f3258_92065674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b970d7d697f45c11c5f3ae31551a3c62a3239cc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Calendar\\calendar.filter.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be34f8f3258_92065674 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row form-inline">
    <div id="filter">

        <?php if ($_smarty_tpl->tpl_vars['GroupName']->value) {?>
        <span class="groupName"><?php echo $_smarty_tpl->tpl_vars['GroupName']->value;?>
</span>
        <?php } else { ?>
        <div>
            <div class="inline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array('id'=>'loadingIndicator'),$_smarty_tpl ) );?>
</div>
            <label for="calendarFilter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"ChangeCalendar"),$_smarty_tpl ) );?>
</label>
            <select id="calendarFilter">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value->GetFilters(), 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                    <option value="s<?php echo $_smarty_tpl->tpl_vars['filter']->value->Id();?>
" class="schedule"
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filter']->value->Name();?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->GetFilters(), 'subfilter');
$_smarty_tpl->tpl_vars['subfilter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subfilter']->value) {
$_smarty_tpl->tpl_vars['subfilter']->do_else = false;
?>
                        <option value="r<?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Id();?>
" class="resource"
                                <?php if ($_smarty_tpl->tpl_vars['subfilter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Name();?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
            <a href="#" id="showResourceGroups"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ResourceGroups'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>

    <div id="resourceGroupsContainer">
        <div id="resourceGroups"></div>
    </div>


    <?php if (false) {?>
        <div class="col-xs-12">
            <div class="form-group inline">
                <label for="ownerFilter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Owner'),$_smarty_tpl ) );?>
</label>
                <input type='search' id='ownerFilter'
                       class="form-control input-sm search" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'OWNER_TEXT'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['OwnerText']->value;?>
"/>
                <input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
 id="ownerId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['OwnerId']->value;?>
"/>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['AllowParticipation']->value) {?>
                <div class="form-group inline">
                    <label for="participantFilter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Participant'),$_smarty_tpl ) );?>
</label>
                    <input type='search' id='participantFilter'
                           class="form-control input-sm search" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PARTICIPANT_TEXT'),$_smarty_tpl ) );?>

                           value="<?php echo $_smarty_tpl->tpl_vars['ParticipantText']->value;?>
"/>
                    <input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'PARTICIPANT_ID'),$_smarty_tpl ) );?>
 id="participantId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ParticipantId']->value;?>
"/>
                </div>
            <?php }?>
            <div class="inline">
                <button id="clearUserFilter" class="btn btn-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reset'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>
    <?php }?>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $('#calendarFilter').select2();
    });

<?php echo '</script'; ?>
><?php }
}
