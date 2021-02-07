<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:01:38
  from 'C:\xampp\htdocs\Test\booked\tpl\Admin\Configuration\data_cleanup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60201cf28606f5_69969108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd958be932f8373f41d9b7d508fbb7048f69c9df0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Admin\\Configuration\\data_cleanup.tpl',
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
function content_60201cf28606f5_69969108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-data-cleanup" class="admin-page">

    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DataCleanup'),$_smarty_tpl ) );?>
</h1>

        <div class="well">
            <div class="badge"><?php echo $_smarty_tpl->tpl_vars['ReservationCount']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Reservations'),$_smarty_tpl ) );?>
</div>
            <div class="form-group">
                <label for="reservationDeleteDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteReservationsBefore'),$_smarty_tpl ) );?>
</label>
                <input type="text" id="reservationDeleteDate" class="form-control input-sm inline-block dateinput"
                       value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DeleteDate']->value),$_smarty_tpl ) );?>
"/>
                <input type="hidden" id="formattedReservationDeleteDate"
                       value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DeleteDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
            </div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('id'=>'deleteReservations'),$_smarty_tpl ) );?>

        </div>

        <div class="well">
            <div class="badge"><?php echo $_smarty_tpl->tpl_vars['DeletedReservationCount']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeletedReservations'),$_smarty_tpl ) );?>
</div>
            <div class="form-group">

            </div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('id'=>'purgeReservations','key'=>'Purge'),$_smarty_tpl ) );?>

        </div>

        <div class="well">
            <div class="badge"><?php echo $_smarty_tpl->tpl_vars['BlackoutsCount']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ManageBlackouts'),$_smarty_tpl ) );?>
</div>

            <div class="form-group">
                <label for="blackoutDeleteDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteBlackoutsBefore'),$_smarty_tpl ) );?>
</label>
                <input type="text" id="blackoutDeleteDate" class="form-control input-sm inline-block dateinput"
                       value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DeleteDate']->value),$_smarty_tpl ) );?>
"/>
                <input type="hidden" id="formattedBlackoutDeleteDate" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DeleteDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
            </div>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('id'=>'deleteBlackouts'),$_smarty_tpl ) );?>


        </div>

        <div class="well">
            <div class="badge"><?php echo $_smarty_tpl->tpl_vars['UserCount']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Users'),$_smarty_tpl ) );?>
</div>

            <div class="form-group">
                <label for="userDeleteDate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PermanentlyDeleteUsers'),$_smarty_tpl ) );?>
</label>
                <input type="text" id="userDeleteDate" class="form-control input-sm inline-block dateinput"
                       value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DeleteDate']->value),$_smarty_tpl ) );?>
"/>
                <input type="hidden" id="formattedUserDeleteDate" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0], array( array('date'=>$_smarty_tpl->tpl_vars['DeleteDate']->value,'key'=>'system'),$_smarty_tpl ) );?>
"/>
            </div>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('id'=>'deleteUsers'),$_smarty_tpl ) );?>


        </div>
    </div>

    <div class="modal fade" id="deleteReservationsDialog" tabindex="-1" role="dialog"
         aria-labelledby="deleteReservationsDialogLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteReservationsForm" method="post" ajaxAction="deleteReservations">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="deleteReservationsDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <div>
                                <strong><span
                                            id="deleteReservationCount"></span></strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationsWillBeDeleted'),$_smarty_tpl ) );?>

                            </div>
                            <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 id="formDeleteReservationDate"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="purgeReservationsDialog" tabindex="-1" role="dialog"
         aria-labelledby="purgeReservationsDialogLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="purgeReservationsForm" method="post" ajaxAction="purge">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="purgeReservationsDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <div>
                                <strong><?php echo $_smarty_tpl->tpl_vars['DeletedReservationCount']->value;?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReservationsWillBePurged'),$_smarty_tpl ) );?>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="deleteBlackoutDialog" tabindex="-1" role="dialog"
         aria-labelledby="deleteBlackoutDialogLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteBlackoutsForm" method="post" ajaxAction="deleteBlackouts">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="deleteBlackoutDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <div>
                                <strong><span
                                            id="deleteBlackoutCount"></span></strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BlackoutsWillBeDeleted'),$_smarty_tpl ) );?>

                            </div>
                            <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 id="formDeleteBlackoutDate"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="deleteUsersDialog" tabindex="-1" role="dialog"
         aria-labelledby="deleteUsersDialogLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteUsersForm" method="post" ajaxAction="deleteUsers">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="deleteUsersDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>
</div>
                            <div>
                                <strong><span id="deleteUserCount"></span></strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UsersWillBeDeleted'),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 id="formDeleteUserDate"/>

                    </div>
                    <div class="modal-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0], array( array(),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0], array( array('submit'=>true),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/moment.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"reservationDeleteDate",'AltId'=>"formattedReservationDeleteDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['DeleteDate']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"blackoutDeleteDate",'AltId'=>"formattedBlackoutDeleteDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['DeleteDate']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"DatePickerSetupControl",'ControlId'=>"userDeleteDate",'AltId'=>"formattedUserDeleteDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['DeleteDate']->value),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#deleteReservations').click(function (e) {
            $('#formDeleteReservationDate').val($('#formattedReservationDeleteDate').val());
            ajaxGet('<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=getReservationCount&date=' + $('#formattedReservationDeleteDate').val(), null, function (data) {
                $('#deleteReservationCount').text(data.count);
                $('#deleteReservationsDialog').modal('show');
            })
        });

        $('#purgeReservations').click(function (e) {
            $('#purgeReservationsDialog').modal('show');
        });

        $('#deleteBlackouts').click(function (e) {
            $('#formDeleteBlackoutDate').val($('#formattedBlackoutDeleteDate').val());
            ajaxGet('<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=getBlackoutCount&date=' + $('#formattedBlackoutDeleteDate').val(), null, function (data) {
                $('#deleteBlackoutCount').text(data.count);
                $('#deleteBlackoutDialog').modal('show');
            })
        });

        $('#deleteUsers').click(function (e) {
            $('#formDeleteUserDate').val($('#formattedUserDeleteDate').val());
            ajaxGet('<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=getUserCount&date=' + $('#formattedUserDeleteDate').val(), null, function (data) {
                $('#deleteUserCount').text(data.count);
                $('#deleteUsersDialog').modal('show');
            })
        });

        ConfigureAsyncForm($('#deleteReservationsForm'));
        ConfigureAsyncForm($('#purgeReservationsForm'));
        ConfigureAsyncForm($('#deleteBlackoutsForm'));
        ConfigureAsyncForm($('#deleteUsersForm'));
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
