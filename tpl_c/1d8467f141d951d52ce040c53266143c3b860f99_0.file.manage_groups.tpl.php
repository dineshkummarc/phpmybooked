<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:49:07
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\manage_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc403598c29_92002262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8467f141d951d52ce040c53266143c3b860f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\manage_groups.tpl',
      1 => 1600868989,
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
function content_600cc403598c29_92002262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-manage-groups" class="admin-page">
    <div>
        <div class="dropdown admin-header-more pull-right">
            <button class="btn btn-default" type="button" id="moreResourceActions" data-toggle="dropdown">
                <span class="no-show">More</span>
                <span class="glyphicon glyphicon-option-horizontal"></span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="moreResourceActions">
                <li role="presentation">
                    <a role="menuitem" href="#" class="import-groups" id="import-groups">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Import"),$_smarty_tpl ) );?>

                        <span class="glyphicon glyphicon-import"></span>
                    </a>
                </li>
                <li role="presentation">
                    <a role="menuitem" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=export" download="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=export" class="export-groups"
                       id="export-groups" target="_blank">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Export"),$_smarty_tpl ) );?>

                        <span class="glyphicon glyphicon-export"></span>
                    </a>
                </li>
                <li role="presentation" class="divider"></li>
                <li role="presentation">
                    <a role="menuitem" href="#" class="add-group" id="add-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddGroup"),$_smarty_tpl ) );?>

                        <span class="fa fa-plus-circle icon add"></span>
                    </a>
                </li>
            </ul>
        </div>

        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageGroups'),$_smarty_tpl ) );?>
</h1>
    </div>

    <div id="groupSearchPanel">
        <label for="groupSearch"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'FindGroup'),$_smarty_tpl ) );?>
</label>
        | <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_link'][0], array( array('href'=>$_SERVER['SCRIPT_NAME'],'key'=>'AllGroups'),$_smarty_tpl ) );?>

        <input type="text" id="groupSearch" class="form-control" size="40"/>
    </div>

    <table class="table" id="groupList">
        <thead>
        <tr>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'GroupName','field'=>ColumnNames::GROUP_NAME),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GroupMembers'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Permissions'),$_smarty_tpl ) );?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['CanChangeRoles']->value) {?>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GroupRoles'),$_smarty_tpl ) );?>
</th>
            <?php }?>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GroupAdmin'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GroupAutomaticallyAdd'),$_smarty_tpl ) );?>
</th>
            <th class="action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Actions'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
            <?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

            <tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-group-id="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
" data-group-default="<?php echo $_smarty_tpl->tpl_vars['group']->value->IsDefault;?>
">
                <td class="dataGroupName"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</td>
                <td><a href="#" class="update members"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Manage'),$_smarty_tpl ) );?>
</a></td>
                <td><a href="#" class="update permissions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Change'),$_smarty_tpl ) );?>
</a></td>
                <?php if ($_smarty_tpl->tpl_vars['CanChangeRoles']->value) {?>
                    <td>
                        <a href="#" class="update roles"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Change'),$_smarty_tpl ) );?>
</a>

                        <?php if ($_smarty_tpl->tpl_vars['group']->value->IsExtendedAdmin()) {?>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                        data-toggle="dropdown">

                                    <span class="caret"></span>
                                    <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'More'),$_smarty_tpl ) );?>
</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li class="dropdown-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Administration'),$_smarty_tpl ) );?>
</li>
                                    <li role="separator" class="divider"></li>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value->IsGroupAdmin()) {?>
                                        <li role="presentation">
                                            <a role="menuitem" href="#"
                                               class="update changeAdminGroups"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Groups"),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value->IsResourceAdmin()) {?>
                                        <li role="presentation">
                                            <a role="menuitem" href="#"
                                               class="update changeAdminResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Resources"),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value->IsScheduleAdmin()) {?>
                                        <li role="presentation">
                                            <a role="menuitem" href="#"
                                               class="update changeAdminSchedules"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Schedules"),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        <?php }?>
                    </td>
                <?php }?>
                <td><a href="#" class="update groupAdmin"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['group']->value->AdminGroupName)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['chooseText']->value : $tmp);?>
