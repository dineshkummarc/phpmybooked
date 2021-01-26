<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 10:25:35
  from 'C:\xampp\htdocs\Tested\booked\tpl\json_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600beb8f6fe559_57294817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7886083b5df25c04b34aaf4643a754fd7abecaf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tested\\booked\\tpl\\json_data.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600beb8f6fe559_57294817 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
