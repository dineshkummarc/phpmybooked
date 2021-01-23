<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:49:41
  from 'C:\xampp\htdocs\Test\booked\tpl\MyAccount\notification-preferences.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be3250891b3_13607783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6604beb3318909ee63fc0222460998f4306358ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\MyAccount\\notification-preferences.tpl',
      1 => 1600868990,
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
function content_600be3250891b3_13607783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>"my-account.css"), 0, false);
?>

<div class="page-notification-preferences">

	<?php if ($_smarty_tpl->tpl_vars['PreferencesUpdated']->value) {?>
		<div class="success alert alert-success col-xs-12 col-sm-8 col-sm-offset-2">
			<span class="glyphicon glyphicon-ok-sign"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'YourSettingsWereUpdated'),$_smarty_tpl ) );?>

		</div>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['EmailEnabled']->value) {?>
		<div class="error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EmailDisabled'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<div id="notification-preferences-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
			<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NotificationPreferences'),$_smarty_tpl ) );?>
</h1>

			<form id="notification-preferences-form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
				<div>
					<div class="notification-row">
						<div class="notification-type">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationCreatedPreference'),$_smarty_tpl ) );?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Created']->value) {?>active<?php }?>">
								<input id="createdYes" type="radio" name="<?php echo ReservationEvent::Created;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Created']->value) {?>checked="checked"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceSendEmail'),$_smarty_tpl ) );?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Created']->value) {?>active<?php }?>">
								<input id="createdNo" type="radio" name="<?php echo ReservationEvent::Created;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Created']->value) {?>checked="checked"<?php }?>/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceNoEmail'),$_smarty_tpl ) );?>
</label>
						</div>
					</div>

					<div class="notification-row">
						<div class="notification-type">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationUpdatedPreference'),$_smarty_tpl ) );?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Updated']->value) {?>active<?php }?>">
								<input id="updatedYes" type="radio" name="<?php echo ReservationEvent::Updated;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Updated']->value) {?>checked="checked"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceSendEmail'),$_smarty_tpl ) );?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Updated']->value) {?>active<?php }?>">
								<input id="updatedNo" type="radio" name="<?php echo ReservationEvent::Updated;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Updated']->value) {?>checked="checked"<?php }?>/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceNoEmail'),$_smarty_tpl ) );?>
</label>
						</div>
					</div>

					<div class="notification-row">
						<div class="notification-type">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationDeletedPreference'),$_smarty_tpl ) );?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Deleted']->value) {?>active<?php }?>">
								<input id="deletedYes" type="radio" name="<?php echo ReservationEvent::Deleted;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Deleted']->value) {?>checked="checked"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceSendEmail'),$_smarty_tpl ) );?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Deleted']->value) {?>active<?php }?>">
								<input id="deletedNo" type="radio" name="<?php echo ReservationEvent::Deleted;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Deleted']->value) {?>checked="checked"<?php }?>/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceNoEmail'),$_smarty_tpl ) );?>
</label>
						</div>
					</div>

					<div class="notification-row alt">
						<div class="notification-type">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationApprovalPreference'),$_smarty_tpl ) );?>

						</div>

						<div class="btn-group form-group" data-toggle="buttons">
							<label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['Approved']->value) {?>active<?php }?>">
								<input id="approvedYes" type="radio" name="<?php echo ReservationEvent::Approved;?>
" value="1"
									   <?php if ($_smarty_tpl->tpl_vars['Approved']->value) {?>checked="checked"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceSendEmail'),$_smarty_tpl ) );?>

							</label>
							<label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['Approved']->value) {?>active<?php }?>">
								<input id="approvedNo" type="radio" name="<?php echo ReservationEvent::Approved;?>
" value="0"
									   <?php if (!$_smarty_tpl->tpl_vars['Approved']->value) {?>checked="checked"<?php }?>/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceNoEmail'),$_smarty_tpl ) );?>
</label>
						</div>
					</div>

                    <div class="notification-row">
                        <div class="notification-type">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationParticipationActivityPreference'),$_smarty_tpl ) );?>

                        </div>

                        <div class="btn-group form-group" data-toggle="buttons">
                            <label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>active<?php }?>">
                                <input id="endingYes" type="radio" name="<?php echo ReservationEvent::ParticipationChanged;?>
" value="1"
                                       <?php if ($_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>checked="checked"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceSendEmail'),$_smarty_tpl ) );?>

                            </label>
                            <label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>active<?php }?>">
                                <input id="endingNo" type="radio" name="<?php echo ReservationEvent::ParticipationChanged;?>
" value="0"
                                       <?php if (!$_smarty_tpl->tpl_vars['ParticipantChanged']->value) {?>checked="checked"<?php }?>/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceNoEmail'),$_smarty_tpl ) );?>
</label>
                        </div>
                    </div>

                    <div class="notification-row-alt">
                        <div class="notification-type">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationSeriesEndingPreference'),$_smarty_tpl ) );?>

                        </div>

                        <div class="btn-group form-group" data-toggle="buttons">
                            <label class="btn btn-default btn-xs <?php if ($_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>active<?php }?>">
                                <input id="endingYes" type="radio" name="<?php echo ReservationEvent::SeriesEnding;?>
" value="1"
                                       <?php if ($_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>checked="checked"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceSendEmail'),$_smarty_tpl ) );?>

                            </label>
                            <label class="btn btn-default btn-xs <?php if (!$_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>active<?php }?>">
                                <input id="endingNo" type="radio" name="<?php echo ReservationEvent::SeriesEnding;?>
" value="0"
                                       <?php if (!$_smarty_tpl->tpl_vars['SeriesEnding']->value) {?>checked="checked"<?php }?>/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PreferenceNoEmail'),$_smarty_tpl ) );?>
</label>
                        </div>
                    </div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary update prompt" name="<?php echo Actions::SAVE;?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Update'),$_smarty_tpl ) );?>

					</button>
				</div>
			</form>
		</div>
	<?php }?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
