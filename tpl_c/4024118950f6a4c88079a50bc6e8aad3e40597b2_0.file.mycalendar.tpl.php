<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 09:50:23
  from 'C:\xampp\htdocs\Test\booked\tpl\Calendar\mycalendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600be34f787d77_82143212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4024118950f6a4c88079a50bc6e8aad3e40597b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Calendar\\mycalendar.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_600be34f787d77_82143212 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo Pages::MY_CALENDAR;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
$_smarty_tpl->_assignInScope('pageIdSuffix', "my-calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "mycalendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
