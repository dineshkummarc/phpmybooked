<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:50:12
  from 'C:\xampp\htdocs\Test\booked\tpl\json_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be344dd6aa9_19946828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef97116bb855f6f87885752e83c660d5c4583f52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\json_data.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600be344dd6aa9_19946828 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
