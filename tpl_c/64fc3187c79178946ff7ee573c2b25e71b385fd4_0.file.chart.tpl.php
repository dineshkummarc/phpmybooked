<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:53:26
  from 'C:\xampp\htdocs\Test\booked\tpl\Reports\chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be406dc76a6_56941671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64fc3187c79178946ff7ee573c2b25e71b385fd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Reports\\chart.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be406dc76a6_56941671 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="clear"></div>
<div id="chart-indicator" style="display:none; text-align: center;">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>
</h3>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl ) );?>

</div>

<div id="chartdiv" style="display:none;margin:auto;height:400px;width:80%"></div>

<!--[if lt IE 9]><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/excanvas.js"),$_smarty_tpl ) );?>
<![endif]-->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/jquery.jqplot.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/plugins/jqplot.barRenderer.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/plugins/jqplot.canvasTextRenderer.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/plugins/jqplot.pointLabels.min.js"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jqplot/plugins/jqplot.dateAxisRenderer.min.js"),$_smarty_tpl ) );
}
}
