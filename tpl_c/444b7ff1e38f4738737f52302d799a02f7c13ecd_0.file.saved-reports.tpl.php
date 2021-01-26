<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-24 01:37:59
  from 'C:\xampp\htdocs\Test\booked\tpl\Reports\saved-reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600cc167e71b35_63984555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444b7ff1e38f4738737f52302d799a02f7c13ecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Reports\\saved-reports.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Reports/chart.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_600cc167e71b35_63984555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Test\\booked\\lib\\external\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cssFiles'=>"scripts/js/jqplot/jquery.jqplot.min.css"), 0, false);
?>

<div id="page-saved-reports">

	<div class="panel panel-default" id="saved-reports-panel">
		<div class="panel-heading">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'MySavedReports'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['ReportList']->value);?>
</span>
		</div>
		<div class="panel-body no-padding">
			<?php if (count($_smarty_tpl->tpl_vars['ReportList']->value) == 0) {?>
				<h2 class="no-data" style="text-align: center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'NoSavedReports'),$_smarty_tpl ) );?>
</h2>
                <div style="text-align:center;"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'GenerateReport'),$_smarty_tpl ) );?>
</a></div>
			<?php } else { ?>
				<div id="report-list">
					<table class="table">
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ReportList']->value, 'report');
$_smarty_tpl->tpl_vars['report']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->do_else = false;
?>
							<?php echo smarty_function_cycle(array('values'=>',alt','assign'=>'rowCss'),$_smarty_tpl);?>

							<tr reportId="<?php echo $_smarty_tpl->tpl_vars['report']->value->Id();?>
" class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
								<td><span class="report-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['report']->value->ReportName())===null||$tmp==='' ? $_smarty_tpl->tpl_vars['untitled']->value : $tmp);?>
</span></td>
								<td class="right"><span
											class="report-created-date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0], array( array('date'=>$_smarty_tpl->tpl_vars['report']->value->DateCreated()),$_smarty_tpl ) );?>
</span>
								</td>

								<td class="report-action"><a href="#" class="runNow report"><span
												class="fa fa-play-circle-o icon add"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RunReport'),$_smarty_tpl ) );?>

									</a></td>
								<td class="report-action"><a href="#" class="emailNow report"><span
												class="fa fa-envelope-o icon"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EmailReport'),$_smarty_tpl ) );?>
</a>
								</td>
								<td class="report-action"><a href="#" class="delete report"><span
												class="fa fa-trash icon remove"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</a></td>
								

							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tbody>
					</table>
				</div>
			<?php }?>
		</div>

	</div>

	<div id="resultsDiv">
	</div>

	<div id="emailSent" class="alert alert-success no-show">
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ReportSent'),$_smarty_tpl ) );?>
</strong>N
	</div>

	<div class="modal fade" id="emailDiv" tabindex="-1" role="dialog" aria-labelledby="emailDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<form id="emailForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="emailDialogLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EmailReport'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="emailTo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Email'),$_smarty_tpl ) );?>
</label>
							<input id="emailTo" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'EMAIL'),$_smarty_tpl ) );?>
 value="<?php echo $_smarty_tpl->tpl_vars['UserEmail']->value;?>
" class="form-control"/>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default cancel"
									data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Cancel'),$_smarty_tpl ) );?>
</button>
							<button id="btnSendEmail" type="button" class="btn btn-success save"><span
										class="fa fa-envelope-o"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EmailReport'),$_smarty_tpl ) );?>

							</button>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="deleteDiv" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'DeleteWarning'),$_smarty_tpl ) );?>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Cancel'),$_smarty_tpl ) );?>
</button>
						<button type="button" class="btn btn-danger save"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Delete'),$_smarty_tpl ) );?>
</button>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array(),$_smarty_tpl ) );?>

					</div>
				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

			</form>
		</div>
	</div>

	<div id="indicator" style="display:none; text-align: center;">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>
</h3>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl ) );?>

	</div>

	<?php $_smarty_tpl->_subTemplateRender("file:Reports/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reports/saved-reports.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reports/chart.js"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reports/common.js"),$_smarty_tpl ) );?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function () {
			var reportOptions = {
				generateUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Generate;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				emailUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Email;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				deleteUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Delete;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				printUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::PrintReport;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				csvUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Csv;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
="
			};

			var reports = new SavedReports(reportOptions);
			reports.init();

			var common = new ReportsCommon(
					{
						scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
',
                        chartOpts: {
                            dateAxisFormat: '<?php echo $_smarty_tpl->tpl_vars['DateAxisFormat']->value;?>
'
                        }
					}
			);
			common.init();
		});
	<?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