</a></td>
                <td><?php if ($_smarty_tpl->tpl_vars['group']->value->IsDefault) {?>
                        <span class="fa fa-check-circle-o"></span>
                    <?php } else { ?>
                        <span class="fa fa-circle-o"></span>
                    <?php }?></td>
                <td class="action">
                    <a href="#" class="update rename"><span class="fa fa-pencil-square-o icon"></a> |
                    <a href="#" class="update delete"><span class="fa fa-trash icon remove"></span></a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0], array( array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl ) );?>


    <input type="hidden" id="activeId"/>

    <div class="modal fade" id="membersDialog" tabindex="-1" role="dialog" aria-labelledby="membersDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="membersDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GroupMembers'),$_smarty_tpl ) );?>
</h4>
                </div>
                <div class="modal-body scrollable-modal-content">
                    <div class="form-group">
                        <label for="userSearch"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddUser'),$_smarty_tpl ) );?>
: <a href="#"
                                                                            id="browseUsers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Browse'),$_smarty_tpl ) );?>
</a></label>
                        <input type="text" id="userSearch" class="form-control" size="40"/>
                    </div>
                    <h4><span id="totalUsers"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersInGroup'),$_smarty_tpl ) );?>
</h4>

                    <div id="groupUserList"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default cancel"
                            data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Done'),$_smarty_tpl ) );?>
</button>
                </div>
            </div>
        </div>
    </div>

    <div id="allUsers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseUsersDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="browseUsersDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AllUsers'),$_smarty_tpl ) );?>
</h4>
                </div>
                <div class="modal-body scrollable-modal-content">
                    <div id="allUsersList"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="permissionsDialog" tabindex="-1" role="dialog" aria-labelledby="permissionsDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form id="permissionsForm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="permissionsDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Permissions'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body scrollable-modal-content">
                        <a href="#" id="checkNoResources"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</a> |
                        <a href="#" id="checkAllResourcesFull"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'FullAccess'),$_smarty_tpl ) );?>
</a> |
                        <a href="#" id="checkAllResourcesView"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ViewOnly'),$_smarty_tpl ) );?>
</a>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
                            <?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

                            <?php $_smarty_tpl->_assignInScope('rid', $_smarty_tpl->tpl_vars['resource']->value->GetResourceId());?>
                            <div class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 permissionRow form-group">
                                <label for="permission_<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
" class="inline-block"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label>
                                <select class="pull-right form-control input-sm resourceId inline-block"
                                        style="width:auto;" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl ) );?>
id="permission_<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
">
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
_none" class="none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
_0" class="full"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'FullAccess'),$_smarty_tpl ) );?>
</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
_1" class="view"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ViewOnly'),$_smarty_tpl ) );?>
</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <form id="removeUserForm" method="post">
        <input type="hidden" id="removeUserId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
 />
    </form>

    <form id="addUserForm" method="post">
        <input type="hidden" id="addUserId" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'USER_ID'),$_smarty_tpl ) );?>
 />
    </form>

    <div class="modal fade" id="addGroupDialog" tabindex="-1" role="dialog" aria-labelledby="addDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form id="addGroupForm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="addDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AddGroup'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div id="addGroupResults" class="error" style="display:none;"></div>
                        <div class="form-group has-feedback">
                            <label for="addGroupName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
</label>
                            <input <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_NAME'),$_smarty_tpl ) );?>
 type="text" id="addGroupName" required
                                                             class="form-control required"/>
                            <i class="glyphicon glyphicon-asterisk form-control-feedback"
                               data-bv-icon-for="addGroupName"></i>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input type="checkbox" id="addGroupIsDefault" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'IS_DEFAULT'),$_smarty_tpl ) );?>
 />
                                <label for="addGroupIsDefault"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AutomaticallyAddToGroup'),$_smarty_tpl ) );?>
</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteGroupForm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="deleteDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteGroupWarning'),$_smarty_tpl ) );?>
</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editDialog" tabindex="-1" role="dialog" aria-labelledby="editDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form id="editGroupForm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="editDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Update'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group has-feedback">
                            <label for="editGroupName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Name'),$_smarty_tpl ) );?>
