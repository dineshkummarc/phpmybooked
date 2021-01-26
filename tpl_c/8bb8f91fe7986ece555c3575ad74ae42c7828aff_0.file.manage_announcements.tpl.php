<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:49:18
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\manage_announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc40e1a3885_98445800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb8f91fe7986ece555c3575ad74ae42c7828aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\manage_announcements.tpl',
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
function content_600cc40e1a3885_98445800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true), 0, false);
?>

<div id="page-manage-announcements" class="admin-page">
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageAnnouncements'),$_smarty_tpl ) );?>
</h1>

	<form id="addForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-announcement-panel">
			<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"AddAnnouncement"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0], array( array(),$_smarty_tpl ) );?>
</div>
			<div class="panel-body add-contents">
				<div id="addResults" class="error no-show"></div>
                <div>
				<div class="form-group col-xs-12">
					<label for="addAnnouncement"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Announcement'),$_smarty_tpl ) );?>
 <i class="glyphicon glyphicon-asterisk form-control-feedback"></i></label>
                    <textarea class="form-control required" rows="1" style="width:100%" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_TEXT'),$_smarty_tpl ) );?>
 id="addAnnouncement"></textarea>
				</div>
                </div>
				<div class="form-group col-sm-3 col-xs-6">
					<label for="BeginDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BeginDate'),$_smarty_tpl ) );?>
</label>
					<input type="text" id="BeginDate" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_START'),$_smarty_tpl ) );?>
 />
					<input type="hidden" id="formattedBeginDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_START'),$_smarty_tpl ) );?>
 />
				</div>
				<div class="form-group col-sm-3 col-xs-6">
					<label for="EndDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</label>
					<input type="text" id="EndDate" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_END'),$_smarty_tpl ) );?>
 />
					<input type="hidden" id="formattedEndDate" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_END'),$_smarty_tpl ) );?>
 />
				</div>
				<div class="form-group col-sm-3 col-xs-6">
					<label for="addPriority"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Priority'),$_smarty_tpl ) );?>
</label>
					<input type="number" min="0" step="1" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_PRIORITY'),$_smarty_tpl ) );?>
 id="addPriority" />
				</div>
                <div class="form-group col-sm-3 col-xs-6">
					<label for="addPage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DisplayPage'),$_smarty_tpl ) );?>
</label>
					<select id="addPage" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DISPLAY_PAGE'),$_smarty_tpl ) );?>
>
                        <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Dashboard'),$_smarty_tpl ) );?>
</option>
                        <option value="5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Login'),$_smarty_tpl ) );?>
</option>
                    </select>
				</div>
				<div id="moreOptions">
                    <a href="#" class="btn btn-link" data-toggle="collapse" data-target="#advancedAnnouncementOptions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MoreOptions'),$_smarty_tpl ) );?>
 &raquo;</a>
                    <div id="advancedAnnouncementOptions" class="collapse">
                        <div class="form-group col-xs-12 col-md-6">
                            <label for="announcementGroups" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersInGroups'),$_smarty_tpl ) );?>
</label>
                            <select id="announcementGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>FormKeys::GROUP_ID,'multi'=>true),$_smarty_tpl ) );?>
>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="form-group col-xs-12 col-md-6">
                            <label for="resourceGroups" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersWithAccessToResources'),$_smarty_tpl ) );?>
</label>
                            <select id="resourceGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl ) );?>
>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="checkbox no-padding-left">
                                <input type="checkbox" id="sendAsEmail" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>FormKeys::SEND_AS_EMAIL),$_smarty_tpl ) );?>
 />
                                <label for="sendAsEmail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SendAsEmail'),$_smarty_tpl ) );?>
</label>
                            </div>
                        </div>
                    </div>
                </div>

			</div>
			<div class="panel-footer">
			 	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0], array( array('class'=>"btn-sm"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0], array( array('class'=>"btn-sm"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

			</div>
		</div>
	</form>

	<table class="table" id="announcementList">
		<thead>
		<tr>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'Announcement','field'=>ColumnNames::ANNOUNCEMENT_TEXT),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'Priority','field'=>ColumnNames::ANNOUNCEMENT_PRIORITY),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'BeginDate','field'=>ColumnNames::ANNOUNCEMENT_START),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0], array( array('key'=>'EndDate','field'=>ColumnNames::ANNOUNCEMENT_END),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Groups'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Resources'),$_smarty_tpl ) );?>
</th>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DisplayPage'),$_smarty_tpl ) );?>
</th>
			<th class="action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Actions'),$_smarty_tpl ) );?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-announcement-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value->Id();?>
">
				<td class="announcementText"><?php echo nl2br($_smarty_tpl->tpl_vars['announcement']->value->Text());?>
</td>
				<td class="announcementPriority"><?php echo $_smarty_tpl->tpl_vars['announcement']->value->Priority();?>
</td>
				<td class="announcementStart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->Start()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl ) );?>
</td>
				<td class="announcementEnd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->End()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl ) );?>
</td>
				<td class="announcementGroups"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcement']->value->GroupIds(), 'groupId');
$_smarty_tpl->tpl_vars['groupId']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupId']->value) {
$_smarty_tpl->tpl_vars['groupId']->do_else = false;
echo $_smarty_tpl->tpl_vars['Groups']->value[$_smarty_tpl->tpl_vars['groupId']->value]->Name;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
				<td class="announcementResources"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcement']->value->ResourceIds(), 'resourceId');