</label>
                            <input type="text" id="editGroupName" class="form-control required"
                                   required <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_NAME'),$_smarty_tpl ) );?>
 />
                            <i class="glyphicon glyphicon-asterisk form-control-feedback"
                               data-bv-icon-for="groupName"></i>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input type="checkbox" id="editGroupIsDefault" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'IS_DEFAULT'),$_smarty_tpl ) );?>
 />
                                <label for="editGroupIsDefault"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AutomaticallyAddToGroup'),$_smarty_tpl ) );?>
</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['CanChangeRoles']->value) {?>
        <div class="modal fade" id="rolesDialog" tabindex="-1" role="dialog" aria-labelledby="rolesDialogLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <form id="rolesForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="rolesDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'WhatRolesApplyToThisGroup'),$_smarty_tpl ) );?>
</h4>
                        </div>
                        <div class="modal-body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                                <div class="checkbox">
                                    <input type="checkbox" id="role<?php echo $_smarty_tpl->tpl_vars['role']->value->Id;?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ROLE_ID','multi'=>true),$_smarty_tpl ) );?>
"
                                    value="<?php echo $_smarty_tpl->tpl_vars['role']->value->Id;?>
" />
                                    <label for="role<?php echo $_smarty_tpl->tpl_vars['role']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->Name;?>
</label>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="modal-footer">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade adminDialog" id="resourceAdminDialog" tabindex="-1" role="dialog"
             aria-labelledby="resourceAdminDialogLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="resourceAdminForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"
                                id="resourceAdminDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'WhatCanThisGroupManage'),$_smarty_tpl ) );?>
</h4>
                        </div>
                        <div class="modal-body scrollable-modal-content">
                            <h4><span class="count"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</h4>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
                                <div class="checkbox">
                                    <input type="checkbox"
                                           id="resource<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl ) );?>
"
                                    value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
" />
                                    <label for="resource<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="modal-footer">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade adminDialog" id="groupAdminAllDialog" tabindex="-1" role="dialog"
             aria-labelledby="groupAdminAllDialogLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="groupAdminGroupsForm" method="post">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"
                                id="groupAdminAllDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'WhatCanThisGroupManage'),$_smarty_tpl ) );?>
</h4>
                        </div>
                        <div class="modal-body scrollable-modal-content">
                            <h4><span class="count"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Groups'),$_smarty_tpl ) );?>
</h4>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                <div class="checkbox">
                                    <input type="checkbox" id="group<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_ID','multi'=>true),$_smarty_tpl ) );?>
"
                                    value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
" />
                                    <label for="group<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</label>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="modal-footer">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade adminDialog" id="scheduleAdminDialog" tabindex="-1" role="dialog"
             aria-labelledby="scheduleAdminDialogLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="scheduleAdminForm" method="post">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"
                                id="scheduleAdminAllDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'WhatCanThisGroupManage'),$_smarty_tpl ) );?>
</h4>
                        </div>
                        <div class="modal-body scrollable-modal-content">
                            <h4><span class="count"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Schedules'),$_smarty_tpl ) );?>
</h4>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Schedules']->value, 'schedule');
$_smarty_tpl->tpl_vars['schedule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->do_else = false;
?>
                                <div class="checkbox">
                                    <input type="checkbox"
                                           id="schedule<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'SCHEDULE_ID','multi'=>true),$_smarty_tpl ) );?>
"
                                    value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
" />
                                    <label for="schedule<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</label>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="modal-footer">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php }?>

    <div class="modal fade" id="groupAdminDialog" tabindex="-1" role="dialog" aria-labelledby="groupAdminDialogLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <form id="groupAdminForm" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="groupAdminDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'WhoCanManageThisGroup'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group has-feedback">
                            <label for="groupAdmin" class="off-screen"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'WhoCanManageThisGroup'),$_smarty_tpl ) );?>
</label>
                            <select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_ADMIN'),$_smarty_tpl ) );?>
 class="form-control" id="groupAdmin">
                                <option value="">-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'None'),$_smarty_tpl ) );?>
 --</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminGroups']->value, 'adminGroup');
$_smarty_tpl->tpl_vars['adminGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->value) {
$_smarty_tpl->tpl_vars['adminGroup']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="importGroupsDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="importGroupsModalLabel"
         aria-hidden="true">
        <form id="importGroupsForm" class="form" role="form" method="post" enctype="multipart/form-data"
              ajaxAction="<?php echo ManageGroupsActions::Import;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="importGroupsModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Import'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div id="importGroupsResults" class="validationSummary alert alert-danger no-show">
                            <ul>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"fileExtensionValidator",'key'=>''),$_smarty_tpl ) );?>

                            </ul>
                        </div>
                        <div id="importErrors" class="alert alert-danger no-show"></div>
                        <div id="importResult" class="alert alert-success no-show">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RowsImported'),$_smarty_tpl ) );?>
</span>

                            <div id="importCount" class="inline bold">0</div>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RowsSkipped'),$_smarty_tpl ) );?>
</span>

                            <div id="importSkipped" class="inline bold">0</div>
                            <a class="" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Done'),$_smarty_tpl ) );?>
</a>
                        </div>
                        <div class="margin-bottom-25">
                            <input type="file" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'GROUP_IMPORT_FILE'),$_smarty_tpl ) );?>
 id="groupsImportFile"/>
                            <label for="groupsImportFile" class="no-show">Group Import File</label>
                            <div class="checkbox">
                                <input type="checkbox" id="updateOnImport" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'UPDATE_ON_IMPORT'),$_smarty_tpl ) );?>
/>
                                <label for="updateOnImport"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UpdateGroupsOnImport'),$_smarty_tpl ) );?>
</label>
                            </div>
                        </div>
                        <div id="importInstructions" class="alert alert-info">
                            <div class="note"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GroupsImportInstructions'),$_smarty_tpl ) );?>
</div>
                            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template"
                               download="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template"
                               target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GetTemplate'),$_smarty_tpl ) );?>
 <span class="fa fa-download"></span></a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('key'=>'Import'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"autocomplete.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/group.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {

            var actions = {
                activate: '<?php echo ManageGroupsActions::Activate;?>
',
                deactivate: '<?php echo ManageGroupsActions::Deactivate;?>
',
                permissions: '<?php echo ManageGroupsActions::Permissions;?>
',
                password: '<?php echo ManageGroupsActions::Password;?>
',
                removeUser: '<?php echo ManageGroupsActions::RemoveUser;?>
',
                addUser: '<?php echo ManageGroupsActions::AddUser;?>
',
                addGroup: '<?php echo ManageGroupsActions::AddGroup;?>
',
                updateGroup: '<?php echo ManageGroupsActions::UpdateGroup;?>
',
                deleteGroup: '<?php echo ManageGroupsActions::DeleteGroup;?>
',
                roles: '<?php echo ManageGroupsActions::Roles;?>
',
                groupAdmin: '<?php echo ManageGroupsActions::GroupAdmin;?>
',
                adminGroups: '<?php echo ManageGroupsActions::AdminGroups;?>
',
                resourceGroups: '<?php echo ManageGroupsActions::ResourceGroups;?>
',
                scheduleGroups: '<?php echo ManageGroupsActions::ScheduleGroups;?>
',
                importGroups: '<?php echo ManageGroupsActions::Import;?>
'
            };

            var dataRequests = {
                permissions: 'permissions',
                roles: 'roles',
                groupMembers: 'groupMembers',
                adminGroups: '<?php echo ManageGroupsActions::AdminGroups;?>
',
                resourceGroups: '<?php echo ManageGroupsActions::ResourceGroups;?>
',
                scheduleGroups: '<?php echo ManageGroupsActions::ScheduleGroups;?>
'
            };

            var groupOptions = {
                userAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
                groupAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
                groupsUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
                permissionsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                rolesUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                selectGroupUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?gid=',
                actions: actions,
                dataRequests: dataRequests
            };

            var groupManagement = new GroupManagement(groupOptions);
            groupManagement.init();

            $('#add-group-panel').showHidePanel();
        });
    <?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