$_smarty_tpl->tpl_vars['resourceId']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resourceId']->value) {
$_smarty_tpl->tpl_vars['resourceId']->do_else = false;
echo $_smarty_tpl->tpl_vars['Resources']->value[$_smarty_tpl->tpl_vars['resourceId']->value]->GetName();?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
				<td class="announcementDisplayPage"><?php ob_start();
echo Pages::NameFromId($_smarty_tpl->tpl_vars['announcement']->value->DisplayPage());
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_prefixVariable1),$_smarty_tpl ) );?>
</td>
				<td class="action announcementActions">
					<a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Edit'),$_smarty_tpl ) );?>
" class="update edit"><span class="fa fa-pencil-square-o icon"></a> |
					<?php if ($_smarty_tpl->tpl_vars['announcement']->value->CanEmail()) {?>
                    <a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Email'),$_smarty_tpl ) );?>
" class="update sendEmail"><span class="fa fa-envelope-o icon"></a> |
                    <?php }?>
                    <a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
" class="update delete"><span class="fa fa-trash icon remove"></span></a>
				</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>

	<input type="hidden" id="activeId"/>

	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteForm" method="post">
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

	<div class="modal fade" id="editDialog" tabindex="-1" role="dialog" aria-labelledby="editDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="editForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Edit'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="editText"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Announcement'),$_smarty_tpl ) );?>
</label><br/>
							<textarea id="editText" class="form-control required" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_TEXT'),$_smarty_tpl ) );?>
></textarea>
							<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="editText"></i>
						</div>
						<div class="form-group">
							<label for="editBegin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BeginDate'),$_smarty_tpl ) );?>
</label><br/>
							<input type="text" id="editBegin" class="form-control"/>
							<input type="hidden" id="formattedEditBegin" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_START'),$_smarty_tpl ) );?>
 />
						</div>
						<div class="form-group">
							<label for="editEnd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EndDate'),$_smarty_tpl ) );?>
</label><br/>
							<input type="text" id="editEnd" class="form-control"/>
							<input type="hidden" id="formattedEditEnd" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_END'),$_smarty_tpl ) );?>
 />
						</div>
						<div class="form-group">
							<label for="editPriority"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Priority'),$_smarty_tpl ) );?>
</label> <br/>
							<input type="number" min="0" step="1" id="editPriority" class="form-control" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ANNOUNCEMENT_PRIORITY'),$_smarty_tpl ) );?>
 />
						</div>
						<div class="form-group" id="editUserGroupsDiv">
							<label for="editUserGroups" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersInGroups'),$_smarty_tpl ) );?>
</label>
							<select id="editUserGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>FormKeys::GROUP_ID,'multi'=>true),$_smarty_tpl ) );?>
>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="form-group" id="editResourceGroupsDiv">
							<label for="editResourceGroups" class="no-show"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersWithAccessToResources'),$_smarty_tpl ) );?>
</label>
							<select id="editResourceGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl ) );?>
>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
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

	<div class="modal fade" id="emailDialog" tabindex="-1" role="dialog" aria-labelledby="emailDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="emailForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="emailDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SendAsEmail'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-info"><span id="emailCount" class="bold"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'AnnouncementEmailNotice'),$_smarty_tpl ) );?>
</div>
					</div>
					<div class="modal-footer">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0], array( array('key'=>'SendAsEmail'),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
			</form>
		</div>
	</div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true), 0, false);
?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"BeginDate",'AltId'=>"formattedBeginDate"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"EndDate",'AltId'=>"formattedEndDate"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"editBegin",'AltId'=>"formattedEditBegin"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"editEnd",'AltId'=>"formattedEditEnd"),$_smarty_tpl ) );?>


	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>


	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"admin/announcement.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {

			var actions = {
				add: '<?php echo ManageAnnouncementsActions::Add;?>
',
				edit: '<?php echo ManageAnnouncementsActions::Change;?>
',
				deleteAnnouncement: '<?php echo ManageAnnouncementsActions::Delete;?>
',
				email: '<?php echo ManageAnnouncementsActions::Email;?>
'
			};

			var accessoryOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				getEmailCountUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=emailCount',
				actions: actions
			};

			var announcementManagement = new AnnouncementManagement(accessoryOptions);
			announcementManagement.init();

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
			announcementManagement.addAnnouncement(
					'<?php echo $_smarty_tpl->tpl_vars['announcement']->value->Id();?>
',
					'<?php echo smarty_modifier_regex_replace(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['announcement']->value->Text()),"/[\n]/","\\n");?>
',
					'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->Start()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl ) );?>
',
					'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->End()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl ) );?>
',
					'<?php echo $_smarty_tpl->tpl_vars['announcement']->value->Priority();?>
',
					[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcement']->value->GroupIds(), 'id');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
					[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcement']->value->ResourceIds(), 'id');
$_smarty_tpl->tpl_vars['id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->do_else = false;
echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
                    <?php echo $_smarty_tpl->tpl_vars['announcement']->value->DisplayPage();?>

			);
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			$('#add-announcement-panel').showHidePanel();

			$('#announcementGroups, #editUserGroups').select2({
				placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersInGroups'),$_smarty_tpl ) );?>
'
			});

			$('#resourceGroups, #editResourceGroups').select2({
				placeholder: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersWithAccessToResources'),$_smarty_tpl ) );?>
'
			});
		});
	<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
